@extends('users.layouts.default')
@section('title', 'Add Exam TimeTable')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Exam TimeTable</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('user.post_exam_timetable')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Exam TimeTable</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.examTimeTable')}}" class="btn btn-info btn-rounded">View Exam TImeTable</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Exam Type</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="exam_type">
                                                <option value="">Select Exam Type</option>
												@foreach($exam_type as $type)
                                                    <option value="{{ $type->id }}">{{ $type->exam_type }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('exam_type') as $examerror)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $examerror }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control examclass" name="class">
                                                <option value="">Select Class</option>
												@foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class }}</option>
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
                            </div>
                            <br/>
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Section</label>
                                        <div class="col-md-9 examsection">
                                            <select class="form-control homeexamsection" name="section" disabled>
                                                <option value="">Select Section</option>
                                            </select>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Subject</label>
                                        <div class="col-md-9 examsubject">
                                            <select class="form-control headexamsubject" name="subject" disabled>
                                                <option value="">Select Subject</option>
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
                               
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Choose Employee</label>
                                        <div class="col-md-9">
                                           <select name="teacher" class="form-control">
                                               <option value="">Select Employee</option>
                                               @foreach($teachers as $teach)
                                               <option value="{{$teach->id}}">{{$teach->name}}</option>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start Time</label>
                                        <div class="col-md-9">
                                           <input type="time" name="start_time" class="form-control">
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
                                           <input type="time" name="end_time" class="form-control">
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
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9">
                                                <input type="date" name="exam_date" class="form-control">
												@foreach($errors->get('exam_date') as $exam_date)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $exam_date }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
								<br><br><br>
                               
                            </div>
							<div class="row">
								<div class="col-md-7 pull-right">
                                    <button type="submit" class="btn btn-info">Add Exam TimeTable</button>
                                </div>
							</div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection