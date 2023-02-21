@extends('user.dashboard.master')
@section('cartCount')
    {{count($carts)}}
@endsection
@section('dashboardContent')
@if(session('oldPasswordError'))
    <div class="mx-20 alert alert-danger text-black alert-dismissible fade show" role="alert">
        <p>{{session('oldPasswordError')}}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
@if(session('changePasswordSuccess'))
    <div class="mx-20 alert alert-success text-black alert-dismissible fade show" role="alert">
        <p>{{session('changePasswordSuccess')}}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
     <form class="px-5" action="{{route('user#changePassword')}}" method="post">
        @csrf
        <div class="p-4">
        <h4 class="mb-4" style="text-black;font-weight:600">Change Password</h4>
        <div class="border py-4 px-3" style="border-radius:15px">
            <h6 style="text-black;font-weight:600">Password Information</h6>
            <div class="my-3">
                <small>Old Password</small>
            <input style="font-size: 14px"  type="password" name='oldPassword' value="{{old('oldPassword')}}" class="border @error('oldPassword') is-invalid @enderror form-control">
          @error('oldPassword')
                <small class="text-danger">{{$message}}</small>
                @enderror
        </div>
             <div class="my-3">
                <small>New Password</small>
            <input style="font-size: 14px"  type="password" name='newPassword' value="{{old('newPassword')}}" class="border @error('newPassword') is-invalid @enderror form-control">
         @error('newPassword')
                <small class="text-danger">{{$message}}</small>
                @enderror
        </div>
             <div class="my-3">
                <small>Confirm Password</small>
            <input style="font-size: 14px"  type="password" name='confirmPassword' value="{{old('confirmPassword')}}" class="border @error('confirmPassword') is-invalid @enderror form-control">
                @error('confirmPassword')
                <small class="text-danger">{{$message}}</small>
                @enderror
        </div>
            <div style="display: flex;justify-content:flex-end">

                  <button type="submit" class="text-end btn text-white bg-black" style="border-radius: 10px">Change Password</button>


            </div>
        </div>
    </div>
     </form>
@endsection
