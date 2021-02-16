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
                        <h3 class="panel-title"><center>Add Expenditure</center></h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-inline" method="POST" action="{{ route('user.postExpenditure') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div style="width: 100%" class="form-group{{ $errors->has('expdate') ? ' has-error' : '' }}">
                                        <label for="expdate" >Date</label>
                                        <div class="">
                                            <input id="expdate" style="text-align: center; width: 100%" type="date" class="form-control" name="expdate" value="{{ old('expdate') }}" required>
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
                                            <input id="toname" style="width: 100%" type="text" class="form-control" name="toname" value="{{ old('toname') }}" required>
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
                                            <input id="purpose" type="text" style="width: 100%" class="form-control" name="purpose" value="{{ old('purpose') }}" required>
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
                                <div class="col-md-4">
                                    <div class="form-group" style="width: 100%">
                                        <label for="toname" >Add New Category</label>
                                        <div class="">
                                            <input id="newcategory" style="width: 100%" ng-model="newcategory" type="text" class="form-control" name="newcategory" ng-pattern="/^[a-zA-Z0-9_ ]+$/">
                                            
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

                           <!-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('Description') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="Description" >Description</label>
                                        <div class="">
                                            <textarea id="Description" class="form-control" style="width: 100%" name="Description">{{ old('Description') }}</textarea>
                                           
                                            @if ($errors->has('Description'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="quantity" >Quantity</label>
                                        <div class="">
                                            <input id="quantity" type="text" class="form-control" style="width: 100%" name="quantity" value="{{ old('quantity') }}" required>
                                            @if ($errors->has('quantity'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}" style="width: 100%">
                                        <label for="comment" >Comment</label>
                                        <div class="">
                                            <input id="comment" type="text" style="width: 100%" class="form-control" name="comment" value="{{ old('comment') }}" required>
                                            @if ($errors->has('comment'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('comment') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <br>
                            <div class="row">
                             <div style="float:left; width:100%; ">
                        <table class="table  table-bordered table-hover" >
                            <tbody>
                                <tr>
                                    <td><b>Payment Mode</b></td>
                                    <td>
                                    <select name="pmMode" class="form-control" id="pmMode" onchange = "selectpaymentmode()" required>
                                        <option value="">Select Mode</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Online">Online</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr id="trCheq">
                                    <td><b>Cheq No</b></td>
                                    <td>
                                        <input type="text" name="cheqno" class="form-control" id="cheqno">
                                    </td>
                                    <td><b>Cheq Date</b></td>
                                    <td>
                                        <input type="date" class="form-control" name="cheqdate" id="cheqdate">
                                    </td>
                                    <td><b>Bank Name</b></td>
                                    <td>
                                        <input type="text" name="bank_name" class="form-control" id="bank_name">
                                    </td>
                                </tr>
                               <tr id="trTrans">
                                    <td><b>Trans No</b></td>
                                    <td>
                                        <input type="text" name="trans_no" class="form-control" id="trans_no">
                                    </td>
                                    <td><b>Bank Name</b></td>
                                    <td>
                                        <input type="text" name="bank_name1" class="form-control" id="bank_name1">
                                    </td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}" style="width: 100%">
                                            <label for="date" >Amount</label>
                                            <div class="">
                                                <input id="amount" type="text" style="width: 100%" class="form-control" name="amount" value="{{ old('amount') }}" required>
                                                @if ($errors->has('amount'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('approvedby') ? ' has-error' : '' }}" style="width: 100%">
                                            <label for="approvedby" >Approved By</label>
                                            <div class="">
                                                <input id="approvedby" type="text" style="width: 100%" class="form-control" name="approvedby" value="{{ old('approvedby') }}" required>
                                                @if ($errors->has('approvedby'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('approvedby') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('givenby') ? ' has-error' : '' }}" style="width: 100%">
                                            <label for="givenby" >Given By</label>
                                            <div class="">
                                                <input id="givenby" type="text" class="form-control" style="width: 100%" name="givenby" value="{{ old('givenby') }}" required>
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
                                        <button type="submit" class="btn btn-info btn-block">Create</button>
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
    <script type="text/javascript">
    window.onload=function()
    {
        document.getElementById("trTrans").style.display='none';
        document.getElementById("trCheq").style.display='none'; 
    }
        function selectpaymentmode()
        { 
    var paymentmode=document.getElementById("pmMode").value;  
    if(paymentmode == "Cheque")
    {
        document.getElementById("trTrans").style.display='none';
        document.getElementById("trCheq").style.display='';
    }
    else if(paymentmode == "Online")
    {
        document.getElementById("trTrans").style.display='';
        document.getElementById("trCheq").style.display='none';
    }
    else
    {
       document.getElementById("trTrans").style.display='none';
        document.getElementById("trCheq").style.display='none'; 
    }
        }
    </script>
@endsection('contant')