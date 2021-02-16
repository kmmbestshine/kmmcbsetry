@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Section</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Section</h2>
        </div>
        @if(Input::old('success'))
            <div class="alert alert-success">{{ Input::old('success') }}</div>
        @endif
        @if(Input::old('error'))
            <div class="alert alert-danger">{{ Input::old('error') }}</div>
        @endif
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.exam')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-3">
                                <input type="hidden" name="id" value="{{ $exam->id }}">
                                <div class="form-group">
                                    <input type="text" name="exam_type" class="form-control" value="{{ $exam->exam_type }}">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="pass_marks" class="form-control" value="{{ $exam->pass_marks }}">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="max_marks" class="form-control" value="{{ $exam->max_marks }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="from" class="form-control" value="{{ $exam->from }}">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="to" class="form-control" value="{{ $exam->to }}">
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <button type="submit" class="btn btn-block btn-info">Update Exam</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection