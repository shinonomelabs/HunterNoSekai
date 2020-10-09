<?php

namespace App\Http\Controllers;

use App\Products_model;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems=Cart::content();
        return view('cart.index',compact('cartItems'));
    }

    public function addItem($id)
    {
        $prods=Products_model::all();
        $product=Products_model::findOrFail($id);
        Cart::add($id,$product->pro_name,1,$product->spl_price,['img'=>$product->image,'stock'=>$product->stock]);
        return back();
    }

    public function update(request $request, $id)
    {
        $qty=$request->qty;
        $proID=$request->proId;
        $product=Products_model::findOrFail($proID);
        $stock=$product->stock;

        if($qty<$stock)
        {
            Cart::update($id,$request->qty);
            return back()->with('status', 'Updated');
        }else {
            return back()->with('error','Tidak cukup stok');
        }
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
