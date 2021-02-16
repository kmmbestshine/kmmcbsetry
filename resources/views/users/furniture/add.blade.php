@extends('users.layouts.default')
@section('title', 'Create Inventory')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Inventory</li>
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
                        <h3 class="panel-title"><center>Add Inventory-Purchase </center></h3>
                    </div>
                    <div class="panel-body ">
                        <form class="form-inline" method="POST" action="{{ route('furniturePost') }}">
                            {{ csrf_field() }}
                            <div class="row" >
                                <div class="col-md-4">
                                   <label class="form-group">
                                        <input type="radio" id="type" style="margin-left:20px" ng-model="catetype" name="type" value="Non-Distributable" onclick="change_distributed(this.value)"> Assets
                                   </label> 
                                </div>
                                <div class="col-md-4">
                                    <label class="form-group">
                                        <input type="radio" id="type" ng-model="catetype" name="type" value="Distributable" onclick="change_distributed(this.value)">Inventory
                                    </label>
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @endif

                                    <!-- <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}" style="width: 100%">
                                        <div class="">
                                           <select class="form-control"  id="type" style="width: 100%" name="type" onchange="change_distributed(this.value)" >
                                                <option value="" disabled="disabled" selected="selected">select</option>
                                                <option value="Distributable">Distributable</option>
                                                <option value="Non-Distributable">Non-Distributable</option>
                                            </select>
                                            
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="category">Category</label>
                                        <div class="" >
                                           <select class="form-control"  id="category" style="width: 100%" name="category" onchange="change_subcategory(this.value)" >
                                                <!-- <option value="" disabled="disabled" selected="selected">select</option>
                                                @foreach($category as $cate_key=>$val_cate)
                                                    <option value="{{$val_cate->category}}">{{$val_cate->category}}</option>
                                                @endforeach -->
                                            </select>
                                            @if ($errors->has('category'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('category') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="form-group" style="width: 100%">
                                        <label for="toname" >Add New Category</label>
                                        <div class="">
                                            <input id="newcategory" ng-model="newcategory" type="text" class="form-control" name="newcategory" ng-pattern="/^[a-zA-Z0-9_ ]+$/" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top:20px;">
                                    <label for="purpose" ></label>
                                    <div class="col-md-2">
                                        <input id="purpose" type="button" ng-click="addfur_category()" class="btn btn-info btn-block" name="add" value="Add">
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('subcategory') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="subcategory">Sub-Category</label>
                                        <div class="" >
                                           <select class="form-control" id="subcategory" style="width:100%" name="subcategory" >
                                                <option value="" disabled="disabled" selected="selected">select</option>
                                                @foreach($sub_category as $sub_key=>$val_sub)
                                                    <option value="{{$val_sub->sub_category}}">{{$val_sub->sub_category}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('subcategory'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('subcategory') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="width: 100%">
                                        <label for="toname" >Add Sub-Category</label>
                                        <div class="">
                                            <input id="new_subcategory" ng-model="new_subcategory" type="text" class="form-control" name="new_subcategory" ng-pattern="/^[a-zA-Z0-9_ ]+$/" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top:20px;">
                                    <label for="purpose" ></label>
                                    <div class="col-md-2">
                                        <input id="purpose" type="button" ng-click="addfur_subcategory()" class="btn btn-info btn-block" name="add" value="Add">
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('Itemname') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="Itemname" >Product Name</label>
                                        <div class="">
                                            <input id="Itemname" type="text" class="form-control" name="Itemname" value="{{ old('Itemname') }}" required style="width: 100%">
                                            @if ($errors->has('Itemname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Itemname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="quantity" >Quantity</label>
                                        <div class="">
                                            <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" required style="width: 100%">
                                            @if ($errors->has('quantity'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('purchaserate') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="purchaserate" >Purchase Rate</label>
                                        <div class="">
                                            <input id="purchaserate" type="text" class="form-control" name="purchaserate" value="{{ old('purchaserate') }}" required style="width: 100%">
                                            @if ($errors->has('purchaserate'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('purchaserate') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4" ng-show="catetype!=null && catetype=='Distributable'">
                                    <div class="form-group{{ $errors->has('distributionrate') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="distributionrate" >Distribution Rate</label>
                                        <div class="">
                                            <input id="distributionrate" type="text" class="form-control" name="distributionrate" value="{{ old('distributionrate') }}" ng-required="catetype!=null && catetype=='Distributable'" style="width: 100%">
                                            @if ($errors->has('distributionrate'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('distributionrate') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                        <label for="amount" >Amount</label>
                                        <div class="">
                                            <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" required>
                                            @if ($errors->has('amount'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('amount') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="remarks" >Remarks</label>
                                        <div class="">
                                            <input id="remarks" type="text" class="form-control" name="remarks" value="{{ old('remarks') }}" style="width: 100%">
                                            @if ($errors->has('remarks'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('remarks') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="marg-top"></div>
                            <div class="row">
                                <br>
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-info btn-block">Create</button>
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