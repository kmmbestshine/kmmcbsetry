
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
         @if(count($getStudentDetails)>0)
             <?php
             $counter = 1;
             $rank = 1;
             $prevScore = 0;?>
             @foreach($getStudentDetails as $key => $student)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->registration_no }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->section }}</td>
                    <td>{{ $student->exam_type }}</td>
                   {{-- <td>{{ count($subjects) }}</td>--}}
                    <td>
                        @if($student->total_subjects == count($subjects))
                            {{ $student->total_subjects }}
                        @else
                            {{ $student->total_subjects }}
                        @endif
                    </td>
                    <td>
                        {{ $student->total_subjects * $student->max_marks }}
                    </td>
                    <td>
                        {{ $student->pass_marks * $student->total_subjects }}
                    </td>
                    <td>
                        {{ $student->scored_marks }}
                    </td>

                    @if($student->max_marks < 100)
                        <?php  $demo = ($student->scored_marks  / count($subjects)) * (100/$student->max_marks); ?>
                    @else
                       <?php $demo = $student->scored_marks / count($subjects); ?>
                    @endif
                    @if(is_int($demo))
                        <td>{{ $demo }}  % </td>
                    @else
                        <td>{{ number_format($demo,2) }}  % </td>
                    @endif

                    @if($examType != 0 )
                        <td>
                            @if($student->total_subjects == count($subjects))
                                @if($student->total_subjects_fail >0)
                                    NIL
                                @else
                                    <?php $score = $student->scored_marks;?>
                                    @if ($prevScore != $score)
                                        <?php
                                        $rank = $counter;
                                        $counter ++;
                                        ?>
                                    @endif
                                    {{ $rank }}
                                    <?php $prevScore = $score; ?>
                                @endif
                            @else
                                NIL
                            @endif

                        </td>
                    @endif
                    @if($student->total_subjects == count($subjects))
                        @if($student->total_subjects_fail > 0)
                            <td style="color:#cc2314">
                                Fail
                            </td>
                        @else
                            <td style="color:#109321">
                                Pass
                            </td>
                        @endif
                    @else
                        <td>&nbsp;&nbsp;-</td>
                    @endif
                </tr>
            @endforeach
         @endif
         </tbody>
     </table>
                        