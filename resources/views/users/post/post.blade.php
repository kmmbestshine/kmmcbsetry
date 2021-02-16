@extends('users.layouts.default')
@section('title', 'Post')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Post</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.post')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Post</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Add Post</label>
                                        <div class="col-md-10">
                                           <input type="file" name="image" class="form-control">
                                            @foreach($errors->get('image') as $image)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $image }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                	<button type="submit" class="btn btn-block btn-info">Add Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Post</center></h3>                               
                        </div>
                        <div class="panel-body text-center">
                        @if($post->image)
                            <img src="{{url($post->image)}}" class="img-thumbnail" >
                        @endif
                            
                        </div>
                    </div>
               </div>
            </div>
    </div>
@endsection