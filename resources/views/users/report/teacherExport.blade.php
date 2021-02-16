
<table class="table">
    <thead>
    <tr >
        @if($getSession)
            {{--<th colspan="6"></th>--}}
            <th colspan="13" align="center" >
                <center>
                    <h2>
                        Session - ( {{ $getSession->session }} )
                    </h2>
                </center>
            </th>
        @endif

    </tr>
    {{-- <tr>
         <th colspan="6"></th>
         <th colspan="7">{{ $getStudentClass->class }} Class '{{ $getStudentSection->section }}' Section Analyst Report
         </th>
     </tr>--}}
    <tr>
        <th>#</th>
        <th>Teacher Name</th>
        <th>User Name</th>
        <th>Class</th>
        <th>Section</th>
        <th>Exam Type</th>
        <th>Exam Date</th>
        <th>Subject</th>
        <th>Total Exam Marks</th>
        <th>Min Pass Marks</th>
        <th>Above 80% Marks</th>
        <th>Total Pass(%)</th>
        <th>Total Fail(%)</th>
        <th>Total Absent</th>
    </tr>
    </thead>
    <tbody>
    @if(count($getTeacherDetails)>0)
        @foreach($getTeacherDetails as $key => $teacher)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->username }}</td>
                <td>{{ $teacher->class }}</td>
                <td>{{ $teacher->section }}</td>
                <td>{{ $teacher->exam_type }}</td>
                <td>
                    {{ date('jS M Y', strtotime($teacher->date)) }}
                </td>
                <td>
                    {{ $teacher->subject }}
                </td>
                <td>{{ $teacher->max_marks }}</td>
                <td>{{ $teacher->pass_marks }}</td>
                <td>
                    <?php $top = ($teacher->top_students / $teacher->total_students) * 100 ; ?>
                    @if(is_int($top))
                        {{ $top }}  %
                    @else
                        {{  number_format($top,2)  }} %
                    @endif
                </td>
                <td>
                    @if($teacher->total_students !=  0)
                        <?php $passed = ($teacher->total_students_pass / $teacher->total_students) * 100; ?>

                        @if(is_int($passed))
                            {{ $passed }}  %
                        @else
                            {{  number_format($passed,2) }} %
                        @endif
                    @endif
                </td>
                <td>
                    @if($teacher->total_students !=  0)

                        <?php $failed = ( ($teacher->total_students_fail + $teacher->absent_students ) / $teacher->total_students) * 100; ?>

                        @if(is_int($failed))
                            {{ $failed }}  %
                        @else
                            {{ number_format( $failed ,2) }} %
                        @endif
                    @endif
                </td>
                <td>
                    @if($teacher->absent_students != 0)
                        {{ $teacher->absent_students }}
                    @else
                        0
                    @endif
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
                        