@extends('users.layouts.default')
@section('title', 'View Building Work')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li><a href="">View Building Work</a></li>
    <li class="active">View Building Work</li>
</ul>
@endsection
@section('contant')
     @if($msg)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ $msg }}
                    </div>
                </div>
            </div>
        @endif
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
        @if(empty($work_type))
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('get.buildwork.det')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Building Work</strong></h3>
                        </div>
                        <div class="panel-body">
                                 <br>
                                 <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Building name   :</label>
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="build_nameid">
                                                <option value="">Select Building Name</option>
                                                @foreach($build_name as $name)
                                                    <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <br>
                                        <div class="col-md-5 pull-right">
                                            <button type="submit" class="btn btn-info btn-block">Get Data</button>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        @endif
    </div>
@endsection 