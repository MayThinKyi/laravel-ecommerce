@extends('user.layouts.master')
@section('myContent')
<div style="">

    <div class="mt-4" style="">

      </div>
      <div class="mx-auto text-center ">
        <h3 class="  font-weight-semi-bold"> <img src="{{asset('user/index/images/nike-logo.svg')}}" style="width: 55px;height:55px" alt=""></h3>
        <h3 class="nike-unite mb-3">YOUR ACCOUNT FOR EVERYTHING NIKE</h3>
      </div>
        <div class="  mx-auto ">
            <form method="post" class="registerForm mx-auto" action="{{route('register')}}">
                @csrf
                <div class="form-outline mb-4">
    <input type="text"  value="{{old('name')}}" name='name' id="form2Example1" placeholder="Name" class="border p-3 form-control" />
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

  <div class="form-outline mb-4">
    <input type="email"  value="{{old('email')}}" name='email' placeholder="Email" id="form2Example1" class="p-3 form-control" />
    @error('email')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name='password' id="form2Example2" placeholder="Password" class="border p-3 form-control" />
    @error('password')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
  <div class="form-outline mb-4">
    <input type="password" name='password_confirmation' id="form2Example2" placeholder="Confirm Password"  class="p-3 form-control" />
    @error('password_confirmation')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
  <div class="form-outline mb-4">
    <input type="text" name='phone'  value="{{old('phone')}}" placeholder="Phone"  id="form2Example2" class="border p-3 form-control" />
    @error('phone')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
  <div class="form-outline mb-4">
    <input type="text" name='address'  value="{{old('address')}}"  placeholder="Address"  id="form2Example2" class="border p-3 form-control" />
    @error('address')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
  <div class="form-outline mb-4">
   <select name="gender"   class="px-2 rounded form-control border registerSelect"  style=" >
    <option selected value="male">Gender</option>

    <option value="male">Male</option>
     <option value="female">Female</option>
   </select>
   @error('gender')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-outline  mb-4" hidden>
   <select name="role"  class="p-3 form-control border" id="form2Example2">
    <option value="admin">Admin</option>
     <option value="user" selected>User</option>
   </select>
    <label  style='font-size:18px' class="form-label " for="form2Example2">Gender</label>
   @error('role')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>



  <!-- Submit button -->
  <button type="submit" style='font-size:13px' class="btn loginBtn btn-block mb-4 py-3">Register</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Already have an account? <a href="{{route('auth#login')}}">Login</a></p>

  </div>
</form>
        </div>
    </div>
</div>
@endsection
