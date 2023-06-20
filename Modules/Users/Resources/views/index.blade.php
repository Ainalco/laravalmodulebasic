@extends('adminlayout')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd">
            <div class="panel-heading">
                <div class="panel-title">
                <div class="btn-group pull-right"> 
                    <a href="{{route('user.adduser')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add User</a>
                    </div>
                    <h4>User List</h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                @if (Session::has('success'))
                        <div class="alert alert-info">{{ Session::get('success') }}</div>
                        @endif
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Image</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>About</th>
                                <th>Last Login</th>
                                <th>Last Logout</th>
                                <th>IP Address</th>
                                <th>Status</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                       
                        @if(!empty($users))
                            @php $sl = 1 @endphp
                            @foreach ($users as $key => $user)
                            @php $sl++ @endphp
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{$user->getFirstMedia()->getUrl()}}" alt="Image" height="64" ></td>
                                <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->about }}</td>
                                <td>{{ $user->last_login }}</td>
                                <td>{{ $user->last_logout }}</td>
                                <td>{{ $user->ip_address }}</td>
                                <td>@if ($user->status == 1) Active  @else inactive @endif</td>
                                <td>
                                @if ($user->is_admin != 1)
                                    <a href="{{route('user.edituser',$user->id)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" onclick="return confirm('Are you Sure to Delete ???')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    @else
                                    <button class="btn btn-info btn-sm" title="Admin">Admin</button>
                                    @endif
                                    
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
