@extends('teacher.layouts.default')
@section('title', 'Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('teach.dashboard')}}">Home</a></li>                    
    <li class="active">Add  Attendance</li>
</ul>
@endsection
@section('contant')
   	<div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> Attendance</h2>
    </div>
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
                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Students</center></h3>
                        <div class="text-right">
                            <a href="{{route('view.teach.attendance')}}" class="btn btn-info btn-rounded">View Attendance</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{route('post.teacher.attendance')}}">
                            {!! csrf_field() !!}
                        	<table class="table table-borderd">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Roll No</th>
                                        <th>Attendance</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                	    <tr>
                                		    <td>{{ $student->name  }}</td>
                                            <td>{{ $student->roll_no }}</td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="attendance[{{$student->id}}]" value="P" checked>P
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="attendance[{{$student->id}}]" value="L">L
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="attendance[{{$student->id}}]" value="A">A
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="remarks[{{$student->id}}]">
                                            </td>
                                	   </tr>
                                    @endforeach
                           		</tbody>
                           	</table>
                           	<div class="col-md-10">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date">
                                    @foreach($errors->get('date') as $date)
                                        <div class="alert alert-danger my-alert" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button> {{ $date }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="submit" class="btn btn-info btn-lg">Submit Attendance</button>
                            </div>
                        </from>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection