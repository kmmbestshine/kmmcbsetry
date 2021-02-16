@extends('users.layouts.default')
@section('title', 'User Role')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">User Role</li>
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
        <form class="form-horizontal" role="form" method="post" action="{{route('postPassword', $id)}}">
                {!! csrf_field() !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Add User Role</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                     <input type="password" name="password" class="form-control">
                                     @foreach($errors->get('password') as $password)
                                     <div class="alert alert-danger my-alert" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button> {{ $password }}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    <br/>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-info btn-lg">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
@endsection