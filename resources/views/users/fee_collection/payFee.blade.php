@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<!-- <ul class="breadcrumb">
<li><a href="{{route('user.dashboard')}}">Home</a></li>                    
<li class="active">Fee Collection</li>
</ul> -->
@endsection
<style type="text/css">
	.error-msg{
		font-size: 14px;font-weight: bold;color: red;
	}
</style>
@section('contant')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
<div ng-app="app">
<div ng-controller="payFee">
    <div class="container">              
            <div class="row">
			<form method="post" action="{{route('pay')}}" class="pay-fee-form">
				<input type="hidden" value="{{$single_student->id}}" name="studentId" required />
				<input type="hidden" value="{{$fee->id}}" name="feeId" required/>
				<input type="hidden" value="{{$payment_id}}" id="payment_id" required />
				<input type="hidden" value="{{$fee->payment_type}}" name="feeType" required />
				<input type="hidden" value="{{$fee->amount}}" id="feeAmount" name="grandTotal" required />
				{!! csrf_field() !!}
				<div class="col-md-offset-2 col-md-8">
					<div class="row form-group text-center">
						<h3>{{$fee->fees_name}}</h3>
						<input type="hidden" value="{{$fee->fees_name}}" name="feesName" required />
					</div>
					
					<div class="row form-group">
						<div class="col-md-6">
							<label>AMOUNT : </label>
						</div>
						<div class="col-md-6">
							<input type="hidden" id="grandTotal" class="old-grand-total form-control" value="{{$amount}}" name="feeAmount" required />
							<input type="text" class="grand-total form-control" value="{{$amount}}" disabled="" required />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label>Recived AMOUNT : </label>
						</div>
						<div class="col-md-6">
							@if($fee->payment_type == "ONE TIME")
								<input type="text" id="recivedAmount" name="recivedAmount" class="form-control" value="0" required />
								<span class="received-amount-error"></span>
																	@elseif($fee->payment_type == "PREVIOUS YEAR PAYMEN")
										<input type="text" id="recivedAmount" name="recivedAmount" class="form-control" value="0" required />
										<span class="received-amount-error"></span>
							@else
								<input type="text" id="recivedAmount" name="enterRecivedAmount"  class="form-control" value="0" disabled required />
								<input type="hidden" id="recivedAmount" name="recivedAmount" class="form-control" value="0"/>
								<span class="received-amount-error"></span>
							@endif
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label>Date : </label>
						</div>
						<div class="col-md-6">
							<input type="date" id="paymentDate" name="paymentDate" class="form-control" value="{{date('Y-m-d')}}" required />
						</div>
					</div>

					@if($fee->payment_type == "PREVIOUS YEAR PAYMEN" ||$fee->payment_type == "ONE TIME" || count($installments) > 0)
						<!-- calculate late fee -->
						@if($last_paid_date == 0)
							<?php 
							$today = date('Y-m-d');
							if($fee->last_date >= $today){
								// no need to calculate fine amount
								$fine_amount = 0;
							}else{
								if(!empty($fee->last_date)){
									$formated_today = strtotime($today);
									$formated_last_date = strtotime($fee->last_date);
									$datediff = $formated_today - $formated_last_date;
									$days = floor($datediff / (60 * 60 * 24));	
									if(!empty($fee->fine)){										
										$fine_amount = $days * $fee->fine;
									}else{
										$fine_amount = 0;
									}			
								}else{
									$fine_amount = 0;
								}
							}
							;?>						
						@else
							<?php 
							$today = date('Y-m-d');
							if($last_paid_date == $today){
								// no need to calculate fine amount
								$fine_amount = 0;
							}else{
								if(!empty($last_paid_date)){
									$formated_today = strtotime($today);
									$formated_last_date = strtotime($last_paid_date);
									$datediff = $formated_today - $formated_last_date;
									$days = floor($datediff / (60 * 60 * 24));					
									if(!empty($fee->fine)){										
										$fine_amount = $days * $fee->fine;
									}else{
										$fine_amount = 0;
									}									
								}else{
									$fine_amount = 0;
								}
							}
							;?>						
						@endif					
					@endif

					@if($fee->payment_type == "MONTHLY")
						<?php $fine_amount = 0; ?>
					@endif

					<div class="row form-group">
						<div class="col-md-6">
							<label> Late Fees : </label>
						</div>
						<div class="col-md-6">
							<input type="text" id="lateFee" class="form-control" name="lateFee" value="{{ $fine_amount }}" required />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label> Concession : </label>
						</div>
						<div class="col-md-6">
							<input type="text" id="concession" class="form-control" name="concession" value="0" required />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label>Payment Mode : </label>
						</div>
						<div class="col-md-6">
							<select id="paymentMode" name="paymentMode" class="form-control" ng-model="paymentMode" ng-init="paymentMode = 'cash'"required>
								<option value="cash" selected="selected">cash</option>
								<option value="cheque">cheque</option>
								<option value="online">online</option>
							</select>
						</div>
					</div>
					@if($fee->payment_type == "MONTHLY")
						<div class="row form-group">
							<div class="col-md-6">
								<label>Pay for : </label>
							</div>
							<div class="col-md-6">
								<?php 
								$checked=array('January'=>'checkbox','February'=>'checkbox','March'=>'checkbox','April'=>'checkbox',
													'May'=>'checkbox','June'=>'checkbox','July'=>'checkbox','August'=>'checkbox',
													'September'=>'checkbox','October'=>'checkbox','November'=>'checkbox','December'=>'checkbox',);
								if(count($paid_month)>0){
									foreach($paid_month as $key=>$values){
										foreach($values as $value){
											foreach($value as $val){
												$checked[$val] = 'hidden';
											}											
										}
									}
								}
								?>
								<!--<input type="text" id="payMonth" value="{{ date('F') }}" disabled required />
								<input type="hidden"  name="payMonth" id="payMonth" value="{{ date('F') }}" required />-->
								<div class="row">
									<div class="col-md-3"><input type="{{$checked['January']}}" name="paymonth_0" ng-click="recivedAmountMonth()" value="January"/>Jan</div>
									<div class="col-md-3"><input type="{{$checked['February']}}" name="paymonth_1" ng-click="recivedAmountMonth()" value="February" />Feb</div>
									<div class="col-md-3"><input type="{{$checked['March']}}" name="paymonth_2" ng-click="recivedAmountMonth()" value="March" />Mar</div>
									<div class="col-md-3"><input type="{{$checked['April']}}" name="paymonth_3" ng-click="recivedAmountMonth()" value="April"/>Apr</div>
								</div>
								<div class="row">
									<div class="col-md-3"><input type="{{$checked['May']}}" name="paymonth_4" ng-click="recivedAmountMonth()" value="May"/>May</div>
									<div class="col-md-3"><input type="{{$checked['June']}}" name="paymonth_5" ng-click="recivedAmountMonth()" value="June"/>Jun</div>
									<div class="col-md-3"><input type="{{$checked['July']}}" name="paymonth_6" ng-click="recivedAmountMonth()" value="July" />Jul</div>
									<div class="col-md-3"><input type="{{$checked['August']}}" name="paymonth_7" ng-click="recivedAmountMonth()" value="August"/>Aug</div>
								</div>
								<div class="row">
									<div class="col-md-3"><input type="{{$checked['September']}}" name="paymonth_8" ng-click="recivedAmountMonth()" value="September" />Sep</div>
									<div class="col-md-3"><input type="{{$checked['October']}}" name="paymonth_9" ng-click="recivedAmountMonth()" value="October" />Oct</div>
									<div class="col-md-3"><input type="{{$checked['November']}}" name="paymonth_10" ng-click="recivedAmountMonth()" value="November" />Nov</div>
									<div class="col-md-3"><input type="{{$checked['December']}}" name="paymonth_11" ng-click="recivedAmountMonth()" value="December" />Dec</div>
								</div>
								<br>
								<b>NOTE : SELECT ONLY ONE MONTH AT A TIME</b>			
							</div>
						</div>
					@endif
					@if(count($installments)>0)
					<div class="row form-group get-count" data-count="{{count($installments)}}">
					@php $totalCheckedInstallment = 0; @endphp
					@foreach($installments as $installment)
						<?php $current_installment ='';?>
							@if(count($paid_month)>0)
								@foreach($paid_month as $value)
									@foreach($value as $val)
										@if($val->installment_id == $installment->id)
											<?php $current_installment = "checked disabled" ?>
											<?php $totalCheckedInstallment++; ?>
										@endif
									@endforeach
								@endforeach
							@endif
							<div class="col-md-6">
								@if($installment->due_date == NULL)
									<input type="checkbox" class="check-demo" name="installment_type_{{$installment->id}}" id="installment_{{$installment->id}}" ng-click="recivedAmount()" value="{{$installment->Installment_type}}" {{$current_installment}}><label>{{$installment->Installment_type}}</label>
								@else
									<input type="checkbox" name="installment_type_{{$installment->id}}" id="installment_{{$installment->id}}" value="{{$installment->due_date}}" {{$current_installment}}><label>{{$installment->due_date}}</label>
								@endif
							</div>
							<div class="col-md-6">
								<input type="text" id="installment_amount_{{$installment->id}}" name="installment_amount_{{$installment->id}}" class="form-control" value="{{$installment->amount}}" required disabled />
							</div>
						@endforeach
					</div>
					@endif
					<span class="total-paid-installment" data-count="{{$totalCheckedInstallment}}">
					<div ng-show="paymentMode=='cheque'">
						<div class="row form-group">
							<div class="col-md-6">
								<label>Cheque No: </label>
							</div>
							<div class="col-md-6">
								<input type="text" id="chequeNo" name="chequeNo" class="form-control" value=""/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label>Cheque Date: </label>
							</div>
							<div class="col-md-6">
								<input type="date" id="chequeDate" name="chequeDate" class="form-control" value="{{date('Y-m-d')}}"/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label>Bank Name: </label>
							</div>
							<div class="col-md-6">
								<input type="text" id="bankName" name="chequeBankName" class="form-control" value=""/>
							</div>
						</div>
					</div>
					<div ng-show="paymentMode=='online'">
						<div class="row form-group">
							<div class="col-md-6">
								<label>Transaction No: </label>
							</div>
							<div class="col-md-6">
								<input type="text" id="transactionNo" name="transactionNo" class="form-control" value=""/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label>Bank Name: </label>
							</div>
							<div class="col-md-6">
								<input type="text" id="bankName" name="transactionBankName" class="form-control" value=""/>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<!-- <input type="submit" class="btn btn-primary" value="Print"/> -->
						<input type="button" class="btn btn-primary print-submit" value="Print"/>
					</div>
				
				</div>
			</form>
			
			
		</div>
	</div>
