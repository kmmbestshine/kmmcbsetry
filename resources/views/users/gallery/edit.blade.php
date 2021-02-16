@extends('users.layouts.default')
@section('title', 'Gallery')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Edit Gallery</li>
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
                    <h3 class="panel-title">Edit Gallery Form</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{route('update.gallery')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label class="col-md-3 control-label">Event</label>
                                        <div class="col-md-9">
                                            <input type="hidden" name="id" value="{{ $gallery->id }}">
                                            <input type="text" class="form-control" name="header" value="{{$gallery->event}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-5">
                                            <input type="date" name="date" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="old_date" class="form-control" value="{{$gallery->date}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            @if($images and count($images)>0)
                                @foreach($images as $image)
                                    <div class="col-md-3">
                                        <img src="{{url($image->image)}}" class="img-thumbnail" width="150px" height="150px">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Gallery Images</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="files[]" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 text-right">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info">Update Gallery</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection