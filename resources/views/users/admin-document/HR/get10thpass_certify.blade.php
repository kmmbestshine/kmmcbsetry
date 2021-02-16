@extends('users.layouts.default')
@section('title', '10th Class Pass Certificate')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">10th Class Pass Certificate</li>
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
               <form class="form-horizontal" role="form" method="post" action="{{route('documents.10thpass.hr.certify')}}" > 
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>10th Class Pass Certificate</strong></h3>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Registration No  *</label>
                                        <div class="col-md-9 col-xs-12">                         
                                            <input type="text" name="regno" placeholder="Ender Reg No" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Marks Percentage*</label>
                                        <div class="col-md-9 col-xs-12">     
                                            <input type="text" name="marks" placeholder="Ender Marks Percentage" class="form-control">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">From class*</label>
                                        <div class="col-md-9 col-xs-12">     
                                            <select class="form-control" name="fromclass">
                                                <option value="">Select class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}" >{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">To class*</label>
                                        <div class="col-md-9 col-xs-12">     
                                            <select class="form-control" name="toclass">
                                                <option value="">Select class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}" >{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">From Year*</label>
                                        <div class="col-md-9 col-xs-12">     
                                            <input type="text" name="fromyear" placeholder="Ender From Year" class="form-control">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">To Year*</label>
                                        <div class="col-md-9 col-xs-12">     
                                            <input type="text" name="toyear" placeholder="Ender To Year" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                           
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                     <input type="hidden" name="type" placeholder="Ender To Year" value="1oth Class Pass Certificate" class="form-control">
                                    <button type="submit" class="btn btn-info btn-lg">Get 10th Class Pass Certificate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection