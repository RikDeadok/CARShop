<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function wishlist()
    {
        return view('/pages/wishlist');
    }
}
