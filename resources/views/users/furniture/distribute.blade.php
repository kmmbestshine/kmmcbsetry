@extends('users.layouts.default')
@section('title', 'Distribute Furniture')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Distribute</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>Inventory-Sales</h2>
</div>
 	<div class="page-content-wrap">
        @if(Input::old('fail'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh Snap!</strong> {{ Input::old('fail') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel panel-info">
                        <div class="panel-heading"> 
                            <h3 class="panel-title"><center>Inventory - Sales</center></h3>
                        </div>
                    </div>
                    <div class="panel-body ">
                        <form class="form-inline" method="POST" action="{{ route('distributePost') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="category">Category</label>
                                        <div class="" >
                                           <select class="form-control"  id="category" style="width: 100%" name="category"  >
                                                <option value="{{$furniturelist->category}} " selected="selected">{{$furniturelist->category}} </option>
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
                                    <div class="form-group{{ $errors->has('subcategory') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="subcategory">Sub-Category</label>
                                        <div class="" >
                                           <select class="form-control" id="subcategory" style="width:100%" name="subcategory" >
                                                <option value="{{$furniturelist->sub_category}}"  selected="selected">{{$furniturelist->sub_category}}</option>
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
                                    <div class="form-group{{ $errors->has('rate') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="rate" >Rate</label>
                                        <div class="">
                                            <select class="form-control" id="rate" style="width:100%" name="rate" >
                                                <option value="{{$furniturelist->distribute_rate}}"  selected="selected">{{$furniturelist->distribute_rate}}</option>
                                            </select>
                                            @if ($errors->has('rate'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('rate') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('Itemname') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="Itemname" >Item Name</label>
                                        <div class="">
                                            <select class="form-control" id="rate" style="width:100%" name="Itemname" >
                                                <option value="{{ $furniturelist->item_name }}"  selected="selected">{{ $furniturelist->item_name }}</option>
                                            </select>
                                            @if ($errors->has('Itemname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Itemname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}" style="width:100%">
                                        <label for="quantity" >Avalable Quantity</label>
                                        <div class="">
                                            <input type="hidden" name="availquantity" id="availquantity" value="{{$furniturelist->quantity}}">
                                            <input type="hidden" name="stockid" id="stockid" value="{{$furniturelist->id}}">
                                            <span style="font-weight: bold;">{{$furniturelist->avail_quantity}}</span>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="quantity" >Quantity</label>
                                        <div class="">
                                            <input id="quantity" style="width: 100%" type="text" class="form-control" name="quantity" value="" required >
                                            @if ($errors->has('quantity'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="class_id" >Select Class</label>
                                        <div class="">
                                            <select class="form-control" id="class_id" style="width:100%" name="class_id" onchange="get_section_id(this.value)" >
                                                <option value=""></option>
                                                @foreach($class_id as $key_class=>$value_class)
                                                    <option value="{{ $value_class->id }}"  >{{ $value_class->class }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('class_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('class_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="section_id" >Select Section</label>
                                        <div class="">
                                            <select class="form-control" id="section_id" style="width:100%" name="section_id" onchange="get_student_id(this.value)" disabled >
                                            </select>
                                            @if ($errors->has('section_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('section_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('Student_id') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="Student_id" >Select Student</label>
                                        <div class="">
                                            <select class="form-control" id="Student_id" style="width:100%" name="Student_id" disabled>
                                            </select>
                                            @if ($errors->has('Student_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Student_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="comment" >Comment</label>
                                        <div class="">
                                            <input id="comment" style="width: 100%" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required>
                                            @if ($errors->has('comment'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('comment') }}</strong>
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
                                        <button type="submit" class="btn btn-info btn-block">Distribute</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{route('distriFurnitureList')}}" class="btn btn-info">Back</a>
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