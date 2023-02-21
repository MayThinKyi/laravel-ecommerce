<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //Admin List Page
    public function adminListPage(){
        $admins=User::when(request('searchKey'),function($query){
            $query->where('name','like','%'.request('searchKey').'%');
        })->where('role','admin')->orderBy('created_at','desc')->paginate(5);
        return view('admin.admins.list',compact('admins'));
    }
    //Admin Role Change Using Ajax
    public function adminRoleChange(Request $request){
        User::where('id',$request['userId'])->update(['role'=>$request['roleStatus']]);
        return response()->json(['success'=>true]);
    }
    //Order List Page
    public function orderListPage(){
        $orders=Order::when(request('searchStatus'),function($query){
           if(request('searchStatus')=='pending'){
            $query->where('status',0);
           }
           if(request('searchStatus')=='success'){
              $query->where('status',1);
           }
           if(request('searchStatus')=='reject'){
              $query->where('status',2);
           }
           if(request('searchStatus')==''){

           }
        })->orderBy('created_at','desc')->paginate(8);
        return view('admin.order.list',compact('orders'));
    }
    //Admin Order Details Page
    public function AdminOrderDetails($orderCode){
      $orderDetails=OrderList::select('order_lists.*','products.product_name','products.product_images','products.product_price')
       ->leftJoin('products','order_lists.product_id','products.id')
       ->where('order_lists.order_code',$orderCode)->get();
         $subTotal=0;
       foreach ($orderDetails as $o) {
           $subTotal+=$o->total;
        }
      return view('admin.order.details',compact('orderDetails','subTotal'));
    }
    //Ajax Change Order Status
    public function changeOrderStatus(Request $request){
        Order::where('id',$request['orderId'])->update(['status'=>$request['statusVal']]);
        return response()->json(['success'=>true]);
    }
    //Admin User List Page
    public function userList(){
        $users=User::when(request('searchKey'),function($query){
            $query->where("name",'like','%'.request('searchKey').'%');
        })->orderBy('created_at','desc')->paginate(8);
        return view('admin.users.list',compact('users'));
    }
    //Admin Role Change(User To Admin)
    public function adminChangeUserToAdmin(Request $request){
       User::where('id',$request['userId'])->update(['role'=>$request['roleStatus']]);
    return response()->json(['success'=>true]);
    }
    //Admin Delete User
    public function deleteUser($id){
       User::where('id',$id)->delete();
       return back()->with(['deleteSuccess'=>'User deleted successfully!']);
    }
}
