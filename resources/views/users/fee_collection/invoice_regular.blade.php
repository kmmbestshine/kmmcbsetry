<!-- 
<table align="center" border="0" width="100%" style="text-align: left">
	<tr>
		<th colspan="5"><h2 align="center" style="font-size: 20px;text-transform: capitalize;">{{$get->school_name}}<br><small style="font-size:12px; text-transform: capitalize;">{{$get->address}}</small><br><small style="font-size: 12px">{{$get->email}}, {{$get->mobile}}</small></h2></th>
	</tr>
	<tr>
		<td colspan="5" align="center"><p width="200px">Receipt</p></td>
	</tr>
	<tr>
		<th>Receipt No.</th>
		<td align="left">{{$get->invoiceNo}}</td>
		<td width="30%"></td>
		<th>Date</th>
		<td>{{$input['date']}}</td>
	</tr>
	<tr style="height: 40px">
		<th width="30%">Name:</th>
		<td width="30%" colspan="2" style="border-bottom: 1px dotted #000; text-transform: capitalize;">{{$get->name}}</td>
		<th width="30%">Class</th>
		<td width="30%" style="border-bottom: 1px dotted #000">{{$get->class}}</td>
	</tr>
	<tr style="height: 40px">
		<th width="30%">Address:</th>
		<td width="70%" colspan="4" style="border-bottom: 1px dotted #000; text-transform: capitalize;">{{$get->parent_address}}, {{$get->city}}</td>
	</tr>
	<tr>
	<td colspan="4">
	</td><td></td>
	</tr>
	 <tr style="height: 40px; border-top: 1px solid #000; border-bottom: 1px solid #000; background: #f5f5f5">
		<th colspan="4">
			Fee	Head
		</th>
		<th>
			Amount
		</th>
	</tr>
	@foreach ($fee as $fe)
	<tr style="height: 40px; border-bottom: 1px solid #000;">
		<td colspan="4">
			{{$fe->fee_head}}
		</td>
		<td>
			{{$fe->month_fee}}
		</td>
	</tr>
	@endforeach
	<tr style="height: 40px; border-bottom: 1px solid #000;">
		<td colspan="4">
			Total
		</td>
		<td>
			{{$get->total_fee}}
		</td>
	</tr>
	@if($get->transport_fee)
	<tr style="height: 40px; border-bottom: 1px solid #000;">
		<td colspan="4">
			Transport Fee
		</td>
		<td>
			{{$get->transport_fee}}
		</td>
	</tr>
	@endif
	<tr style="height: 40px; border-bottom: 1px solid #000;">
		<td colspan="4">
			Total Pay
		</td>
		<td>
			{{$get->pay}}
		</td>
	</tr>
	<tr style="height: 40px; border-bottom: 1px solid #000;">
		<td colspan="4">
			Payment Amount
		</td>
		<td>
			{{$input['pay']}}
		</td>
	</tr>
	
	<tr style="height: 40px; border-bottom: 1px solid #000;">
		<td colspan="4">
			Discount
		</td>
		<td>
			{{$get->discount}}
		</td>
	</tr>
	<tr style="height: 40px; border-bottom: 1px solid #000;">
		<th colspan="4">
			Total Balance
		</th>
		<th>
			{{$get->balance}}
		</th>
	</tr>
	<tr style="height: 150px; text-align: right;">
		<th colspan="4">
			
		</th>
		<th colspan="1" style="text-decoration: overline;text-align-last: right;">
			Authority Seal/ Signature
		</th>
	</tr>
</table> -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Receipt</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
          	<h2 align="center" style="font-size: 20px;text-transform: capitalize;">{{$get->school_name}}<br><small style="font-size:12px; text-transform: capitalize;">{{$get->address}}</small><br><small style="font-size: 12px">{{$get->email}}, {{$get->mobile}}</small>
          	</h2>
          </div>
          <div class="col-md-4 col-md-offset-4">
          	<h2 align="center" style="font-size: 20px;text-transform: capitalize;">{{$get->school_name}}<br><small style="font-size:12px; text-transform: capitalize;">{{$get->address}}</small><br><small style="font-size: 12px">{{$get->email}}, {{$get->mobile}}</small></h2></div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<table>
        			<tr>
						<th>Receipt No.</th>
						<td align="left">{{$get->invoiceNo}}</td>
						<td width="30%"></td>
						<th>Date</th>
						<td>{{$input['date']}}</td>
					</tr>
        		</table>
        	</div>
        	<div class="col-md-4">
        		<table>
        			<tr>
						<th>Receipt No.</th>
						<td align="left">{{$get->invoiceNo}}</td>
						<td width="30%"></td>
						<th>Date</th>
						<td>{{$input['date']}}</td>
					</tr>
        		</table>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4 text-left">
        		
        	
        		<table class="table table-bordered">
        			<tr>
						<th>Fee	Head</th>
						<th>Amount</th>
					</tr>
					@foreach ($fee as $fe)
					<tr>
						<td>{{$fe->fee_head}}</td>
						<td>{{$fe->month_fee}}</td>
					</tr>
					@endforeach
					<tr>
						<td>
							<b>Total Annual Fee</b>
						</td>
						<td>
							<b>{{$get->annual}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Discount</b>
						</td>
						<td>
							<b>{{$get->total_discount}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Pay</b>
						</td>
						<td>
							<b>{{$get->pay_balance}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Payment Amount</b>
						</td>
						<td>
							<b>{{$input['pay']}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Balance</b>
						</td>
						<td>
							<b>{{$get->balance}}</b>
						</td>
					</tr>
        		</table>
        	
        	</div>
        	<div class="col-md-4 text-right">
        		
        		<table class="table table-bordered">
        			<tr>
						<th>Fee	Head</th>
						<th>Amount</th>
					</tr>
					@foreach ($fee as $fe)
					<tr>
						<td>{{$fe->fee_head}}</td>
						<td>{{$fe->month_fee}}</td>
					</tr>
					@endforeach
					<tr>
						<td>
							<b>Total Annual Fee</b>
						</td>
						<td>
							<b>{{$get->annual}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Discount</b>
						</td>
						<td>
							<b>{{$get->total_discount}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Pay</b>
						</td>
						<td>
							<b>{{$get->pay_balance}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Payment Amount</b>
						</td>
						<td>
							<b>{{$input['pay']}}</b>
						</td>
					</tr>
					<tr>
						<td>
							<b>Total Balance</b>
						</td>
						<td>
							<b>{{$get->balance}}</b>
						</td>
					</tr>
        		</table>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<p align="right">Authority Sign</p>
        	</div>
        	<div class="col-md-4">
        		<p align="right">Authority Sign</p>
        	</div>
        </div>	
        
        <!-- <div class="row">
          <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
          <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
        </div>
        <div class="row">
          <div class="col-sm-9">
            Level 1: .col-sm-9
            <div class="row">
              <div class="col-xs-8 col-sm-6">
                Level 2: .col-xs-8 .col-sm-6
              </div>
              <div class="col-xs-4 col-sm-6">
                Level 2: .col-xs-4 .col-sm-6
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 -->        <button type="button" class="btn btn-primary">Print</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->