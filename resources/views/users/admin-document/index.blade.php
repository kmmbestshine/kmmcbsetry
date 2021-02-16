@extends('users.layouts.default')
@section('title', 'HR Documents')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">HR Documents</li>
    </ul>
@endsection
@section('contant')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> HR Documents</h2>
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
                                <a href="{{route('get.documents.attend_certify')}}" class="btn btn-info btn-rounded">Attendance Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.bonafied')}}" class="btn btn-info btn-rounded">Bonafied Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.conduct')}}" class="btn btn-info btn-rounded">Conduct Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.feepaid')}}" class="btn btn-info btn-rounded">Fee Paid Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.tobe_feepaid')}}" class="btn btn-info btn-rounded">Fee To be Paid Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                         <!--   @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.attend_certify')}}" class="btn btn-info btn-rounded">Attendance Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.bonafied')}}" class="btn btn-info btn-rounded">Bonafied Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.conduct')}}" class="btn btn-info btn-rounded">Conduct Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.feepaid')}}" class="btn btn-info btn-rounded">Fee Paid Certificate </a>
                            @endif-->
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.documents.10-pass')}}" class="btn btn-info btn-rounded">10th Class Passing Certificate </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection