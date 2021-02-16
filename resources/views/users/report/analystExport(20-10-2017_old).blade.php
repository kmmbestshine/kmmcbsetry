
    <table class="table">
         <thead>
             <tr >
                @if($getSession)
                    {{-- <th colspan="6"></th>--}}
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
                <th>Student Name</th>
                <th>Registration No</th>
                <th>Class</th>
                <th>Section</th>
                <th>Exam Type</th>
                <th>No of Subjects</th>
                <th>Total Marks</th>
                <th>Total Pass Marks</th>
                <th>Scored Marks</th>
                <th>Percentage</th>
                 @if($examType != 0 )<th>Rank</th>@endif
                <th>Result</th>
             </tr>
         </thead>
         <tbody>				   
             @foreach($getStudentDetails as $key => $student)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->registration_no }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->section }}</td>
                    <td>{{ $student->exam_type }}</td>
                    <td>{{ count($subjects) }}</td>
                    <td>{{ count($subjects) * $student->max_marks }}</td>
                    {{-- <td>{{ $student->total_max / count($subjects) }}</td>--}}
                    {{--<td>1</td>
                    <td>{{ 1 * $student->max_marks }}</td>--}}
                    {{-- <td>{{ $student->total_pass_mark }} </td>--}}
                    <td>{{ $student->pass_marks * count($subjects) }} </td>
                    <td>{{ $student->scored_marks }} </td>
                    <td>{{ $student->scored_marks / count($subjects) }}  % </td>
                    {{--<td>{{ $student->obtained_marks / 1 }}  % </td>--}}
                    {{--<td>{{ $student->grade }}</td>
                     <td>{{ $student->result }}</td>--}}
                    @if($examType != 0 )
                        <td>{{ $key+1 }}</td>
                    @endif
                    <td>
                        {{--@if($student->scored_marks > $student->total_pass_mark)--}}
                        @if($student->scored_marks > ($student->pass_marks * count($subjects)))
                            Pass
                        @else
                            Fail
                        @endif

                    </td>

                </tr>
            @endforeach
				<!--<tr>
                    <th colspan="4"></th>
                    <th colspan="3"><center>Total</center></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>-->
         </tbody>
     </table>
                        