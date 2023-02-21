<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified','admin_middleware'
])->group(function () {
   //Admin Category Pages
   Route::group(['prefix'=>"/category"],function(){
    Route::get('/list',[CategoryController::class,'categoryListPage'])->name('category#list');
     Route::get('/create/page',[CategoryController::class,'categoryCreatePage'])->name("category#createPage");
   Route::post('/create',[CategoryController::class,'categoryCreate'])->name('category#create');
   Route::get('/delete/{id}',[CategoryController::class,'categoryDelete'])->name('category#delete');
   Route::get('/edit/{id}',[CategoryController::class,'categoryEditPage'])->name('category#editPage');
   Route::post('/update/{id}',[CategoryController::class,'categoryUpdate'])->name('category#update');
});

   //Admin Profile Pages
   Route::group(['prefix'=>'/profile'],function(){
    Route::get('/change-password/page',[ProfileController::class,'changePasswordPage'])->name('profile#changePasswordPage');
    Route::post("/change-password",[ProfileController::class,'changePassword'])->name('profile#changePassword');
    Route::get('/page',[ProfileController::class,'adminProfilePage'])->name('profile#page');
    Route::get('/edit/page',[ProfileController::class,'adminEditProfilePage'])->name('profile#editPage');
    Route::post('/update',[ProfileController::class,'adminUpdateProfile'])->name('profile#update');
});
    //Admin Size Pages
    Route::group(['prefix'=>'/size'],function(){
        Route::get('/list',[SizeController::class,'sizeListPage'])->name('size#list');
        Route::get('/create/page',[SizeController::class,'sizeCreatePage'])->name('size#createPage');
        Route::post('/create',[SizeController::class,'sizeCreate'])->name('size#create');
        Route::get('/edit/page/{id}',[SizeController::class,'sizeEditPage'])->name('size#editPage');
        Route::post('/update/{id}',[SizeController::class,'updateSize'])->name('size#update');
        Route::get('/delete/{id}',[SizeController::class,'deleteSize'])->name('size#delete');
    });
    //Admin Color Pages
    Route::group(['prefix'=>'/color'],function(){
        Route::get('/list',[ColorController::class,'colorListPage'])->name('color#list');
        Route::get('/create/page',[ColorController::class,'colorCreatePage'])->name('color#createPage');
        Route::post('/create',[ColorController::class,'colorCreate'])->name('color#create');
        Route::get('/edit/page/{id}',[ColorController::class,'colorEditPage'])->name('color#editPage');
        Route::post('/update/{id}',[ColorController::class,'updateColor'])->name('color#update');
        Route::get('/delete/{id}',[ColorController::class,'deleteColor'])->name('color#delete');
    });
    //Admin Product Pages
    Route::group(['prefix'=>'/product'],function(){
        Route::get('/list',[ProductController::class,'productListPage'])->name('product#list');
       Route::get('/create/page',[ProductController::class,'productCreatePage'])->name('product#createPage');
        Route::post('/create',[ProductController::class,'productCreate'])->name('product#create');
        Route::get('/edit/page/{id}',[ProductController::class,'productEditPage'])->name('product#editPage');
        Route::Post('/update/{id}',[ProductController::class,'productUpdate'])->name('product#update');
        Route::get('/delete/{id}',[ProductController::class,'deleteProduct'])->name('product#delete');
    });
    //Admin Lists
    Route::get('/adminLists/page',[AdminController::class,'adminListPage'])->name('admin#list');
    Route::get('/ajax/adminRole/change',[AdminController::class,'adminRoleChange'])->name('admin#roleChange');
    //Admin Order List
    Route::get('/adminOrder/list',[AdminController::class,'orderListPage'])->name('admin#orderList');
    Route::get('/ajax/changeOrderStatus',[AdminController::class,'changeOrderStatus'])->name('admin#changeOrderStatus');
    Route::get('/adminOrder/details/{orderCode}',[AdminController::class,'AdminOrderDetails'])->name('admin#orderDetails');
    //Admin User List
    Route::get('/users/list',[AdminController::class,'userList'])->name('admin#userList');
    Route::get('/ajax/user/role/change',[AdminController::class,'adminChangeUserToAdmin'])->name('admin#roleChange');
    Route::get('/delete/user/{id}',[AdminController::class,'deleteUser'])->name('admin#deleteUser');
    //Admin Contact List
    Route::get('/contact/list',[ContactController::class,'adminContactList'])->name('admin#contactList');
    Route::get('/contact/details/{id}',[ContactController::class,'contactDetailsPage'])->name('admin#contactDetails');
});

//User Pages
Route::get('/',[UserController::class,'userHomePage'])->name('user#home');
Route::group(['middleware'=>'customer_middleware','prefix'=>"/customer"],function(){
    Route::get('/about-us',[UserController::class,'userAboutUsPage'])->name('user#aboutus');

    Route::get('/shop',[UserController::class,'userShopPage'])->name('user#shop');
    Route::get('/shop/details/{id}',[UserController::class,'userShopDetailsPage'])->name('user#shopDetails');
    Route::get('/dashboard',[UserController::class,'userDashboardPage'])->name('user#dashboard');
    Route::get('/userInfo/edit',[UserController::class,'editProfileInfoPage'])->name('user#editProfilePage');
    Route::post('/userInfo/update',[UserController::class,'updateProfile'])->name('user#updateProfile');
    Route::get('/change/password/page',[UserController::class,'changePasswordPage'])->name('user#changePasswordPage');
    Route::post('/change/password',[UserController::class,'changePassword'])->name('user#changePassword');
   Route::get('/order/history/page',[UserController::class,'orderHistoryPage'])->name('user#orderHistory');
    Route::get('/order/history/details/{orderCode}',[UserController::class,'orderHistoryDetails'])->name('user#orderHistoryDetails');
   Route::get('/filter/category/{categoryId}',[UserController::class,'productFilterCategory'])->name('user#filterCategory');
   Route::get('/filter/price/{price}',[UserController::class,'productFilterPrice'])->name('user#filterPrice');
   Route::get('/filter/size/{size}',[UserController::class,'productFilterSize'])->name('user#filterSize');
   Route::get('/filter/color/{color}',[UserController::class,'productFilterColor'])->name('user#filterColor');

   Route::get('/product/addToCart',[UserController::class,'addToCart'])->name('user#addToCart');
    Route::get('/cart/page',[CartController::class,'cartListPage'])->name('user#cart');
    Route::get('/cart/renew',[CheckOutController::class,'renewCart'])->name('user#renewCart');
    Route::get('/checkout/page',[CheckoutController::class,'checkOutPage'])->name('user#checkOut');
   //User Contact
    Route::get('/contact/page',[ContactController::class,'userContactPage'])->name('user#contactPage');
    Route::post('/contact/send',[ContactController::class,'sendUserContact'])->name('user#sendContact');
    //Ajax Functions
    Route::get('/ajax/sort',[AjaxController::class,'ajaxSorting'])->name('user#ajaxSort');
    Route::get('/ajax/remove/cartItem',[AjaxController::class,'removeCartItem'])->name('user#removeCartItem');
    //Order List
    Route::post('/order/list/add',[OrderListController::class,'addOrderList'])->name('user#addOrderList');

});
//Login And Register Routes
Route::group(['middleware'=>'customer_middleware'],function(){
    Route::get('/login/page',function(){
        return view('auth.login');
    })->name('auth#login');
    Route::get('/register/page',function(){
        return view('auth.register');
    })->name('auth#register');
});

