@extends('users.layouts.default')
@section('title', 'Fee Structure')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Fee Structure</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Fee Structure</h2>
        </div>
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Structure Form</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="{{route('update.structure')}}">
                                    {!! csrf_field() !!}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="{{ $field->id }}">
                                            <input type="text" name="structure" class="form-control" value="{{ $field->structure }}">
                                        </div>
                                        @foreach($errors->get('structure') as $structure)
                                            <div class="alert alert-danger">{{ $structure }}</div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <button type="submit" class="btn btn-info">Update Strcuture</button>
                                    </div>
                                </form>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection