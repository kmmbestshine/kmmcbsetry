 <table>
                             <thead>
                                <tr>
                                    <th colspan="8" align="center">{{$input['from']}} to {{$input['to']}}</th>
                                </tr>
                                 <tr>
                                    <th>Reg.No</th>
                                    <th>Roll No.</th>
                                     <th>Student Name</th>
                                     <th>Father Name</th>
                                     <th>Annual Fee</th>
                                     <th>Monthly</th>
                                     <th>Total Pay</th>
                                     <th>Balance</th>

                                 </tr>
                             </thead>
                             <tbody>				   
                                @if($getStudent)
                                    @foreach($getStudent as $get)
                                        <tr>
                                            <td>{{$get->registration_no}}</td>
                                            <td>{{$get->roll_no}}</td>
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->father}}</td>
                                            <td>{{$get->totalAnnualFee}}</td>
                                            <td>{{$get->totalMonthly}}</td>
                                            <td>{{$get->totalPay}}</td>
                                            <td>{{$get->totalBalance}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="3"></th>
                                        <th>Total</th>
                                        <th>{{$totalAnnual}}</th>
                                        <th>{{$totalMonthly}}</th>
                                        <th>{{$totalRecive}}</th>
                                        <th>{{$totalPanding}}</th>
                                    </tr>
                                @endif

                             </tbody>
                         </table>