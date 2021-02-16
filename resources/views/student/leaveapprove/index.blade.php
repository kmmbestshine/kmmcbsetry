@extends('student.layouts.default')
@section('title', 'Leave')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Leave</li>
</ul>
@endsection
@section('contant')
<style type="text/css">
    .text-radio{
        padding-top: 7px;
        margin-left: 10px;
    }
    .my-alert{
        padding: 3px 0px 3px 10px;
        margin: 0px;
    }
</style>
    @if(Input::old('success'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ Input::old('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if(Input::old('error'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh Snap!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('student.leavePost')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Leave Request</strong></h3>
                            <!-- <div class="text-right">
                                <a href="{{route('get.employee')}}" class="btn btn-info btn-rounded">View List</a>
                            </div> -->
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-md-6 form-group">
                                        <label>From</label>
                                        <input type="date" name="from" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 form-group" style="padding-left:30px;padding-right:0px;">
                                        <label>to</label>
                                        <div class="mainsection">
                                            <input type="date" name="to" class="form-control" required>
                                        </div>
                                    </div>  
                                    <div class="col-md-12 form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" required></textarea>
                                    </div>
                                    <button class="btn btn-info">Submit <i class="fa fa-send"></i></button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Leaves</strong></h3>
                    </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Message</th>
                                <th align="right">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($leaves as $rq)
                            <tr>
                                <td>{{$rq->from_leave}}</td>
                                <td>{{$rq->to_leave}}</td>
                                <td class="col-md-4">{{$rq->remarks}}</td>
                                @if($rq->status == 'process')
                                <td class="btn btn-warning pull-right">Process</td>
                                @endif
                                @if($rq->status == 'cancelled')
                                <td class="btn btn-danger pull-right">Process</td>
                                @endif
                                @if($rq->status == 'approved')
                                <td class="btn btn-success pull-right">Process</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection