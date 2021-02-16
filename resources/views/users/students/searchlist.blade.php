@extends('users.layouts.default')
@section('title', 'View Students')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Students</li>
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
                @if($students)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @if($students)
                               
                                <h3 class="panel-title">View Students</h3>
                            @endif

                           {{--<div class="text-right">
                                    <a href="{{route('reportDownload')}}" class="btn btn-info btn-rounded">Export</a>
                                </div>--}} 
                               
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Registration No</th>
                                        <th>Roll No</th>
                                      <th>Username</th>
                                        <th>stu password</th>
                                        <th>Parent Username</th>
                                        <th>Parent password</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $key => $student)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                @if($student->avatar!='')
                                                <img src="{{ url($student->avatar) }}" class="img-thumbnail" width="90px" height="90px">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->class }}</td>
                                            <td>{{ $student->section }}</td>
                                            <td>{{ $student->registration_no }}</td>
                                            <td>{{ $student->roll_no }}</td>
                                            <td><label class="label label-success" style="font-size:12px">{{ $student->username }}</label></td>
                                            <td><label class="label label-danger" style="font-size:12px">{{ $student->hint_password }}</label></td>
                                            <td><label class="label label-info" style="font-size:12px">{{ $student->parent_username }}</label></td>
                                            <td><label class="label label-danger" style="font-size:12px">{{ $student->parent_hint_password }}</label></td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <center><h2>No Students</h2></center>
                @endif
            </div>
        </div>
    </div>
@endsection