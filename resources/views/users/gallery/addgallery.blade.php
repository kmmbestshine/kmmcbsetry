@extends('users.layouts.default')
@section('title', 'Gallery')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Gallery</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Gallery Form</h3>
                        <div class="text-right">
                            <a href="{{route('get.gallery')}}" class="btn btn-info">View Gallery</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Input::old('fieldsSuccess'))
                            <form class="form-horizontal dropzone" role="form" method="post" action="{{route('post.gallery', Input::old('id'))}}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="col-md-12 fallback">
                                    <input type="file" name="file" class="form-control" multiple />
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a class="btn btn-info" href="{{route('get.gallery')}}">Submit</a>
                                </div>
                            </div>
                        @else
                            <form class="form-horizontal" role="form" method="post" action="{{route('fields.gallery')}}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="header">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12 text-right">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit Fields</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection