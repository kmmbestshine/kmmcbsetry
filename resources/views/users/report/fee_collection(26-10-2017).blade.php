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
                        <a href="{{route('libraryReport')}}" class="btn btn-info btn-rounded">Library</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{route('studentsReport')}}" class="btn btn-info btn-rounded">Students</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{-- updated 14-10-2017 by priya --}}
                        <a href="{{route('analystReport')}}" class="btn btn-info btn-rounded">Students Analyst</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       {{-- <a href="{{route('teacherReport')}}" class="btn btn-info btn-rounded">Teachers Analyst</a>
                        &nbsp;--}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{--end--}}
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

                                <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">From</label>
                                        <div class="col-md-10">
                                            <input type="date" name="from" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">TO</label>
                                        <div class="col-md-11">
                                        <input type="date" name="to" class="form-control">
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
                                     <th>Student Name</th>
                                     <th>Father Name</th>
                                     <th>Annual Fee</th>
                                     <th>Tot Monthly Fee</th>
                                     <th>One Time Fee</th>
                                     <th>Tot Paid</th>
                                     <th>Late Fee</th>
                                     <th>Concession</th>
                                     <th>Tot Balance</th>

                                 </tr>
                             </thead>
                             <tbody>				   
                                @if($getStudent)
                                    @foreach($getStudent as $get)
                                        <tr>
                                            <td>{{$get->registration_no}}</td>
                                            <td>{{$get->roll_no}}</td>
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->father}}</td>
                                            <td>{{$get->totalAnnualFee}}</td>
                                            <td>{{$get->totalMonthly}}</td>
                                            <td>{{$get->onetimeFee}}</td>
                                            <td>{{$get->totalPay}}</td>
                                            <td>{{$get->late_fee}}</td>
                                            <td>{{$get->concession}}</td>
                                            <td>{{$get->totalBalance}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="3"></th>
                                        <th>Total</th>
                                        <th>{{$totalAnnual}}</th>
                                        <th>{{$totalMonthly}}</th>
                                        <th>{{$totalonetimeFee}}</th>
                                        <th>{{$totalRecive}}</th>
                                        <th>{{$totallatefee}}</th>
                                        <th>{{$totalconcession}}</th>
                                        <th>{{$totalPanding}}</th>
                                    </tr>
                                @endif

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