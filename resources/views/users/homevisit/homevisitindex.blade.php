@extends('users.layouts.default')
@section('title', 'Home Visit Form')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">Home Visit Form</li>
    </ul>
@endsection
@section('contant')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Home Visit Form</h2>
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
                                <a href="{{route('user.homevisitcreat.index')}}" class="btn btn-info btn-rounded">Create Home Visit </a>
                            @endif
                           @if(in_array('FEES', $userplans))
                                <a href="{{route('user.homevisitreport.index')}}" class="btn btn-info btn-rounded">Home Visit Report </a>
                            @endif
                           @if(in_array('FEES', $userplans))
                                <a href="{{route('dailycanvashReport')}}" class="btn btn-info btn-rounded">PANDEMIC Home Visit Report </a>
                            @endif
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection