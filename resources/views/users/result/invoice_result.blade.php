<html>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
<style type="text/css">

table{
   background-color: transparent;
    border-spacing: 0;
    border-collapse: collapse;
    box-sizing: border-box;  
}

.table-bordered {
    border: 1px solid #ddd;
}

.table {
  width: 100%;
  width: 100%;
  max-width: 100%;
  /*margin-bottom: 20px;  */
}

.table tr {
  border-bottom: 2px solid #ccc;
}

.table tr:nth-last-child(1) {
  border: none;
}

.table tr td,.table tr th {
  text-align: center;
  padding: 10px;
}

.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid #ddd;
}
</style>
</head>
	<body>	
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td>Student Name</td>
					<td>{{ $students->name }}</td>
					<td>Roll No</td>
					<td>{{$students->roll_no }}</td>
					<td>Date</td>
					<td>{{$students->date }}</td>					
				</tr>				
			</tbody>
		</table>
		<br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Max Mark</th>
                    <th>Pass Mark</th>
                    <th>Ob.Mark</th>
                    <th>Grade</th>                           
                </tr>
            </thead>
            <tbody>
				@foreach($students->result as $rel)
					<tr>
						<td>{{ $rel->subject }}</td>
						<td>{{ $rel->max_marks }}</td>
						<td>{{ $rel->pass_marks }}</td>
						<td>{{ $rel->obtained_marks }}</td>
						<td >{{ $rel->grade }}</td>
					</tr>						
				@endforeach
				<tr>
					<td>Total Mark</td>
					<td>{{$students->totalMarks }}</td>
					<td>Obtained Mark</td>
					<td>{{ $students->totalObtain }}</td>
					<td>-</td>					
				</tr>				
            </tbody>
        </table>		
        <br>
		<table class="table table-bordered">
			<tbody>
<!-- 				<tr>
					<td>Total Mark</td>
					<td>{{$students->totalMarks }}</td>
					<td>Obtained Mark</td>
					<td>{{ $students->totalObtain }}</td>					
				</tr>	 -->		
				<tr>
					<td>Result</td>
					<td>{{$students->resultof }}</td>
					<td>Remarks</td>
					<td>{{ $students->result_remarks }}</td>					
				</tr>				
			</tbody>
		</table>		
	</body>
</html>