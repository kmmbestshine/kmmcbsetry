@extends('users.layouts.default')
@section('title', 'View Video / Audio / PDF')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Video / Audio / PDF</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>View Video / Audio / PDF </h2>
</div>
@if($msg)
   <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Alert!</strong> {{ $msg }}
        </div>
    </div>
@endif
<!-- success -->
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

<!-- error -->
@if(Input::old('error'))
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Alert!</strong> {{ Input::old('error') }}
        </div>
    </div>
@endif
@if($msg)
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Alert!</strong> {{ $msg }}
        </div>
    </div>
@endif
<div class="panel-body">
                        
    <form class="form-horizontal" role="form" method="post" action="{{route('view.parent.video')}}" enctype="multipart/form-data">
    {!! csrf_field() !!}
                                
<br/>
<div class="row">
  <div class="col-md-4">
        <div class="form-group">
            <label class="col-md-3 control-label">Select Class</label>
                <div class="col-md-9">
                        <select class="form-control pvideoclass" name="class">
                                <option value="">Select Class</option>
                                @foreach($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->class }}</option>
                                @endforeach
                        </select>
                </div>
        </div>
    </div>                              
    <div class="col-md-4">
        <div class="form-group">
            <label class="col-md-3 control-label">Select Section</label>
                <div class="col-md-9 pvideosection">
                    <select class="form-control homepvideosection" name="section" disabled>
                        <option value="">Select section</option>
                                                
                    </select>
                </div>
            </div>
        </div>
    </div>
<br/>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12 text-center">
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info">Submit </button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>

@endsection