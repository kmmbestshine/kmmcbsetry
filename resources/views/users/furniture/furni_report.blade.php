@extends('users.layouts.default')
@section('title', 'Inventory Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Inventory Report</li>
</ul>
@endsection
@section('contant')
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> Inventory Details</h2>
    </div>
    <div class="page-content-wrap" ng-app="app" ng-controller="furniturecontroller">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Inventory Report
                            </center></h3>
                    </div>
                    <div class="panel-body ">
                        <form class="form-inline" method="POST" action="{{ route('gennerateFurnitureReport') }}">
                            {{ csrf_field() }}
                            <div class="row" style="margin-top:12px;">
                                <div class="col-md-4">
                                    <label for="type">Assets/Inventory
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}" style="width: 100%">
                                        <div class="">
                                           <select class="form-control"  id="type" style="width: 100%" name="type" onchange="change_distributed(this.value)" >
                                                <option value="" disabled="disabled" selected="selected">select</option>
                                                <option value="Distributable">Inventory</option>
                                                <option value="Non-Distributable">Assets</option>
                                            </select>
                                            @if ($errors->has('type'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('type') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:12px;">
                                <div class="col-md-4">
                                    <label for="type">Select Category
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" style="width: 100%">
                                        <div class="">
                                           <select class="form-control" id="category" style="width:100%" name="category" onchange="change_subcategory(this.value)" >
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
                            <div class="row" style="margin-top:12px;">
                                <div class="col-md-4">
                                    <label for="type">Select Sub-category
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('subcategory') ? ' has-error' : '' }}" style="width: 100%">
                                        <div class="" >
                                           <select class="form-control" id="subcategory" style="width:100%" name="subcategory" >     
                                            </select>
                                            @if ($errors->has('subcategory'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('subcategory') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="marg-top"></div>
                            <div class="row">
                                <br>
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-info btn-block">Report</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{route('furniturelist')}}" class="btn btn-info">Back</a>
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