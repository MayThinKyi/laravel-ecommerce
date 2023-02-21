<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //Renew Cart
    public function renewCart(Request $request){
         $userId=$request['finalCartData']['userId'];
        $newCartItems=$request['finalCartData']['cartProducts'];

        //Delete User's old carts items to update with new one
       Cart::where('user_id',$userId)->delete();
        //Add User Cart with new Cart Items
       foreach ($newCartItems as $c) {
            Cart::create([
                'user_id'=>$userId,
                'product_id'=>$c['productId'],
                'quantity'=>$c['qty'],
                'total'=>$c['total'],
                'size'=>$c['size'],
                'color'=>$c['color']
            ]);
        }
        return response()->json(['success'=>true]);

    }
    //Checkout Page
    public function checkOutPage(){
         if (Auth::user()) {
         $cartCounts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $cartCounts=0;
       };
        $categories=Category::orderBy('created_at','desc')->get();
        $carts=Cart::select('carts.*','products.product_name','products.product_images','products.product_price')
        ->leftJoin('products','products.id','carts.product_id')
        ->where('carts.user_id',Auth::user()?Auth::user()->id:'')
        ->orderBy('carts.created_at','desc')->get();
        $subTotal=0;
       foreach ($carts as $c) {
           $subTotal+=$c->total;
        }

        return view('user.checkOut',compact('categories','carts','subTotal','cartCounts'));
    }
}
