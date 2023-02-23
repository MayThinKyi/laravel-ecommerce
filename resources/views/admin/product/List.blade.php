@extends('admin.layouts.master')
@section('myContent')
      <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content ">
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
                                        <h2 class="title-1">Product List</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">
                                    <a href="{{route('product#createPage')}}">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add Product
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
                                   <form class=" d-flex items-center" action="{{route("product#list")}}" method="get">
                                    @csrf
                                     <input name='searchKey' value="{{request('searchKey')}}" type="text" placeholder="Search Product..." class="form-control">
                                    <button type="submit" class="btn btn-primary text-white">Search</button>
                                   </form>
                                </div>
                            </div>
                             @if(count($products)>0)

                            <div style="width:70vw" class="table-responsive table-responsive-data2">
                                <table  class="table table-data2">
                                    <thead>
                                        <tr >
                                             <th >Image</th>
                                            <th >Name</th>
                                            <th  >Category</th>

                                            <th >Price</th>
                                            <th >Sizes</th>
                                            <th >Colors</th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody >

                                        @foreach ($products as $p)
                                             <tr class=" tr-shadow">
                                            <td  style="">

                                                <img style="width: 70px;height:70px" src="{{asset('storage/'.json_decode($p->product_images)[0])}}" alt="">
                                            </td>
                                            <td  style="padding: 10px 20px;"><small style="white-space: normal;">{{Str::words($p->product_name,3)}}</small></td>

                                            <td  style="padding:  10px 20px; padding-left:20px"><small>{{$p->category_name}}</small></td>
                                             <td style="padding: 10px 20px;padding-left:20px"><small>{{$p->product_price}}</small></td>
                                              <td style="padding:10px 20px;padding-left:20px">
                                               <div class="">

                                                @if($p->sizes)
                                                     @foreach ($p->sizes as $s)
                                                    <small class="me-2">{{$s}}</small><br>
                                                @endforeach
                                                @else
                                                <small class="text-danger">No Size...</small>
                                                @endif
                                               </div>
                                              </td>
<td>

                                                <div class="">
                                                   @if($p->colors)
                                                     @foreach ($p->colors as $c)
                                                    <small class="me-2">{{$c}}</small><br>
                                                @endforeach
                                                @else
                                                <small class="text-danger">No Colors...</small>
                                                @endif
                                                </div>

                                               </td>

                                            <td style="padding: 25px 10px;">
                                                <div class="table-data-feature">

                                                    <a href="{{route('product#editPage',$p->id)}}">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    </a>
                                                    <a href="{{route('product#delete',$p->id)}}">
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
                                        <h3 class="text-black">There is no Products...</h3>
                                       @endif

                            <!-- END DATA TABLE -->
                          {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
