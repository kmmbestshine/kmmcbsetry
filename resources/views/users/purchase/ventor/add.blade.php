@extends('users.layouts.default')
@section('title', 'Ventor')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Ventor</li>
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
         <div class="text-right">
                          <a href="{{route('ventor.view.purchase')}}" class="btn btn-info btn-rounded">View Vendor</a>
                            &nbsp;&nbsp;&nbsp;
                              
                        </div>
        <div class="row">
            <div class="col-md-12">
                             <div class="page-panel-title">@lang('Add New Ventor ')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('ventor.add.store')}}" method="post">
                      {{ csrf_field() }}
                      
                     
                      <div class="form-group{{ $errors->has('income_source') ? ' has-error' : '' }}">
                          <label for="income_source" class="col-md-4 control-label">@lang(' Name'): </label>

                          <div class="col-md-6">
                             <input id="ventor_name" type="text" class="form-control" name="ventor_name" >

                             
                          </div>
                      </div>
                      
                    
                     
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-4 control-label">@lang('Address')</label>

                          <div class="col-md-6">
                              <textarea rows="3" id="address" class="form-control" name="address" placeholder="@lang('address')" ></textarea>

                             
                          </div>
                      </div>
                       <div class="form-group{{ $errors->has('income_source') ? ' has-error' : '' }}">
                          <label for="income_source" class="col-md-4 control-label">@lang(' Phone No'): </label>

                          <div class="col-md-6">
                             <input id="phone_no" type="number" class="form-control" name="phone_no" >

                             
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-1">
                          <button type="submit" class="btn btn-danger">@lang('Save')</button>
                        </div>
                        <div class="col-md-1">
                                <a href="{{route('purchase.add.order')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    

@endsection