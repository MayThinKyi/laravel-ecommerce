
@extends('user.layouts.master')
@section('myContent')
    <div class="mt-4" style="">

     @error('email')
        <h5 class="mb-3 text-center text-danger">{{$message}}</h5>
     @enderror
     @error('password')
        <h5 class="mb-3 text-center text-danger">{{$message}}</h5>
     @enderror


       <div class=" mx-auto text-center ">
        <h3 class="  font-weight-semi-bold"> <img src="{{asset('user/index/images/nike-logo.svg')}}" style="width: 55px;height:55px" alt=""></h3>
        <h3 class="nike-unite mb-3">YOUR ACCOUNT FOR EVERYTHING NIKE</h3>
      </div>

        <div class="  mx-auto ">
            <form method="post" class="loginForm mx-auto" action="{{route('login')}}">
                @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name='email' id="form2Example1" class="p-3 form-control" placeholder="Email Address" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name='password' id="form2Example2" class="p-3 form-control" placeholder='Password' />
  </div>



  <!-- Submit button -->
  <button type="submit" style='font-size:13px' class="btn loginBtn btn-block mb-4 py-3">Login</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="{{route('auth#register')}}">Register</a></p>

  </div>
</form>
        </div>
    </div>
@endsection
