@extends('users.layouts.default')
@section('title', 'Relieving Letter')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Relieving Letter</a></li>
        <li class="active">Relieving Letter</li>
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
            <div class="col-md-12">
               <form class="form-horizontal" role="form" method="post" action="{{route('documents.relieve_letter.details')}}" > 
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Relieving Letter</strong></h3>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Staff User Name</label>
                                        <div class="col-md-9 ">
                                           
                                            <input type="text" name="username" placeholder="Ender Staff User Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">From</label>
                                        <div class="col-md-10">
                                            <input type="date" name="from" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">TO</label>
                                        <div class="col-md-11">
                                        <input type="date" name="to" class="form-control">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        <br/>
                            
                            <br/>
                            <br/>
                           
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Get Relieving Letter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection