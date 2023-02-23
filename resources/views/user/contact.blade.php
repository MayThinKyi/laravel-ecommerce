@extends('user.layouts.master')
@section('cartCount')
 @if(Auth::user())
    {{count($carts)}}
@else
0
 @endif
@endsection
@section('myContent')
  <!-- Contact Start -->
    <div class="container-fluid pt-5">
         @if(session('createSuccess'))
                                <div style="width: 450px" class="mx-auto alert alert-primary text-black alert-dismissible fade show" role="alert">
                                  <p>{{session('createSuccess')}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
        <div class="text-center ">
            <h2 style="font-weight:600;margin-bottom:50px" class=" px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{route('user#sendContact')}}"  method="post"  >
                        @csrf
                        <div class="control-group mb-3">
                            <input name='username'  value="{{old('username')}}" type="text" class="@error('username') is-invalid @enderror border form-control"  placeholder="Username"
                               />
                          @error('username')
                              <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="control-group mb-3">
                            <input type="email" value="{{old('email')}}" name='email' class="@error('email') is-invalid @enderror border form-control"  placeholder="Your Email"
                                 />
                            @error('email')
                              <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="control-group mb-3">
                            <input type="text"  value="{{old('subject')}}" name="subject" class="@error('subject') is-invalid @enderror border form-control"  placeholder="Subject"
                                 />
                           @error('subject')
                              <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="control-group mb-3">
                            <textarea name='message'     class="@error('message') is-invalid @enderror border form-control" rows="6" placeholder="Message...">{{old('message')}}</textarea>
                            @error('message')
                              <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div>
                            <button style="background:#000000;font-size:15px;font-weight:400" class="text-white   primary-btn  py-3 px-5" type="submit" >Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <p>Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr erat sit sit. Dolor diam et erat clita ipsum justo sed.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-black mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-black mr-3"></i>info@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-black mr-3"></i>+012 345 67890</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-black mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-black mr-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-black mr-3"></i>+012 345 67890</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
