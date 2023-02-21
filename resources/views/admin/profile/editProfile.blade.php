@extends('admin.layouts.master')
@section('myContent')
     <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-3 offset-8">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                   <div class="row">
                                    <a href="javascript:history.back()">
                                         <button class="btn btn-dark text-white">Back</button>
                                    </a>
                                   </div>
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Admin Edit Profile Info</h3>
                                    </div>
                                    <hr>
                                   <form action="{{route('profile#update')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                     <div class="row">
                                        <div class="col-6">
                                            @if($user['image']==null)
                                                <img style="border-radius: 100%" class="" src="{{asset('images/default_profile.png')}}" alt="">
                                            @else
                                            <img src="{{asset('storage/'.$user['image'])}}" alt="">
                                            @endif
                                            <input type="file" name="image" class="mt-2 form-control @error('image') is-invalid @enderror"  id="">
                                            @error('image')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <div class="my-3 ">
                                               <p>Name</p>
                                                <input type="text" name="name" value="{{old('name',$user['name'])}}" id="" class="form-control @error('name') is-invalid @enderror">
                                                 @error('name')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            </div>
                                            <div class="my-3 ">
                                                <p>Email</p>
                                                <input type="text" name="email" value="{{old('email',$user['email'])}}" id="" class="form-control @error('email') is-invalid @enderror">
                                                 @error('email')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            </div>
                                            <div class="my-3 ">
                                                <p>Phone Number</p>
                                                <input type="text" name="phone" value="{{old('phone',$user['phone'])}}" id="" class="form-control @error('phone') is-invalid @enderror">
                                                 @error('phone')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            </div>
                                            <div class="my-3 ">
                                               <p>Address</p>
                                                <input type="text" name="address" value="{{old('address',$user['address'])}}" id="" class="form-control @error('address') is-invalid @enderror">
                                             @error('address')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            </div>
                                             <div class="my-3 ">
                                               <p>Role</p>
                                               <select name="role" disabled id="" class="form-control">
                                                <option value="admin" selected>Admin</option>
                                                <option value="user">User</option>
                                               </select>
                                            </div>
                                            <div class="my-3 ">
                                               <p>Created At</p>
                                                 <input type="text" disabled name="createdAt" value="{{date('d-M-Y', strtotime($user['created_at']))}}" id="" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-dark text-white mt-2">
                                                Update Profile
                                            </button>
                                        </div>
                                    </div>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
