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
                                            @if(isset($getrole))
                                                <input type="text" name="username" class="form-control" value="{{$getrole['username']}}">
                                            @else
                                                <input type="text" name="username" class="form-control" value="">
                                            @endif
                                           
                                           <!--  @foreach($errors->get('username') as $username)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $username }}
                                                </div>
                                            @endforeach -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            @if(isset($getrole))
                                                <input type="text" name="password" class="form-control" value="{{$getrole['password']}}">
                                            @else
                                                <input type="text" name="password" class="form-control">
                                            @endif
                                           
                                            <!-- @foreach($errors->get('password') as $password)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $password }}
                                                </div>
                                            @endforeach -->
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
                                     @if(in_array('STUDENT', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[1]" value="student"   {{ (in_array('student', $getrole['value'])) ? 'checked="checked" ' : '' }} >
                            					&nbsp;&nbsp;Student
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                    @if(in_array('EMPLOYEE', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[2]" value="employee" {{ (in_array('employee', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Employee
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('HOMEWORK', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[3]" value="homework" {{ (in_array('homework', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Homework
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('ATTENDANCE', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[4]"  value="attendance" {{ (in_array('attendance', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Attendance
                            				</label>
                            			</div>
                            		</div>
                                    @endif

                                    <!--  changes done by priya -->
                                     @if(in_array('PAYROLL', $userplans))
                                        <div class="col-md-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="checkbox" name="accessLevels[22]"  value="payroll" {{ (in_array('payroll', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                    &nbsp;&nbsp;Payroll
                                                </label>
                                            </div>
                                        </div>
                                    @endif   
                                    
                                        <div class="col-md-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="checkbox" name="accessLevels[25]"  value="syllabus" {{ (in_array('syllabus', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                    &nbsp;&nbsp;Syllabus
                                                </label>
                                            </div>
                                        </div>

                                    @if(in_array('TIMETABLE', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[5]" value="timetable" {{ (in_array('timetable', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Time Table
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('GALLERY', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[6]" value="gallery" {{ (in_array('gallery', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Gallery
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('POST', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[7]" value="post" {{ (in_array('post', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Post
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('RESULT', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[8]" value="result" {{ (in_array('result', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Result
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('NOTIFICATION', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[9]" value="notification" {{ (in_array('notification', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Notification
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                            		  @if(in_array('FEES', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[11]" value="fee" {{ (in_array('fee', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Fee
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('LIBRARY', $userplans))
                            		<div class="col-md-3">
                            			<div class="radio">
                            				<label>
                            					<input type="checkbox" name="accessLevels[12]" value="library" {{ (in_array('library', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                            					&nbsp;&nbsp;Library
                            				</label>
                            			</div>
                            		</div>
                                    @endif
                                     @if(in_array('DATA MANAGER', $userplans))
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[13]" value="datamanager" {{ (in_array('datamanager', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Date Manager
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                     @if(in_array('MASTER', $userplans))
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[14]" value="master" {{ (in_array('master', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Master
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                     @if(in_array('TRANSPORT', $userplans))
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[15]" value="transport" {{ (in_array('transport', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Transport
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                            @if(in_array('KNOWLEDGE BANK', $userplans))
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[16]" value="knowledgebank" {{ (in_array('knowledgebank', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Knowledge Bank
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                          @if(in_array('VOICE SMS', $userplans))
                                     <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[17]" value="Voicemessage" {{ (in_array('Voicemessage', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Voice Message
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                     @if(in_array('REPORT', $userplans))
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[18]" value="report" {{ (in_array('report', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Report
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                    @if(in_array('EXPENDITURE', $userplans))
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[20]" value="expenditure" {{ (in_array('expenditure', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Expenditure
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                    @if(in_array('FURNITURE', $userplans))
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[21]" value="furniture" {{ (in_array('furniture', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;Furniture
                                            </label>
                                        </div>
                                    </div>
                                   @endif
                                     <div class="col-md-3">
                                        <div class="radio">
                                            <label>
                                                <input type="checkbox" name="accessLevels[19]" value="CustomerCare" {{ (in_array('CustomerCare', $getrole['value'])) ? 'checked="checked" ' : '' }}>
                                                &nbsp;&nbsp;CustomerCare
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
        @if(!empty($getrole['value']))
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
                                
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $getrole['username'] }}</td>
                                        <td>{{ $getrole['password'] }}</td>
                                        <td>
                                            <ul>
                                                @foreach($getrole['value'] as $permission)
                                                <li>{{$permission}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td><a href="{{route('changePassword', $getrole['id'])}}" class="btn btn-info"><i class="fa fa-key"></i></a></td>
                                        <td><a href="{{route('deleteUserRole', $getrole['id'])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                                    </tr>
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
               </div>
            </div>
            @endif
    </div>
@endsection