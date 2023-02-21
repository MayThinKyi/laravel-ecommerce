@extends('user.layouts.master')
@section('cartCount')
 @if($carts)
      {{count($carts)}}
 @else
    0
 @endif
@endsection
@section('myContent')
   <div class="row  py-5">
    <div class="col-lg-3 " style="border-right: 1px solid gray">
    <div class="px-5">
        <p style="font-size: 15px" class="text-black">My account / <b>Dashboard</b></p>
    <h4 class="mt-3 " style="font-weight: 600">Hi, @if(Auth::user())
       {{ Auth::user()->name}}
    @else
        ''
    @endif</h4>
    <small >Thanks for being our customer</small>
    <hr>
    <a href="{{route('user#orderHistory')}}" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-scroll mr-2"></i> <p style="font-size: 15px">Order History</p>
    </a>
     <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-wallet mr-2"></i> <p style="font-size: 15px">Wallet</p>
    </a>
    <hr>
    <h6 class="my-3 " style="font-weight: 600">Manage Account</h3>
         <a href="{{route('user#dashboard')}}" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-user mr-2"></i> <p style="font-size: 15px">Personal Info</p>
    </a>
     <a href="{{route('user#changePasswordPage')}}" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-key mr-2"></i> <p style="font-size: 15px">Change Password</p>
    </a>
     <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-envelope mr-2"></i> <p style="font-size: 15px">Communication & Privacy</p>
    </a>
     <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-heart mr-2"></i> <p style="font-size: 15px">Givings & Impact</p>
    </a>
     <hr>
    <h6 class="my-3 " style="font-weight: 600">Subscriptions & plans</h3>
         <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-user-shield mr-2"></i> <p style="font-size: 15px">Protection Plans</p>
    </a>
     <hr>
    <h6 class="my-3 " style="font-weight: 600">Privacy</h3>
         <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-lock mr-2"></i> <p style="font-size: 15px">Privacy Policy</p>
    </a>
      <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-unlock-keyhole mr-2"></i> <p style="font-size: 15px">Your Privacy Choices</p>
    </a>
      <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-scroll mr-2"></i> <p style="font-size: 15px">Request My Personal Infomarion</p>
    </a>
    <hr>
     <h6 class="my-3 " style="font-weight: 600">Customer Service</h3>
         <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-circle-question mr-2"></i> <p style="font-size: 15px">Help</p>
    </a>
      <a href="" style="display:flex;align-items:center;color: rgb(155, 152, 152)">
       <i style="margin-top: -13px;color:black" class="fa-solid fa-circle-info mr-2"></i> <p style="font-size: 15px">Terms Of Use</p>
    </a>
    <hr>
    <form action="{{route('logout')}}" method="post" >
        @csrf
        <button type="submit" class="d-flex" style="border:none;background:#fff">
         <i class="mr-2 fa-solid fa-arrow-right-from-bracket"></i><p style="font-size: 15px">Sign Out</p>
        </button>
    </form>
</div>
    </div>
    <div class=" col-12 col-lg-9 ">
        @yield('dashboardContent')
    </div>
   </div>
@endsection
