@extends('admin.layouts.master')
@section('myContent')
 <div class="p-3 " style="margin-top: 100px ">
        @if($contact)
        <a href="javascript:history.back()">
            <button style="border-radius: 5px" class="mb-3 btn btn-primary text-white">Back</button>
        </a>
           <div class="row">
            <div class="col-10 offset-1">
                  <div class="card border-secondary mb-5">
                    <div class="card-header  border-0">
                        <h4 class="font-weight-semi-bold m-0">Contact  Details</h4>
                    </div>
                    <div class="card-body">



                             <h6 style="font-size: 16px" class="mb-3 text-black">Username : <span  style="font-size: 15px;font-weight:400">{{$contact->username}}</span></h6>

                            <h6 style="font-size: 16px" class="mb-3 text-black">Email : <span  style="font-size: 15px;font-weight:400">{{$contact->email}}</span></h6>
                            <h6 style="font-size: 16px" class="mb-3 text-black">Subject : <span  style="font-size: 15px;font-weight:400">{{$contact->subject}}</span></h6>
                            <h6 style="font-size: 16px" class="mb-3 text-black">Message: <span  style="font-size: 15px;font-weight:400">{{$contact->message}}</span></h6>

                        </div>
           </div>
        @else
            No Order History ....
        @endif
    </div>
@endsection
