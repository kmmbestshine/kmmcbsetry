@extends('users.layouts.default')
@section('title', 'Income')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Income</li>
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
                             <div class="page-panel-title">@lang('Add New Income / Create Invoice')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('acc.add.storeIncome')}}" method="post">
                      {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">@lang('Category Name')</label>

                          <div class="col-md-6">
                              <select class="form-control" id="sector_name" name="sector_name">
                                @foreach($sectors as $sector)
                                  <option value="{{$sector->id}}">{{$sector->name}}</option>
                                @endforeach
                              </select>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                     
                      <div class="form-group{{ $errors->has('income_source') ? ' has-error' : '' }}">
                          <label for="income_source" class="col-md-4 control-label">@lang('Received From'): </label>

                          <div class="col-md-6">
                             <input id="received_from" type="text" class="form-control" name="received_from" >

                             
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('income_source') ? ' has-error' : '' }}">
                          <label for="income_source" class="col-md-4 control-label">@lang('Date'): </label>

                          <div class="col-md-6">
                             <input type="date" class="form-control" name="date">

                             
                          </div>
                      </div>
                    
                      <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                          <label for="amount" class="col-md-4 control-label">@lang('Amount')</label>

                          <div class="col-md-6">
                              <input id="amount" type="number" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="@lang('Amount')" required>

                              @if ($errors->has('amount'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('amount') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                     
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-4 control-label">@lang('Description')</label>

                          <div class="col-md-6">
                              <textarea rows="3" id="description" class="form-control" name="description" placeholder="@lang('Description')" required>{{ old('description') }}</textarea>

                              @if ($errors->has('description'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="col-md-7">
                      <div style="float:center; width:100%; ">
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
                                    <br>
                                    <td><b>Cheq Date</b></td>
                                    <td>
                                        <input type="date" class="form-control" name="cheqdate" id="cheqdate">
                                    </td>
                                    <br>
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
                       <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-danger">@lang('Save')</button>
                        </div>
                        
                      </div>
                    </form>
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
    

@endsection