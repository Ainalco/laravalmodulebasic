@extends('adminlayout')

@section('content')

    <div class="row">
<div class="col-sm-12 col-md-12">
<div class="panel">
                <div class="panel-body">
                    <p class="dashboard_sms_form">
                    This Section is Use Only for Store Management.
                 </p>
             </div>
         </div>
</div>
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd">
            <div class="panel-heading">
                <div class="panel-title">
                <div class="btn-group pull-right"> 
                        <a href="{{route('user.userlist')}}" class="btn btn-success"><i class="fa fa-list"></i> User List</a>
                </div>
                    <h4>Add User</h4>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{route('user.update',$user->id)}}" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off">
                    @csrf 
                    @method('PUT')
                    <input type="hidden" name="user_id" class="form-control" value="{{ $user->id }}">
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-3 col-form-label">First Name </label>
                        <div class="col-sm-9">
                            <input name="firstname" class="form-control" type="text" placeholder="First Name" id="firstname" value="{{$user->firstname}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastname" class="col-sm-3 col-form-label">Last Name </label>
                        <div class="col-sm-9">
                            <input name="lastname" class="form-control" type="text" placeholder="Last Name" id="lastname" value="{{$user->lastname}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email *</label>
                        <div class="col-sm-9">
                            <input name="email" class="form-control" type="text" placeholder="Email" id="email" value="{{$user->email}}">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password </label>
                        <div class="col-sm-9">
                            <input name="password" class="form-control" type="password" placeholder="Password" id="password" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="about" class="col-sm-3 col-form-label">About</label>
                        <div class="col-sm-9">
                            <textarea name="about" placeholder="About" class="form-control" id="about">{{$user->about}}</textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="preview" class="col-sm-3 col-form-label">Preview</label>
                        <div class="col-sm-2">
                            <img src="#" class="img-thumbnail" width="125" height="100">
                        </div>
                        <div class="col-sm-7">
                        
                        </div>
                        <input type="hidden" name="old_image" value="">
                    </div> 

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" id="image" aria-describedby="fileHelp">
                            <small id="fileHelp" class="text-muted"></small>
                        </div>
                    </div> 
				 <div class="form-group row">
                 <label for="istatus" class="col-sm-3 col-form-label">Is Monitor Display</label>
                     <div class="col-sm-9">
                     		<div class="checkbox checkbox-success">
                               <input type="checkbox" name="counter" @if ($user->counter == 1) checked @endif value="1" id="counter">
                               <label for="counter"></label>
                         </div>
                     </div>
                 </div>
         
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status *</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                 <input type="radio" name="status" @if ($user->status == 1) checked @endif value="1" checked="checked" id="status" autocomplete="off">
                                 Active
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" @if ($user->status == 0) checked @endif value="0" id="status" autocomplete="off">InActive
                            </label> 
                        </div>
                    </div>
         
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5">Reset</button>
                        <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                    </div>
                 </form>

            </div>
        </div>
    </div>
</div>
@endsection
