
<table border="1">
<thead>
	<tr>
		<th>From Date</th>
		<th>To date</th>
		<th>class</th>
		<th>section</th>
	</tr>
</thead>
	<tbody>	
		<tr>
			<td>{{$fromdate}}</td>
			<td>{{$todate}}</td>
			<td>{{$class}}</td>
			<td>{{$section}}</td>
		</tr>
	</tbody>
</table>
	<table border="1">
		<thead>
		
			<tr>
				<th>Student Name</th>
				<th>Am</th>
				<th>Pm</th>
				<th>date</th>
			</tr>
		</thead>
		<tbody>  
			@foreach($attendance_date as $date)
			@foreach($students as $key=>$value)
			<tr>
				<td>{{ $value->name }}</td>
				<td>{{$am[$date][$value->id]}}</td>
				<td>{{$pm[$date][$value->id]}}</td>
				<td>{{$date}}</td>
			</tr>
			@endforeach
			@endforeach
			<tr>
				<th>Am Present - {{$am_totalPresent}}</th>
				<th>Am Leave - {{$am_totalLeave}}</th>
				<th>Am Absent - {{$am_totalAbsent}}</th>
			</tr>
			<tr>
				<th>Pm Present - {{$pm_totalPresent}}</th>
				<th>Pm Leave - {{$pm_totalLeave}}</th>
				<th>Pm Absent - {{$pm_totalAbsent}}</th>
			</tr>
		</tbody>
	</table>
	
