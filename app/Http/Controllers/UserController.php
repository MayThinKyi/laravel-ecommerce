<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Size;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //User Home Page
    public function userHomePage(){
       if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
        $categories=Category::orderBy('created_at','desc')->get();


        return view('user.home',compact('categories','carts'));
    }
    //User Shop Page
    public function userShopPage(){
         if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
        $categories=Category::get();
        $sizes=Size::get();
        $products=Product::when(request('searchKey'),function($query){
            $query->where('product_name','like','%'.request('searchKey').'%');
        })->orderBy('created_at','desc')->paginate(15);
        return view('user.shop',compact('categories','sizes','products','carts'));
    }
    public function userAboutUsPage(){
         if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
        return view('user.about',compact('carts'));
    }
    //User Shop Details Page
    public function userShopDetailsPage($id){
         if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
        $categories=Category::orderBy('created_at','desc')->get();
        $product=Product::where('id',$id)->first();
        $products=Product::orderBy('created_at','desc')->get();
        return view('user.shopDetails',compact('product','categories','products','carts'));
    }
    //Add To Cart
    public function addToCart(Request $request){
        //Check if product has selected colors and sizes
        if($request['colorStatus']=='true' && !$request['color']){
          return response()->json(['colorError'=>'Please choose one color for product!']);
       }
        if($request['sizeStatus']=='true' && !$request['size']){
          return response()->json(['sizeError'=>'Please choose one size for product!']);
        }
        if($request['colorStatus']=='true' && $request['color'] && $request['sizeStatus']=='false'){
              $addToCartData=[
        'user_id'=>$request['userId'],
        'product_id'=>$request['productId'],
        'quantity'=>$request['qty'],
        'total'=>$request['total'],
        'color'=>$request['color'],

       ];
       Cart::create($addToCartData);
       return response()->json(['success'=>true]);
        }
        if($request['sizeStatus']=='true' && $request['size'] && $request['colorStatus']=='false'){
              $addToCartData=[
        'user_id'=>$request['userId'],
        'product_id'=>$request['productId'],
        'quantity'=>$request['qty'],
        'total'=>$request['total'],
        'size'=>$request['size'],

       ];
       Cart::create($addToCartData);
       return response()->json(['success'=>true]);
        }
        if($request['colorStatus']=='true' && $request['color'] && $request['sizeStatus']=='true' && $request['size']){
            $addToCartData=[
        'user_id'=>$request['userId'],
        'product_id'=>$request['productId'],
        'quantity'=>$request['qty'],
        'total'=>$request['total'],
        'color'=>$request['color'],
        'size'=>$request['size'],
       ];
       Cart::create($addToCartData);
       return response()->json(['success'=>true]);
        }
        if($request['colorStatus']=='false' &&  $request['sizeStatus']=='false' ){
            $addToCartData=[
        'user_id'=>$request['userId'],
        'product_id'=>$request['productId'],
        'quantity'=>$request['qty'],
        'total'=>$request['total'],

       ];
       Cart::create($addToCartData);
       return response()->json(['success'=>true]);
        }


        /*
       $addToCartData=[
        'user_id'=>$request['userId'],
        'product_id'=>$request['productId'],
        'quantity'=>$request['qty'],
        'total'=>$request['total']
       ];
       Cart::create($addToCartData);
       return response()->json(['success'=>true]);
       */
    }


    //USer Dashboard Page
    public function userDashboardPage(){
          if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };

        $categories=Category::orderBy('created_at','desc')->get();
        $user=User::where('id',Auth::user()->id)->first();
        return view('user.dashboard.personalInfo',compact('categories','user','carts'));
    }
    //User Edit Profile Page
    public function editProfileInfoPage(){
          if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
       $categories=Category::orderBy('created_at','desc')->get();
        $user=User::where('id',Auth::user()->id)->first();
        return view('user.dashboard.editPersonalInfoPage',compact('categories','user','carts'));
    }
    //User Update Profile
    public function updateProfile(Request $request){
        $this->checkProfileValidation($request);
        $profileUpdatedData=$this->setProfileData($request);
        User::where('id',Auth::user()->id)->update($profileUpdatedData);
        return redirect()->route('user#dashboard')->with(['updateProfileSuccess'=>'Your profile has updated successfully!']);
    }
    //User Change Password Page
    public function changePasswordPage(){
          if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
         $categories=Category::orderBy('created_at','desc')->get();
        $user=User::where('id',Auth::user()->id)->first();
        return view('user.dashboard.changePassword',compact('categories','user','carts'));
    }
    //User Change Password
    public function changePassword(Request $request){
        $this->checkPasswordValidation($request);
        $oldHashedPassword=User::where('id',Auth::user()->id)->first()->toArray()['password'];
        if(password_verify($request->oldPassword,$oldHashedPassword)){
            //Change New Password
            $newHashPassword=Hash::make($request->newPassword);
           User::where('id',Auth::user()->id)->update(['password'=>$newHashPassword]);
        return back()->with(['changePasswordSuccess'=>'Your password has changed successfully!']);

        }else{
            return back()->with(['oldPasswordError'=>'Your old password does not credential with the original one.']);
        }
    }
    //Order History Page
    public function orderHistoryPage(){
          if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
        return redirect()->route('user#home')->with(['loginMsg'=>'Please login first!']);
         $carts=0;
       };
         $categories=Category::orderBy('created_at','desc')->get();
         $orders=Order::where('user_id',Auth::user()? Auth::user()->id:'')->orderBy('created_at','desc')->get();
        return view('user.dashboard.orderHistory',compact('categories','orders','carts'));
    }
    //Order History Details Page
    public function orderHistoryDetails($orderCode){
          if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
                $categories=Category::orderBy('created_at','desc')->get();

       $orderDetails=OrderList::select('order_lists.*','products.product_name','products.product_images','products.product_price')
       ->leftJoin('products','order_lists.product_id','products.id')
       ->where('order_lists.order_code',$orderCode)->get();
         $subTotal=0;
       foreach ($orderDetails as $o) {
           $subTotal+=$o->total;
        }
       return view('user.dashboard.OrderHistoryDetails',compact('categories','orderDetails','subTotal','carts'));
    }
    //Product Filter Categories
    public function productFilterCategory($categoryId){
         if (Auth::user()) {
         $carts=Cart::where('user_id',Auth::user()->id)->get();
       }else{
         $carts=0;
       };
       $sizes=Size::get();

        $categories=Category::orderBy('created_at','desc')->get();
        $products=Product::where('product_category',$categoryId)->orderBy('created_at','desc')->get();
        return view('user.shop',compact('products','categories','carts','sizes'));
    }
    //productFilterPrice
    public function productFilterPrice($price){
        if (Auth::user()) {
            $carts=Cart::where('user_id',Auth::user()->id)->get();
          }else{
            $carts=0;
          };
          $sizes=Size::get();

           $categories=Category::orderBy('created_at','desc')->get();
           switch ($price) {
            case '<10000':
                $products=Product::where('product_price','<',10000)->orderBy('created_at','desc')->get();
                break;
                case '10000-30000':
                    $products=Product::whereBetween('product_price', [10000, 30000])->orderBy('created_at','desc')->get();
                    break;
                    case '30000-50000':
                        $products=Product::whereBetween('product_price', [30000, 50000])->orderBy('created_at','desc')->get();
                        break;
                        case '50000-80000':
                            $products=Product::whereBetween('product_price', [50000, 80000])->orderBy('created_at','desc')->get();
                            break;
                            case '80000-100000':
                                $products=Product::whereBetween('product_price', [80000, 100000])->orderBy('created_at','desc')->get();
                                break;
                                case '>100000':
                                    $products=Product::where('product_price','>',100000)->orderBy('created_at','desc')->get();
                                    break;

           }
           return view('user.shop',compact('products','categories','carts','sizes'));


    }
    //productFilterSize
    public function productFilterSize($size){
        if (Auth::user()) {
            $carts=Cart::where('user_id',Auth::user()->id)->get();
          }else{
            $carts=0;
          };
          $sizes=Size::get();

           $categories=Category::orderBy('created_at','desc')->get();

             $products=Product::whereJsonContains('sizes',$size)->orderBy('created_at','desc')->get();

           return view('user.shop',compact('products','categories','carts','sizes'));
    }
    //productFilterColor
    public function productFilterColor($color){

        if (Auth::user()) {
            $carts=Cart::where('user_id',Auth::user()->id)->get();
          }else{
            $carts=0;
          };
          $sizes=Size::get();

           $categories=Category::orderBy('created_at','desc')->get();
           switch ($color) {
            case 'black':
                $products=Product::whereJsonContains('colors','Black')->orderBy('created_at','desc')->get();
                break;
                case 'blue':
                    $products=Product::whereJsonContains('colors','Blue')->orderBy('created_at','desc')->get();
                    break;

                        case 'brown':
                            $products=Product::whereJsonContains('colors','Brown')->orderBy('created_at','desc')->get();
                            break;
                            case 'green':
                                $products=Product::whereJsonContains('colors','Green')->orderBy('created_at','desc')->get();
                                break;
                                case 'orange':
                                    $products=Product::whereJsonContains('colors','Orange')->orderBy('created_at','desc')->get();
                                    break;
                                    case 'pink':
                                        $products=Product::whereJsonContains('colors','Pink')->orderBy('created_at','desc')->get();
                                        break;
                                        case 'purple':
                                            $products=Product::whereJsonContains('colors','Purple')->orderBy('created_at','desc')->get();
                                            break;
                                            case 'red':
                                                $products=Product::whereJsonContains('colors','Red')->orderBy('created_at','desc')->get();
                                                break;
                                                case 'white':
                                                    $products=Product::whereJsonContains('colors','White')->orderBy('created_at','desc')->get();
                                                    break;

           }
           return view('user.shop',compact('products','categories','carts','sizes'));


    }
    //Check Update Profile Validation
    private function checkProfileValidation($request){
        Validator::make($request->all(),[
            'name'=>'required|',
            'email'=>'required|',
            'phone'=>'required|',
            'address'=>'required|',
            'gender'=>'required|'
        ])->validate();
    }
    //Set Update Profile Data
    private function setProfileData($request){
        return [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'gender'=>$request->gender
        ];
    }
    //Check Change Password Validation
    private function checkPasswordValidation($request){
        Validator::make($request->all(),[
            'oldPassword'=>'required|min:6',
            'newPassword'=>'required|min:6',
            'confirmPassword'=>'required|min:6|same:newPassword'
        ])->validate();
    }
}
/*
`
                      <div class="pb-1 col-lg-4 col-md-6 col-sm-12" >
                                     <a href="/shop/details/"${data[$i].id})}}">
                                    <div class="mb-4 border-0 card product-item">
                            <div style="width:auto;height:225px" class="p-0 overflow-hidden bg-transparent border card-header product-img position-relative">
                                <img class="object-center img-fluid w-100 h-100"    src="{{asset('storage/${JSON.parse(data[$i].product_images)[0]}')}}" alt="">
                            </div>
                            <div class="p-0 py-3 text-center card-body border-left border-right">
                                <h6 class="mb-2 text-truncate">${data[$i].product_name}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>${data[$i].product_price} Kyats</h6>
                                </div>
                            </div>
                            <div class="px-3 py-4 border card-footer d-flex justify-content-between bg-light">
                                <a href="" class="p-0 btn btn-sm text-dark"><i class="mr-1 fas fa-eye text-primary"></i><span style="font-size: 13px">View Detail</span></a>
                                <a href="" class="p-0 btn btn-sm text-dark"><i class="mr-1 fas fa-shopping-cart text-primary"></i><span style="font-size: 13px">Add To Cart</span></a>
                            </div>
                        </div>
                         </a>
                    </div>
                     ` ; */
