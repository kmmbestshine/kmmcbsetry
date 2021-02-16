@extends('users.layouts.default')
@section('title', 'Construction')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">Construction</li>
    </ul>
@endsection
@section('contant')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Construction</h2>
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
                                <a href="{{route('user.construction')}}" class="btn btn-info btn-rounded">Add Building </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('user.construct.work')}}" class="btn btn-info btn-rounded">Add Building Work </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('user.construct.contractor')}}" class="btn btn-info btn-rounded">Add Labour </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('user.construct.payment')}}" class="btn btn-info btn-rounded">Add Wages </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('user.construct.salary')}}" class="btn btn-info btn-rounded">Pay Wages </a>
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
                                <a href="{{route('add.supplier')}}" class="btn btn-info btn-rounded">Add Supplier </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            @if(in_array('FEES', $userplans))
                                <a href="{{route('add.purchase')}}" class="btn btn-info btn-rounded">Purchase </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             @if(in_array('FEES', $userplans))
                                <a href="{{route('issue.material.create')}}" class="btn btn-info btn-rounded">Issue </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection