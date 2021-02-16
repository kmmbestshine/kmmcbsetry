<html lang="en">
<body>
<table class="table1 table-bordered">
	<tr>
		<th colspan="5" align="center">
			{{ $total->exam_type }} Term of {{ $total->month }}
			Report</th>
	</tr>
	<tr>
		<th>Subject</th>
		<th>Max Marks</th>
		<th>Pass Marks</th>
		<th>Obtained Marks</th>
		<th>Grade</th>
	</tr>
	@foreach($results as $result)
		<tr>
			<td>{{ $result->subject }}</td>
			<td>{{ $result->max_marks }}</td>
			<td>{{ $result->pass_marks }}</td>
			<td>{{ $result->obtained_marks }}</td>
			<td>{{ $result->grade }}</td>
		</tr>
	@endforeach
	<tr>
		<th>Total</th>
		<th>{{ $total->total_marks }}</th>
		<th>{{ $total->pass_marks }}</th>
		<th>{{ $total->obtained_marks }}</th>
		<th>Pass</th>
	</tr>
</table>
</body>
</html>
