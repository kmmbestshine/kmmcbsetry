@extends('parent.layouts.default')
@section('title', 'Add Homework')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Homework</li>
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
                <form class="form-horizontal" role="form">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Homework</strong></h3>
                        </div>
                        <div class="panel-body">
                            <form class="row">
                                <div class="col-md-11 form-group">
                                    <select class="form-control" name="student">
                                        <option disabled selected>Choose Student</option>
                                        @foreach($students as $subj)
                                            <option value="{{$subj->id}}">{{$subj->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-info">Submit <i class="fa fa-send"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if($homework)
                    @foreach($homework as $hw)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>{{$hw->subject}}</strong>
                            </h3>
                            <h3 class="panel-title pull-right">Today Home Work</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <img src="{{url('homework/'.$hw->image)}}" class="img-responsive img-thumbnail">
                            </div>
                            <div class="col-md-6">{{$hw->description}}</div>
                        </div>
                    </div>
                    @endforeach
                   @endif
                </form>
            </div>
        </div>
    </div>
@endsection