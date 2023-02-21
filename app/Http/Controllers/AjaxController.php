<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //Ajax Sorting
    public function ajaxSorting(Request $request){
        logger($request->all());
       if($request['sortingStatus']=='priceAsc'){
                  return  $products=Product::orderBy('product_price','asc')->get();
       }
       if($request['sortingStatus']=='priceDesc'){
           return $products=Product::orderBy('product_price','desc')->get();
       }
       if($request['sortingStatus']=='desc'){
                  return $products=Product::orderBy('created_at','desc')->get();
       }
       if($request['sortingStatus']=='asc'){
                  return  $products=Product::orderBy('created_at','asc')->get();
       }

       return response()->json(['data'=>$products]);
    }
    //Ajax Remove Cart Item
    public function removeCartItem(Request $request){
       Cart::where('id',$request['cartId'])->delete();
        return response()->json(['success'=>true]);
    }
}
