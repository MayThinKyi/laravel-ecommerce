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
                                        <h2 class="title-1">Category List</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">
                                    <a href="{{route('category#createPage')}}">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add category
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
                                   <form class=" d-flex items-center" action="{{route("category#list")}}" method="get">
                                    @csrf
                                     <input name='searchKey' value="{{request('searchKey')}}" type="text" placeholder="Search Category..." class="form-control">
                                    <button type="submit" class="btn btn-primary text-white">Search</button>
                                   </form>
                                </div>
                            </div>
                              @if(count($categories)>0)
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Created At</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categories as $c)
                                             <tr class="tr-shadow">
                                            <td>{{$c->id}}</td>
                                            <td>{{$c->category_name}}</td>

                                            <td>{{$c->created_at}}</td>


                                            <td>
                                                <div class="table-data-feature">

                                                    <a href="{{route('category#editPage',$c->id)}}">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    </a>
                                                    <a href="{{route('category#delete',$c->id)}}">
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
                                        <h3 class="text-black">There is no Categories...</h3>
                                       @endif
                            <!-- END DATA TABLE -->
                            {{$categories->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
