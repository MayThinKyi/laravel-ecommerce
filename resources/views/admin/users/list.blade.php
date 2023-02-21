@extends('admin.layouts.master')
@section('myContent')
      <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content ">
                    <div class="container-fluid">
                        <div class="col-md-12">
                             @if(session('deleteSuccess'))
                                <div class="alert alert-danger text-black alert-dismissible fade show" role="alert">
                                  <p>{{session('deleteSuccess')}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- DATA TABLE -->
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">User List</h2>

                                    </div>
                                </div>
                                <div class="table-data__tool-right">
                                    <form class=" d-flex items-center" action="{{route('admin#userList')}}" method="get">
                                    @csrf
                                     <input name='searchKey' value="{{request('searchKey')}}" type="text" placeholder="Search User..." class="form-control">
                                    <button type="submit" class="btn btn-primary text-white">Search</button>
                                   </form>
                                </div>
                            </div>
                              @if(count($users)>0)
                            <div style="width:max-content" class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Role</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $u)
                                             <tr class="tr-shadow" style="vertical-align:middle">
                                                <td hidden class="userId">{{$u->id}}</td>
                                                <td style="padding:25px 20px">{{$u->name}}</td>

                                            <td style="padding:25px 20px">{{$u->email}}</td>
                                            <td style="padding:25px 20px">{{$u->gender}}</td>
                                                <td style="padding:25px 20px">{{$u->phone}}</td>
                                                <td style="padding:25px 20px">{{$u->address}}</td>
                                            <td style="padding:25px 20px">
                                                <div  @if(Auth::user()->id==$u->id) hidden @endif>
                                                    <select name="" id="" class="roleBtn">
                                                    <option value="admin" @if($u->role=='admin') selected @endif>Admin</option>
                                                    <option value="user" @if($u->role=='user') selected @endif>User</option>
                                                  </select> <br>
                                                  <button  style="font-size: 12px;border-radius:5px" class="changeRoleBtn mt-1 p-1 btn-primary">Change Role</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data-feature" @if(Auth::user()->id==$u->id) hidden @endif>


                                                    <a href="{{route('admin#deleteUser',$u->id)}}">
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
                                        <h3 class="text-black">There is no Users...</h3>
                                       @endif
                            <!-- END DATA TABLE -->
                            {{$users->links()}}
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
        $userId=$parentNode.find('.userId').text();
        $.ajax({
             type:'GET',
       url:'/ajax/user/role/change',
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
