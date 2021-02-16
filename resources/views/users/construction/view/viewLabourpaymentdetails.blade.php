@extends('users.layouts.default')
@section('title', 'View Payment')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">View Payment</li>
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
            @if(!empty($data))
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="get" action="{{route('view.labour.payment.details')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Labour payment</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Work Category  :</label>
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="work_id">
                                                <option value="">Select Work</option>
                                                @foreach($data as $name1)
                                                    <option value="{{ $name1->id }}">{{ $name1->work_type }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contractor Name  :</label>
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="contractor_id">
                                                <option value="">Select Building</option>
                                                @foreach($data as $name)
                                                    <option value="{{ $name->id }}">{{ $name->contractor_name }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-block">Get Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @endif
    </div>
@endsection