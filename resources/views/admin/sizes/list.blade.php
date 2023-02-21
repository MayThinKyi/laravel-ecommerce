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
                                        <h2 class="title-1">Size List</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">
                                    <a href="{{route('size#createPage')}}">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add size
                                        </button>
                                    </a>
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        CSV download
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-7"></div>
                                <div class="col-lg-5">
                                   <form class=" d-flex items-center" action="{{route("size#list")}}" method="get">
                                    @csrf
                                     <input name='searchKey' value="{{request('searchKey')}}" type="text" placeholder="Search Size..." class="form-control">
                                    <button type="submit" class="btn btn-primary text-white">Search</button>
                                   </form>
                                </div>
                            </div>
                              @if(count($sizes)>0)
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Size Name</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($sizes as $s)
                                             <tr class="tr-shadow">
                                            <td>{{$s->id}}</td>
                                            <td>{{$s->size_name}}</td>



                                            <td>
                                                <div class="table-data-feature">

                                                    <a href="{{route('size#editPage',$s->id)}}">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    </a>
                                                    <a href="{{route('size#delete',$s->id)}}">
                                                         <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    </a>


                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            @else
                                        <h3 class="text-black">There is no Sizes...</h3>
                                       @endif
                            <!-- END DATA TABLE -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
