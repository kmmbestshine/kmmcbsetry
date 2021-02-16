<table border="1">
	<tr>
		<td colspan="12" style="font-weight: bold;text-align: center; font-size: 12px">{{$reporthead}}</td>
	</tr>
	<thead>
		<tr>
			<th>Category-Type</th>
			<th>Category</th>
			<th>Sub-Category</th>
			<th>Item-Name</th>
			<th>Reg-No</th>
			<th>Student-Name</th>
			<th>Class</th>
			<th>Section</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Amount</th>
			<th>Comment</th>
		</tr>
	</thead>
	<tbody>
		@foreach($report_array as $key=>$value)
			<tr>
				<td>{{ $value->type }}</td>
				<td>{{ $value->category }}</td>
				<td>{{ $value->sub_category }}</td>
				<td>{{ $value->item_name }}</td>
				<td>{{ $value->registration_no }}</td>
				<td>{{ $value->student_name }}</td>
				<td>{{ $value->class_name }}</td>
				<td>{{ $value->section_name }}</td>
				<td>{{ $value->quantity }}</td>
				<td>{{ $value->distribute_rate }}</td>
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