 @extends('users.layouts.default')
@section('title', 'Selected Student Fee')
@section('cram')
  <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Add Student Wise Payment</a></li>
        <li class="active">Selected Student Fee</li>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Verify Payment Details</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="{{route('user.receivedamountnew')}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                             @if(!empty($fee_name))
                                <div style="float:left; width:100%;">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Term Type</th>
                                            <th> Fees Name</th>
                                            <th> Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $j=1; ?>
                                        <?php for($i = 0; $i < count($fee_name); $i++) : ?>
                                        <tr>
                                            <td style="width: 5%"><?php echo  $j++ ?></td> 
                                            <td width="20%"><b>{{$term_type[$i]}}</b><input type="hidden" value="{{$term_type[$i]}}" name="terms[]"><br></td>  
                                            <td width="50%"><b>{{$fee_name[$i]}}</b><input type="hidden" value="{{$fee_name[$i]}}" name="feenames[]"><br></td> 
                                             <td width="50%"><b> Rs : {{$fee_amt[$i]}}</b><input type="hidden" value="{{$fee_amt[$i]}}" name="feeamts[]"><br></td> 
                                             <input type="hidden" value="{{ $t1_ids[$i] }}" name="idNos[]">
                                             <input type="hidden" value="{{ $tbus_ids[$i] }}" name="busidNos[]">
                                        </tr>
                                            <?php endfor ?>
                                            <tr>
                                                <th colspan="2"></th>
                                                <th ><p align="right">Total Amount</p></th>
                                                <th> Rs : {{$paid_totalAmt}}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2"></th>
                                                <th ><p align="right">Paid Amount</p></th>
                                                <th><input type="text" value="" name="paidAmt"></th>
                                            </tr>
                                            <tr>
                                                <th colspan="2"></th>
                                                <th ><p align="right">Concession Amount</p></th>
                                                <th><input type="text" value="" name="concession"></th>
                                            </tr>
                                             <tr>
                                                <th colspan="2"></th>
                                                <th ><p align="right">Concession Remarks</p></th>
                                                <th><input type="text" value="" name="conces_remarks" maxlength="80"></th>
                                            </tr>
                                             <input type="hidden" value="Rs :{{$paid_totalAmt}}" name="total">
                                        <input type="hidden" value="{{ $single_student->name }}" name="name">
                                        <input type="hidden" value="{{$single_student->class_id}}" name="class_id">
                                        <input type="hidden" value="{{$single_student->section_id}}" name="section_id">
                                        <input type="hidden" value="{{ $session }}" name="session">
                                        <input type="hidden" value="{{ $single_student->registration_no }}" name="reg_no">
                                        <input type="hidden" value="{{ $single_student->id }}" name="student_id">
                                        <input type="hidden" value="{{ $single_student->roll_no }}" name="roll_no">
                                    </tbody>
                                </table>
                            </div>
                            @endif
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
                    <div>
                     <div style="float:left; width:55%; ">
                        <table class="table table-striped table-bordered table-hover" align="left">
                            <thead>
                                    <th><b>Cheque Details</b></th>
                                    <th><b></b></th>
                            </thead>
                           <tbody>
                               <tr>
                                    <td><b>Payment Received By</b></td>
                                    <td>
                                        <input type="text" name="revdby" class="form-control" id="transnoinpaymode" value="{{$received_by}}">
                                    </td>
                                </tr>
                                <br>
                                <tr>
                                    <td><b>Payment Date</b></td>
                                    <td>
                                        <input type="date" class="form-control" name="paydate" value="{{date('Y-m-d')}}">
                                    </td>
                               </tr>
                                <br>
                                <div>
                                <tr>
                               <th><b>Receipt</b></th><td><input type="submit" name="submit" class="btn btn-primary btn-lg" ></td>
                                </tr>
                                </div>
                            </tbody>
                        </table>
                    </div> 
                    <div style="float:right; width:40%; ">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                    <th><b>Student Details</b></th>
                                    <th></th>
                            </thead>
                            <tbody>
                                <div>
                                        <tr><th>Student name   :</th><th><b>{{$single_student->name}}</b></th></tr>
                                        <tr><th>Registration No   :</th><th><b>{{$single_student->registration_no}}</b></th></tr>
                                        <tr><th>Roll No   :</th><th><b>{{$single_student->roll_no}}</b></th></tr>
                                        <tr><th>Class   :</th><th><b>{{$class}}</b></th></tr>
                                        <tr><th>Section   :</th><th><b>{{$section}}</b></th></tr>
                                        <tr><th>Session   :</th><th><b>{{$session}}</b></th></tr>
                                </div>
                            </tbody>
                        </table>
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
@endsection












