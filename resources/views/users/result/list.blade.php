@extends('users.layouts.default')
@section('title', 'View Result')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Result</li>
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
                            <h3 class="panel-title"><strong>Get Class And Section</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.result')}}" class="btn btn-info btn-rounded">Add Result</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control class" name="class" required>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12 section">
                                            <select class="form-control sel-section" name="section" disabled>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="exam" class="form-control" required>
                                                <option value="">Select Exam</option>
                                                @if($examtypes)
                                                @foreach($examtypes as $examtype)
                                                    <option value="{{ $examtype->id }}">{{ $examtype->exam_type }}</option>
                                                @endforeach
                                                @endif
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-block">Get Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if( $students)
                    @if($students!='intializing')
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Result of Class {{ $classData->class}} of Section {{ $sectionData->section }} of {{ $examData->exam_type }} Exam</strong></h3>
                            <div class="text-right">
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-borderd datatable">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Roll No</th>
                                        <th>Date</th>
                                        <th>Marks</th>
                                       <!--  <th>Result</th> -->
                                       <!--  <th>Remarks</th> -->
                                       <!--  <th>Download</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $key => $result)
                                    
                                        <tr>
                                            <td>{{ $result->name }}</td>
                                            <td>{{ $result->roll_no }}</td>
                                            <td>{{ $result->date }}</td>
                                            <td><table class="table table-borderd table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Subject</th>
                                                            <th>Max</th>
                                                            <th>Pass</th>
                                                            <th>Ob.Marks</th>
                                                            <th>Grade</th>
                                                            <th>Result</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($result->result)
                                                            @foreach($result->result as $rel)

                                                                <tr>
                                                                    <td>{{ $rel->subject }}</td>
                                                                    <td>{{ $rel->max_marks }}</td>
                                                                    <td>{{ $rel->pass_marks }}</td>
                                                                    <td>{{ $rel->obtained_marks }}</td>
                                                                    <td>{{ $rel->grade }}</td>
                                                                    <td>{{ $rel->result }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>{{$result->max_total}}</td>
                                                            <td>{{$result->pass_totol}}</td>
                                                            <td>{{$result->totalObtain}}</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <!-- <td>{{$result->result[0]->result}}</td>
                                            <td>{{$result->result_remarks}}</td> -->
                                            
                                            <td><a href="{{route('resultDownload', [$class_id, $section, $exam, $result->id ])}}" class="btn btn-primary"><i class="fa fa-print"></i> Download</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table> 
                        </div>

                    </div>

                    @else
                        <h2 class="text-success"><center>Select Class, Section and Exam Type</center></h2>  
                    @endif
                @else
                    <h2><center>No Data Found!!!</center></h2>
                @endif
            </div>
        </div>
    </div>
@endsection