@extends('users.layouts.default')
@section('title', 'Accounts')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">Accounts</li>
    </ul>
@endsection
@section('contant')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Accounts</h2>
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
                                <a href="{{route('account.add.categorys')}}" class="btn btn-info btn-rounded">Add Account Category </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('acc.add.income')}}" class="btn btn-info btn-rounded">Add New Income </a>
                            @endif
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('acc.list.income')}}" class="btn btn-info btn-rounded">Income List</a>
                            @endif
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             @if(in_array('FEES', $userplans))
                                <a href="{{route('acc.add.expense')}}" class="btn btn-info btn-rounded">Add New Expense </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('acc.list.expense')}}" class="btn btn-info btn-rounded">Expense List </a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('acc.report.consolidate')}}" class="btn btn-info btn-rounded">Account Reports</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection