<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class DocumentsController extends Controller
{
    public function documents()
    {
        return view('/pages/documents');
    }
}
