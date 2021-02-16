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
                <form class="form-horizontal" role="form" method="get">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Students</strong></h3>
                            <div class="text-right">
                                <a href="{{route('master.student')}}" class="btn btn-info btn-rounded">New Admission</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{ route('upgrade_student') }}" class="btn btn-info btn-rounded">Upgrade Students</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form-control class" name="class">
                                        <option value="">Select Class</option>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->class }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 section">
                                    <select class="form-control sel-section" name="section" disabled>
                                        <option value="">Select Section</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info btn-block">Get Students</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                @if($students)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @if($classData and $sectionData)
                                <h3 class="panel-title">View Students of Class <strong>{{ $classData->class }}</strong> of Section <strong>{{ $sectionData->section }}</strong></h3>
                            @else
                                <h3 class="panel-title">View Students</h3>
                            @endif

                            <div class="text-right">
                                    <a href="{{route('reportDownload')}}" class="btn btn-info btn-rounded">Export</a>
                                </div>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Registration No</th>
                                        <th>Username</th>
                                        <th>stu password</th>
                                        <th>Parent Username</th>
                                        <th>Parent password</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
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
                                            <td>{{ $student->registration_no }}</td>
                                            <td><label class="label label-success" style="font-size:12px">{{ $student->username }}</label></td>
                                            <td><label class="label label-danger" style="font-size:12px">{{ $student->hint_password }}</label></td>
                                            <td><label class="label label-info" style="font-size:12px">{{ $student->parent_username }}</label></td>
                                            <td><label class="label label-danger" style="font-size:12px">{{ $student->parent_hint_password }}</label></td>
                                            <td>
                                                <a href="{{route('view.student', $student->id)}}" class="btn btn-primary">View</a>
                                            </td>
                                            <td>
                                                <a href="{{route('edit.student', $student->id)}}" class="btn btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.student', $student->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
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