@extends('users.layouts.default')
@section('title', 'School Fee')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">School Fee</li>
    </ul>
@endsection
@section('contant')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> School Fee</h2>
    </div>
    @if($msg)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ $msg }}
                    </div>
                </div>
            </div>
        @endif

    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                           
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.students.feeindex')}}" class="btn btn-info btn-rounded">Student Fee Structure </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.students.buspayments123')}}" class="btn btn-info btn-rounded">Bus Fee Structure </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('user.feeCollectionnewfee')}}" class="btn btn-info btn-rounded">Fee Collection </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrap">
                            
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                          @if(in_array('FEES', $userplans))
                                <a href="{{route('new.fee.staffcollectionreport')}}" class="btn btn-info btn-rounded">Overall Report</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('term.individual.staffreportadmin')}}" class="btn btn-info btn-rounded">Overall Received Report </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('term.individual.staffreportbalance')}}" class="btn btn-info btn-rounded">Overall Bal Report </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             @if(in_array('FEES', $userplans))
                                <a href="{{route('schoolOverall_report')}}" class="btn btn-info btn-rounded">School Or Bus Overall Report </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('schoolAllfee_Report')}}" class="btn btn-info btn-rounded">School Or Bus Received Report </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('schoolAllbalance_report')}}" class="btn btn-info btn-rounded">School Or Bus Bal Report </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <br>
                             @if(in_array('FEES', $userplans))
                                <a href="{{route('schoolDatewise_report')}}" class="btn btn-info btn-rounded"> DateWise Receipt Report </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                           
                           
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection