@extends('users.layouts.default')
@section('title', 'Employee')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Employee List</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Employee List</h2>
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
                        <strong>Well done!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>All Emplyees</center></h3>
                            <div class="text-right">
                                <a href="{{route('insert.employee')}}" class="btn btn-info btn-rounded">Add</a>
                                <a href="{{route('export.employee')}}" class="btn btn-info btn-rounded">Export</a>
                            </div>                              
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Staff Type</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $key => $employee)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $employee->staff_type }}</td>
                                            <td>{{ $employee->class }}</td>
                                            <td>{{ $employee->section }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td><label class="label label-success" style="font-size:12px"> {{ $employee->username }}</label></td>
                                            <td><label class="label label-danger" style="font-size:12px">{{ $employee->hint_password }}</label></td>
                                            <td>{{ $employee->mobile }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>
                                        <img src="{{url($employee->avatar)}}" class="img-thumbnail" width="100px" height="100px">
                                    </td>
                                            <td>
                                                <a href="{{route('edit.employee', $employee->id)}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.employee', $employee->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection