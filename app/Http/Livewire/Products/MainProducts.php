<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use App\Models\Product_branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class MainProducts extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $productName, $deleteMainProductId, $editeMainProductId;
    public $name_en, $name_ar, $desc_ar, $desc_en, $productImage;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        if ($this->productName == null) {
            $data['mainProducts'] = Product_branch::latest()->paginate(30);
        } else {
            $data['mainProducts'] = Product_branch::where('product_branch_name->ar', 'like', '%' . $this->productName . '%')
                ->orWhere('product_branch_name->en', 'like', '%' . $this->productName . '%')->paginate(10);
        }
        return view('livewire.products.main-products')->with($data);
    }

    public function activeMainProduct($mainProductId)
    {
        Product_branch::findOrFail($mainProductId)->update(['active' => 1]);

        Product::where('product_branch_id', $mainProductId)->update(['active' => 1]);

        toastr()->success(__('lang.active_successfully'));


    }

    public function deactiveMainProduct($mainProductId)
    {
        Product_branch::findOrFail($mainProductId)->update(['active' => 0]);

        Product::where('product_branch_id', $mainProductId)->update(['active' => 0]);

        toastr()->success(__('lang.deactive_successfully'));

    }

    public function deleteMainProduct($MainProductId)
    {
        $this->deleteMainProductId = $MainProductId;
    }

    public function submitDeleteMainProduct()
    {
        $MainProduct = Product_branch::findOrFail($this->deleteMainProductId);
        Storage::disk('uploads')->delete($MainProduct->product_branch_img);

        $allSubProducts = Product::where('product_branch_id', $this->deleteMainProductId)->get();
        foreach ($allSubProducts as $subProduct) {
            Storage::disk('uploads')->delete($subProduct->product_img);
            $subProduct->delete();
        }
        $MainProduct->delete();
        $this->cacheClear();
        toastr()->success(__('lang.deleted_successfully'));
    }

    protected $rules = [
        'name_ar' => 'required|string',
        'name_en' => 'required|string',
        'desc_ar' => 'required|string',
        'desc_en' => 'required|string',
        'productImage' => 'nullable|image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function editeMainProduct($MainProductId)
    {
        $MainProduct = Product_branch::findOrFail($MainProductId);
        $this->editeMainProductId = $MainProductId;
        $this->name_ar = $MainProduct->product_branch_name('ar');
        $this->name_en = $MainProduct->product_branch_name('en');
        $this->desc_ar = $MainProduct->product_branch_desc('ar');
        $this->desc_en = $MainProduct->product_branch_desc('en');
    }

    public function submitEditeMainProduct(Request $request)
    {
        $MainProduct = Product_branch::findOrFail($this->editeMainProductId);

        $this->validate();

        $imgPath = $MainProduct->product_branch_img;
        if ($this->productImage != null) {
            Storage::disk('uploads')->delete($imgPath);
            $imgPath = Storage::disk('uploads')->put('products', $this->productImage);
        }

        $MainProduct->update([
            'product_branch_name' => json_encode([
                'ar' => $this->name_ar,
                'en' => $this->name_en
            ]),
            'product_branch_desc' => json_encode([
                'ar' => $this->desc_ar,
                'en' => $this->desc_en
            ]),
            'product_branch_img' => $imgPath
        ]);

        sleep(1);
        $this->dispatchBrowserEvent('closeEditMainProductModal');
        toastr()->success(__('lang.edit_successfully'));

    }

    public function submitAddMainProduct()
    {
        $this->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'desc_ar' => 'required|string',
            'desc_en' => 'required|string',
            'productImage' => 'required|image'
        ]);

        $imgPath = Storage::disk('uploads')->put('products', $this->productImage);
        Product_branch::create([
            'product_branch_name' => json_encode([
                'ar' => $this->name_ar,
                'en' => $this->name_en
            ]),
            'product_branch_desc' => json_encode([
                'ar' => $this->desc_ar,
                'en' => $this->desc_en
            ]),
            'product_branch_img' => $imgPath
        ]);

        sleep(1);
        $this->dispatchBrowserEvent('closeAddMainProductModal');
        toastr()->success(__('lang.add_successfully'));
        $this->cacheClear();

    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function showEditeMainProductModal()
    {
        $this->dispatchBrowserEvent('showEditMainProductModal');
    }
}
