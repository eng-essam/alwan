<?php

namespace App\Traits;

use App\Models\Cart;

trait TransferFilesFromCart
{
    public function transferDetails($user_id, $product_id)
    {
        $order = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();
        return $order->details;
    }

    public function transferUserFile($user_id, $product_id)
    {
        $order = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();
        return $order->file;
    }
}
