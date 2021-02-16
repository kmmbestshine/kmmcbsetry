@extends('users.layouts.default')
@section('title', 'Reports')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Reports</li>
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
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Purchase Management</h3>
                </div>
                
            </div>
            <div class="clearfix"></div>
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
            @endif
            @if(Session::has('error_message'))
                <div class="alert alert-danger">
                    {{ Session::get('error_message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Remaining to paid Purchase Details</h2>
                           
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="categorytable">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Purchase Order No</th>
                                    <th>Party Name</th>
                                    <th>Total Amount</th>
                                    <th>Paid Amount</th>
                                    <th>Due Amount</th>
                                    <th>Purchase Date</th>
                                   
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($rempurchase as $pc)
                                    <tr>
                                        <th> {{$i++}}</th>
                                        <td> {{$pc->po_id}}</td>
                                        <td> {{$pc->ventor_name}}</td>
                                        <td> {{$pc->totalamount}}</td>
                                        <td> {{$pc->paidamount}}</td>
                                        <td> {{$pc->dueamount}}</td>
                                        <td> {{$pc->created_at}}</td>
                                        
                                        <td>
                                            <a href="{{route('purchase.update',$pc->purchaseId)}}" class="btn btn-info" onclick="return confirm('Do You Pay Due Amount?????')"><i class="fa fa-check-circle"></i> Clear Paid</a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3"> Grand Total </td>
                                    <td>
                                        <?php $total=0 ?>
                                        @if($rempurchase)
                                            @foreach($rempurchase as $s)
                                                @php
                                                    $price = $s->totalamount;
                                                    $total += $price;
                                                @endphp
                                            @endforeach
                                            Rs. {{$total}}
                                        @endif
                                    </td>
                                    <td>
                                        <?php $total=0 ?>
                                        @if($rempurchase)
                                            @foreach($rempurchase as $s)
                                                @php
                                                    $price = $s->paidamount;
                                                    $total += $price;
                                                @endphp
                                            @endforeach
                                            Rs. {{$total}}
                                        @endif
                                    </td>
                                    <td>
                                        <?php $total=0 ?>
                                        @if($rempurchase)
                                            @foreach($rempurchase as $s)
                                                @php
                                                    $price = $s->dueamount;
                                                    $total += $price;
                                                @endphp
                                            @endforeach
                                            Rs. {{$total}}
                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <form action="{{route('purchase.order.update')}}" method="post">
                                {{csrf_field()}}
                                
                     
                                <div class="col-md-3">
                                    <input class="form-control datepicker" data-toggle="start" type="date" name="start" placeholder="pick Start Date">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control datepicker" data-toggle="end" type="date" name="end" placeholder="pick End Date">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="status">
                                        <option value="">--Select Ventors---</option>
                                        <option value="all"> ALL Ventors</option>
                                        @foreach($ventors as $ven)
                                        <option value="vat"> {{$ven->ventor_name}} </option>
                                        
                                         @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button name="" class="btn btn-info">Import Report</button>
                                    <a href="{{route('purchase.add.order')}}" class="btn btn-info btn-lg">Back</a>
                                </div>
                                 
                            </form>
                        </div>
                        <br>
                        <h2>Clear paid Purchase details</h2>
                        <hr>
                        <div class="x_content">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="categorytable">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Purchase Order No</th>
                                    <th>Party Name</th>
                                    <th>Total Amount</th>
                                    <th>Paid Amount</th>
                                    <th>Due Amount</th>
                                    <th>Purchase Date</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($paidpurchase as $pc)
                                    <tr>
                                        <th> {{$i++}}</th>
                                        
                                         <td> {{$pc->po_id}}</td>
                                        <td> {{$pc->ventor_name}}</td>
                                        <td> {{$pc->totalamount}}</td>
                                        <td> {{$pc->paidamount}}</td>
                                        <td> {{$pc->dueamount}}</td>
                                        <td> {{$pc->created_at}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3"> Grand Total </td>
                                    <td>
                                        <?php $total=0 ?>
                                        @if($paidpurchase)
                                            @foreach($paidpurchase as $s)
                                                @php
                                                    $price = $s->totalamount;
                                                    $total += $price;
                                                @endphp
                                            @endforeach
                                            Rs. {{$total}}
                                        @endif
                                    </td>
                                    <td>
                                        <?php $total=0 ?>
                                        @if($paidpurchase)
                                            @foreach($paidpurchase as $s)
                                                @php
                                                    $price = $s->paidamount;
                                                    $total += $price;
                                                @endphp
                                            @endforeach
                                            Rs. {{$total}}
                                        @endif
                                    </td>
                                    <td>
                                        <?php $total=0 ?>
                                        @if($paidpurchase)
                                            @foreach($paidpurchase as $s)
                                                @php
                                                    $price = $s->dueamount;
                                                    $total += $price;
                                                @endphp
                                            @endforeach
                                            Rs. {{$total}}
                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <script type="text/javascript" src="{{asset('backend/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#categorytable').DataTable();
        });
    </script>
    <script src="{{asset('backend/plugins/datepicker/datepicker.js')}}"></script>
    <script type="text/javascript">
        $('[data-toggle="start"]').datepicker({
            format: 'yyyy-mm-dd'
        });

    $('[data-toggle="end"]').datepicker({
        format: 'yyyy-mm-dd'
    });
    </script>
@endsection

   
