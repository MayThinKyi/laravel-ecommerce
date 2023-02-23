@extends('admin.layouts.master')
@section('myContent')
  <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            @if(session('createSuccess'))
                                <div class="alert alert-primary text-black alert-dismissible fade show" role="alert">
                                  <p>{{session('createSuccess')}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if(session('deleteSuccess'))
                                <div class="alert alert-danger text-black alert-dismissible fade show" role="alert">
                                  <p>{{session('deleteSuccess')}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                             @if(session('updateSuccess'))
                                <div class="alert alert-success text-black alert-dismissible fade show" role="alert">
                                  <p>{{session('updateSuccess')}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- DATA TABLE -->
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Contact List</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-7"></div>
                                <div class="col-lg-5">

                                </div>
                            </div>
                              @if(count($contacts)>0)
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($contacts as $c)
                                             <tr class="tr-shadow">
                                            <td>{{$c->username}}</td>
                                            <td>{{$c->email}}</td>

                                            <td>{{Str::words($c->subject,8)}}</td>
                                            <td>{{Str::words($c->message,8)}}</td>
                                            <td>{{$c->created_at}}</td>
                                                <td  >
                                                    <a href="{{route('admin#contactDetails',$c->id)}}">
                                              <i style="font-size: 22px"  class="text-primary fa-solid fa-circle-info"></i>

                                                    </a>
                                                </td>

                                        </tr>
                                        <tr class="spacer"></tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                             @else
                                        <h3 class="text-black">There is no Contacts...</h3>
                                       @endif
                            <!-- END DATA TABLE -->
                            {{$contacts->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