</div>
    </div>
@endsection

<script type="text/javascript" src="{{url('users/js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript">
	
$(document).ready(function(){

    $("#recivedAmount").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $("#lateFee").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


    $("#concession").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $( "#lateFee").keyup(function() {
        var grandTotal = $('.old-grand-total.form-control').val();
        var lateFeeAmount = $('#lateFee').val();
        var concession = $('#concession').val();
        if(lateFeeAmount == ""){
            lateFeeAmount = 0;
        }
        if(concession == ""){
            concession = 0;
        }

        var value = parseInt(grandTotal) + parseInt(lateFeeAmount);
        var newGrandTotal = parseInt(value) - parseInt(concession);
        $('.grand-total.form-control').removeAttr('disabled');
        $('.grand-total.form-control').val('');
        $('.grand-total.form-control').attr("disabled", true);
        $('.grand-total.form-control').val(parseInt(newGrandTotal));
    });


    $( "#concession").keyup(function() {
        var grandTotal = $('.old-grand-total.form-control').val();
        var lateFeeAmount = $('#lateFee').val();
        var concession = $('#concession').val();
        if(lateFeeAmount == ""){
            lateFeeAmount = 0;
        }
        if(concession == ""){
            concession = 0;
        }

        var value = parseInt(grandTotal) + parseInt(lateFeeAmount);
        var newGrandTotal = parseInt(value) - parseInt(concession);
        $('.grand-total.form-control').removeAttr('disabled');
        $('.grand-total.form-control').val('');
        $('.grand-total.form-control').attr("disabled", true);
        $('.grand-total.form-control').val(parseInt(newGrandTotal));
    });

    $('.print-submit').click(function() {
        var grandTotal = $('.grand-total.form-control').val();
        var feeType = $('input[name="feeType"]').val();

        // ONE TIME
        if(feeType == "ONE TIME" || feeType == "PREVIOUS YEAR PAYMEN"){
            var enterRecivedAmount = $('input[name="recivedAmount"]').val();
            if(parseInt(enterRecivedAmount) == 0){
                $('.received-amount-error').html('Please enter received amount');
                $('.received-amount-error').addClass('error-msg');
            }else{
            	if(parseInt(grandTotal) >= parseInt(enterRecivedAmount)){
            		$('.received-amount-error').html('');
                	$('.pay-fee-form').submit();  
            	}else{
            		$('.received-amount-error').html('Received amount not greaterthan from total amount');
                    $('.received-amount-error').addClass('error-msg');
            	}
            }
        }        

        // MONTHLY
        // if(feeType == "MONTHLY"){
        //     var enterRecivedAmount = $('input[name="enterRecivedAmount"]').val();
        //     if(parseInt(enterRecivedAmount) == 0){
        //         $('.received-amount-error').html('Please select pay for month given in below');
        //         $('.received-amount-error').addClass('error-msg');
        //     }else{
        //         if(parseInt(grandTotal) == parseInt(enterRecivedAmount)){
        //             $('.received-amount-error').html('');
        //             $('input[name="recivedAmount"]').val(parseInt(enterRecivedAmount));
        //             $('.pay-fee-form').submit();
        //         }else{
        //             $('#recivedAmount').removeAttr('disabled');
        //             $('.received-amount-error').html('Received amount must be equal to total amount');
        //             $('.received-amount-error').addClass('error-msg');
        //         }  
        //     }
        // }

        if(feeType == "MONTHLY"){
            var enterRecivedAmount = $('input[name="enterRecivedAmount"]').val();
            if(parseInt(grandTotal) == parseInt(enterRecivedAmount)){
                $('.received-amount-error').html('');
                $('input[name="recivedAmount"]').val(parseInt(enterRecivedAmount));
                $('.pay-fee-form').submit();
            }else{
            	if(parseInt(enterRecivedAmount) == 0){
	                $('.received-amount-error').html('Please select pay for month given in below');
	                $('.received-amount-error').addClass('error-msg');
	            }else{
                    $('#recivedAmount').removeAttr('disabled');
                    $('.received-amount-error').html('Received amount must be equal to total amount');
                    $('.received-amount-error').addClass('error-msg'); 
	            }
            }            
        }

        // ANNUAL

        if(feeType == "ANNUAL"){
            var enterRecivedAmount = $('input[name="enterRecivedAmount"]').val();
            if(parseInt(enterRecivedAmount) == 0){
                $('.received-amount-error').html('Please select quarterly given in below');
                $('.received-amount-error').addClass('error-msg');
            }else{
                var totalInstallment = $('.get-count').attr('data-count');
                // var totalPaidInstallment = $('.total-paid-installment').attr('data-count');
                var totalPaidInstallment = $('.check-demo:checked').size();
                var balanceInstallment = parseInt(totalInstallment) - parseInt(totalPaidInstallment);
                if(parseInt(balanceInstallment) == 0){
                    if(parseInt(grandTotal) == parseInt(enterRecivedAmount)){
                        $('.received-amount-error').html('');
                        $('input[name="recivedAmount"]').val(parseInt(enterRecivedAmount));
                        $('.pay-fee-form').submit();
                    }else{
                        $('#recivedAmount').removeAttr('disabled');
                        $('.received-amount-error').html('Received amount must be equal to total amount');
                        $('.received-amount-error').addClass('error-msg');
                    }  
                }else{
                    $('input[name="recivedAmount"]').val(parseInt(enterRecivedAmount));
                    $('.received-amount-error').html('');
                    $('.pay-fee-form').submit();
                }
            }
        }       
    });
}); 

</script>



















