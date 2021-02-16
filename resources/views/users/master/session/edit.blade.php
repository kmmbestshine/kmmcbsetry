@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Master</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Session</h2>
        </div>
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.session')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Session</label>
                                    <input type="hidden" name="id" value="{{ $session->id }}">
                                    <input type="text" name="session" class="form-control" value="{{ $session->session }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <label>From Date</label>
                                <div class="form-group">
                                    <input type="date" name="fromDate" class="form-control" value="{{ $session->fromDate }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <input type="date" name="toDate" class="form-control" value="{{ $session->toDate }}">
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <label></label>
                                <button type="submit" class="btn btn-block btn-info">Update Session</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection