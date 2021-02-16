<hr>
<div class="row">
	@if(count($school) > 0)
            @foreach($school as $key=>$value)

            @endforeach
	@endif
</div>
<div class="row">
	
	@if(count($single_student) > 0)
		<div>
			<div class="panel panel-default">
				<div class="panel-body">
				<h3 class="text-center">Student Details</h3>
					<?php $reg = $single_student->registration_no;
                    $reg_no = str_replace("/", ".", $reg);?>
					<label>Registration No:</label><label>{{$single_student->registration_no}}</label></br>
					<label>Name:</label><label>{{$single_student->name}}</label></br>
					<label>class:</label><label>{{$single_student->class_id}}</label></br>
				</div>
			</div>
		</div>
	@endif
</div>

@if(count($fees) > 0)
<div class="panel panel-default">
	<div class="panel-body">
		<h3 class="text-center">Fees Details</h3>
		<div class="row">
				<div class="form-group">
					<table class="table table-striped table-bordered">
						<tr>
							<th>sno</th>
							<th>Fee name</th>
							<th>Payment Type</th>
							<th>Amount</th>
							<th>#</th>
							<th>Balance Amount</th>
							<th>Pay</th>
						</tr>
						@foreach($fees as $key=>$value)
							@if($value->payment_type == 'ANNUAL')
								<tr  class="clickable" data-toggle="collapse" id="row{{++$key}}" data-target=".row{{$key}}">
									<td>{{$key}}</td>
									<td>{{$value->fees_name}}</td>
									<td>{{$value->payment_type}}</td>
									<td>{{$value->amount}}</td>
									<td><i class="glyphicon glyphicon-plus"></i>(installment)</td>
									@if(count($fee_balance_amount)>0)
										<td>{{ $fee_balance_amount[$value->id]['balance_amount'] }}</td>
										<td>
											<?php $current_row_balance = $fee_balance_amount[$value->id]['balance_amount'];?>
											
											@if($current_row_balance === 0)
												paid
											@else
												<a href="{{ route('payfee',['register_no'=>$reg_no,'fee_id'=>$value->id])}}">
													<input type="button" class="btn btn-default" value="Pay Now"/>
												</a>
											@endif
										</td>
									@endif
								</tr>
								@if(count($installment) > 0)
									@foreach($installment[$value->id] as $in_key=>$in_value)
								
									<tr class="collapse row{{$key}}" >
										<td colspan="3"></td>
										@if($in_value->due_date == NULL)
											<td>{{$in_value->Installment_type}} - RS {{$in_value->amount}}</td>
										@else
											<td>{{ $in_value->due_date }} - RS {{$in_value->amount}}</td> 
										@endif
									</tr>
									@endforeach
								@endif
							@else
								<tr>
									<td>{{++$key}}</td>
									<td>{{$value->fees_name}}</td>
									<td>@if($value->payment_type == "PREVIOUS YEAR PAYMEN") SINGLE PAYMENT @else {{$value->payment_type}} @endif</td>
									<td>{{$value->amount}}
									<td><i class="glyphicon glyphicon-minus"></i></td>
									@if(count($fee_balance_amount)>0)
										<td>{{ $fee_balance_amount[$value->id]['balance_amount'] }}</td>
										<td>
											<?php $current_row_balance = $fee_balance_amount[$value->id]['balance_amount'];?>
											@if($value->payment_type == 'PREVIOUS YEAR PAYMEN' || $value->payment_type == 'SINGLE PAYMENT' || $value->payment_type == 'ONE TIME' || $value->payment_type == 'ANNUAL')
												@if($current_row_balance === 0)
													paid
												@else
													@if($value->payment_type != 'MONTHLY')
														<a href="{{ route('payfee',['register_no'=>$reg_no,'fee_id'=>$value->id])}}">
															<input type="button" class="btn btn-default" value="Pay Now"/>
														</a>
													@endif
												@endif
											@endif

											@if($value->payment_type == 'MONTHLY')
												<a href="{{ route('payfee',['register_no'=>$reg_no,'fee_id'=>$value->id])}}">
													<input type="button" class="btn btn-default" value="Pay Now"/>
												</a>
											@endif
										</td>
									@endif
								</tr>
							@endif
                    	@endforeach
                    <th></th><th></th><th>Total Amount</th><th>{{$total_amount}}</th>
					</table>
				</div>
		</div>
		<!--@if($total_amount != 0)
			<div class="pull-right">
				<table>
					<tr>
						<td><label>TOTAL AMOUNT : </label></td><td><input ng-model="totalAmount" type="text" id="totalAmount" class="form-control" value="{{$total_amount}}" disabled/></td>
					</tr>
				</table>
			</div>
		@endif-->
	</div>
</div>
@else
<div><p>No Record Found</p></div>
@endif
@if(count($payment_details) > 0)
<div class="panel panel-default">
	<div class="panel-body">
	<h3 class="text-center">Paid Details</h3>
		<div>
			<div class="row">
				<table class="table table-striped table-bordered text-center">
					<tr>
						<th>Date</th>
						<th>Fee Name</th>
						<th>Mode Of Payment</th>
						<th>Trn/cheque no</th>
						<th>Bank Name</th>
						<th>Late Fee</th>
						<th>concession</th>
						<th>Paid Amt</th>
					</tr>
                    <?php $total_late_fee =0; 
                        $total_concession = 0;
                        $total_recived_amnt=0;
                    ?> 
					@foreach($payment_details as $key=>$value)
					<tr>
						<td>{{$value->date}}</td>
						<td>{{$value->fee_name}}</td>
						<td>{{$value->payment_type}}</td>
						<!-- changes done by Parthiban 03-10-2017 -->
						<td>
							@if($value->payment_type == 'cheque' || $value->payment_type == 'online')
								<?php $payment_detail = json_decode($value->payment_detail,true);?>
								@foreach( $payment_detail as $payment_key=>$payment_value)
                                    @if(!empty($payment_value))
										<?php $arrayKeys = array_keys($payment_value); ?>
										<!-- {{$arrayKeys[0] }}: {{$payment_value[$arrayKeys[0]]}} -->
										{{$payment_value[$arrayKeys[0]]}}
                                    @endif
								@endforeach
							@endif
						</td>
						<td>
							@if($value->payment_type == 'cheque' || $value->payment_type == 'online')
								<?php $payment_detail = json_decode($value->payment_detail,true);?>
								@foreach( $payment_detail as $payment_key=>$payment_value)
                                    @if(!empty($payment_value))
										<?php $arrayKeys = array_keys($payment_value); ?>
										{{$payment_value[$arrayKeys[1]]}}
                                    @endif
								@endforeach
							@endif
						</td>
                        <?php 
                            $total_late_fee +=$value->late_fee;
                            $total_concession += $value->concession;
                            $total_recived_amnt += $value->amount;
                        ?>
						<td>{{$value->late_fee}}</td><td>{{$value->concession}}</td><td>{{$value->amount}}</td>
					</tr>
					@endforeach
                    <th></th><th></th><th></th>
                    <th></th><th>Total</th><th>{{ $total_late_fee }}</th>
                    <th>{{ $total_concession }}</th><th>{{ $total_recived_amnt }}</th>
				</table>
			</div>
		</div>
	</div>
</div>
@endif














