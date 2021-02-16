    <table class="table datatable">
        <thead>
        <tr >
            {{--<th colspan="6"></th>--}}
            <th colspan="16" align="center" style="background-color: #17619a;color:#ffffff" >
                <center>
                    <h2>
                        <strong>
                            @foreach($getPayrollDetail as $row1 =>$payment)
                            @endforeach
                            <?php
                            $payroll_month = $payment->pay_month;
                            $payroll_year = $payment->year;
                            ?>
                            @if($getMonthName)
                                View Payroll Report For " {{ ucwords($getMonthName->month) }} - {{ $payment->year }} "
                            @else
                                View All Month Payroll List
                            @endif
                        </strong>
                    </h2>
                </center>
            </th>
        </tr>
        <tr>
            <th>S.No</th>
            <th>Employee Name </th>
            <th>Employee Id</th>
            <th>Department</th>
            <th>Total Days of Month</th>
            <th>Allowed Leave</th>
            <th>Leave Taken</th>
            {{--<th>Working Days</th>--}}
            <th>Worked Days</th>
            <th>Basic </th>
            <!-- <th>OverTime </th> -->
            <th>Allowance </th>
            <th>Bonus</th>
            <th>Gross</th>
            <th>Prof Tax</th>
            <th>Deduction</th>
            <th>CTC</th>
        </tr>
        </thead>
        <tbody>
        @foreach($getPayrollDetail as $key =>$payroll)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ ucwords($payroll->name) }} </td>
                <td>{{ $payroll->username  }}</td>
                <td>{{ ucwords($payroll->staff_type ) }}</td>
                <td>
                    <?php
                    $total_days =  cal_days_in_month ( CAL_GREGORIAN , $payroll->pay_month , $payroll->year ) ;
                    ?>
                    {{ $total_days }}
                </td>
                <td>
                    {{ $payroll->allowed_leave }}
                </td>
                <td>
                    {{ $payroll->earned_leave }}
                </td>

                <td>
                    {{ $payroll->worked_days }}
                </td>
                <td>
                    Rs.{{ number_format((float)$payroll->basic)  }}
                </td>
               <!--  <td>
                    Rs.{{ number_format($payroll->overtime) }}
                </td> -->
                <td>
                    Rs.{{ number_format((float)$payroll->allowance) }}
                </td>
                <td>
                    Rs.{{ number_format((float)$payroll->bonus) }}
                </td>
                <td>
                    Rs.{{ number_format((float)$payroll->gross) }}
                </td>
                <td>
                    Rs.{{ number_format((float)$payroll->ptax) }}
                </td>
                <td>
                    Rs.{{ number_format((float)$payroll->deductions) }}
                </td>

                <td>
                    Rs.{{ number_format((float)$payroll->total_salary) }}/-

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
                        