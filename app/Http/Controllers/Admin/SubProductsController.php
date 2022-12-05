<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company_branch;
use App\Models\Product;
use App\Models\Product_branch;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SubProductsController extends Controller
{
    public function allSubProducts()
    {
        return view('dashboard.products.allSubProducts');
    }

    public function editSubProduct(Product $product)
    {
        $data['allBranch'] = Company_branch::where('id', '!=', $product->company_branch_id)->get();
        $data['allMainProduct'] = Product_branch::where('id', '!=', $product->product_branch_id)->get();
        $data['product'] = $product;
        return view('dashboard.products.editSubProduct')->with($data);
    }

    public function saveEditSubProduct(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'desc_ar' => 'required|string',
            'desc_en' => 'required|string',
            'image' => 'nullable|image',
            'quantity' => 'required|array',
            'price' => 'required|array',
            'quantity.*' => ['nullable', 'numeric'],
            'price.*' => ['nullable', 'numeric'],
            'branch' => 'required|numeric|exists:company_branches,id',
            'mainProduct' => 'required|numeric|exists:product_branches,id',
        ]);


        foreach ($request->quantity as $key => $value) {
            if ($request->quantity[$key] != null) {
                break;
            }
            if (count($request->quantity) - 1 == $key) {
                return back()->with(['error' => __('lang.error_quantity_price')]);
            }
        }


        $pathImage = $product->product_img;
        if ($request->hasFile('image')) {
            Storage::disk('uploads')->delete($pathImage);
            $pathImage = Storage::disk('uploads')->put('subProducts', $request->image);
        }

        $QuantityPrice = new Collection();
        foreach ($request->quantity as $key => $oneQuantityPrice) {
            if ($request->quantity[$key] != null and $request->price[$key] != null) {
                $QuantityPrice->push(['quantity' => $request->quantity[$key], 'price' => $request->price[$key]]);
            }
        }

        $product->update([
            'product_name' => json_encode([
                'en' => $request->name_en,
                'ar' => $request->name_ar
            ]),
            'product_desc' => json_encode([
                'en' => $request->desc_en,
                'ar' => $request->desc_ar,
            ]),
            'company_branch_id' => $request->branch,
            'product_branch_id' => $request->mainProduct,
            'product_quantity_price' => $QuantityPrice,
            'product_img' => $pathImage,
        ]);
        return redirect(url('admin/all-sub/products'))->with(['success' => __('lang.edit_successfully')]);

    }
}

