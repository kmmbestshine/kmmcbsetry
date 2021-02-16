@extends('users.layouts.default')
@section('title', 'Create Expenditure')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Expenditure</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Expenditure Details</h2>
</div>
 	<div class="page-content-wrap" >
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Expenditure Report</center></h3>
                    </div>
                    <div class="panel-body">
                         @if(Input::old('Error'))
                            <div class="col-md-11 col-md-offset-1">
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <strong>{!! Input::old('Error') !!} </strong> 
                                </div>
                            </div>
                        @endif
                        <form class="form-inline" method="POST" action="{{ route('expensesreportGenerate') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                 <div class="col-md-4">
                                    <div style="width: 100%" class="form-group{{ $errors->has('fromexpdate') ? ' has-error' : '' }}">
                                        <label for="fromexpdate" >From Date</label>
                                        <div class="">
                                            <input id="fromexpdate" style="text-align: ; width: 100%" type="date" class="form-control" name="fromexpdate" value="{{ old('fromexpdate') }}" >
                                            @if ($errors->has('fromexpdate'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('fromexpdate') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('toexpdate') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="toexpdate" >To Date</label>
                                        <div class="">
                                            <input id="toexpdate" style="width: 100%" type="date" class="form-control" name="toexpdate" value="{{ old('toexpdate') }}" >
                                            @if ($errors->has('toexpdate'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('toexpdate') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <div >
                                    <label for="category">Category</label>                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" style="width: 100%">
                                        <div class="">
                                           <select class="form-control" id="category" name="category" style="width: 100%" >
                                                <option value=""></option>
                                                @foreach($expenditure as $exp_key=>$val_exp)
                                                    <option value="{{$val_exp->category}}">{{$val_exp->category}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('category') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="marg-top"></div>
                            <div class="row">
                                <br>
                                <div class="col-md-6 col-md-offset-5">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-info btn-block">Report</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{route('user.expList')}}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('contant')