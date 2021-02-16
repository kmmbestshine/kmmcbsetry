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
    
        <div class="row">
            <div class="col-md-12">
                @if($students)
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
                                                            <th>Theory Marks</th>
                                                            <th>Practical Marks</th>
                                                            <th>Ob.Marks</th>
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
                                                                    <td>{{ $rel->theory_marks }}</td>
                                                                    <td>{{ $rel->practical_marks }}</td>
                                                                    <td>{{ $rel->obtained_marks }}</td>
                                                                    <td>{{ $rel->result }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>{{$result->max_total}}</td>
                                                            <td>{{$result->pass_totol}}</td>
                                                            <td>{{$result->totalThery}}</td>
                                                            <td>{{$result->totalPractical}}</td>
                                                            <td>{{$result->totalObtain}}</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <!-- <td>{{$result->result[0]->result}}</td>
                                            <td>{{$result->result_remarks}}</td> -->
                                            
                                            <td><a href="{{route('hrsecresultDownload', [$class_id, $section,$exam, $result->id ])}}" class="btn btn-primary"><i class="fa fa-print"></i> Download</a></td>
                                           
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