@extends('users.layouts.default')
@section('title', 'Students Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Students</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Students Report</h2>
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
                            <a href="{{route('studentsReport')}}" class="btn btn-info btn-rounded">Students Report</a>
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
                                <h3 class="panel-title">Student Report Form</h3>
                                <!-- <div class="text-right">
                                    <a href="{{route('list.structure')}}" class="btn btn-info btn-rounded">View</a>
                                </div>  -->
                            </div>
                            <div class="panel-body">
                            	<form class="form-horizontal" method="get">
                                   
                                   <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Class</label>
                                        <div class="col-md-11">
                                            <select name="class" class="form-control">
                                                <option value="0">All</option>
                                                @foreach($classes as $class)
                                                <option value="{{$class->id}}">{{$class->class}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Religion</label>
                                        <div class="col-md-11">
                                            <select name="religion" class="form-control">
                                                <option value="0">All</option>
                                                @foreach($religions as $religion)
                                                <option value="{{$religion->id}}">{{$religion->religion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Caste</label>
                                        <div class="col-md-11">
                                            <select name="caste" class="form-control">
                                                <option value="0">All</option>
                                                @foreach($castes as $caste)
                                                <option value="{{$caste->id}}">{{$caste->caste}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Session</label>
                                        <div class="col-md-11">
                                        <select class="form-control" name="session">
                                                <option>Choose Session</option>
                                                @foreach($sessions as $session)
                                                <option value="{{$session->id}}" {{$session->active == "1"?"selected":""}}>{{$session->session}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button style="margin-top:20px" class="pull-right btn btn-info">Create Report</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
        @if($students)
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Report - {{$students['session']}}</h3>
                            <div class="text-right">
                                <a href="{{route('download')}}" class="btn btn-info btn-rounded">Export</a>
                            </div> 
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table datatable">
                           <!--<table class="table">-->
                             <thead>
                                 <tr>
                                     <th>#</th>
                                    <th>Reg.No</th>
                                    <th>Roll No.</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                     <th>Student Name</th>
                                     <th>DOB</th>
                                     <th>Gender</th>
                                     <th>Religion</th>
                                     <th>Caste</th>
                                     <th>Aadhar No</th>
                                     <th>Emis No</th>
                                     <th>RTE No</th>
                                     <th>Father</th>
                                     <th>Mobile</th>
                                     <th>Address</th>
                                 </tr>
                             </thead>
                             <tbody>		
                              <?php $j=1; ?>    		   
                                 @foreach($students as $stu)
                                 <tr>
                                    <td>{{ $j++}}</td> 
                                     <td>{{$stu->registration_no}}</td>
                                     <td>{{$stu->roll_no}}</td>
                                     <td>{{$stu->class}}</td>
                                     <td>{{$stu->section}}</td>
                                     <td>{{$stu->name}}</td>
                                     <td>{{$stu->dob}}</td>
                                     <td>{{$stu->gender}}</td>
                                     <td>{{$stu->religion}}</td>
                                     <td>{{$stu->caste}}</td>
                                     <td>{{$stu->aadhar_no}}</td>
                                     <td>{{$stu->emis_no}}</td>
                                     <td>{{$stu->rte_no}}</td>
                                     <td>{{$stu->father}}</td>
                                     <td>{{$stu->parent_mobile}}</td>
                                     <td>{{$stu->address}}</td>
                                 </tr>
                                 @endforeach

                             </tbody>
                         </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     @endif
    
 </div>
 @endsection