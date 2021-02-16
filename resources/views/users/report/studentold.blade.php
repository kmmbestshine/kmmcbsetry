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
                        <a href="{{route('user.report')}}" class="btn btn-info btn-rounded">Attendance</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="" class="btn btn-info btn-rounded">Students</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                           <table class="table">
                             <thead>
                                 <tr>
                                    <th>Reg.No</th>
                                    <th>Roll No.</th>
                                    <th>Class</th>
                                    <th>Section</th>

                                     <th>Student Name</th>
                                     <th>Mobile</th>
                                     <th>DOB</th>
                                     <th>Gender</th>
                                     <!--<th>Email</th> phase 2-->

                                     <th>Father</th>
                                     <th>Mother</th>
                                     <th>Mobile</th>
                                     <th>Address</th>
                                     <!--<th>City-Pin</th> phase 2-->
                                 </tr>
                             </thead>
                             <tbody>				   
                                 @foreach($students as $stu)
                                 <tr>
                                     <td>{{$stu->registration_no}}</td>
                                     <td>{{$stu->roll_no}}</td>
                                     <td>{{$stu->class}}</td>
                                     <td>{{$stu->section}}</td>
                                     <td>{{$stu->name}}</td>
                                     <td>{{$stu->contact_no}}</td>
                                     <td>{{$stu->dob}}</td>
                                     <td>{{$stu->gender}}</td>
                                     <!--<td>{{$stu->email}}</td>phase 2-->
                                     <td>{{$stu->father}}</td>
                                     <td>{{$stu->mother}}</td>
                                     <td>{{$stu->parent_mobile}}</td>
                                     <td>{{$stu->address}}</td>
                                     <!--<td>{{$stu->city}}-{{$stu->pin_code}}</td> phase 2-->
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