@extends('users.layouts.default')
@section('title', 'View Exam TimeTable')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Exam TimeTable</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>View Exam TimeTable</strong></h3>
                        <div class="text-right">
                            <a href="{{route('user.add_exam_timetable')}}" class="btn btn-info btn-rounded">Add Exam TImeTable</a>
                            <a href="{{route('user.timeTable')}}" class="btn btn-info btn-rounded">Add TIme Table</a>
                        </div>
                    </div>
					 <div class="panel-body">
						<form class="form-horizontal" role="form" method="get">
						<div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-5">
                                    <select class="form-control" name="exam_type">
                                        <option value="">Select Exam Type</option>
                                        @foreach($getExamTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->exam_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="class">
                                        <option value="">Select Class</option>
                                        @foreach($classes as $clas)
                                            <option value="{{ $clas->id }}">{{ $clas->class }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
						
						<div class="col-md-8">
                            <button type="submit" class="btn btn-info btn-block">Get Exam TimeTable</button>
                        </div>
						</form>
					 </div>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
					@if($get_exam_type->exam_type)
                        <h3 class="panel-title"><strong>{{ ucwords(trans($get_exam_type->exam_type)) }} Exam TimeTable</strong></h3>
					@endif
					
                    </div>
                     <div class="panel-heading">
					@if($$get_class->class)
                        <h3 class="panel-title"><strong>{{ ucwords(trans($$get_class->class)) }} Exam TimeTable</strong></h3>
					@endif
					
                    </div>
					<div class="panel-body">
						@if(count($timetables)>0)
							<table class="table datatable">
								<thead>
									<tr>
										<th>#</th>
										<th>Exam Type</th>
										<th>Class</th>
										<th>Section</th>
										<th>subject</th>
										<th>Teacher</th>
										<th>Start Time</th>
										<th>End Time</th>
										<th>Exam Date</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach($timetables as $key => $timetable)
										<tr>
											<td>{{ $key+1 }}</td>
											<td>{{ ucwords($timetable->exam_type) }}</td>
											<td>{{ ucwords($timetable->class) }}</td>
											<td>{{ ucwords($timetable->section) }}</td>
											<td>{{ ucwords($timetable->subject) }}</td>
											<td>{{ ucwords($timetable->name) }}</td>
											<td>{{ date('h:i:s A', strtotime($timetable->start_time)) }}</td>
											<td>{{ date('h:i:s A', strtotime($timetable->end_time)) }}</td>
											<td>{{ $timetable->exam_date }}</td>
											<!--<td><a href="{{route('deleteTimetable', $timetable->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
											-->
										<td><a href="{{route('deleteExamTimetable', $timetable->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@else
							<center><h2>No Time Table Found!!!</h2></center>
						@endif
					</div>
				</div>
				  
			</div>
		</div>
    </div>
@endsection