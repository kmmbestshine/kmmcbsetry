@extends('users.layouts.default')
@section('title', 'Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Attendance</li>
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
 <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Attendance Report</h2>
        </div>

        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                @if(in_array('ATTENDANCE', $userplans))
                                    <a href="{{route('user.report')}}" class="btn btn-info btn-rounded">Attendance</a>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                @if(in_array('LIBRARY', $userplans))
                                    <a href="{{route('libraryReport')}}" class="btn btn-info btn-rounded">Library</a>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                @if(in_array('STUDENT', $userplans))
                                    <a href="{{route('studentsReport')}}" class="btn btn-info btn-rounded">Students</a>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                @if(in_array('STUDENT', $userplans))
                                    <a href="{{route('analystReport')}}" class="btn btn-info btn-rounded">Students Analyst</a>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                @if(in_array('EMPLOYEE', $userplans))
                                    <a href="{{route('teacherReport')}}" class="btn btn-info btn-rounded">Teachers Analyst</a>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                @if(in_array('FEES', $userplans))
                                    <a href="{{route('feeCollectionReport')}}" class="btn btn-info btn-rounded">Fee Collection</a>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                                <!-- <a href="" class="btn btn-warning btn-rounded">Fee Amount</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-danger btn-rounded">Transport Fee</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-default btn-rounded">Other Fee</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-primary btn-rounded">Print Receipt</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-info btn-rounded">Pre Pay Slip</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Single Student</h3>
                                <!-- <div class="text-right">
                                    <a href="{{route('list.structure')}}" class="btn btn-info btn-rounded">View</a>
                                </div>  -->
                            </div>
                            <div class="panel-body">
                            	<form class="form-horizontal" action="" method="get">
                            		<div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Registration No.</label>
                                            <div class="col-md-9">
                                            <input type="hidden" name="type" value="singleStudent">
                                            <input type="text" name='regno' class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin:10px 0px">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">From Date</label>
                                            <div class="col-md-9">
                                            <input type="date" name='from' class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">To Date</label>
                                            <div class="col-md-9">
                                            <input type="date" name='to' class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <button style="margin-top:20px" class="pull-right btn btn-info">Create Report</button>
                            	</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Class According</h3>
                                <!-- <div class="text-right">
                                    <a href="{{route('list.structure')}}" class="btn btn-info btn-rounded">View</a>
                                </div>  -->
                            </div>
                            <div class="panel-body">
                            		<form class="form-horizontal" method="get" action="">
                            		<div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Class</label>
                                            <div class="col-md-9">
                                            <input type="hidden" name="type" value="classAccording">
                                            	<select class="form-control reportAttClass" name="class">
                                            		<option>Choose Class</option>
                                            		@if($classes)
                                            		@foreach($classes as $class)
                                            			<option value="{{$class->id}}">{{$class->class}}</option>
                                            		@endforeach
                                            		@endif
                                            	</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top:10px ">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Section</label>
                                            <div class="col-md-9 mainsection">
                                            	<select class="form-control">
                                            		<option>Choose Section</option>
                                            	</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin:10px 0px">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">From Date</label>
                                            <div class="col-md-9">
                                            <input type="date" name='from' class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">To Date</label>
                                            <div class="col-md-9">
                                            <input type="date" name='to' class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <button style="margin-top:20px" class="pull-right btn btn-info">Create Report</button>
                            	</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($type == 'singleStudent')
            	 @if($am || $pm)
             <!--<div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Report</h3>
                                <div class="text-right">
                                    <a href="{{route('download')}}" class="btn btn-info btn-rounded">Export</a>
                                </div> 
                            </div>

                            <div class="panel-body">
                            	<table class="table">
							    <thead>
							        <tr>
							            <th>Student Name</th>
							            <th>Teacher Name</th>
							            <th>Date</th>
							            <th>Attendance</th>
							            <th>Remarks</th>
							        </tr>
							    </thead>
							    <tbody>		
                               		   
							        @foreach($attendances as $att)
							            <tr>
							                <td>{{ $att->student_name }}</td>
							                <td>{{ $att->teacher_name }}</td>
							                <td>{{ $att->date }}</td>
							                <td>{{ $att->attendance }}</td>
							                <td>{{ $att->remarks }}</td>
							            </tr>
							        @endforeach
							       <tr>
                                        <th colspan="2"></th>                     
                                        <th>Present - {{$totalPresent}}</th>
                                        <th>Leave - {{$totalLeave}}</th>
                                        <th>Absent - {{$totalAbsent}}</th>
                                   </tr>
							    </tbody>
							</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>phase 2 by siva-->
             <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Report</h3>
                                <div class="text-right">
                                    <a href="{{route('download')}}" class="btn btn-info btn-rounded">Export</a>
                                </div> 
                            </div>

                            <div class="panel-body">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Am</th>
                                        <th>Pm</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach($attendance_date as $date)
                                        @foreach($students as $key=>$value)
                                            <tr>
                                                <td>{{ $value->name }}</td>
                                                <td>{{$am[$date][$value->id]}}</td>
                                                <td>{{$pm[$date][$value->id]}}</td>
                                                <td>{{$date}}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                   <tr>
                                        <th colspan="1"></th>
                                        <th>Am Present - {{$am_totalPresent}}</th>
                                        <th>Am Leave - {{$am_totalLeave}}</th>
                                        <th>Am Absent - {{$am_totalAbsent}}</th>
                                   </tr>
                                   <tr>
                                        <th colspan="1"></th>
                                        <th>Pm Present - {{$pm_totalPresent}}</th>
                                        <th>Pm Leave - {{$pm_totalLeave}}</th>
                                        <th>Pm Absent - {{$pm_totalAbsent}}</th>
                                   </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @endif
             @else
             @if($am || $pm)
             <!--<div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Report</h3>
                                <div class="text-right">
                                    <a href="{{route('download')}}" class="btn btn-info btn-rounded">Export</a>
                                </div> 
                            </div>

                            <div class="panel-body">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Teacher Name</th>
                                        <th>Date</th>
                                        <th>Attendance</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>                
                                    @foreach($attendances as $att)
                                        <tr>
                                            <td>{{ $att->student_name }}</td>
                                            <td>{{ $att->teacher_name }}</td>
                                            <td>{{ $att->date }}</td>
                                            <td>{{ $att->attendance }}</td>
                                            <td>{{ $att->remarks }}</td>
                                        </tr>
                                    @endforeach
                                   <tr>
                                        <th colspan="2"></th>                     
                                        <th>Present - {{$totalPresent}}</th>
                                        <th>Leave - {{$totalLeave}}</th>
                                        <th>Absent - {{$totalAbsent}}</th>
                                   </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> phase 2 by siva-->
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Report</h3>
                                <div class="text-right">
                                    <a href="{{route('download')}}" class="btn btn-info btn-rounded">Export</a>
                                </div> 
                            </div>

                            <div class="panel-body">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Am</th>
                                        <th>Pm</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach($attendance_date as $date)
                                        @foreach($students as $key=>$value)
                                            <tr>
                                                <td>{{ $value->name }}</td>
                                                <td>{{$am[$date][$value->id]}}</td>
                                                <td>{{$pm[$date][$value->id]}}</td>
                                                <td>{{$date}}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                   <tr>
                                        <th colspan="1"></th>
                                        <th>Am Present - {{$am_totalPresent}}</th>
                                        <th>Am Leave - {{$am_totalLeave}}</th>
                                        <th>Am Absent - {{$am_totalAbsent}}</th>
                                   </tr>
                                   <tr>
                                       <th colspan="1"></th>
                                        <th>Pm Present - {{$pm_totalPresent}}</th>
                                        <th>Pm Leave - {{$pm_totalLeave}}</th>
                                        <th>Pm Absent - {{$pm_totalAbsent}}</th>
                                   </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="text-center">No record Found</div>
            @endif
            @endif
        </div>
@endsection