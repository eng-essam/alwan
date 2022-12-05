<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class EditQuantityPriceProduct extends Component
{
    public $productId, $numberOfQuantityPrice = 1;

    public function render()
    {
        $data['product'] = Product::findOrFail($this->productId);
        return view('livewire.products.edit-quantity-price-product')->with($data);
    }

    public function provideNumberOfQuantityPrice()
    {
        $this->numberOfQuantityPrice = $this->numberOfQuantityPrice + 1;
    }
}
