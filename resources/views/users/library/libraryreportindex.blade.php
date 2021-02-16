@extends('users.layouts.default')
@section('title', 'Library')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Library</li>
        <li class="active">Library</li>
    </ul>
@endsection
@section('contant')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Library</h2>
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
                            @if(in_array('LIBRARY', $userplans))
                                <a href="{{route('user.bookIssue.report')}}" class="btn btn-info btn-rounded">Book Issue Report</a>&nbsp;&nbsp;&nbsp;
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           @if(in_array('LIBRARY', $userplans))
                                <a href="{{route('user.gateentry.report')}}" class="btn btn-info btn-rounded">Gate Entry Report</a>&nbsp;&nbsp;&nbsp;
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                           @if(in_array('LIBRARY', $userplans))
                                <a href="{{route('libraryReport')}}" class="btn btn-info btn-rounded">Library- Category Report</a>&nbsp;&nbsp;&nbsp;
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           @if(in_array('LIBRARY', $userplans))
                                <a href="{{route('librarysubjectReport')}}" class="btn btn-info btn-rounded">Library- Subject Report</a>&nbsp;&nbsp;&nbsp;
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