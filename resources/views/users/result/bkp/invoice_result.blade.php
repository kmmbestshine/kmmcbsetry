<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<table  style="width:100%; " >
<tr style="width:100%;" >
<th>Student Name</th>
<td  align="left">{{ $students->name }}</td>
<td ></td>
<th >Roll No</th>
<td align="left">{{ $students->roll_no }}</td></tr>
</table>
<table  class="maintable" style="width:100%;text-align: center;margin-top:2%;" >
<tr style="width:100%;" >
<th>Date</th>
<td align="left">{{ $students->date }}</td>
<td ></td>
<th>Result</th>
<td align="left">{{ $students->resultof }}</td></tr>
</table>
<table style="width:100%;margin-top:5%">
<tr style="width:100%;" >
<th>Subject</th>
<th>Max</th>
<th>Pass</th>
<th>Ob.Marks</th>
<th >Grade</th>
</tr>
</table>
@if($students->result)
<table style="width:100%;margin-top:2%">
@foreach($students->result as $rel)

<tr style="width:100%;">
<td>{{ $rel->subject }}</td>
<td>{{ $rel->max_marks }}</td>
<td>{{ $rel->pass_marks }}</td>
<td>{{ $rel->obtained_marks }}</td>
<td >{{ $rel->grade }}</td>
</tr>

@endforeach 
</table>
@endif
<table style="width:100%;margin-top:2%">
<tr style="width:100%;" >

<td>Total</td>
<td>{{$students->totalMarks}}</td>
<td>{{$students->totalPassMarks}}</td>
<td>{{$students->totalObtain}}</td>
<td></td>
</tr></table>
<table style="width:100%;margin-top:4%">
<tr><th colspan="2">Result</th>
<th colspan="2">Remarks</th>
</tr>
</table>
<table style="width:100%;margin-top:4%">
<tr><td>{{$students->resultof}}</td>
<td>{{$students->result_remarks}}</td></tr>
</table>
</html>