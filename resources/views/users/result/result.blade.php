@extends('users.layouts.default')
@section('title', 'Result')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Result</li>
</ul>
@endsection
@section('contant')
        @if(\Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('success') !!} </strong> 
                </div>
            </div>
        @endif
         @if(\Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('error') !!} </strong> 
                </div>
            </div>
        @endif
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
                <form class="form-horizontal" role="form" method="post" action="{{route('result.cred')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Delete Marks</strong></h3>
                            <div class="text-right">
                                 <a href="{{route('addStudentsMark')}}" class="btn btn-info btn-rounded">Add Marks</a>
                              <!--  <a href="{{route('addStudentsMark')}}" class="btn btn-info btn-rounded">Daily Add Marks</a>-->
                                &nbsp;&nbsp;&nbsp;
                               
                                <a href="{{route('view.result')}}" class="btn btn-info btn-rounded">View Matric Result</a>
                              <!--  <a href="{{route('view.hrsecresult')}}" class="btn btn-info btn-rounded">View Hr Sec Result</a>
                                <a href="{{route('view.fasaresult')}}" class="btn btn-info btn-rounded">View FA+SA Result</a> -->
                            
                        <br>
                        <br>
                        <div class="row">
                               <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Exam Type</label>
                                            <div class="col-md-9">
                                                <select class="form-control analystExam" name="exam_type">
                                                    <option value="">Select Exam Type</option>
                                                   
                                                    @foreach($examtype as $type)
                                                        <option value="{{ $type->id }}">{{ $type->exam_type }}</option>
                                                    @endforeach
                                                </select>
                                                @foreach($errors->get('exam_type') as $subjecterror)
                                                    <div class="alert alert-danger my-alert" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button> {{ $subjecterror }}
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control workclass" name="class">
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
                            <br>
                            <br>
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Section</label>
                                        <div class="col-md-9 worksection">
                                            <select class="form-control homesection" name="section" disabled>
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Subject</label>
                                        <div class="col-md-9 worksubject">
                                            <select class="form-control subject" name="subject" disabled>
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
                            <br>
                        <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-block"  >Get Data</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection