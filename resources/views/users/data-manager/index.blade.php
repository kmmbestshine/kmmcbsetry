@extends('users.layouts.default')
@section('title', 'Data Manager')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Data Manager</li>
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
            	<form class="form-horizontal" role="form" method="post" action="{{route('post.manager')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Employee Form</strong></h3>
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="col-md-8 col-md-offset-2">
                        				<div class="col-md-12">
                        					<div class="form-group">
                        						<select name="data" class="form-control">
                        							<option value="">Select Data Manager</option>
                        							<option value="student">Student</option>
                        							<option value="employee">Employee</option>
                                                    
                        						</select>
                        					</div>
                        					<div class="form-group">
                        						<input type="file" name="file" class="form-control">
                        					</div>
                        					<div class="form-group text-right">
                        						<button type="submit" class="btn btn-info">Add Data Manager</button>
                        					</div>
                        				</div>
                        			</div>
                        		</div>
                        		<div class="col-md-6">
                        			<div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Sample Files For Data Upload Manager</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{url('data-manager/student.xlsx')}}" class="btn btn-info">Student Sample File</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{-- <a href="{{url('data-manager/emp.xlsx')}}" class="btn btn-info">Employee Sample File</a>
                                                        --}}
                                                        <a href="{{url('data-manager/sample_employee.xlsx')}}" class="btn btn-info">Employee Sample File</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        			</div>
                        		</div>
                        	</div>
                            <div class="row">
                                <div class="col-md-offset-6 col-md-6">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center"><b>Terms and conditions</b></hz>
                                            </div>
                                        <div class="panel-body">
                                            <h5 class="text-danger"><b>Student excel sheet</b></h5><br/>
                                            <div class="row">
                                                <p>1. All red coloured columns are mandatory fields</p>
                                                <p>2. you can get all column id number from export manager</p>
                                                <p>3. registration number must be unique on sessionwise</p>
                                                <p>4. contact number must be unique on sectionwise</p>
                                                <p>5. roll number must be unique on sectionwise</p>
                                            </div>
                                            <h5 class="text-danger"><b>Employee excel sheet</b></h5><br/>
                                            <div class="row">
                                                <p>1. you can get staff type id from export manager </p>
                                                <p>2. mobile number (or) email_id must be unique </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection