@extends('admin.layouts.master')
@section('myContent')
 <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="col-md-12">

                            <!-- DATA TABLE -->
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Order List</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">

                                </div>
                            </div>

                            <div class="row mb-3">
                                   <form class=" d-flex items-center" action="{{route('admin#orderList')}}" method="get">
                                    @csrf
                                    <p style="font-size: 15px" class="mt-1 mr-2">Search Order Status:</p> <select style="font-size: 14px;width:150px;height:35px" name="searchStatus" id="" class="p-1 mr-2">
                                        <option value="" @if(request('searchStatus')=='') selected @endif>All</option>
                                        <option value="pending" @if(request('searchStatus')=='pending') selected @endif>Pending</option>
                                                        <option value="success" @if(request('searchStatus')=='success') selected @endif >Success</option>
                                                        <option value="reject" @if(request('searchStatus')=='reject') selected @endif >Reject</option>
                                                    </select>
                                    <button type="submit" class="btn btn-primary text-white">Search</button>
                                   </form>
                                </div>

                              @if(count($orders)>0)
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Order Code</th>
                                            <th>Ordered Date</th>
                                            <th>Total <small class="text-danger">(Includes Delivery Charges)</small></th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($orders as $o)
                                             <tr class="tr-shadow">
                                            <td class="orderId">{{$o->id}}</td>
                                            <td>{{$o->username}}</td>
                                             <td><a href="{{route('admin#orderDetails',$o->order_code)}}">
                                                {{$o->order_code}}</a></td>
                                              <td>{{$o->created_at->format('d-m-Y')}}</td>
                                               <td>{{$o->total}} Kyats</td>
                                                <td>
                                                    <select name="" id="" class="status">
                                                        <option value="0" @if($o->status=='0') selected @endif>Pending</option>
                                                        <option value="1" @if($o->status=='1') selected @endif>Success</option>
                                                        <option value="2" @if($o->status=='2') selected @endif>Reject</option>
                                                    </select>
                                                    <button style="font-size: 13px" class=" mt-2 btn btn-primary p-1 changeStatusBtn">Change Status</button>
                                                </td>




                                        </tr>
                                        <tr class="spacer"></tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                             @else
                                        <h3 class="text-black">There is no Orders...</h3>
                                       @endif
                            <!-- END DATA TABLE -->
                            {{$orders->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
@section('myScript')
    <script>
        $(document).ready(function(){
           $('.changeStatusBtn').click(function(){
            $statusVal=Number($(this).parents('tr').find('.status').val());
            $orderId=Number($(this).parents('tr').find('.orderId').text());
             $.ajax({
               type:'get',
               url:'/ajax/changeOrderStatus',
               data:{
                orderId:$orderId,
                statusVal:$statusVal
               },
               success:function(data) {
                  if(data.success==true){
                    location.reload();
                  }
               }
            });
           })
        })
    </script>
@endsection
