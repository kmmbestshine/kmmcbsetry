@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<div ng-app="app">
<div class="container" ng-controller="feeRecipt">
	<div class="row">
		<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-10 col-xs-offset-1" id="paymentRecipt">
		
			<div class="row">
				<h3 class="text-center">PAYMENT RECIPT</h3>
			</div>
			<?php $school = $recipt['school'];?>
			<?php $student = $recipt['student']; ?> 
			<?php $fee = $recipt['fee']; ?>
			<?php $payment = $recipt['payment']; ?>
			<?php $class = $recipt['class']; 
                  $recived_amount = $recipt['recivedAmount']; 
                  $fee_amount = $recipt['feeAmount'];?>
			
			<div class="row">
				<div class="text-center">
					<h4>{{$school->school_name}}</h4>
					<div class="row"> 
						{{$school->address}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="row  border-top-bottom">
					<div class ="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1">
						<label>RECORD NO : </label>{{$payment->id}}
					</div>
					<div class ="col-md-offset-3 col-md-4 col-sm-offset-3 col-sm-4 col-xs-offset-3 col-xs-4">
						<label>DATE : </label>{{$payment->date}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1">
						<label>Registration No : </label>{{$student->registration_no}}
					</div>
					<div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1">
						<label>Class : </label>{{$class}}
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<label>Student : </label>{{$student->name}}
					</div>
				</div>
				@if($fee->payment_type == 'MONTHLY')
                                <?php $currentPaiedMonth = $recipt['currentPaiedMonth']; ?>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<label>Fee For : </label>
						
						@foreach($currentPaiedMonth as $key=>$values)
                                                    {{$values}}
						@endforeach
					</div>
				</div>
				@endif
			</div>
                    <!-- 
			<div class="row border-top-bottom">
				<div class="col-md-1 col-sm-1 col-xs-1">
					SNO
				</div>
				<div class="col-md-3 col-sm-3  col-xs-3">
					FEES NAME
				</div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
					FEES TYPE
				</div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
					PAYMENT MODE
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2">
					AMOUNT
				</div>
                                
			</div>
                        <hr>
			<div class="row">
				<div class="col-md-1 col-sm-1 col-xs-1">
					1.
				</div>
				<div class="col-md-3 col-sm-3  col-xs-3">
					{{$fee->fees_name}}
				</div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
					{{$fee->payment_type}}
				</div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
					{{$payment->payment_type}}
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2">
					{{$fee->amount}}
				</div>
                                
			</div>
			<hr>-->
            <div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5">
                    <b>FEES TYPE : </b> {{$fee->payment_type}}
				</div>
				<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-5 col-xs-offset-2">
					<b>PAYMENT MODE :</b> {{$payment->payment_type}}
				</div>
			</div>
            <div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
                    <b>Fees Name</b>
				</div>
				<div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">
					<b>Amount</b>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
					{{$fee->fees_name}}
				</div>
				<div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">
                    <b>{{$fee_amount}}</b>
                    @if($fee->payment_type == 'MONTHLY')
                    <b> X 1</b>
                    <?php $fee_amount = $fee_amount * 1; ?>
                    @endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3 ">
					<label>Late fee(+)</label>
				</div>
				<div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">
					<b>{{$payment->late_fee}}</b>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<label>Concession(-)</label>
				</div>
				<div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">
					<b>{{$payment->concession}}</b>
				</div>
			</div>
			<hr>
            <div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3"><b>GRAND TOTAL</b></div>
                <?php $grand_total = ($fee_amount + $payment->late_fee) - $payment->concession;?>
				<div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">{{$grand_total}}</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3"><b>RECIVED AMOUNT</b></div>
				<div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">{{$recived_amount}}</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3"><b>BALANCE AMOUNT</b></div>
				<div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">{{$payment->balance_amount}}</div>
			</div>
			<hr>
            <div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4"><b>RECIVED BY :</b></div>
                <div class="col-md-2 col-md-offset-8  col-sm-2 col-sm-offset-8 col-xs-2 col-xs-offset-8"><b>SIGN:</b></div>
			</div>
            <div class="row"><div class="text-center"><b>Thank you</b></div></div>
		</div>
	</div>
    <button ng-click="print('paymentRecipt')"><span class="glyphicon glyphicon-print"></span></button>	
</div>
</div>
@endsection



































