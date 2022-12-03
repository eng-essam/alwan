<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SubProducts extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search, $deleteMainServiceId, $editeMainServiceId;
    public $name_en, $name_ar, $desc_ar, $desc_en, $serviceImage;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if ($this->search == null) {
            $data['products'] = Product::latest()->paginate(30);
        } else {
            $data['products'] = Product::where('product_name->ar', 'like', '%' . $this->search . '%')
                ->orWhere('product_name->en', 'like', '%' . $this->search . '%')->paginate(10);
        }
        return view('livewire.products.sub-products')->with($data);
    }
}
