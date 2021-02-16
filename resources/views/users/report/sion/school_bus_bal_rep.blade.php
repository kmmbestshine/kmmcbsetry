
<?php $j="School Balance Fee Report"; ?>
<?php $i="Bus Balance Fee Report"; ?>
<?php $k=1; ?>
<?php $l=1; ?>
<table border="1">
   <thead>
   <tr>
       <th colspan="6" align="center">{{$j}}</th>
   </tr>
                                  <tr>
                                    <th>S.No</th>
                                    <th>Reg.No</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                     <th>Total Amt</th>
                                     <th>Paid</th>
                                     <th>Balance</th>
                                     
                                 </tr>
                             </thead>
                             <tbody>                   
                                 @foreach($students as $stu)
                                 @if($stu->balancAmt != '0' )
                                 <tr>

                                    <td>{{$k++}}</td>
                                     <td>{{$stu->registration_no}}</td>
                                     <td>{{$stu->class}}</td>
                                     <td>{{$stu->name}}</td>
                                     <td>{{$stu->getstuFee}}</td>
                                    <td>{{$stu->paidstu_Amount}}</td>
                                    <td>{{$stu->balancAmt}}</td>
                                     
                                 </tr>
                                 @endif
                                 @endforeach

                             </tbody>
</table>

<table border="1">
   <thead>
   <tr>
       <th colspan="6" align="center">{{$i}}</th>
   </tr>
                                  <tr>
                                    <th>S.No</th>
                                    <th>Reg.No</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                     <th> Total Amt</th>
                                     <th>Paid</th>
                                     <th>Balance</th>
                                     
                                 </tr>
                             </thead>
                             <tbody>                   
                                 @foreach($students as $stu)
                                 @if( $stu->balancbusAmt != '0')
                                 <tr>
                                    <td>{{$l++}}</td>
                                     <td>{{$stu->registration_no}}</td>
                                     <td>{{$stu->class}}</td>
                                     <td>{{$stu->name}}</td>
                                     <td>{{$stu->getstubusFee}}</td>
                                    <td>{{$stu->paidstu_busAmount}}</td>
                                    <td>{{$stu->balancbusAmt}}</td>
                                 </tr>
                                 @endif
                                 @endforeach

                             </tbody>
</table>