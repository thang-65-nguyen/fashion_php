<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        // $viewData["orders"] = Order::where('user_id', Auth::user()->getId())->get();
        return view('myaccount.orders')->with("viewData", $viewData);
    }
}
