<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function product($article)
    {
        $product = Product::where('article', $article)->first();
        if (!$product) {
            abort(404);
        }
        return view('/pages/product', compact(['product']));
    }
}
