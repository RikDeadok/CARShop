<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function category()
    {
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::limit(16)->orderBy('id', 'desc')->get();
        return view('/pages/category', compact(['products', 'categories']));
    }
}
