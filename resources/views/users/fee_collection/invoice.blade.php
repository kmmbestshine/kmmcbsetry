
<table align="center" border="0" width="100%" style="text-align: left">
		<tr>
			<th colspan="5"><h1 align="center">{{$get->school_name}}</h1><br><h2><small style="font-size:12px">{{$get->address}}</small></h2></th>
		</tr>
		<tr>
			<td colspan="5" align="center"><p width="200px">Receipt</p></td>
		</tr>
		<tr>
			<th>Receipt No.</th>
			<td>{{$get->invoiceNo}}</td>
			<td width="30%"></td>
			<th>Date</th>
			<td>{{$input['date']}}</td>
		</tr>
		<tr style="height: 40px">
			<th width="30%">Name:</th>
			<td width="30%" colspan="2" style="border-bottom: 1px dotted #000">{{$get->name}}</td>
			<th width="30%">Class</th>
			<td width="30%" style="border-bottom: 1px dotted #000">{{$get->class}}</td>
		</tr>
		<tr style="height: 40px">
			<th width="30%">Address:</th>
			<td width="70%" colspan="4" style="border-bottom: 1px dotted #000">{{$get->parent_address}}, {{$get->city}}</td>
		</tr>
		<tr style="height: 40px">
			<th width="30%">Payment Amount:</th>
			<td width="70%" colspan="4" style="border-bottom: 1px dotted #000">{{$input['pay']}}</td>
		</tr>
		<tr style="height:40px">
			<th width="30%">Total Annual Fee</th>
			<td width="70%" style="border-bottom: 1px dotted #000" colspan="4">{{$get->annual}}</td>
		</tr>
		@if($get->transport_fee)
		<tr style="height:40px">
			<th width="30%">Transport Fee</th>
			<td width="70%" style="border-bottom: 1px dotted #000" colspan="4">{{$get->transport_fee}}</td>
		</tr>
		@endif
		<tr style="height:40px">
			<th width="30%">Total Pay Fee</th>
			<td width="70%" style="border-bottom: 1px dotted #000" colspan="4">{{$get->pay_balance}}</td>
		</tr>
		@if($get->discount != 0)
		<tr style="height:40px">
			<th width="30%">Total Discount</th>
			<td width="70%" style="border-bottom: 1px dotted #000" colspan="4">{{$get->total_discount}}</td>
		</tr>
		@endif
		<tr style="height:40px">
			<th width="30%">Total Balance</th>
			<td width="30%" style="border-bottom: 1px dotted #000" colspan="2">{{$get->balance}}</td>
			<th width="30%"></th>
			<th width="30%">Signature</th>
		</tr>
	</table>
