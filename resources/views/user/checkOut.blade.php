@extends('user.layouts.master')
@section('cartCount')
    {{Auth::user() ?count($cartCounts) :0}}
@endsection
@section('myContent')
 @if(Auth::user())
        <!-- Checkout Start -->
          @if(count($carts)>0)
    <div class="pt-5 container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-7">
                <div class="mb-4">
                    <h4 class="mb-4 font-weight-semi-bold">Billing Address</h4>
                <form action="{{route('user#addOrderList')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 form-group">
                            <label>Username</label>
                            <input name='username' class="@error('username') is-invalid @enderror border username form-control" type="text" placeholder="Username...">
                        @error('username')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                        <div class="col-12 form-group">
                            <label>E-mail</label>
                            <input name='email' class=" @error('email') is-invalid @enderror email border form-control" type="text" placeholder="example@gmail.com">
                         @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                        <div class="col-12 form-group">
                            <label>Mobile No</label>
                            <input name='phone' class="@error('phone') is-invalid @enderror border phone form-control" type="text" placeholder="09 *** *** ***">
                         @error('phone')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                        <label class="my-2 ml-2">City</label>
                         <div class="col-12 form-group">

                            <select name="city" class="px-5  @error('city') is-invalid @enderror border form-control city custom-select">
                               <option selected>Yangon</option>
                                <option>Mandalay</option>
                                <option>Mawlamyine</option>
                                <option>Taunggyi</option>
                                <option>Bago</option>
                                <option>Monywa</option>
                                <option>Myitkyina</option>
                                <option>Pathein</option>
                                <option>Siitwe</option>
                                <option>Pyay</option>
                                <option>Magway</option>
                                <option>Thanlyin</option>
                            </select>
                         @error('city')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                        <div class="col-12 form-group">
                            <label>Address </label>
                            <textarea name='address' class="border @error('address') is-invalid @enderror address form-control" rows="3" type="text" placeholder="Address..."></textarea>
                         @error('address')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>


                </div>

                </div>

            </div>
            <div class="col-lg-5">
                <div class="mb-5 card border-secondary">
                    <div class="text-white border-0 card-header bg-dark">
                        <h4 class="m-0 font-weight-semi-bold">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-3 font-weight-medium">Products</h5>

                            @foreach ($carts as $c)

                                 <div class="productContainer d-flex justify-content-between">
                                    <div style="position:relative; width: 110px;height:80px;"">
                                     <img style="width: 80%;height:100%;border-radius:6px" src="{{asset('storage/'.json_decode($c->product_images)[0])}}" alt="">
                                        <span style="position:absolute;bottom:0;right:20px;border-radius:5px" class="p-1 text-white bg-black "><small>{{$c->product_price}} Ks</small></span>
                                    </div>
                                    <input type="text" hidden class="productId" value="{{$c->product_id}}" name="" id="">
                                    <div class="">
                                         <div style="font-size: 14px">{{Str::limit($c->product_name,20)}}</div>
                                     <div><small class="text-black">
                                        <b >x <span class="qty">{{$c->quantity}}</span></b>
                                         @if($c->size!='No Size' && $c->size) | Size: <span class="text-danger size">{{$c->size}}</span> @endif
                                          @if($c->color!='No Color' && $c->color) | Color: <span class="text-danger color">{{$c->color}} </span>@endif
                                     </small></div>
                                    </div>

                                    <div >
<td>                                       <p type="text" hidden  class="cartId">{{$c->id}}</p>
</td>                                         <p class="text-black total" style="font-size:15px;font-weight:600">{{$c->product_price*$c->quantity}} Kyats</p>
                            <button style="font-size: 14px;border-radius:5px" class="px-2 py-1 text-white btn removeBtn bg-black">Remove Item</button>
                                    </div>
                        </div>
                        <hr>


                            @endforeach


                        <hr class="mt-0">
                        <div class="pt-1 mb-3 d-flex justify-content-between">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="text-black font-weight-medium subTotal" style="font-size:16px;font-weight:600">{{$subTotal}} Kyats</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Delivery Charges</h6>
                            <h6 class="text-black font-weight-medium" style="font-size:16px;font-weight:600">3000 Kyats</h6>
                        </div>
                    </div>
                    <div class="bg-transparent card-footer border-secondary">
                        <div class="mt-2 d-flex justify-content-between">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{$subTotal+3000}} Kyats</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5 card border-secondary">
                    <div class="text-white border-0 card-header bg-dark">
                        <h4 class="m-0 font-weight-semi-bold">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                               <div style="justify-content: space-between" class="d-flex ">
                                <div>
                                 <input type="radio" disabled class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                               </div>
                                 <img style="width:80px;height:40px;margin-top:-13px;border-radius:6px" class="img-fluid;" src="{{asset('images/paypal.png')}}" alt="">
                               </div>
                               <small class="text-danger">(Currently not avaliable)</small>
                            </div>
                        </div>
                        <div class="mb-4 form-group">
                            <div class="custom-control custom-radio">
                               <div style="justify-content: space-between" class="d-flex">
                                <div>
                                 <input disabled type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Kpay</label>
                               </div>
                                 <img style="width:80px;height:40px;margin-top:-13px;border-radius:6px" class="img-fluid;" src="{{asset('images/kbzpay.png')}}" alt="">
                               </div>
                               <small class="text-danger">(Currently not avaliable)</small>

                            </div>
                        </div>
                        <div class="mb-4 form-group">
                            <div class="custom-control custom-radio">
                              <div style="justify-content: space-between" class="d-flex">
                                 <div>
                                 <input disabled type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Wave Money</label>
                               </div>
                                <img style="width:80px;height:40px;margin-top:-13px;border-radius:6px" class="img-fluid;" src="{{asset('images/wavemoney.png')}}" alt="">
                              </div>
                               <small class="text-danger">(Currently not avaliable)</small>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                              <div style="justify-content: space-between" class="d-flex">
                                 <div>
                                 <input required type="radio" value='cod' class="custom-control-input payment" name="payment" id="cod">
                                <label class="custom-control-label" for="cod">Cash On Delivery(COD)</label>
                               </div>
                              </div>
                            </div>
                        </div>

                    </div>
                    <div class="bg-transparent card-footer border-secondary">
                        <button type="submit" class="py-3 my-3 text-white orderBtn btn btn-lg btn-block bg-black font-weight-bold">Place Order</button>
                    </div>
                </div>
                 </form>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
     @else
                            <h3 class="my-5 text-center text-black">No items...</h3>
                        @endif
 @else
 <div style="margin: 60px" class="my-30">
 <h3 class="text-black   ">Please Login first...</h3>
</div>
 @endif
@endsection
@section('myScript')
 <script>
       $(document).ready(function(){
     $('.removeBtn').click(function(){
       $parentNode=$(this).parent('div');
      $cartId=Number($parentNode.find('.cartId').text());
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
        })
    </script>
@endsection
