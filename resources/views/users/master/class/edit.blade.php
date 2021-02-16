@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Master Class Edit Form</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Class</h2>
        </div>
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.class')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ $class->id }}">
                                    <input type="text" name="class" class="form-control" value="{{ $class->class }}">
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-block btn-info">Update Class</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection