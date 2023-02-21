@extends('user.dashboard.master')
@section('cartCount')
    {{count($carts)}}
@endsection
@section('dashboardContent')
    <div class="p-3 px-5">
        @if(count($orderDetails)>0)
        <a href="javascript:history.back()">
            <button style="border-radius: 5px" class="mb-3 btn bg-black text-white">Back</button>
        </a>
           <div class="row">
            <div class="col-11">
                  <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold my-1 text-white m-0">Order History Details</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>

                            @foreach ($orderDetails as $od)

                                 <div class="productContainer d-flex ">
                                    <div style="position:relative; width: 110px;height:80px;margin-right:10px">
                                     <img class="" style="width: 100%;height:120%;border-radius:6px;" src="{{asset('storage/'.json_decode($od->product_images)[0])}}" alt="">
                                        <span style="position:absolute;bottom:-16px;right:0px;border-radius:5px" class="p-1 bg-black text-white "><small>{{$od->product_price}} Ks</small></span>
                                    </div>
                                    <input type="text" hidden class="productId" value="{{$od->product_id}}" name="" id="">
                                    <div class="">
                                         <div style="font-size: 16px">{{Str::limit($od->product_name)}}</div>
                                     <div><small class="text-black">
                                        <b >x <span class="qty">{{$od->quantity}}</span></b>
                                         @if($od->size!='No Size' && $od->size) | Size: <span class="text-danger size">{{$od->size}}</span> @endif
                                          @if($od->color!='No Color' && $od->color) | Color: <span class="text-danger color">{{$od->color}} </span>@endif
                                     </small></div>
                                    </div>


                        </div>
                        <hr>
                            @endforeach
                            <hr>
                             <h6 style="font-size: 18px" class="mb-3 text-black">Total : <span  style="font-size: 17px;font-weight:400">{{$subTotal+3000}}Kyats <small class="text-danger">(Include Delivery Fees)</small></span></h6>

                            <h6 style="font-size: 18px" class="mb-3 text-black">Address : <span  style="font-size: 17px;font-weight:400">{{$orderDetails[0]['address']}}</span></h6>
                            <h6 style="font-size: 18px" class="mb-3 text-black">Phone Number : <span  style="font-size: 17px;font-weight:400">{{$orderDetails[0]['phone']}}</span></h6>
                            <h6 style="font-size: 18px" class="mb-3 text-black">Ordered Data : <span  style="font-size: 17px;font-weight:400">{{$orderDetails[0]['created_at']->format('d-m-Y')}}</span></h6>

                             <h6 style="font-size: 18px" class="mb-3 text-black">Payment Type : <span style="font-size: 17px;font-weight:400">{{$orderDetails[0]['payment']=='cod' ? 'Cash On Delivery(COD)':''}}</span></h6>
                        </div>
           </div>
        @else
            No Order History ....
        @endif
    </div>
@endsection
