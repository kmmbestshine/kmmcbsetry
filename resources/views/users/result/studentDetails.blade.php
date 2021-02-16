@extends('users.layouts.default')
@section('title', 'Add Marks')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Add Marks</li>
</ul>
@endsection
@section('contant')
    <!--  Error Message  -->
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
                   {{-- {!! csrf_field() !!}--}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <strong>Get Class And Section</strong></h3>
                        <div class="text-right">
                            <a href="{{route('user.result')}}" class="btn btn-info btn-rounded">Add Result</a>
                             &nbsp;&nbsp;&nbsp;
                                <a href="{{route('addStudentsMark')}}" class="btn btn-info btn-rounded">Refresh</a>
                        </div>
                    </div>

                    <form class="form-horizontal" action="{{ route('getStudentMarkDetails') }}" method="get" >
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Class</label>
                                    <div class="col-md-9 ">
                                        <select class="form-control markClass" name="class" >
                                            <option value="">Select Class</option>
                                            @foreach($classes as $class)
                                                <option value="{{ $class->id }}">{{ $class->class }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->get('class'))
                                        @foreach($errors->get('class') as $clserror)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $clserror }}
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Section</label>
                                    <div class="col-md-9 student_section">
                                        <select class="form-control mark_section" name="section" disabled>
                                            <option value="">Select Section</option>
                                        </select>
                                        @if($errors->get('section'))
                                        @foreach($errors->get('section') as $sectionerr)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $sectionerr }}
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Exam Type</label>
                                    <div class="col-md-9 get_exam_type">
                                        <select name="exam" class="form-control examtype" disabled >
                                            <option value="">Select Exam</option>
                                            {{--@if($exam_type)
                                                @foreach($exam_type as $examtype)
                                                    <option value="{{ $examtype->id }}">{{ $examtype->exam_type }}</option>
                                                @endforeach
                                            @endif--}}
                                        </select>
                                        @if($errors->get('exam'))
                                        @foreach($errors->get('exam') as $examerror)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $examerror }}
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Teacher</label>
                                    <div class="col-md-9 teacher_result">
                                        <select class="form-control mark_teacher" name="teacher" disabled>
                                            <option value="">Select Teacher</option>
                                            {{--@if($teachers)
                                                @foreach($teachers as $teacher)
                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                @endforeach
                                            @endif--}}
                                        </select>
                                        @if($errors->get('teacher'))
                                        @foreach($errors->get('teacher') as $teachers)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $teachers }}
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Subject</label>
                                    <div class="col-md-9 get_subject">
                                        <select name="subject" class="form-control subject" disabled>
                                            <option value="">Select Subject</option>
                                        </select>
                                        @if($errors->get('subject'))
                                        @foreach($errors->get('subject') as $subjecterror)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $subjecterror }}
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Exam Date</label>
                                    <div class="col-md-9 ">
                                        <input type="date" name="exam_date" class="form-control">
                                        @if($errors->get('exam_date'))
                                            @foreach($errors->get('exam_date') as $exam_date)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $exam_date }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Session</label>
                                    <div class="col-md-9">
                                        <select name="atd_session" class="form-control" >
                                            <option value="">Select Session</option>
                                            <option value="am">AM</option>
                                            <option value="pm">PM</option>
                                        </select>
                                        @if($errors->get('atd_session'))
                                        @foreach($errors->get('atd_session') as $atd_sessionerror)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $atd_sessionerror }}
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <!-- <label class="col-md-3 control-label">Select Mark Category</label>
                                    <div class="col-md-9 ">
                                        <select class="form-control " name="markcategry" >
                                            <option value="">Select Mark Category</option>
                                            <option value="Matriculation">Matriculation</option>
                                            <option value="Higher Secondary">Higher Secondary</option>
                                            <option value="FA + SA Marks">FA + SA Marks</option>
                                        </select>
                                    </div>-->
                                    <input  name="markcategry" type="hidden" value="Matriculation"   >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <center>
                                <button type="submit" style="margin-top:20px" class="center btn btn-info">
                                   Get Student Details
                                </button>
                            </center>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection