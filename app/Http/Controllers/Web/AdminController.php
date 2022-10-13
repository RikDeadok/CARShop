<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function main()
    {
        return view('/pages/admin/main');
    }
}
