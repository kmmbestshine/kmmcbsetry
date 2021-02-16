@extends('teacher.layouts.default')
@section('title', 'View Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('teach.dashboard')}}">Home</a></li>                    
    <li class="active">View Attendance</li>
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
                @if(count($attendances)>0 and $attendances)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Attendance</strong></h3>
                            <div class="text-right">
                                <a href="{{route('teach.attendance')}}" class="btn btn-info btn-rounded">Add Attendance</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-borderd">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Name</th>
                                        <th>Roll No</th>
                                        <th>Attendance</th>
                                        <th>Date</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attendances as $key => $attendance)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $attendance->name }}</td>
                                            <td>{{ $attendance->roll_no }}</td>
                                            <td>{{ $attendance->attendance }}</td>
                                            <td>{{ $attendance->date }}</td>
                                            <td>{{ $attendance->remarks }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                    </div>
                @else
                    <h2><center>No Data Found!!!</center></h2>
                @endif
            </div>
        </div>
@endsection