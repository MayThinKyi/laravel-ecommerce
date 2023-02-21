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
                                        <h2 class="title-1">Admin List</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">
                                    <form class=" d-flex items-center" action="{{route("admin#list")}}" method="get">
                                    @csrf
                                     <input name='searchKey' value="{{request('searchKey')}}" type="text" placeholder="Search Admin..." class="form-control">
                                    <button type="submit" class="btn btn-primary text-white">Search</button>
                                   </form>
                                </div>
                            </div>
                              @if(count($admins)>0)
                            <div style="width:max-content" class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($admins as $a)
                                             <tr class="tr-shadow">
                                                <td hidden class='id'>{{$a->id}}</td>
                                            <td style="padding:25px 20px">
                                                @if($a->image==null)
                                                    <img style="width:60px;height:60px" src="{{asset('images/default_profile.png')}}" alt="">

                                                @else
                                                   <img style="width:60px;height:60px" src="{{asset('storage/'.$a->image)}}" alt="">

                                                @endif
                                            </td>
                                            <td style="padding:25px 20px">{{$a->name}}</td>
                                            <td style="padding:25px 20px">{{$a->email}}</td>
                                                <td style="padding:25px 20px">{{$a->gender}}</td>
                                                <td style="padding:25px 20px">{{$a->phone}}</td>
                                                <td style="padding:25px 20px">{{$a->address}}</td>
                                            <td style="padding:25px 20px">
                                                <div  @if(Auth::user()->id==$a->id) hidden @endif>
                                                    <select name="" id="" class="roleBtn">
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>
                                                  </select> <br>
                                                  <button  style="font-size: 12px;border-radius:5px" class="changeRoleBtn mt-1 p-1 btn-primary">Change Role</button>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                             @else
                                        <h3 class="text-black">There is no Admins...</h3>
                                       @endif
                            <!-- END DATA TABLE -->
                            {{$admins->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
@section('myScript')
<script>
    $(document).ready(function(){
       $('.changeRoleBtn').click(function(){
        $parentNode=$(this).parents('tr');
        $roleStatus=$parentNode.find(".roleBtn").val();
        $userId=$parentNode.find('.id').text();
        $.ajax({
             type:'GET',
       url:'/ajax/adminRole/change',
       data:{
        roleStatus:$roleStatus,
        userId:$userId
       },
       success:function(data){
         if(data.success==true){
            window.location.reload();
         }
       }
        })

       })
    })
</script>
@endsection
