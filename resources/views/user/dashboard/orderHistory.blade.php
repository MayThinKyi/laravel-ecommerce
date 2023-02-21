@extends('user.dashboard.master')
@section('cartCount')
  @if($carts)
      {{count($carts)}}
      @else
      0
  @endif
@endsection
@section('dashboardContent')
  <div class="py-3 px-4">
     <h3 class="mb-3 text-black">Order History</h3>
    <div class="row overflow-x-scroll w-full"  >
         <table class="overflow-x-scroll w-full px-5 ">
        <thead class="bg-black  text-center text-white">
            <th class=" px-5 py-3">Order Code</th>
            <th class="p-3">Ordered Date</th>
            <th class="p-3">Total <small class="">(Include Delivery Fees)</small></th>
            <th class="p-3">Phone</th>
            <th class="p-3">Address</th>
            <th class="p-3">Status</th>
        </thead>
        <tbody>
            @foreach ($orders as $o)
                <tr class="px-5 text-center">
                     <td>
                         <a class="text-primary"  href="{{route('user#orderHistoryDetails',$o->order_code)}}">
                            {{$o->order_code}}
                            </a>
                        </td>
                 <td>{{$o->created_at->format('d-m-Y')}}</td>
                  <td>{{$o->total}} Kyats</td>
                   <td>{{$o->phone}}</td>
                   <td>{{$o->address}}</td>

                    @if ($o->status=='0')
                       <td class="pt-3"> <p style="color:blue">Pending...</p></td>
                    @elseif($o->status=='1')
                    <td class="pt-3"><p style="color:green">Success...</p></td>
                     @else
                    <td class="pt-3"><p style="color:red">Reject...</p></td>
                    @endif


                </tr>

            @endforeach
        </tbody>
     </table>
    </div>
  </div>
@endsection
