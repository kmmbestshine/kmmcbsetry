@extends('users.layouts.default')
@section('title', 'User Role')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">User Role</li>
</ul>
@endsection
@section('contant')
	@if(Input::old('success'))
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Well done!</strong> {{ Input::old('success') }}
                </div>
            </div>
        </div>
    @endif
    @if(Input::old('error'))
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Oh Snap!</strong> {{ Input::old('error') }}
                </div>
            </div>
        </div>
    @endif

    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('user.role.post')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add User Role</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Username</label>
                                        <div class="col-md-9">
                                            @if(isset($username))
                                                <input type="text" name="username" class="form-control" value="{{$username}}">
                                            @else
                                                <input type="text" name="username" class="form-control" value="">
                                            @endif
                                           
                                            @foreach($errors->get('username') as $username)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $username }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            @if(isset($password))
                                                <input type="text" name="password" class="form-control" value="{{$password}}">
                                            @else
                                                <input type="text" name="password" class="form-control">
                                            @endif
                                           
                                            @foreach($errors->get('password') as $password)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $password }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                            	<div class="col-md-2 text-center">
                            		<label class="control-label">Access Level</label>
                            	</div>
                            	<div class="col-md-10">
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[1]" value="student">
                            					&nbsp;&nbsp;Student
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[2]" value="employee">
                            					&nbsp;&nbsp;Employee
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[3]" value="homework">
                            					&nbsp;&nbsp;Homework
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[4]" value="attendance">
                            					&nbsp;&nbsp;Attendance
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[5]" value="timetable">
                            					&nbsp;&nbsp;Time Table
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[6]" value="gallery">
                            					&nbsp;&nbsp;Gallery
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[7]" value="post">
                            					&nbsp;&nbsp;Post
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[8]" value="result">
                            					&nbsp;&nbsp;Result
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[9]" value="notification">
                            					&nbsp;&nbsp;Notification
                            				</label>
                            			</div>
                            		</div>
                            		
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[11]" value="fee">
                            					&nbsp;&nbsp;Fee
                            				</label>
                            			</div>
                            		</div>
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[12]" value="library">
                            					&nbsp;&nbsp;Library
                            				</label>
                            			</div>
                            		</div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[13]" value="datamanager">
                                                &nbsp;&nbsp;Date Manager
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[14]" value="master">
                                                &nbsp;&nbsp;Master
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[15]" value="transport">
                                                &nbsp;&nbsp;Transport
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[16]" value="knowledgebank">
                                                &nbsp;&nbsp;Knowledge Bank
                                            </label>
                                        </div>
                                    </div>
                                  
                                     <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[17]" value="Voicemessage">
                                                &nbsp;&nbsp;Voice Message
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[18]" value="report">
                                                &nbsp;&nbsp;Report
                                            </label>
                                        </div>
                                    </div>
                            	</div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>View User Role </center></h3>                               
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>UserName</th>
                                    <th>Password</th>
                                    <th>Permission</th>
                                    <th>Change Password</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($get as $key=>$getval)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{ $getval->username }}</td>
                                        <td>{{ $getval->hint_password }}</td>
                                        <td>
                                            <ul>
                                                @foreach($getval->permission as $permission)
                                                <li>{{$permission->value}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td><a href="{{route('changePassword', $getval->id)}}" class="btn btn-info"><i class="fa fa-key"></i></a></td>
                                        <td><a href="{{route('deleteUserRole', $getval->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
               </div>
            </div>
    </div>
@endsection