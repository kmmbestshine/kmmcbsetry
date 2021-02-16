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
    <div class="page-content-wrap" ng-app="app" ng-controller="expcontroller">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Edit Expenditure</center></h3>
                    </div>
                        <div class="panel-body">
                            <form class="form-inline" method="POST" action="{{ route('updateExpenditure',$expenseView->id) }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('expdate') ? ' has-error' : '' }}" style="width: 100%">
                                            <label for="expdate" >Date</label>
                                            <div class="">
                                                <input id="expdate" style="text-align: center;width: 100%" type="date" class="form-control" name="expdate" value="{{ $expenseView->date}}" required>
                                                @if ($errors->has('expdate'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('expdate') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('toname') ? ' has-error' : '' }}" style="width: 100%">
                                            <label for="toname" >Name</label>
                                            <div class="">
                                                <input id="toname" type="text" class="form-control" style="width: 100%" name="toname" value="{{ $expenseView->name }}" required>
                                                @if ($errors->has('toname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('toname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}" style="width: 100%">
                                            <label for="purpose" >Purpose</label>
                                            <div class="">
                                                <input id="purpose" type="text" class="form-control" style="width: 100%" name="purpose" value="{{ $expenseView->purpose }}" required>
                                                @if ($errors->has('purpose'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('purpose') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" style="width: 100%">
                                            <label for="category">Category</label>
                                            <div class="">
                                               <select class="form-control" id="category" name="category" style="width: 100%" >
                                                    <option value=""></option>
                                                    @foreach($expenditure as $exp_key=>$val_exp)
                                                        <option value="{{$val_exp->category}}" @if( $expenseView->category==$val_exp->category) selected @endif>{{$val_exp->category}}</option>
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
                                            <label for="newcategory" >Add New Category</label>
                                            <div class="">
                                                <input id="newcategory" style="width: 100%" ng-model="newcategory" type="text" class="form-control" name="newcategory" ng-pattern="/^[a-zA-Z0-9_ ]+$/">
                                                @if ($errors->has('toname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('toname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="margin-top:20px;">
                                        <label for="purpose" ></label>
                                        <div class="col-md-2">
                                            <input id="purpose" type="button" ng-click="addexpcategory()" class="btn btn-info btn-block" name="add" value="Add">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div style="width:100%" class="form-group{{ $errors->has('Description') ? ' has-error' : '' }}">
                                            <label for="Description" >Description</label>
                                            <div class="">
                                                <textarea id="Description" style="width:100%" class="form-control" name="Description">{{ $expenseView->descrption }}</textarea>
                                                @if ($errors->has('Description'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('Description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                            <label for="quantity" >Quantity</label>
                                            <div class="">
                                                <input id="quantity" type="text" class="form-control" name="quantity" value="{{ $expenseView->quantity }}" required>
                                                @if ($errors->has('quantity'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('quantity') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                            <label for="comment" >Comment</label>
                                            <div class="">
                                                <input id="comment" type="text" class="form-control" name="comment" value="{{ $expenseView->comment }}" required>
                                                @if ($errors->has('comment'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('comment') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                                <label for="date" >Amount</label>
                                                <div class="">
                                                    <input id="amount" type="text" class="form-control" name="amount" value="{{ $expenseView->amount }}" required>
                                                    @if ($errors->has('amount'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('amount') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('approvedby') ? ' has-error' : '' }}">
                                                <label for="approvedby" >Approved By</label>
                                                <div class="">
                                                    <input id="approvedby" type="text" class="form-control" name="approvedby" value="{{ $expenseView->approved_by }}" required>
                                                    @if ($errors->has('approvedby'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('approvedby') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('givenby') ? ' has-error' : '' }}">
                                                <label for="givenby" >Given By</label>
                                                <div class="">
                                                    <input id="givenby" type="text" class="form-control" name="givenby" value="{{ $expenseView->given_by }}" required>
                                                    @if ($errors->has('givenby'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('givenby') }}</strong>
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