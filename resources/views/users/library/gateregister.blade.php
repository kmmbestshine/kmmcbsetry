@extends('users.layouts.default')
@section('title', 'Gate Register')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">Gate Register</li>
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
    <div class="page-content-wrap">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Gate Register</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.library.index')}}" class="btn btn-info btn-rounded">Back</a>&nbsp;&nbsp;&nbsp;
                                
                            </div>
                        </div>
                        <div class="panel-body">
                           
                            <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">
                                                   <a href="{{route('user.register.libin')}}" class="btn btn-info btn-rounded">IN TIME REGISTER</a>&nbsp;&nbsp;&nbsp;
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">
                                                   <a href="{{route('user.register.libout')}}" class="btn btn-info btn-rounded">OUT TIME REGISTER</a>&nbsp;&nbsp;&nbsp;
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection