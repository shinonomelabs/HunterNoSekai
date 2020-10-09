<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CoController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $cartItem=Cart::content();
            return view('cart.checkout',compact('cartItem'));
        }else 
        {
            return redirect('login');
        }
    }
}
