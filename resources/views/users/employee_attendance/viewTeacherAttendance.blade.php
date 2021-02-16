@extends('users.layouts.default')
@section('title', 'View Employee Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Employee</li>
</ul>
@endsection

@section('contant')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>
                                     View Employee Attendance
                                </strong>
                            </h3>
                            <div class="text-right">
                                <a href="{{route('getTeacherAttendance')}}" class="btn btn-info btn-rounded">Add Employee Attendance</a>
                                &nbsp;&nbsp;&nbsp;
                                {{--<a href="{{route('viewTeacherAttendanceReport')}}" class="btn btn-info btn-rounded">Employee Attendance Report</a>
                           --}}
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <tr>
                                            <th>Staff Type</th>
                                            <td>{{ $viewAllTeacherAttendance->staff_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Staff Name</th>
                                            <td>{{ $viewAllTeacherAttendance->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td>{{ date('d-m-Y',strtotime($viewAllTeacherAttendance->date ))}}</td>
                                        </tr>
                                        {{--<tr>
                                            <th>Session Type</th>
                                            <td>{{ ucwords($viewAllTeacherAttendance->session_type) }}</td>
                                        </tr>--}}
                                        <tr>
                                            <th>Attendance</th>
                                            <td>
                                                @if($viewAllTeacherAttendance->attendance == 'P')
                                                    Present
                                                @elseif($viewAllTeacherAttendance->attendance == 'L')
                                                    Leave
                                                @else
                                                    Absent
                                                @endif
                                            </td>
                                        </tr>
                                        @if($viewAllTeacherAttendance->attendance == 'P')
                                            <tr>
                                                <th>In Time</th>
                                                <td>{{ $viewAllTeacherAttendance->in }}</td>
                                            </tr>
                                            <tr>
                                                <th>Out Time</th>
                                                <td>{{ $viewAllTeacherAttendance->out }}</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                                <br/>
                            <div class="row">
                                <br>
                                <div class="col-md-7 pull-right">
                                   {{-- <a class="btn btn-primary" href="{{ route('getTeacherAttendance') }}">
                                   --}}
                                    <a class="btn btn-primary" href="{{ route('viewMonthlyReport') }}">
                                        <span class="fa fa-undo fa-left"></span>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection