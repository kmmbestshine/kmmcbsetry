@extends('users.layouts.default')
@section('title', 'Edit Employee Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Employee</li>
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
                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{route('updateTeacherAttendance')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">

                                <strong>
                                    Edit Employee Attendance
                                </strong>
                            </h3>
                            <div class="text-right">
                                <a href="{{route('getTeacherAttendance')}}" class="btn btn-info btn-rounded">Add Employee Attendance</a>
                                &nbsp;&nbsp;&nbsp;
                                {{--<a href="{{route('viewTeacherAttendanceReport')}}" class="btn btn-info btn-rounded">Employee Attendance Report</a>
                            --}}<a href="{{route('viewMonthlyReport')}}" class="btn btn-info btn-rounded">View Employee Attendance Report</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Staff Type</label>
                                        <div class="col-md-9">
                                            <input class="form-control edit_staff_type"
                                                    value="{{ $getAllTeacherAttendance->staff_type }}" name="type" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9 attendance_teacher_name">
                                            <input class="form-control staff_name" value="{{ $getAllTeacherAttendance->name }}" name="name" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9 ">
                                            <input type="date" class="form-control " id="present_date" name="present_date"
                                                   value="{{date('Y',strtotime($getAllTeacherAttendance->date))}}-{{date('m',strtotime($getAllTeacherAttendance->date))}}-{{date('d',strtotime($getAllTeacherAttendance->date))}}">
                                            @foreach($errors->get('present_date') as $date)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $date }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Session Type</label>
                                        <div class="col-md-9 append_session_type">
                                            <input class="form-control edit_session_type" name="session"
                                                   value="{{ strtoupper($getAllTeacherAttendance->session_type) }}">
                                            @foreach($errors->get('session') as $session)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $session }}
                                                </div>
                                            @endforeach
                                            <div class="row" id="getExistAttendance">
                                                <div class="col-md-12"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Attendance</label>
                                        <div class="col-md-9 ">
                                            <label class="col-md-3 control-label"> P &nbsp;&nbsp;
                                                <input type="radio" class="edit_attendance_radio" id="attendance_p"
                                                       name="attendance" value="P" @if($getAllTeacherAttendance->attendance == 'P') checked @endif>
                                            </label>
                                            <label class="col-md-3 control-label"> A&nbsp;&nbsp;
                                                <input type="radio" class="edit_attendance_radio" id="attendance_a" name="attendance" value="A"
                                                       @if($getAllTeacherAttendance->attendance == 'A') checked @endif>
                                            </label>
                                            <label class="col-md-3 control-label">L&nbsp;&nbsp;
                                                <input type="radio" class="edit_attendance_radio" id="attendance_l" name="attendance" value="L"
                                                       @if($getAllTeacherAttendance->attendance == 'L') checked @endif>
                                            </label>
                                            @foreach($errors->get('attendance') as $attendance)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $attendance }}
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">In Time</label>
                                        <div class="col-md-9">
                                            <input type="time" class="form-control"  id="in_time" name="in_time"
                                                   value="{{ $getAllTeacherAttendance->in }}"  @if($getAllTeacherAttendance->attendance != 'P') disabled @endif>
                                            @foreach($errors->get('in_time') as $in_time)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $in_time }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Out Time</label>
                                        <div class="col-md-9">
                                            <input type="time" class="form-control"  id="out_time" name="out_time"
                                                   value="{{ $getAllTeacherAttendance->out }}" @if($getAllTeacherAttendance->attendance != 'P') disabled @endif>
                                            @foreach($errors->get('out_time') as $out_time)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $out_time}}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br/>
                            <div class="row">
                                <br>
                                <div class="col-md-7 pull-right">
                                    <input type="hidden" value="{{ $getAllTeacherAttendance->id }}" name="attendance_id">
                                    <button type="submit" class="btn btn-info">
                                        <span class="fa fa-pencil fa-left"></span>
                                        Edit Attendance
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                   {{-- <a href="{{route('getTeacherAttendance')}}" class="btn btn-info">
                                   --}} <a href="{{route('viewMonthlyReport')}}" class="btn btn-info">
                                        <span class="fa fa-undo fa-left"></span>  Go Back
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection