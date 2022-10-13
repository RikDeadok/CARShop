<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        $products = Product::limit(40)->orderBy('id', 'desc')->get();
        return view('/pages/cart', compact(['products']));
    }
}
