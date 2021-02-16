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

                                {{--<a href="{{route('export.employee')}}" class="btn btn-info btn-rounded">Export</a>
                            --}}
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="get">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-control" name="session">
                                            <option value="">Select Session</option>
                                            @foreach($sessions as $session)
                                                <option value="{{ $session->id }}">{{ $session->session }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-info btn-block">Get Employees</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        @if($sessionData )
                                            Employees
                                            @php
                                                $session_id = $sessionData->id;
                                            @endphp
                                            ( <strong> {{ $sessionData->session }}  </strong> )
                                        @else
                                            @php
                                                $session_id = $currentSessionId;
                                            @endphp
                                            All Employee List ( <strong> {{ $currentSession }}</strong> )
                                        @endif
                                    </h3>
                                    <div class="text-right">
                                        <a href="{{route('export.employee',$session_id)}}" class="btn btn-info btn-rounded">Export</a>
                                    </div>

                                </div>
                                <div class="panel-body">
                                    @if(count($employees)>0)
                                        <form method="get" action="{{route('delete_all_employee')}}">
                                            <table class="table @if($currentSession) datatable @endif">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Select All
                                                        <input type="checkbox"  id="select_all" value="check"
                                                               onchange=" return select_all_checkbox()">
                                                    </th>
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
                                                        <th>
                                                            <input type="hidden" name="time_table_id[]" value="{{ $employee->id }}">
                                                            <input type="checkbox" name="select[]" class="select_all_checkboc_class"
                                                                   id="select_all_{{$employee->id}}" value="{{ $employee->id }}"
                                                                   onchange="check_checkboc(this.id)" >
                                                        </th>
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
                                                @if($sessionData)
                                                    <tr>
                                                        <td colspan="12"  align="center">
                                                            <button type="submit" title="Delete All Employee" class="btn btn-danger" name="delete_all" value="ok">
                                                                Delete All
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                        </form>
                                    @else
                                        <center><h2>No Time Table Found!!!</h2></center>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       {{-- updated 4-5-2018 by priya--}}
       <script type="text/javascript">
           function select_all_checkbox()
           {
               if($('#select_all').prop("checked") == true)
               {
                   $('.select_all_checkboc_class').prop("checked", true);
               }
               else
               {
                   $('.select_all_checkboc_class').prop("checked", false);
               }

           }
           function check_checkboc(id)
           {
               var employee = id.split("_");
               var employee_id = employee[2];
               if($('#select_all_'+employee_id).prop("checked")== true)
               {
                   $('#select_all_'+employee_id).prop("checked", true);
               }
               else
               {
                   $('#select_all_'+employee_id).prop("checked", false);
               }
           }
       </script>
       {{--end--}}
    @endsection