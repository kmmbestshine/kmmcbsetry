@extends('parent.layouts.default')
@section('title', 'Gallery')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>
    <li class="active">Gallery</li>
</ul>
@endsection
@section('contant')
<style type="text/css">
    .avatar{
        height:50px;
        width:50px;
    }
</style>
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('post.homework')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Gallery</strong></h3>
                        </div>
                        <div class="panel-body">
                        	<div class="gallery" id="links">
                            @foreach($gallery as $gl)
                            <a class="gallery-item" href="{{url('gallery/'.$gl->image)}}" title="Nature Image 1" data-gallery="">
                                <div class="image">                              
                                    <img src="{{url('gallery/'.$gl->image)}}" height="200px" alt="Nature Image 1">                         
                                </div>
                                <div class="meta">
                                    <strong>{{$gl->header}}</strong>
                                    <span>{{$gl->footer}}</span>
                                </div>                                
                            </a>
                          @endforeach
                             
                        </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection