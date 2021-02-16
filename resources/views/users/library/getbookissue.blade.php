@extends('users.layouts.default')
@section('title', 'Library')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Library</li>
</ul>
@endsection
@section('contant')
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
    <!------- updated 28-9-2017 by priya -------->
    
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('get.library.issuereport')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Issue Report</strong></h3>
                            <div class="text-right">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">From</label>
                                        <div class="col-md-9">
                                            <input type="date" name="from" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">To</label>
                                        <div class="col-md-9">
                                        <input type="date" name="to" class="form-control" />
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">User Type</label>
                                        <div class="col-md-9">
                                         <select name="user_type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="all">All</option>
                                                <option value="student">Student</option>
                                                <option value="staff">Staff</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Issue/Return</label>
                                        <div class="col-md-9">
                                         <select name="report_type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="issue">Issue</option>
                                                <option value="return">Return</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                           <br>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="col-md-5 pull-right">
                                            <button type="submit" class="btn btn-info btn-block">Issue/Return Report</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>  
                    </div>
                </form>
            </div>
        </div>
      
    </div>
@endsection