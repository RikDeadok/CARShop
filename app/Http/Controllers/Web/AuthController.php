<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function auth()
    {
        return view('/pages/auth');
    }
}
