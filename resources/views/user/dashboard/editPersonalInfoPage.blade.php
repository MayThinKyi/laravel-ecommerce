@extends('user.dashboard.master')
@section('cartCount')
    {{count($carts)}}
@endsection
@section('dashboardContent')
   <form class="px-5" action="{{route('user#updateProfile')}}" method="post">
    @csrf
     <div class="p-4">
        <h4 class="mb-4" style="text-black;font-weight:600">Edit Personal Info</h4>
        <div class="border py-4 px-3" style="border-radius:15px">
            <h6 style="text-black;font-weight:600">Your Personal Information</h6>
            <div class="my-3">
                <small>Full Name</small>
            <input style="font-size: 14px"  type="text" name='name' value="{{old('name',$user->name)}}" class="@error('name') is-invalid @enderror border form-control">
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
             <div class="my-3">
                <small>Email Address</small>
            <input style="font-size: 14px"  type="email" name='email' value="{{old('email',$user->email)}}" class="@error('email') is-invalid @enderror border form-control">
                @error('email')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
            <div class="my-3">
                <small>Phone Number</small>
            <input style="font-size: 14px"  type="text" name='phone' value="{{old('phone',$user->phone)}}" class=" @error('phone') is-invalid @enderror border form-control">
                @error('phone')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
            <div class="my-3">
                <small>Address</small>
            <input style="font-size: 14px"  type="text" name='address' value="{{old('address',$user->address)}}" class="@error('address') is-invalid @enderror border form-control">
                @error('address')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
         <small class="mt-3">Gender</small>
            <div class="mb-3">

                <select style="font-size: 14px"  name="gender" id="" class="border ">
                    <option value="male" @if($user->gender=='male') selected @endif>Male</option>
                    <option value="female" @if($user->gender=='female') selected @endif>Female</option>
                </select>
                @error('gender')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
            <div style="display: flex;justify-content:flex-end">

                  <button type="submit" class="text-end btn  text-white btn bg-black" style="border-radius: 10px">Update Profile</button>


            </div>
        </div>
    </div>
   </form>
@endsection
