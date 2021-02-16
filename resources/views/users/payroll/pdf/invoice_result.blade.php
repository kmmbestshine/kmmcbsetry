<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        table
        {
            border-collapse: collapse;
            text-align:center
        }
        .headtable{
            border: 1px solid black;
        }
        .headertable{
            border: 1px solid black;
            text-align: center;
        }
        td{
            padding: 5px;
        }
        .headerth{
            text-align: center;
        }
    </style>
</head>
<body>
<table class="headertable" width="100%" style="font-size: 14pt; border: none;">
    <tr>
        <th class="headerth" >
            <h3>
                PAY SLIP FOR  {{ strtoupper($getCurrentMonthName->month) }} - {{ $input['payroll_employee_year'] }}
            </h3>
            <!-- <h4><center>{{ strtoupper($getSchoolName->school_name)  }}</center></h4>
            <h5><center>{{ ucwords($getSchoolName->address)  }}</center></h5>
         -->
         </th>
    </tr>
</table>
<br>
<br>

<?php
$payroll_month = $input['payroll_employee_month'];
$payroll_year = $input['payroll_employee_year'];
$total_days =cal_days_in_month ( CAL_GREGORIAN , $payroll_month , $payroll_year );
?>
<table class="headtable" width="100%" style="font-size: 12pt; border-collapse:collapse; ">
    <tr>
        <td style="width:50%;text-align:left;font-size: 10pt;border-right:solid 1px;">
            <br>
            Employee Name : {{ ucwords($getEmployeeDetail->name) }}
            <br>
            User Name : {{ $getEmployeeDetail->username }}
            <br>
            Department : {{ $getEmployeeDetail->staff_type }}
            <br>

        </td>
        <td style="width:50%;background-color:#fff;font-size: 10pt">
            <br>
            Payment Date :{{ date('d-m-Y',strtotime($getPayrollDetail->payment_date))  }}
            <br>
            Payment ID : {{ $getPayrollDetail->payment_id }}
        </td>
    </tr>
    <tr style="background-color:#fff;">
        <td colspan="2" style="text-align:left;border-right:none;border-top:1px solid black;font-size: 10pt;">
            <br>
            No of Days in Month : {{ $total_days }}
            <br>
            Days Worked  : {{ $getPayrollDetail->worked_days }}
            <br>
            Casual Leave : {{ $getPayrollDetail->allowed_leave }}
            <br>
            Earned Leave : {{ $getPayrollDetail->earned_leave }}
            <br>
        </td>
    </tr>
</table>
<br>
<table width="100%" border="1" >
    <tr>
        <th  style="color:#000;text-align: center;border-right:none" align="center;">
            <br>
            <div style=" font-size: 10px;"> </div>
            Earnings
            <div style=" font-size: 10px;"> </div><br>
        </th>
        <th  style="color:#000;text-align: center" align="center"><br>
            <div style=" font-size: 10px;"> </div>
            Amount
            <div style=" font-size: 10px;"> </div><br>
        </th>
        <th style="color:#000;text-align: center;border-right:none" align="center"><br>
            <div style=" font-size: 10px;"> </div>
            Deductions
            <div style=" font-size: 10px;"> </div><br>
        </th>
        <th  style="color:#000;text-align: center" align="center"><br>
            <div style=" font-size: 10px;"> </div>
            Amount
            <div style=" font-size: 10px;"> </div><br>
        </th>
    </tr>
    <tr>
        <th style="padding-left:5px;text-align:left;border-right:none;">
            <div style=" font-size: 10px;"> </div><br>
            Basic
            <br>
            HRA
            <br>
            Allowance
            <!-- <br>
            Others -->
            <div style=" font-size: 10px;"> </div><br>
        </th>
        <td style="text-align:left">
            <div style=" font-size: 10px;"> </div><br>
            {{ number_format($getPayrollDetail->basic,2 )}}
            <br>
            @if($getPayrollDetail->bonus)
            {{ number_format($getPayrollDetail->bonus,2) }}
            @else
                &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
            @endif
            <br>
            @if($getPayrollDetail->allowance)
                {{ number_format($getPayrollDetail->allowance,2) }}
            @else
                &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
            @endif
           <!--  <br>
            @if($getPayrollDetail->overtime)
                {{ number_format($getPayrollDetail->overtime,2) }}
            @else
                &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
            @endif -->

            <div style=" font-size: 10px;"> </div><br>
        </td>
       
        <th style="padding-left:5px;text-align:left;border-right:none;">
            <div style=" font-size: 10px;"> </div><br>
            Prof Tax
            <br>
            @if($getPayrollDetail->deductions != 0 )
                @if($getDeductionPercent)
                    @foreach($getDeductionPercent as $deduction_key => $deduction_value)
                        {{strtoupper($deduction_value->deduction_type)}}&nbsp;&nbsp;( {{ $deduction_value->deduction_percentage }} %)
                        <br>
                    @endforeach
                @endif
            @endif
            <div style=" font-size: 10px;"> </div><br>
        </th>
        <td style="text-align:left;">
            <div style=" font-size: 10px;"> </div><br>
            {{ number_format($getPayrollDetail->ptax,2) }}
            <br>
            @if($getPayrollDetail->deductions != 0 )
                @if($getDeductionPercent )
                    @foreach($getDeductionPercent as $deduction_key => $deduction_value)
                       @php
                        $basic_salary = $getPayrollDetail->basic;
                        $getPF = $deduction_value->deduction_percentage ;
                        $total_pf_amnt = ($basic_salary * ( $getPF / 100 ));
                        @endphp
                        {{ number_format($total_pf_amnt,2) }}
                        <br>
                    @endforeach

                @endif

            @endif
            <div style=" font-size: 10px;"> </div><br>
        </td>
    </tr>
    <?php $total_deduction_amount = $getPayrollDetail->ptax + $getPayrollDetail->deductions; ?>
    <tr>
        <th colspan="2" style="color:#000;text-align: center" align="center"><br>
            <div style=" font-size: 10px;"> </div>
            Gross Amount : Rs.{{ number_format($getPayrollDetail->gross,2) }}
            <div style=" font-size: 10px;"> </div><br>
        </th>
        <th colspan="2" style="color:#000;text-align: center" align="center"><br>
            <div style=" font-size: 10px;"> </div>
            Deduction Amount : Rs.{{ number_format($total_deduction_amount,2) }}
            <div style=" font-size: 10px;"> </div><br>
        </th>
    </tr>
</table>

<table width="100%" border="0" style="background-color:#fff;border:1px solid #000;border-top:none;border-bottom:none">
    <tr style="background-color:#fff;">
        <td style="text-align:right;border-right:none;">
            <br>
            <strong>
                Net Pay (Rounded) : Rs.{{ number_format($getPayrollDetail->total_salary,2) }}
            </strong>
            <br>
        </td>
    </tr>
</table>
<table width="100%" border="0" style="background-color:#fff;border:1px solid #000;">
    <tr style="background-color:#fff;">
        <td style="background-color:#fff;text-align:right;color:#000;width:40%">
            <br> <br>
            <br>
            <br>
            <br>
            <br>
            Signature
            <br>
            <br>
            {{ ucwords($getSchoolName->school_name)  }},
            <br>
            {{ ucfirst($getSchoolName->city)  }}
            <br>
        </td>
    </tr>
</table>

</body>
</html>