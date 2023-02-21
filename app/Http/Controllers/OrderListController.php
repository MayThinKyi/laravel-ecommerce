<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderListController extends Controller
{
    //Add Order List
    public function addOrderList(Request $request){
        Validator::make($request->all(),[
            'username'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'city'=>'required'
        ])->validate();
        $orderCode=rand(1000000,9999999);
      $userCartLists=Cart::where('user_id',Auth::user()->id)->get();

      $total=0;
      foreach ($userCartLists as $c) {

        OrderList::create([
            'user_id'=>Auth::user()->id,
            'product_id'=>$c['product_id'],
            'quantity'=>$c['quantity'],
            'total'=>$c['total'],
            'size'=>$c['size'],
            'color'=>$c['color'],
            'order_code'=>$orderCode,
            'username'=>$request->username,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'payment'=>$request->payment
        ]);
       $total+=$c['total'];
      }

       Order::create([
            'user_id'=>Auth::user()->id,
            'order_code'=>$orderCode,
            'total'=>$total+3000,
            'payment'=>$request->payment,
            'username'=>$request->username,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'status'=>0
        ]);
        //After added order lists and orders,remove the user's cart
        Cart::where('user_id',Auth::user()->id)->delete();
        return redirect()->route('user#orderHistory');
    }
}
