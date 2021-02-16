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
                           
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             @if(in_array('FEES', $userplans))
                                <a href="{{route('single_studentfee')}}" class="btn btn-info btn-rounded">Add Single Student Fee </a>
                            @endif
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              @if(in_array('FEES', $userplans))
                                <a href="{{route('multible_studentfee')}}" class="btn btn-info btn-rounded">Add Multible Student Fee </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('get.students.payments')}}" class="btn btn-info btn-rounded">Add Class Wise Fee </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrap">
                            
       
    </div>
@endsection