@extends('users.layouts.default')
@section('title', 'Students Analyst Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Students Analyst</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Students Analyst Report</h2>
</div>

<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="panel panel-default">
                    <div class="panel-heading text-right">
                        <a href="{{route('user.report')}}" class="btn btn-info btn-rounded">Attendance</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="{{route('libraryReport')}}" class="btn btn-info btn-rounded">Library</a>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{route('studentsReport')}}" class="btn btn-info btn-rounded">Students</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{-- updated 14-10-2017 by priya --}}
                        <a href="{{route('analystReport')}}" class="btn btn-info btn-rounded">Students Analyst</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       {{-- <a href="{{route('teacherReport')}}" class="btn btn-info btn-rounded">Teachers Analyst</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        --}}{{--end--}}
                        <a href="{{route('feeCollectionReport')}}" class="btn btn-info btn-rounded">Fee Collection</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!-- <a href="" class="btn btn-warning btn-rounded">Fee Amount</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-danger btn-rounded">Transport Fee</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-default btn-rounded">Other Fee</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-primary btn-rounded">Print Receipt</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-info btn-rounded">Pre Pay Slip</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Classwise Students Analyst Report Form</h3>
                                <!-- <div class="text-right">
                                    <a href="{{route('list.structure')}}" class="btn btn-info btn-rounded">View</a>
                                </div>  -->
                            </div>
                            <div class="panel-body">
                            	<form class="form-horizontal" method="get">
                                 <div class="row">
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Exam Type</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="exam_type">
                                                <option value="">Select Exam Type</option>
                                                <option value="0">All Exam Type</option>
												@foreach($exam_type as $type)
                                                    <option value="{{ $type->id }}">{{ $type->exam_type }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control analystclass" name="class">
                                                <option value="">Select Class</option>
												@foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                            
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
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>   
                                

                             
                                <center><button style="margin-top:20px" class="center btn btn-info">
								Create Report</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

		@if(count($getStudentDetails)>0)
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!--<h3 class="panel-title">Report - {{$students['session']}}</h3>-->
                            <h3 class="panel-title">
								{{ $getStudentClass->class }} Class '{{ $getStudentSection->section }}' Section Analyst Report
							</h3>
                            <div class="text-right">
                                <a href="{{route('reportDownload')}}" class="btn btn-info btn-rounded">Export</a>
                            </div> 
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                           <table class="table">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                    <th>Student Name</th>
                                    <th>Registration No</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Exam Type</th>
                                    <th>No of Subjects</th>
                                    <th>Total Marks</th>
                                    <th>Total Pass Marks</th>
                                    <th>Scored Marks</th>
                                    <th>Percentage</th>
                                     @if($examType != 0)
                                    <th>Rank</th>
                                     @endif
                                    <th>Result</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach($getStudentDetails as $key => $student)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->registration_no }}</td>
                                        <td>{{ $student->class }}</td>
                                        <td>{{ $student->section }}</td>
                                        <td>{{ $student->exam_type }}</td>
                                       {{-- <td>{{ count($subjects) }}</td>--}}
                                        <td>{{ $student->total_subjects }}</td>
                                       {{-- <td>{{ count($subjects) * $student->max_marks }}</td>--}}
                                        <td>{{ $student->total_subjects * $student->max_marks }}</td>
                                       {{-- <td>{{ $student->total_max / count($subjects) }}</td>--}}
                                       {{-- <td>{{ $student->total_pass_mark }} </td>--}}
                                      {{--  <td>{{ $student->pass_marks * count($subjects) }} </td>--}}
                                        <td>{{ $student->pass_marks * $student->total_subjects }} </td>
                                        <td>{{ $student->scored_marks }} </td>
                                       {{-- <td>{{ $student->scored_marks / count($subjects) }}  % </td>--}}
                                       {{-- @if(is_float($student->scored_marks / $student->total_subjects ))
                                            abc
                                        @endif--}}

                                        <?php $demo = $student->scored_marks / $student->total_subjects; ?>
                                        @if(is_numeric($demo))
                                            <td>{{ $student->scored_marks / $student->total_subjects }}  % </td>
                                        @else

                                            <td>{{ number_format("$student->scored_marks / $student->total_subjects",2) }}  % </td>
                                        @endif
                                            {{--<td>{{ $student->grade }}</td>
                                         <td>{{ $student->result }}</td>--}}
                                        {{-- @if($examType != 0 )
                                         <td>{{ $key+1 }}</td>
                                         @endif--}}
                                        @if($examType != 0 )
                                            {{-- <td>{{ $key+1 }}</td>--}}
                                            <td>
                                                {{--@if($student->scored_marks > ($student->pass_marks * count($subjects)))--}}
                                                @if($student->scored_marks > ($student->pass_marks * $student->total_subjects))
                                                    {{ $key+1 }}
                                                @else
                                                    U
                                                @endif
                                            </td>
                                        @endif
                                        <td>
                                            {{--@if($student->scored_marks > $student->total_pass_mark)--}}
                                           {{-- @if($student->scored_marks > ($student->pass_marks * count($subjects)))--}}
                                            @if($student->scored_marks > ($student->pass_marks * $student->total_subjects))
                                                Pass
                                            @else
                                                Fail
                                            @endif

                                        </td>

                                    </tr>

                                @endforeach
								{{--{{ $getStudentDetails->links() }}--}}

										<!--<tr>
                                        <th colspan="4"></th>
                                        <th colspan="3"><center>Total</center></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
									</tr>-->
                             </tbody>
                         </table>
                              {{-- {!! $getStudentDetails->appends(Input::all())->render() !!}--}}
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     @else
        <center><h2>No Datas Found!!!</h2></center>
     @endif
    
 </div>
 @endsection