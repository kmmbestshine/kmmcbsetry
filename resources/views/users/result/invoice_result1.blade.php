<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
        .stuinformation .logo {
            margin: 5px;
        }
        .stuinformation table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left">
                <img src="{{ asset($currentSchool->image) }}" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="center" style="width: 100%;">

                <h1>{{ $currentSchool->school_name}}</h1>
                <pre>
                    {{ $currentSchool->address }}
                </pre>
            </td>
        </tr>
    </table>
</div>
<div class="stuinformation">
    <table width="100%">
        <tr>
            	<td align="left" style="width: 30%;">
                <p><b>S.NAME  : {{$students->name}}</b></p>
                <p><b>REG. NO : {{$students->registration_no}}</b></p>
                <p><b>ROLL NO : {{$students->roll_no}}</b></p>
            </td>
            <td align="left" style="width: 25%;">
                <br>
                <p><b> D.O.B  : {{$students->dob}}</b></p>
                <p><b>F.NAME  : {{$parents->name}}</b></p>
                <p><b>GENDER  : {{$students->gender}}</b></p>
            </td>
            <td align="left" style="width: 25%;">
                <br>
                <p><b> YEAR     : {{$session->session}}</b></p>
                <p><b>CLASS     : {{$input['class_name']}}</b></p>
                <p><b>SECTION   : {{$input['section_name']}}</b></p>
            </td>
            <td >
                <img src="{{ asset($students->avatar) }}" alt="Logo" width="64" class="logo"/>
            	</td>
        </tr>

    </table>
</div>
<div class="invoice">
        <div >
        	<h3>EXAM NAME : {{$classesDate->exam_type}}</h3>
            &nbsp;&nbsp;<table class="table table-bordered" width="95%" align="center" border="1" bordercolor="#ff00ff">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th align="center">Max Mark</th>
                    <th align="center">Pass Mark</th>
                    <th align="center">Ob.Mark</th>
                    <th align="center">Grade</th>                           
                </tr>
            </thead>
            <tbody>
				@foreach($students->result as $rel)
					<tr>
						<td>{{ $rel->subject }}</td>
						<td align="center">{{ $rel->max_marks }}</td>
						<td align="center">{{ $rel->pass_marks }}</td>
						<td align="center">{{ $rel->obtained_marks }}</td>
						<td align="center">{{ $rel->grade }}</td>
					</tr>						
				@endforeach
				<tr>
					<td>Total Mark</td>
					<td align="center">{{$students->totalMarks }}</td>
					<td>Obtained Mark</td>
					<td align="center">{{ $students->totalObtain }}</td>
					<td>-</td>					
				</tr>
                <tr>
                    <td >
                <p><b>Result : {{$students->resultof}}</b> </p>
            </td>
            <td >
                <p><b> Remarks: {{$students->result_remarks}}</b> </p>
            </td>
                </tr>				
            </tbody>
        </table>
    
    <div class="stuinformation">
    <table width="100%">
        <tr>
                <td align="left" style="width: 40%;">
                <h3> ATTANDANCE :-</h3>
                <p><b>Total No. Of Working Days: {{$total_workingdays}}</b> </p>
                <p><b></b> </p>
                <p><b></b> </p>
                <p><b></b> </p>
            </td>
            <td align="left" style="width: 30%;">
                <p><b> AM Present : {{$am_totalPresent}}</b> </p>
                <p><b>AM Absent   : {{$am_totalAbsent}}</b> </p>
                <p><b>AM Leave    : {{$am_totalLeave}}</b> </p>
            </td>
            <td align="left" style="width: 30%;">
                <p><b> PM Present : {{$pm_totalPresent}}</b> </p>
                <p><b>PM Absent   : {{$pm_totalAbsent}}</b> </p>
                <p><b>PM Leave    : {{$pm_totalAbsent}}</b> </p>
            </td>
        </tr>
    </table>
</div>
<div class="stuinformation">
    <table width="100%">
        <tr>
                <td align="left" style="width: 20%;">
                <p><b>Signature Of Principal </b> </p>
            </td>
            <td align="left" style="width: 20%;">
                <p><b>Signature Of HOD </b> </p>
            </td>
            <td align="left" style="width: 20%;">
                <p><b>Signature Of Class Teacher </b> </p>
            </td>
            <td align="left" style="width: 20%;">
                <p><b>Signature Of Parent </b> </p>
            </td>
            
        </tr>

    </table>
</div>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="panel-body">
    <br>
<br>
<br>
            <h3 style="text-align: center;"> GRADE SYSTEM</h3>
            &nbsp;&nbsp;<table class="table table-bordered" width="95%" align="center" border="1" bordercolor="#ff00ff" border="1px" >
                <thead>
                    <tr>
                        <th align="center">#</th>
                        <th>Exam Type</th>
                        <th align="center">From Marks</th>
                        <th align="center">To Marks</th>
                        <th align="center">Grade</th>
                        <th align="center">Result</th>
                        <th align="center">Remarks</th><!--updated 10-5-2018 -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $key => $exam)
                        <tr>
                            <td align="center">{{ $key+1 }}</td>
                            <td  align="center" rowspan="{{count($classesDate->exam_type)}}">{{$classesDate->exam_type}}</td>
                            <td align="center">{{ $exam->from_marks }}</td>
                            <td align="center">{{ $exam->to_marks }}</td>
                            <td align="center">{{ $exam->grade }}</td>
                            <td align="center">{{ $exam->result }}</td>
                            <td align="center">{{ $exam->remarks }}</td><!-- updated 10-5-2018-->
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
</div>
</body>
</html>




















