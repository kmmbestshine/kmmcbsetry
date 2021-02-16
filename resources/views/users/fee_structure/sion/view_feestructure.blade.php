@extends('users.layouts.default')
@section('title', 'Fee Structure')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">View Class Wise Fee Structure</a></li>
        <li class="active">View Class Wise Fee Structure</li>
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
             @if($msg )
            <div class="alert alert-success" style="text-align: center">
           <strong></strong><a href="{{route('fee.view.sion.structure')}}" class="alert-link">Your Class Fees Structure Created Successfully !!! <br>Click here!  Return Back Again Insert
            </div>
                @endif
            <div class="col-md-12">
               <form class="form-horizontal" role="form" method="post" action="{{ route('fee.view.sion.structuredetails') }}"  > 
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Fee Structure</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Session</label>
                                        <div class="col-md-9 ">
                                            <select class="form-control " name="session_id" >
                                                <option value="">Select Session</option>
                                                @foreach($getSession as $session)
                                                    <option value="{{ $session->id }}">{{ $session->session }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control ppaymentclass" name="class">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->class }}">{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <br/>
                            
                            <br/>
                            <br/>
                           
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">View Fee Structure</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection