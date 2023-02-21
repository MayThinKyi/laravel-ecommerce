<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //Cart List Page
    public function cartListPage(){
        if (Auth::user()) {
         $cartCounts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $cartCounts=0;
       };
        $categories=Category::orderBy('created_at','desc')->get();
        $carts=Cart::select('carts.*','products.product_name','products.product_images','products.product_price')
        ->leftJoin('products','products.id','carts.product_id')
        ->where('carts.user_id',Auth::user()? Auth::user()->id:'')
        ->orderBy('carts.created_at','desc')->get();
        return view('user.cart',compact('categories','carts','cartCounts'));
    }
}
