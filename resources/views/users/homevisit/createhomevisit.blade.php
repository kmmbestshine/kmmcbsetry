@extends('users.layouts.default')
@section('title', 'Home Visit Form')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Add Home Visit Form </a></li>
        <li class="active">Home Visit Form </li>
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
                <form class="form-horizontal" role="form" method="get" action="{{ route('homevisit.new') }}" >
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Home Visit Form</strong></h3>
                           
                        </div>
                        <div class="panel-body">
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control homevisitclass" name="class">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Section</label>
                                        <div class="col-md-9 homevsection">
                                            <select class="form-control homevisitsection" name="section" disabled>
                                                <option value="">Select section</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <br/>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Student</label>
                                        <div class="col-md-9 homevstudent">
                                            <select class="form-control homevisitstudent" name="student" disabled>
                                                <option value="">Select student</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Types</label>
                                        <div class="col-md-9">
                                            <select class="form-control homevisitclassa" name="type">
                                                <option value="">Select Types</option>
                                                    <option value="dailyvisit">Daily Home Visit</option>
                                                    <option value="homevisit">Home Visit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            
                            <br/>
                            
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Home Visit Form</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

@endsection