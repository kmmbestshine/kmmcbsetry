<table border="1">
	<tr>
		<td colspan="8" style="font-weight: bold;text-align: center; font-size: 12px">{{$reporthead}}</td>
	</tr>
	<thead>
		<tr>
			<th>Category-Type</th>
			<th>Category</th>
			<th>Sub-Category</th>
			<th>Quantity</th>
			<th>Available-Quantity</th>
			<th>Purchase Rate</th>
			<th>Amount</th>
			<th>Comment</th>
		</tr>
	</thead>
	<tbody>
		@php
			$total=0; 
		@endphp
		@foreach($furnitruedetails as $key=>$value)
			<tr>
				<td>{{ $value->type }}</td>
				<td>{{ $value->category }}</td>
				<td>{{ $value->sub_category }}</td>
				<td>{{ $value->quantity }}</td>
				<td>{{ $value->avail_quantity }}</td>
				<td>{{ $value->purchaserate }}</td>
				<td>{{ $value->amount }}</td>
				<td>{{ $value->comment }}</td>
				@php
					$total=$total+$value->amount; 
				@endphp
			</tr>
		@endforeach
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td style="font-weight: bold;">Total</td>
				<td style="font-weight: bold;">{{ $total }}</td>
				<td></td>
			</tr>
	</tbody>
</table>