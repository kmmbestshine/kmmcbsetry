@extends('users.layouts.default')
@section('title', 'Purchase Order')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Purchase Order</li>
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
             
                    <div class="table-responsive">
                      <table class="table table-data-div table-bordered table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">@lang('Purchase Order No')</th>
                            <th scope="col">@lang('Category Name')</th>
                            <th scope="col">@lang('Address')</th>
                            <th scope="col">@lang('Phone No')</th>
                            <th scope="col">@lang('Print PO')</th>
                            <th scope="col">@lang('Action')</th>
                            <th scope="col">@lang('Delete')</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $j=1; ?>
                          @foreach($purchase_orders as $po)
                                    <?php 
                                        $purchases = DB::table('purchases')->where('po_id', $data->po_id)->count();
                                        $created_at = explode(' ', $po->created_at);
                                    $created_at = $created_at[0];
                                    ?>
                          <tr>
                            <td><?php echo  $j++ ?></td>
                            <td>{{$po->po_id}}</td>
                            <td>{{$po->ventor_name}}</td>
                            <td>{{$po->address}}</td>
                            <td>{{$po->phone_no}}</td>
                            <td><a title='Edit' class='btn btn-info btn-sm' href='{{url("print/order/purchase")}}/{{$po->po_id}}'>@lang('Print PO')</a></td>
                            <td><a href='{{url("purchase/update-goods")}}/{{$po->po_id}}' class="btn btn-danger"  >@lang('Fill Purchased Bill')</a></td>
                           {{-- <td>@if($purchases > 0)
                                                    <a href='{{url("purchase/update-goods")}}/{{$po->po_id}}' class="btn btn-danger"  >@lang('Fill Purchased Bill')</a>
                                                    @else
                                                    <a href='{{url("purchase/update-goods")}}/{{$po->po_id}}' class="btn btn-info btn-sm"  disabled>@lang('Fill Purchased Bill')</a>
                                                     @endif
                                                 </td>--}}
                            <td>
                                    <a href='{{url("purchase/delete-goods")}}/{{$po->po_id}}' class="btn btn-danger btn-xs" role="button">@lang('Delete')</a>
                                </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      
                    </div>
                   
                    <div class="form-group">
                        <div class="col-md-1">
                                <a href="{{route('purchase.add.order')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                      </div>
            </div>
          </div>
    </div>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript">
$('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td><input type="text" class="fname" name="goodsname[]" placeholder="Enter Goods Name" required/></td><td><input type="text" class="fname" name="order_qty[]" placeholder="Enter Order Quandity" required/></td><td><input type="text" class="fname" name="p_qtu[]" placeholder="Enter Purchased Quandity"  /></td><td><input type="text" class="fname" name="u_price[]" placeholder="Enter Unit Price"  /></td><td><input type="text" class="fname" name="units[]" placeholder="Enter Units"  /><td><input type="text" class="fname" name="amt[]" placeholder="Enter Amount"  /></td></td><td><input type="button" value="Delete" class="btn btn-danger remove"/></td></tr>')
});
    </script>
    <script>
function deleteRow(id,row) {
    document.getElementById(id).deleteRow(row);
}

function insRow(id) {  
    var filas = document.getElementById("myTable").rows.length;
    var x = document.getElementById(id).insertRow(filas);
    var y = x.insertCell(0);
    var z = x.insertCell(1);
    y.innerHTML = '<input type="text" id="fname">';
    z.innerHTML ='<button id="btn" name="btn" > Delete</button>';
}
</script>
 <script>
        document.getElementById('iban').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
        });
  </script>

@endsection