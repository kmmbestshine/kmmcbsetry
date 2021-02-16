@extends('users.layouts.default')
@section('title', 'View  Time Table')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Time Table</li>
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
                        <h3 class="panel-title"><strong>View Time Table</strong></h3>
                        <div class="text-right">
                             <a href="{{route('user.add_exam_timetable')}}" class="btn btn-info btn-rounded">
                                Add Exam TImeTable</a>
                            <a href="{{route('user.timeTable')}}" class="btn btn-info btn-rounded">Add TIme Table</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(count($timetables)>0)
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>subject</th>
                                        <th>Teacher</th>
                                        <th>Day</th>
                                        <th>Period</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($timetables as $key => $timetable)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $timetable->class }}</td>
                                            <td>{{ $timetable->section }}</td>
                                            <td>{{ $timetable->subject }}</td>
                                            <td>{{ $timetable->name }}</td>
                                            <td>{{ $timetable->day }}</td>
                                            <td>{{ $timetable->period }}</td>
                                            <td>{{ date('h:i:s A', strtotime($timetable->start_time)) }}</td>
                                            <td>
                                            {{ date('h:i:s A', strtotime($timetable->end_time)) }}
                                            </td>
                                            <td>
                                                <a href="{{route('editTimetableDetail', $timetable->id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>Edit
                                                </a>
                                            </td>
                                            <td><a href="{{route('deleteTimetable', $timetable->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
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