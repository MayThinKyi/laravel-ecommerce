@extends('admin.layouts.master')
@section('myContent')
    <!-- MAIN CONTENT-->
            <div class="main-content">
                 @if(session('updateSuccess'))
                                <div class="alert alert-success text-black alert-dismissible fade show mx-auto" style="width: 80%" role="alert">
                                  <p>{{session('updateSuccess')}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-3 offset-8">
                            </div>
                        </div>
                        <div class="col-lg-10 offset-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                    <a href="javascript:history.back()">
                                         <button class="btn btn-dark text-white">Back</button>
                                    </a>
                                   </div>
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Admin Profile Info</h3>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-4">
                                            @if($user['image']==null)
                                                <img style="border-radius: 100%" class="" src="{{asset('images/default_profile.png')}}" alt="">
                                            @else
                                             <img src="{{asset('storage/'.$user['image'])}}" alt="">
                                            @endif
                                        </div>
                                        <div class="col-8">
                                            <div class="my-3 d-flex items-center">
                                                <box-icon type='solid' name="user"></box-icon>
                                                <p class="ml-2">{{$user['name']}}</p>
                                            </div>
                                            <div class="my-3 d-flex items-center">
                                                <box-icon type='solid' name="envelope"></box-icon>
                                                <p class="ml-2">{{$user['email']}}</p>
                                            </div>
                                            <div class="my-3 d-flex items-center">
                                                <box-icon type='solid' name="phone"></box-icon>
                                                <p class="ml-2">{{$user['phone']}}</p>
                                            </div>
                                            <div class="my-3 d-flex items-center">
                                                <box-icon type='solid' name="location-plus"></box-icon>
                                                <p class="ml-2">{{$user['address']}}</p>
                                            </div>
                                            <div class="my-3 d-flex items-center">
                                                <box-icon type='solid' name="calendar"></box-icon>
                                                <p class="ml-2">{{date('d-M-Y', strtotime($user['created_at']));}}</p>
                                            </div>
                                           <a href="{{route('profile#editPage')}}">
                                             <button class="btn btn-dark text-white mt-2">
                                                Edit Profile
                                            </button>
                                           </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
