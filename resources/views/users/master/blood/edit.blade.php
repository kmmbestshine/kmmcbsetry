@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Master Blood Group Edit Form</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Blood Group</h2>
        </div>
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.group')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ $group->id }}">
                                    <input type="text" name="blood_group" class="form-control" value="{{ $group->blood_group }}">
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-info">Update Blood Group</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection