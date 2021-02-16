@extends('users.layouts.default')
@section('title', 'Edit Time Table')
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
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                            <h3 class="panel-title">
                                <strong>Edit Time Table</strong>
                            </h3>
                            <div class="text-right">
                                <a href="{{route('user.timeTable')}}" class="btn btn-info btn-rounded">Add TimeTable</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{route('get.timeTable')}}" class="btn btn-info btn-rounded">View TIme Table</a>
                            </div>
                        </div>
                        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{ route('update_timetable_detail') }}" >
                            {!! csrf_field() !!}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control timeTableClass" name="class" disabled="">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}" @if( $class->id == $getTimeTableDetail->class_id)selected @endif>{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('class') as $clserror)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $clserror }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Section</label>
                                        <div class="col-md-9 edit_timeTable_section">
                                            <input class="form-control timeTableSection" name="section" value="{{ $getTimeTableDetail->section }}" disabled>
                                            @foreach($errors->get('section') as $sectionerr)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $sectionerr }}
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
                                        <label class="col-md-3 control-label">Select Subject</label>
                                        <div class="col-md-9 worksubject">
                                            {{--<input class="form-control subject" name="subject" value="{{ $getTimeTableDetail->subject }}" >
                                            --}}{{--
                                            <input value="{{ $getSubjectName->subject }}">--}}
                                            <select class="form-control timeTableSubject " name="subject">
                                                <option value="">Select Subject</option>
                                                @foreach($getSubjectName as $subjectName)
                                                    <option value="{{ $subjectName->id }}" @if($getTimeTableDetail->subject_id == $subjectName->id) SELECTED @endif>{{ $subjectName->subject }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('subject') as $subjecterr)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $subjecterr }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Choose Employee</label>
                                        <div class="col-md-9">
                                            <select name="teacher" class="form-control">
                                                <option value="">Select Employee</option>
                                                @foreach($teachers as $teach)
                                                    <option value="{{$teach->id}}" @if( $teach->id == $getTimeTableDetail->teacher_id)selected @endif>{{$teach->name}}</option>
                                                @endforeach

                                            </select>
                                            @foreach($errors->get('teacher') as $teacher)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $teacher }}
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
                                        <label class="col-md-3 control-label">Period</label>
                                        <div class="col-md-9">
                                            <input type="text" name="period" class="form-control" value="{{ $getTimeTableDetail->period }}" disabled>
                                            @foreach($errors->get('period') as $period)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $period }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start Time</label>
                                        <div class="col-md-9">
                                            <input type="time" name="start_time" class="form-control" value="{{ $getTimeTableDetail->start_time }}" disabled>
                                            @foreach($errors->get('start_time') as $start_time)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $start_time }}
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
                                        <label class="col-md-3 control-label">End Time</label>
                                        <div class="col-md-9">
                                            <input type="time" name="end_time" class="form-control" value="{{ $getTimeTableDetail->end_time }}" disabled>
                                            @foreach($errors->get('end_time') as $end_time)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $end_time }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Day</label>
                                        <div class="col-md-9">
                                            <select name="day" class="form-control" disabled>
                                                <option value="">Select Day</option>
                                                <option value="Monday" @if($getTimeTableDetail->day == 'Monday') selected @endif>Monday</option>
                                                <option value="Tuesday" @if($getTimeTableDetail->day == 'Tuesday') selected @endif>Tuesday</option>
                                                <option value="Wednesday" @if($getTimeTableDetail->day == 'Wednesday') selected @endif>Wednesday</option>
                                                <option value="Thursday" @if($getTimeTableDetail->day == 'Thursday') selected @endif>Thursday</option>
                                                <option value="Friday" @if($getTimeTableDetail->day == 'Friday') selected @endif>Friday</option>
                                                <option value="Saturday" @if($getTimeTableDetail->day == 'Saturday') selected @endif>Saturday</option>
                                            </select>
                                            @foreach($errors->get('day') as $day)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $day }}
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
                                    <input type="hidden" name="class_id" value="{{ $getTimeTableDetail->class_id }}">
                                    <input type="hidden" name="section_id" value="{{ $getTimeTableDetail->section_id }}">
                                    <input type="hidden" name="subject_id" value="{{ $getTimeTableDetail->subject_id }}">
                                    <input type="hidden" name="timeTable_id" value="{{ $getTimeTableDetail->id }}">
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-pencil-square-o fa-left" aria-hidden="true"></i>
                                        Update Time Table
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-info" href="{{route('get.timeTable')}}">
                                        <span class="fa fa-undo fa-left"></span>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection