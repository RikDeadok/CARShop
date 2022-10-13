<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function forum()
    {
        return view('/pages/forum');
    }
}
