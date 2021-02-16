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
                        @if(in_array('ATTENDANCE', $userplans))
                            <a href="{{route('user.report')}}" class="btn btn-info btn-rounded">Attendance</a>
                        @endif
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @if(in_array('LIBRARY', $userplans))
                            <a href="{{route('libraryReport')}}" class="btn btn-info btn-rounded">Library</a>
                        @endif
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        @if(in_array('STUDENT', $userplans))
                            <a href="{{route('studentsReport')}}" class="btn btn-info btn-rounded">Students</a>
                        @endif
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        @if(in_array('STUDENT', $userplans))
                            <a href="{{route('analystReport')}}" class="btn btn-info btn-rounded">Students Analyst</a>
                        @endif
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        @if(in_array('EMPLOYEE', $userplans))
                            <a href="{{route('teacherReport')}}" class="btn btn-info btn-rounded">Teachers Analyst</a>
                        @endif
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @if(in_array('FEES', $userplans))
                            <a href="{{route('feeCollectionReport')}}" class="btn btn-info btn-rounded">Fee Collection</a>
                        @endif
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
                             <?php
                                    $counter = 1;
                                    $rank = 1;
                                    $prevScore = 0;?>
                                 @foreach($getStudentDetails as $key => $student)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->registration_no }}</td>
                                        <td>{{ $student->class }}</td>
                                        <td>{{ $student->section }}</td>
                                        <td>{{ $student->exam_type }}</td>
                                       {{-- <td>{{ count($subjects) }}</td>--}}
                                         <td>
                                                    @if($student->total_subjects == count($subjects))
                                                        {{ $student->total_subjects }}
                                                    @else
                                                        {{ $student->total_subjects }}  / {{  count($subjects) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $student->total_subjects * $student->max_marks }}
                                                </td>
                                                <td>
                                                    {{ $student->pass_marks * $student->total_subjects }}
                                                </td>
                                                <td>
                                                    {{ $student->scored_marks }}
                                                </td>

                                                @if($student->max_marks < 100)
                                                    <?php  $demo = ($student->scored_marks  / count($subjects)) * (100/$student->max_marks); ?>
                                                @else
                                                   <?php $demo = $student->scored_marks / count($subjects); ?>
                                                @endif
                                                @if(is_int($demo))
                                                    <td>{{ $demo }}  % </td>
                                                @else
                                                    <td>{{ number_format($demo,2) }}  % </td>
                                                @endif

                                                @if($examType != 0 )
                                                    <td>
                                                    @if($student->total_subjects == count($subjects))
                                                        @if($student->total_subjects_fail >0)
                                                            NIL
                                                        @else
                                                            <?php $score = $student->scored_marks;?>
                                                            @if ($prevScore != $score)
                                                                <?php
                                                                $rank = $counter;
                                                                $counter ++;
                                                                ?>
                                                            @endif
                                                                {{ $rank }}
                                                            <?php $prevScore = $score; ?>
                                                        @endif
                                                    @else
                                                        NIL
                                                    @endif

                                                    </td>
                                                @endif

                                                @if($student->total_subjects == count($subjects))
                                                    @if($student->total_subjects_fail > 0)
                                                        <td style="color:#cc2314">
                                                            Fail
                                                        </td>
                                                    @else
                                                        <td style="color:#109321">
                                                            Pass
                                                        </td>
                                                    @endif
                                                @else
                                                <td>&nbsp;&nbsp; - </td>
                                                @endif
                                            </tr>

                                @endforeach
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