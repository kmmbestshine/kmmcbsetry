@extends('users.layouts.default')
@section('title', 'Collection')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Collection</li>
</ul>
@endsection
@section('contant')
        @if(\Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('success') !!} </strong> 
                </div>
            </div>
        @endif
         @if(\Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('error') !!} </strong> 
                </div>
            </div>
        @endif
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Student Payment Details</h3>
                        </div>
                        <div class="panel-body">
                           <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                            <div class="panel-heading" align="center">
                            <h3 >{{$school->school_name}}</h3>
                        </div>
                            <table>
                            
                            <tr>
                                
                                <td ><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Name : {{$student->name}} </b></h5></td>
                               <tr> <td ><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Registration No : {{$student->registration_no}}</b></h5></td></tr>
                               <tr> <td><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Class: {{$class}}</b></h5></td></tr>
                                <td><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Section: {{$sec}}</b></h5></td>
                                
                            </tr>
                        </table>  
                        <form method="post" action="{{route('user.checkboxamtnew')}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                <div class="panel-heading">
                                <h3 class="panel-title">Fee Details</h3>
                                </div>
                        
                        @if(!empty($unpaid_ids))
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Term Type</th>
                                <th>Fees Name</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1;  ?>
                            <?php for($i = 0; $i<count($unpaid_ids); $i++) : ?>
                            <tr>
                                
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 5%"><input type="hidden" name="checkboxterm[]" value="{{ $unpaid_type[$i] }}" > {{$unpaid_type[$i]}}<br></td>
                                <td style="width: 25%"><div class="input-field"><input type="checkbox" name="t1_feename[]" value="{{$unpaid_ids[$i]}}" checked > {{ $unpaid_feename[$i] }} <span class="fee-format"></span><br></div></td>
                                <td style="width: 10%"><input type="hidden" name="checkboxamt[]" value="{{ $unpaid_amt[$i] }}" > {{$unpaid_amt[$i]}}<br></td>
                            
                            </tr>
                                <th><input type="hidden" name="paytype[]" value="{{ $term_type[$i] }}" ></th>
                                <th><input type="hidden" name="student_id" value="{{ $single_student }}" ></th>
                                <th><input type="hidden" name="register_no" value="{{ $register_no }}" ></th>
                                <?php endfor ?>
                                <tr>
                                    <th colspan="2"></th>
                                    <th ><p align="right">Total Balance Amount</p></th>
                                    <th>{{$unpaid_totamt}}</th>
                                </tr>
                           <tbody>
                        </table>
                        @endif
                              
                        </div>
                            
                        <div>
                        
                               
                               <th><input type="submit"name="amt" class="btn btn-primary" value='SUBMIT' ></th>
                               <p id="msg"></p>
                        </div>
                        </form>
                        <form method="post" action="{{route('user.checkboxamtnew')}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                <div class="panel-heading">
                                <h3 class="panel-title">Bus Fee Details</h3>
                                </div>
                        
                        
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Bus No</th>
                               <th>Bus Route</th>
                               <th>Boarding</th>
                                <th>Fees Name</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(!empty($unpaid_busids))
                            <?php $j=1;  ?>
                            <?php for($i = 0; $i<count($unpaid_busids); $i++) : ?>
                            <tr>
                                
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                               <td style="width: 5%"><input type="hidden" name="checkboxbusno[]" value="{{ $unpaid_bus_id[$i] }}" > {{$unpaid_busno[$i]}}<br></td>
                               <td style="width: 5%"><input type="hidden" name="checkboxroute[]" value="{{ $unpaid_route_id[$i] }}" > {{$unpaid_route[$i]}}<br></td>
                                <td style="width: 5%"><input type="hidden" name="checkboxboard[]" value="{{ $unpaid_bus_id[$i] }}" > {{$unpaid_boarding[$i]}}<br></td>
                                <td style="width: 25%"><div class="input-field"><input type="checkbox" name="t1_feename[]" value="{{$unpaid_busids[$i]}}" checked > {{ $unpaid_busfeename[$i] }} <span class="fee-format"></span><br></div></td>
                                <td style="width: 10%"><input type="hidden" name="checkboxamt[]" value="{{ $unpaid_busmt[$i] }}" > {{$unpaid_busmt[$i]}}<br></td>
                            
                            </tr>
                                <th><input type="hidden" name="paytype[]" value="{{ $term_type[$i] }}" ></th>
                                <th><input type="hidden" name="student_id" value="{{ $single_student }}" ></th>
                                <th><input type="hidden" name="register_no" value="{{ $register_no }}" ></th>
                                <?php endfor ?>
                                <tr>
                                    <th colspan="4"></th>
                                    <th ><p align="right">Total Balance Amount</p></th>
                                    <th>{{$unpaid_bustotamt}}</th>
                                </tr>
                                @endif
                           <tbody>
                        </table>
                        
                              
                        </div>
                            
                        <div>
                        
                               
                               <th><input type="submit"name="amt" class="btn btn-primary" value='SUBMIT' ></th>
                        </div>
                        </form>
                    
                    <div class="panel-body">
                        <div class="panel-heading">
                            <h3 class="panel-title">Paid Details</h3>
                        </div>
                                @if(!empty($unique_paid_id))
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Date</th>
                               <th>Receipt No</th>
                                <th>Term Type</th>
                                <th>Fees Name</th>
                                <th>Payment Mode</th>
                                <th>Cheque/Trans No</th>
                                <th>Cheque Date</th>
                                <th>Bank Name</th>
                                <th>Collected By</th>
                                <th>Paid Amount</th>
                                <th>Concession</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1;  ?>
                            <?php for($m = 0; $m<count($unique_paid_id); $m++) : ?>
                            <tr>
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td>{{$allpaid_date[$m]}}</td>
                                <td>{{$invoiceids[$m]}}</td>
                                <td>{{$allpaid_termType[$m]}}</td>
                               <td>{{$allpaid_feeName[$m]}}</td>
                                <td>{{$allpaid_paymentmode[$m]}}</td>
                                <td>{{$allpaid_cheqNo[$m]}}{{$allpaid_onlineTfno[$m]}}</td>
                                <td>{{$allpaid_cheqDate[$m]}}</td>
                                <td>{{$allpaid_bankname[$m]}}{{$allpaid_onlinebkName[$m]}}</td>
                                <td>{{$allpaid_recvdby[$m]}}</td>
                                <td>{{$allpaid_amt[$m]}}</td>
                                <td>{{$allconcession_amt[$m]}}</td>
                                <td>{{$allpaid_amt[$m]}}</td>
                            </tr>
                                <?php endfor ?>
                                <tr>
                                    <th colspan="9"></th>
                                    <th>Total</th>
                                    <th>{{$total_paidAmt}}</th>
                                </tr>
                           <tbody>
                        </table>
                        @endif
                        </div>
                        <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="get" action="{{ route('DuplicateReceipt') }}" >
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>DUPLICATE RECEIPT</strong></h3>
                           
                        </div>
                        <div class="panel-body">
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Receipt No</label>
                                        <div class="col-md-9">
                                            <select class="form-control cpaymentclass" name="recptNo">
                                                <option value="">Select Receipt </option>
                                                @foreach($unique_receipt as $unique_rept)
                                                    <option value="{{$unique_rept}}">{{$unique_rept}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Get Duplicate Receipt</button>
                                </div>
                            </div>
                        <br/>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="get" action="" >
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>DELETE RECEIPT</strong></h3>
                           
                        </div>
                        <div class="panel-body">
                            
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Receipt No</label>
                                        <div class="col-md-9">
                                            <select class="form-control cpaymentclass" name="recptNo">
                                                <option value="">Select Receipt </option>
                                                @foreach($unique_receipt as $unique_rept)
                                                    <option value="{{$unique_rept}}">{{$unique_rept}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info btn-lg">Delete Receipt</button>
                                </div>
                            </div>
                        <br/>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $("#btn-mail").change(function () 
  {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});   
function check_checkboc(id)
        {
            var fee = id.split("_");
            var fee_id = fee[2];
            if($('#select_all_'+fee_id).prop("checked")== true)
            {
                $('#select_all_'+fee_id).prop("checked", true);
            }
            else
            {
                $('#select_all_'+fee_id).prop("checked", false);
            }
        }  
</script>
<script type="text/javascript">

function printScreen(divID) {
    //Get the HTML of div
    var divElements = document.getElementById(divID).innerHTML;
    //Get the HTML of whole page
    var oldPage = document.body.innerHTML;
    var SchoolName = $(".school-name").attr("attr-name");
    //Reset the page's HTML with div's HTML only
    document.body.innerHTML = 
      "<html><head><title>"+SchoolName+"</title></head><body>" + 
      divElements + "</body>";

    //Print Page
    window.print();

    //Restore orignal HTML
    document.body.innerHTML = oldPage;
}
 </script>
 
@endsection












