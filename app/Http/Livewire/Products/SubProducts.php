<?php

namespace App\Http\Livewire\Products;

use App\Models\Company_branch;
use App\Models\Product;
use App\Models\Product_branch;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SubProducts extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search, $branchType = null, $numberOfQuantityPrice = 1;
    public $name_en, $name_ar, $desc_ar, $desc_en, $image, $quantity = array(), $price = array(), $branch, $mainProduct;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();
        $data['allMainProduct'] = Product_branch::get();

        if ($this->search == null) {
            $data['products'] = Product::latest()->where(function ($q) {
                if ($this->branchType != null) {
                    $q->where('company_branch_id', $this->branchType);
                }
            })->paginate(30);
        } else {
            $data['products'] = Product::where(function ($q) {
                $q->where('product_name->ar', 'like', '%' . $this->search . '%')
                    ->orWhere('product_name->en', 'like', '%' . $this->search . '%');
            })->where(function ($q) {
                if ($this->branchType != null) {
                    $q->where('company_branch_id', $this->branchType);
                }
            })->paginate(10);

        }
        return view('livewire.products.sub-products')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function deleteProduct($productId)
    {
        $product = Product::findOrFail($productId);
        Storage::disk('uploads')->delete($product->product_img);
        $product->delete();
        toastr()->success(__('lang.deleted_successfully'));

    }

    public function activeProduct($productId)
    {
        Product::findOrFail($productId)->update(['active' => 1]);
        toastr()->success(__('lang.active_successfully'));
    }

    public function deactiveProduct($productId)
    {
        Product::findOrFail($productId)->update(['active' => 0]);
        toastr()->success(__('lang.deactive_successfully'));
    }

    public function addProductOffer($productId)
    {
        Product::findOrFail($productId)->update(['is_offer' => 1]);
        toastr()->success(__('lang.add_to_offers_successfully'));
    }

    public function removeProductOffer($productId)
    {
        Product::findOrFail($productId)->update(['is_offer' => 0]);
        toastr()->success(__('lang.remove_from_offers_successfully'));
    }

    public function provideNumberOfQuantityPrice()
    {
        $this->numberOfQuantityPrice = $this->numberOfQuantityPrice + 1;
    }

    protected $rules = [
        'name_ar' => 'required|string',
        'name_en' => 'required|string',
        'desc_ar' => 'required|string',
        'desc_en' => 'required|string',
        'image' => 'required|image',
        'quantity' => 'required|array',
        'price' => 'required|array',
        'quantity.*' => 'required',
        'price.*' => 'required',
        'branch' => 'required|numeric|exists:company_branches,id',
        'mainProduct' => 'required|numeric|exists:product_branches,id',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submitAddProduct()
    {
        $this->validate();

        $pathImage = Storage::disk('uploads')->put('subProducts', $this->image);

        $product_quantity_price = new Collection();
        for ($i = 1; $i <= $this->numberOfQuantityPrice; $i++) {
            $product_quantity_price->push(['quantity' => $this->quantity[$i], 'price' => $this->price[$i]]);
        }

        Product::create([
            'product_name' => json_encode([
                'en' => $this->name_en,
                'ar' => $this->name_ar
            ]),
            'product_desc' => json_encode([
                'en' => $this->desc_en,
                'ar' => $this->desc_ar,
            ]),
            'company_branch_id' => $this->branch,
            'product_branch_id' => $this->mainProduct,
            'product_quantity_price' => $product_quantity_price,
            'product_img' => $pathImage,
            'active' => 0,
            'is_offer' => 0
        ]);
        sleep(1);
        $this->dispatchBrowserEvent('closeAddProductModal');
        toastr()->success(__('lang.add_successfully'));
        $this->cacheClear();

    }

}
