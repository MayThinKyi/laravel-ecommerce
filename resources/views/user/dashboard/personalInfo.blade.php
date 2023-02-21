
@extends('user.dashboard.master')
@section('cartCount')
    {{count($carts)}}
@endsection
@section('dashboardContent')
@if(session('updateProfileSuccess'))
    <div style="max-width:450px;max-height:60px" class="mx-auto alert alert-success text-black alert-dismissible fade show" role="alert">
        <p>{{session('updateProfileSuccess')}}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
    <div class="py-4 ">
        <h4 class="mb-4" style="text-black;font-weight:600"> Personal Info</h4>
        <div class="border py-4 px-3" style="border-radius:15px">
            <h6 style="text-black;font-weight:600">Your Personal Information</h6>
            <div class="my-3">
                <small>Full Name</small>
                <p style="font-size: 15px">{{$user->name}}</p>
                <hr>
            </div>
             <div class="my-3">
                <small>Email Address</small>
                <p style="font-size: 15px">{{$user->email}}</p>
                <hr>
            </div>
           <div class="my-3">
                <small>Phone Number</small>
                <p style="font-size: 15px">{{$user->phone}}</p>
                <hr>
            </div>
            <div class="my-3">
                <small> Address</small>
                <p style="font-size: 15px">{{$user->address}}</p>
                <hr>
            </div>
             <small class="mt-3">Gender</small>
            <div class="mb-3">

                <select style="font-size: 14px"  name="gender" id="" class=" ">
                    <option value="male" @if($user->gender=='male') selected @endif>Male</option>
                    <option value="female" @if($user->gender=='female') selected @endif>Female</option>
                </select>
            </div>
            <div style="display: flex;justify-content:flex-end">
                <a href="{{route('user#editProfilePage')}}">
                  <button class="text-end text-white btn bg-black" style="border-radius: 10px">Edit Profile</button>

                </a>
            </div>

        </div>
    </div>
@endsection


