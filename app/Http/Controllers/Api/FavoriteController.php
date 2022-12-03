<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Favorite;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FavoriteController extends Controller
{
    use ReturnJson;

    public function allFavorites(Request $request)
    {
        $data = [
            'allFavorites' => ProductResource::collection($request->user()->favoriteProducts),
        ];
        return $this->requestSuccess(null, $data);
    }

    public function addProductFavorite(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'integer', 'exists:products,id']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $product = Favorite::where('user_id', $request->user()->id)
            ->where('product_id', $request->product_id)->first();
        if ($product) {
            return $this->requestFails(__('lang.product_already_in_favorite'));
        }

        $request->user()->favoriteProducts()->attach($request->product_id, [
            'user_id' => $request->user()->id,
            'product_id' => $request->product_id,
        ]);

        return $this->requestSuccess(__('lang.add_product_favourites_successfully'));

    }

    public function deleteProductFavorite(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'integer', 'exists:products,id']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $request->user()->favoriteProducts()->detach([
            'user_id' => $request->user()->id,
            'product_id' => $request->product_id,
        ]);

        return $this->requestSuccess(__('lang.delete_product_favourites_successfully'));

    }

}
