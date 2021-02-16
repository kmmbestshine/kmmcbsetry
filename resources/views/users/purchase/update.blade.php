@extends('users.layouts.default')
@section('title', 'Update Purchase Order')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Update Purchase Order</li>
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
                             <div class="page-panel-title">@lang('Update Purchase Order')</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('purchase.order.update')}}" method="post">
                      {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">@lang('Category Name')</label>

                          <div class="col-md-6">
                              <input type="text" class="fname" name="ventor_name" value="{{$ventors->ventor_name}}" readonly/>
                          </div>
                      </div>
            <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                 <th> DESCRIPTION</th>
                 <th> ORDER QTY</th>
                 <th> UNITS</th>
                 <th> ISSUED QTY</th>
                 <th> UNIT PRICE</th>
                 <th> AMOUNT</th>
                </tr>
                </thead>
            <tbody>
            <?php $j=1; ?>
            @foreach($purchases as $po)
              <tr>
                  <td>
                      <input type="text" class="fname" name="goodsname[]" value="{{$po->goods_name}}" readonly/>
                  </td>
                  <td>
                      <input type="text" class="fname" name="order_qty[]" value="{{$po->order_qty}}" readonly/>
                  </td>
                  <td>
                      <input type="text" class="fname" name="units[]" value="{{$po->units}}"  />
                  </td>
                  <td>
                      <input type="text" class="fname" name="p_qtu[]"    />
                  </td>
                  <td>
                      <input type="text" class="fname" name="u_price[]"  />
                  </td>
                  <td>
                      <input type="text" class="fname" name="amt[]"    />
                      
                  </td>
              </tr>
              @endforeach
              </tbody>
          </table>
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-2 control-label">@lang('Total Amount')</label>
                          <div class="col-sm-offset-1 col-sm-8">
                              <input type="text" class="paid" name="tot_amt" value="{{$purchase_nos-> totalamount}}" />
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-2 control-label">@lang('Paid Amount')</label>
                          <div class="col-sm-offset-1 col-sm-8">
                              <input type="text" class="paid" name="paid_amt" value="{{$purchase_nos->paidamount}}" />
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-2 control-label">@lang('Due Amount')</label>
                          <div class="col-sm-offset-1 col-sm-8">
                              <input type="text" class="paid" name="due_amt" value="{{$purchase_nos->dueamount}}" />
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-2 control-label">@lang('Remarks')</label>

                          <div class="col-sm-offset-1 col-sm-8">
                              <textarea rows="3" id="remarks" class="form-control" name="remarks" value="{{$purchase_nos->remarks}}" ></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-1">
                          <input type="hidden" class="paid" name="po_id" value="{{$purchase_nos->po_id}}" />
                          <input type="hidden" class="paid" name="ventor_id" value="{{$purchase_nos->ventor_id}}" />
                          <button type="submit" class="btn btn-info">@lang('Save')</button>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1">
                                <a href="{{route('purchase.add.order')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                      </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
