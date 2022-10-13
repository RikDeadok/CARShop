<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function contacts()
    {
        return view('/pages/contacts');
    }
}
