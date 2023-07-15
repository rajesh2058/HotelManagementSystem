<?php

namespace App\Http\Controllers;

use App\Models\billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{

{
    public function billing()
    {
        return view('admin.billing.billing');

    }
    
}
}
