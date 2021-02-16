                                <table align="center" border="1">
                                    <thead>
                                        <tr class="active">
                                            <th colspan="6">{{$student->name}}</th>
                                        </tr>
                                        <tr>
                                            <th>#</th>
                                            <th>Pay Type</th>
                                            <th>Month</th>
                                            <th>Date</th>
                                            <th>Discount</th>
                                            <th>Pay Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($fees)>0 and $fees)
                                        @foreach($fees as $key => $fee)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $fee->pay_type }}</td>
                                            @if($fee->months == 'null')
                                            <td>...</td>
                                            @else
                                            <td>{{ $fee->months }}</td>
                                            @endif
                                            <td>{{ $fee->date }}</td>
                                            <td>{{ $fee->discount }}</td>
                                            <td>{{ $fee->pay_amount }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>

                                            <th colspan="4">Total Paid Amount</th>
                                            <th>{{$total_discount}}</th>
                                            <th>{{$total_pay}}</th>
                                        </tr>
                                        <tr>
                                            <th colspan="5">Balance</th>
                                            <th>{{$balance}}</th>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>