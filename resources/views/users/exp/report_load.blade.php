<table border="1">
	<tr>
		<td colspan="9" style="font-weight: bold;text-align: center; font-size: 12px">{{$reporthead}}</td>
	</tr>
	<thead>
		<tr>
			<th>#</th>
			<th>Date</th>
			<th>Category</th>
			<th>Purpose</th>
			<th>Quantity</th>
			 <th>Payment Mode</th>
             <th>Cheque/Trans No</th>
             <th>Bank Name</th>
             <th>Cheq Date</th>
			<th>Amount</th>
			<th>Description</th>
			<th>Comment</th>
			<th>Approved-By</th>
			<th>Given-By</th>
		</tr>
	</thead>
	<tbody>
		@php
			$total=0; 
		@endphp
		@foreach($expenditureList as $key=>$value)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ date('d-m-Y',strtotime($value->date)) }}</td>
				<td>{{ $value->category }}</td>
				<td>{{ $value->purpose }}</td>
				<td>{{ $value->quantity }}</td>
				<td>{{$value->payment_mode}}</td>
                 <td>{{$value->cheque_no}}{{$value->transaction_no}}</td>
                 <td>{{$value->bank_name}}{{$value->online_bankname}}</td>
                  <td>{{$value->cheque_date}}</td>
				<td>{{ $value->amount }}</td>
				<td>{{ $value->descrption }}</td>
				<td>{{ $value->comment }}</td>
				<td>{{ $value->approved_by }}</td>
				<td>{{ $value->given_by }}</td>
			</tr>
			@php
				$total=$total+$value->amount; 
			@endphp
		@endforeach
			<tr>
				<td></td>
				<td></td>
				<!-- <td></td> -->
				<td colspan="7" style="font-weight: bold;">Total Amount</td>
				<td style="font-weight: bold;">{{ $total }}</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
	</tbody>
</table>