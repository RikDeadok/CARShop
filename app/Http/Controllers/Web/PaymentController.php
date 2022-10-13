<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function payment()
    {
        return view('/pages/payment');
    }
}
