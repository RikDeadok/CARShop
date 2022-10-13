<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    public function club()
    {
        return view('/pages/club');
    }
}
