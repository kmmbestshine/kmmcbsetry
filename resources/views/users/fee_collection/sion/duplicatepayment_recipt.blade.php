@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<div ng-app="app">
<div class="container" ng-controller="feeRecipt">
	<div class="row">
	<!-- New payment page -->
    <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2" id="paymentRecipt">
			<?php $fee = $recipt['fee']; ?>
			<?php $payment = $recipt['payment']; ?>
			<?php $class = $input['class_id']; 
                  $recived_amount = $recipt['recivedAmount']; 
                  $fee_amount = $recipt['feeAmount'];?>    
        <div class="row">
        	<h3 style="text-align: center;">PAYMENT RECEIPT (DUPLICATE)</h3>
			<div class="receipt-header">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="receipt-left">
						<img class="img-responsive" alt="student-image" src="{{ asset($school->image) }}" style="width: 30%; border-radius: 43px;">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 text-right">
					<div class="receipt-right">
						<h5>{{ $school->school_name}}</h5>
						<p>+91 {{ $school->mobile }} <i class="fa fa-phone"></i></p>
						<p>{{ $school->email }} <i class="fa fa-envelope-o"></i></p>
						<p>{{ $school->address }} <i class="fa fa-location-arrow"></i></p>
					</div>
				</div>
			</div>
        </div>
		<div class="row">
			<div class="receipt-header receipt-header-mid">
				<div class="col-xs-8 col-sm-8 col-md-8 text-left">
					<div class="receipt-right">
						<h5>{{ $single_student['name'] }} <small>  |   Registration Number : {{ $single_student['registration_no'] }}</small></h5>
						<p><b>Mobile :</b> +91 {{ $single_student['contact_no'] }}</p>
						<p><b>Class :</b> {{ $classes['class'] }}</p>
						<p><b>Record No :</b> {{ $receipt_no }}</p>
					</div>
				</div>
			</div>
        </div>
		<div class="row" >
			<div class="col-xs-12 col-sm-12 col-md-12">
					<p><b>Payment Mode :</b> {{$allpaid_paymentmode}}</p>
			</div>
        </div>
        <div class="panel-body">
        <div >
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr>
                    	<th>S.No</th>
                    	<th>Term Type</th>
                        <th>Description</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $j=1; ?>
                	<?php for($i=0; $i<count($fee_name); $i++) : ?>
                    <tr>
                   <td ><?php echo  $j++ ?></td>
                  <td >{{$term_type[$i]}}</td><br>
                  <td >{{$fee_name[$i]}}</td><br>
                  <td ><i class="fa fa-inr"></i>  {{$amount[$i]}}/-</td>
                    </tr>
                    <?php endfor ?>
                    
                    <tr>                     
                        <th></th><th></th><td class="text-right"><h4><strong>Payable Amount: </strong></h4></td>
                        <td class="text-left text-danger"><h5><strong><i class="fa fa-inr"></i> {{ $tot_amt }}/-</strong></h5></td>
                    </tr>
                    <tr>
                        <th></th><th></th><td class="text-right">
                        
                        <p>
                          <strong>Concession (-): </strong>
                        </p>
						</td>
                        <td>
                        <p>
                            <strong><i class="fa fa-inr"></i> {{ $concession }}/-</strong>
                        </p> 
						</td>
                    </tr>
                    <tr>
                     	
                          <th colspan="2"></th>
                           <th ><p align="right"> Paid Amount</p></th>
                           <th><i class="fa fa-inr"></i> {{$allpaid_amt}}/-</th>
                           
                      </tr>
                     <tr>
                     	
                          <th colspan="2"></th>
                           <th ><p align="right">Balance Amount</p></th>
                           <th><i class="fa fa-inr"></i> {{$tot_amt-$allpaid_amt}}/-</th>
                           
                      </tr>
                    
                </tbody>
            </table>
             <tr>                     
                        <th></th><th></th><td class="text-right"><h4><strong>Concession Remarks: </strong></h4></td>
                        <td class="text-left text-danger"><h5><strong>{{ $conces_remarks }}</strong></h5></td>
                    </tr>
            
           </div>
        </div>
        
		<div class="row">
			<div class="receipt-header receipt-header-mid receipt-footer">
				<div class="col-xs-8 col-sm-8 col-md-8 text-left">
					<div class="receipt-right">
						<p><b>RECIVED BY :</b>{{$teachers}} </p>
						<p><b>Date :</b> {{ $allpaid_date }}</p>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="receipt-left">
						<h1 style="font-weight: bold !important;">Signature</h1>
					</div>
				</div>
			</div>
        </div>
        <div class="row">
			<h5 style="text-align: center;font-weight: bold;">Thank you</h5>
        </div>

    	<button ng-click="print('paymentRecipt')">
			<span class="glyphicon glyphicon-print"></span>
		</button>
  	</div>      
  	</div> 
</div>
</div>
@endsection
<style type="text/css">

	.receipt-main {
		background: #ffffff none repeat scroll 0 0;
		border-bottom: 12px solid #333333;
		border-top: 12px solid #f7a62b;
		margin-top: 50px;
		margin-bottom: 50px;
		padding: 40px 30px !important;
		position: relative;
		box-shadow: 0 1px 21px #acacac;
		color: #333333;
		font-family: open sans;
	}
	.receipt-main p {
		color: #333333;
		font-family: open sans;
		line-height: 1.42857;
	}
	.receipt-footer h1 {
		font-size: 15px;
		font-weight: 400 !important;
		margin: 0 !important;
	}
	.receipt-main::after {
		background: #414143 none repeat scroll 0 0;
		content: "";
		height: 5px;
		left: 0;
		position: absolute;
		right: 0;
		top: -13px;
	}
	.receipt-main thead {
		background: #414143 none repeat scroll 0 0;
	}
	.receipt-main thead th {
		color:#fff;
	}
	.receipt-right h5 {
		font-size: 16px;
		font-weight: bold;
		margin: 0 0 7px 0;
	}
	.receipt-right p {
		font-size: 12px;
		margin: 0px;
	}
	.receipt-right p i {
		text-align: center;
		width: 18px;
	}
	.receipt-main td {
		padding: 9px 20px !important;
	}
	.receipt-main th {
		padding: 13px 20px !important;
	}
	.receipt-main td {
		font-size: 13px;
		font-weight: initial !important;
	}
	.receipt-main td p:last-child {
		margin: 0;
		padding: 0;
	}	
	.receipt-main td h2 {
		font-size: 20px;
		font-weight: 900;
		margin: 0;
		text-transform: uppercase;
	}
	.receipt-header-mid .receipt-left h1 {
		font-weight: 100;
		margin: 34px 0 0;
		text-align: right;
		text-transform: uppercase;
	}
	.receipt-header-mid {
		margin: 24px 0;
		overflow: hidden;
	}
</style>