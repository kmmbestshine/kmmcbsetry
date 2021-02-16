@extends('users.layouts.default')
@section('title', 'Edit Furniture')
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
                        <h3 class="panel-title"><center>Edit Inventory </center></h3>
                    </div>

                    <div class="panel-body ">
                        <form class="form-inline" method="POST" action="{{ route('furnitureUpdate',$furnitureDetails->id) }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4" ng-init="getcategoery();" >
                                    <label class="form-group">
                                        <input type="radio" id="type" style="margin-left:20px;" disabled="disabled" @if($furnitureDetails->type=='Non-Distributable') checked="checked" @endif name="type" value="Non-Distributable" > Assets
                                        <!-- <input type="radio" id="type" style="margin-left:20px;" onclick="change_distributed(this.value)" @if($furnitureDetails->type=='Distributable') checked="checked" @endif name="type" value="Non-Distributable" > Assests -->
                                   </label> 
                                    <!-- <label for="type">Is Distributeable/Non-Distributable
                                    </label> -->
                                </div>
                                <div class="col-md-4">
                                    <label class="form-group">
                                        <input type="radio" id="type" style="margin-left:20px;" name="type" value="Distributable" disabled="disabled" @if($furnitureDetails->type=='Distributable') checked="checked" @endif>Inventory
                                        <input type="hidden" id="catetypee" name="type" value="{{$furnitureDetails->type}}">
                                    </label>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="category">Category</label>
                                        <div class="">
                                           <select class="form-control" id="category" style="width:100%" name="category" onchange="change_subcategory(this.value)" >
                                                
                                                @foreach($category as $cate_key=>$val_cate)
                                                    <option value="{{$val_cate->category}}" @if($furnitureDetails->category==$val_cate->category) selected @endif>{{$val_cate->category}}</option>
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
                                <div class="col-md-4">
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
                                                <option value="{{$furnitureDetails->sub_category}}" >{{$furnitureDetails->sub_category}}</option>
                                               
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
                                            <input id="new_subcategory" style="width: 100%" ng-model="new_subcategory" type="text" class="form-control" name="new_subcategory" ng-pattern="/^[a-zA-Z0-9_ ]+$/">
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
                                        <label for="Itemname" >Item Name</label>
                                        <div class="">
                                            <input id="Itemname" type="text" class="form-control" name="Itemname" value="{{$furnitureDetails->item_name}}" required style="width: 100%">
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
                                            <input id="quantity" type="text" class="form-control" name="quantity" value="{{$furnitureDetails->quantity}}" required style="width: 100%">
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
                                            <input id="purchaserate" type="text" class="form-control" name="purchaserate" value="{{$furnitureDetails->purchaserate}}" required style="width: 100%">
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
                                            <input id="distributionrate" type="text" class="form-control" name="distributionrate" value="{{$furnitureDetails->distribute_rate}}" ng-required="catetype!=null && catetype=='Distributable'" style="width: 100%">
                                            @if ($errors->has('distributionrate'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('distributionrate') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="comment" >Remarks</label>
                                        <div class="">
                                            <input id="remarks" type="text" class="form-control" name="remarks" value="{{$furnitureDetails->comment}}"  style="width: 100%">
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
                                        <button type="submit" class="btn btn-info btn-block">Update</button>
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