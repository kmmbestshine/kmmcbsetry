@extends('users.layouts.default')
@section('title', 'Add Result')
@section('cram')
<ul class="breadcrumb">
<li><a href="{{route('user.dashboard')}}">Home</a></li>                    
<li class="active">Result</li>
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
            <form class="form-horizontal" role="form" method="post" action="{{route('post.result')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Add Result of Class {{ $getclass->class}} of Section {{ $getsection->section }}</strong></h3>
                        <div class="text-right">
                            <a href="{{route('user.result')}}" class="btn btn-warning btn-rounded">Go Back</a>
                            <a href="{{route('view.result')}}" class="btn btn-info btn-rounded">View Result</a>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Roll No</th>
                                    <th>Subjects</th>
                                    <th>Result</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <input type="hidden" name="student_id[]" value="{{ $student->id }}">
                                        <td>{{ $student->name  }}</td>
                                        <td>{{ $student->roll_no }}</td>
                                        <td>
                                            <div class="row">
                                                @foreach($subjects as $key=> $subject)
                                                    <div class="col-md-4">
                                                        <input type="text" name="student_marks[{{$student->id}}][{{$subject->id}}]" class="form-control" placeholder="{{ $subject->subject }}" value="{{ $subject->subject }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="result[{{$student->id}}]" placeholder="Result" value="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="remarks[{{$student->id}}]" placeholder="Remarks" value="">
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($errors->get('attendance') as $attendance)
                                    <tr>
                                        <div class="alert alert-danger my-alert" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button> {{ $attendance }}
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden" name="class" value="{{ $getclass->id }}">
                                        <input type="hidden" name="section" value="{{ $getsection->id }}">
                                        <select class="form-control" name="exam_type_id">
                                            <option value="">Select Exam Type</option>
                                            @foreach($exams as $exam)
                                                <option value="{{ $exam->id }}" {{ $exam->id=="Input::old('exam_type_id')" ? "selected" : "" }}>{{ $exam->exam_type }}</option>
                                            @endforeach
                                        </select>
                                        @foreach($errors->get('exam_type_id') as $exam_type_id)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $exam_type_id }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" name="month">
                                            <option value="">Select Month</option>
                                            <option value="january">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="september">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                        @foreach($errors->get('month') as $month)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $month }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="date" name="date" class="form-control" value="{{ Input::old('date') }}">
                                        @foreach($errors->get('date') as $date)
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
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="number" name="max_marks" class="form-control" placeholder="Enter Maximum Marks" value="{{ Input::old('max_marks') }}">
                                        @foreach($errors->get('max_marks') as $max_marks)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $max_marks }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="number" name="pass_marks" class="form-control" placeholder="Enter Pass Marks" value="{{ Input::old('pass_marks') }}">
                                        @foreach($errors->get('pass_marks') as $pass_marks)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $pass_marks }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-info btn-block">Submit Result</button>
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