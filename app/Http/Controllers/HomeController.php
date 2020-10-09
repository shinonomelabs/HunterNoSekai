<?php

namespace App\Http\Controllers;

use App\Wishlist_model;
use App\Category_model;
use App\Products_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Products_model::all();
        return view('front.home',compact('products'));
    }

    public function shop()
    {
        $products=Products_model::all();
        return view('front.shop',compact('products'));
    }

    public function showCates($id)
    {
        $category_products=Products_model::where('category_id',$id)->get();
        $id_=Category_model::select('name')->where('id',$id)->first();
        return view('front.catepro',compact('category_products','id_'));
    }

    public function singlepro($id)
    {
        $prods=Products_model::all();
        $products=DB::table('products')->where('id',$id)->get();
        return view('front.product_detail',compact('products','prods'));
    }
    public function populars()
    {
        $populars=Products_model::where('pro_popular')->get();
        return view('front.home',compact('popular'));
    }
    public function View_wishList()
    {
        $products=DB::table('wishlist')->leftJoin('products','wishlist.pro_id','=','products.id')->get();
        return view('front.wishlist',compact('products'));
    }
    public function addWishlist(Request $request)
    {
        $wishlist=new Wishlist_model();
        $wishlist->user_id=Auth::user()->id;
        $wishlist->pro_id=$request->pro_id;
        $wishlist->save();

        $products=DB::table('products')->where('id',$request->pro_id)->get();
        return redirect()->back();
    }
    public function removeWishlist($id) 
    {
        DB::table('wishlist')->where('pro_id','=',$id)->delete();
        return back()->with('msg','Item di hapus dari wishlist');
    }
}