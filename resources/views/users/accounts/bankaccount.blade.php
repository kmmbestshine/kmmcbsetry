@extends('users.layouts.default')
@section('title', 'Bank Account')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Bank Account</li>
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
                             <div class="page-panel-title">@lang('Bank Account')</div>
               

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('acc.post.bankacc')}}" method="post">
                      {{ csrf_field() }}
                      
                      <div class="form-group{{ $errors->has('acc_no') ? ' has-error' : '' }}">
                          <label for="acc_no" class="col-md-4 control-label">@lang('Account No'): </label>

                          <div class="col-md-6">
                             <input id="acc_no" type="text" class="form-control" name="acc_no" >

                             
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
                          <label for="bank_name" class="col-md-4 control-label">@lang('Bank Name'): </label>

                          <div class="col-md-6">
                             <input type="text" class="form-control" name="bank_name">

                             
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('branch_name') ? ' has-error' : '' }}">
                          <label for="branch_name" class="col-md-4 control-label">@lang('Branch Name'): </label>

                          <div class="col-md-6">
                             <input type="text" class="form-control" name="branch_name">

                             
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

    

@endsection