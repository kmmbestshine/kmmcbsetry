<table border="1">
   <thead>
   <tr>
       <th colspan="16" align="center">{{$students['session']}}</th>
   </tr>
                                 <tr>

                                    <th>Reg.No</th>
                                    <th>Roll No.</th>
                                    <th>Session</th>
                                    <th>Class</th>
                                    <th>Section</th>

                                     <th>Student Name</th>
                                     <th>Student Mobile</th>
                                     <th>DOB</th>
                                     <th>Gender</th>
                                     <!--<th>Email</th>-->

                                     <th>Father</th>
                                     <th>Mother</th>
                                     <th>Parent Mobile</th>
                                     <th>Address</th>
                                     <!--<th>City</th>
                                     <th>Post Code</th>-->
                                 </tr>
                             </thead>
                             <tbody>                   
                                 @foreach($students as $stu)
                                 <tr>
                                     <td>{{$stu->registration_no}}</td>
                                     <td>{{$stu->roll_no}}</td>
                                     <td>{{$stu->session}}</td>
                                     <td>{{$stu->class}}</td>
                                     <td>{{$stu->section}}</td>
                                     <td>{{$stu->name}}</td>
                                     <td>{{$stu->contact_no}}</td>
                                     <td>{{$stu->dob}}</td>
                                     <td>{{$stu->gender}}</td>
                                     <!--<td>{{$stu->email}}</td>-->
                                     <td>{{$stu->father}}</td>
                                     <td>{{$stu->mother}}</td>
                                     <td>{{$stu->parent_mobile}}</td>
                                     <td>{{$stu->address}}</td>
                                     <!--<td>{{$stu->city}}</td>
                                     <td>{{$stu->pin_code}}</td>-->
                                 </tr>
                                 @endforeach

                             </tbody>
</table>