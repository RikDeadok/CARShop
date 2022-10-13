<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class GarageController extends Controller
{
    public function garage()
    {
        return view('/pages/garage');
    }
}
