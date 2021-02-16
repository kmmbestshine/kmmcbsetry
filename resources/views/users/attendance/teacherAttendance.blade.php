@extends('users.layouts.default')
@section('title', 'Teacher Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li><a href="">Attendance</a></li>
    <li class="active">Employee</li>
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
<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('user.postAttendanceTeacher')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Employee Attendance - <strong>{{date('d-m-Y')}}</strong> </h3>
                            <div class="text-right">
                                <a href="{{route('view.attendance')}}" class="btn btn-info btn-rounded">View Attendance</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-borderd">
                            	<thead>
                            		<tr>
                            			<th>Employee Name</th>
                            			<th>Mobile</th>
                            			<th>Attendance</th>
                            			<th>In Time</th>
                            			<th>Out Time</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            	@foreach($attendance as $att)
                            		<tr>
                            			<td>{{$att->name}}<input type="hidden" name="employee_id[]" value="{{$att->id}}"></td>
                            			<td>{{$att->mobile}}</td>
                            			<td><label for="p"><input type="radio" id="p" {{$att->attendance =="P"?"checked":""}} name="attendance{{$att->id}}" value="P"> P</label>&nbsp;
                            				<label for="a"><input type="radio" id="a" {{$att->attendance =="A"?"checked":""}} name="attendance{{$att->id}}" value="A"> A</label>&nbsp;
                            				<label for="l"><input type="radio" id="l" {{$att->attendance =="L"?"checked":""}} name="attendance{{$att->id}}" value="L"> L</label>
                            			</td>
                            			<td><input type="time" class="form-control" value="{{$att->in}}" name="in{{$att->id}}"></td>
                            			<td><input type="time" class="form-control" value="{{$att->out}}" name="out{{$att->id}}"></td>
                            		</tr>
                            		@endforeach
                            	</tbody>
    						</table>
    						<button class="btn btn-info btn-lg pull-right" type="submit">Submit
					            <span class="fa fa-floppy-o fa-right"></span>
					        </button>
    					</div>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
@endsection