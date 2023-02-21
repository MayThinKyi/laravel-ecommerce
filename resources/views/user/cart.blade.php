@extends('user.layouts.master')
@section('cartCount')
     {{Auth::user() ?count($carts) :0}}
@endsection
@section('myContent')
<!-- Cart Start -->

@if(Auth::user())
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                       @if(count($carts)>0)
                         <table>
                           {{-- <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead> --}}
                            <tbody>
                                @foreach ($carts as $c)
                                  <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img style="width: 100px;height:110px" src="{{asset('storage/'.json_decode($c->product_images)[0])}}" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{Str::limit($c->product_name,50)}}</h6>
                                            <h5 class="productPrice">{{$c->product_price}} Kyats</h5>
                                            <small>Color:</small><small class="text-danger color">{{$c->color?$c->color: 'No Color'}}</small><br>
                                           <small>Size:</small> <small class="text-danger size">{{$c->size?$c->size: 'No Size'}}</small>
                                        </div>
                                    </td>
                                    <td hidden>
                                         <input class="productId"  value="{{$c->product_id}}" />

                                </td>
                                 <td hidden>
                                      <input type="text" hidden  class="cartId" value="{{$c->id}}">
                                </td>
                                 <td hidden>
                                      <input type="text" hidden  class="cartId" value="{{$c->id}}">
                                </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <small>Quantity:</small>  <input class="qty" type="text" min="1" value="{{$c->quantity}}">
                                            </div>
                                        </div>
                                    </td>

                                    <td class="cart__price total">{{$c->quantity*$c->product_price}} Kyats</td>
                                    <td class="cart__close removeBtn"><i class="fa fa-close"></i></td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                       @else
                       <h3> There is no item in the cart...</h3>
                       @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{route('user#shop')}}">Continue Shopping</a>
                            </div>
                        </div>
                        {{--
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>--}}
                    </div>
                </div>
                 <div class="col-lg-4">
                <!--
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="p-4 form-control" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form> -->
                <div class="mb-5 mt-5 lg:mt-0 card border-secondary">
                    <div class="text-white border-0 card-header bg-black">
                        <h4 class="m-0 font-weight-semi-bold">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="pt-1 mb-3 d-flex justify-content-between">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium subTotal">0 Kyats</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Delivery Charges</h6>
                            <h6 class="font-weight-medium">3000 Kyats</h6>
                        </div>
                    </div>
                    <div class="bg-transparent card-footer border-secondary">
                        <div class="mt-2 d-flex justify-content-between">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold summaryTotal">3000 Kyats</h5>
                        </div>

                       @if(count($carts)>0)
                        <a href="{{route('user#checkOut')}}">
                            <button  class="py-3 my-3 text-white checkOutBtn btn btn-block  bg-black">Proceed To Checkout</button>

                        </a>

                       @else
                              <button  disabled style="font-weight:600" class="py-3 my-3 btn text-white btn-black  bg-black">Proceed To Checkout</button>

                       @endif
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Cart End -->
@else
    <h3 class="my-5 text-center text-black">Please Login first...</h3>
@endif

@endsection
@section('myScript')
   <script>
     $(document).ready(function(){

            //Minus Button Click Function
       $('.fa-angle-left ').click(function(){

        $parentNode=$(this).parents('tr');
          $productPrice=Number($parentNode.find('.productPrice').text().replace(' Kyats',''));
          $qty=Number($parentNode.find('.qty').val())-1;
          if($qty>=0){
            $total=Number($parentNode.find('.total').text().replace(' Kyats',''));
         $parentNode.find('.total').html($productPrice*$qty+' Kyats');

        console.log('productPrice',$productPrice,'qty',$qty,'total',$total); //For Summary Total
        $totalVal=0;
        $('tbody tr').each(function(index,row){
                $totalVal+=Number($(row).find('.total').text().replace(' Kyats',''))
              })

                          $('.subTotal').html($totalVal+' Kyats');
              $('.summaryTotal').html($totalVal+3000+' Kyats');
          }
       })
        //Plus Button Click Function
       $('.fa-angle-right').click(function(){
                console.log('gft');

        $parentNode=$(this).parents('tr');
          $productPrice=Number($parentNode.find('.productPrice').text().replace(' Kyats',''));
          $qty=Number($parentNode.find('.qty').val())+1;
          $total=Number($parentNode.find('.total').text().replace(' Kyats',''));
         $parentNode.find('.total').html($productPrice*$qty+' Kyats');
        //For Summary Total
        $totalVal=0;
        $('tbody tr').each(function(index,row){
                $totalVal+=Number($(row).find('.total').text().replace(' Kyats',''))
              })
                           $('.subTotal').html($totalVal+' Kyats');
              $('.summaryTotal').html($totalVal+3000+' Kyats');
       })

       //Remove Button Function
       $('.removeBtn').click(function(){
         $parentNode=$(this).parents('tr');
        $cartId=$parentNode.find('.cartId').val();
         $.ajax({
               type:'get',
               url:'/customer/ajax/remove/cartItem',
               data:{
                cartId:$cartId
               },
               success:function(data) {
                 if(data.success==true){
                    window.location.reload();
                 }
               }
            });
       })
       //For Summary Total
        $totalVal=0;
        $('tbody tr').each(function(index,row){
                $totalVal+=Number($(row).find('.total').text().replace(' Kyats',''))
        })
              $('.subTotal').html($totalVal+' Kyats');
              $('.summaryTotal').html($totalVal+3000+' Kyats');
        //Set the final cart data to Database for Checkout Data
        $('.checkOutBtn').click(function(){
           //$finalCartData,//Cart Object
           $products=[];//Products array
           $userId={{Auth::user() ?Auth::user()->id :''}};
            $('tbody tr').each(function(index,row){
              $productId=Number($(row).find('.productId').val());
              $qty=Number($(row).find('.qty').val());
              $total=Number($(row).find('.total').text().replace(' Kyats',''));
              $color=$(row).find('.color').text();
              $size=$(row).find('.size').text();
              $products.push({
                productId:$productId,
                qty:$qty,
                total:$total,
                color:$color,
                size:$size
              });
        })
        $finalCartData={
            userId:$userId,
            cartProducts:$products
        };
        $.ajax({
       type:'get',
       url:'/customer/cart/renew',
       data:{
        finalCartData:$finalCartData
       },
       success:function(data){
         if(data.success==true){
            window.location.href='/customer/checkout/page';
         }
       }
    });
        })
        })
   </script>
@endsection
