@extends('users.layouts.default')
@section('title', 'View Payroll Report')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
        <li class="active">View</li>
    </ul>
    @endsection
    @section('contant')
        <style>
            .headtable td,.headtable th{
                border: 1px solid black;
            }
            .grossTable td,
            .grossTable th {
                border:1px solid black;
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
            table {
                display: table;
                border-collapse: separate;
                border-spacing: 2px;
            }
        </style>
        @if(Input::old('success'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ Input::old('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if(Input::old('error'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Oohh!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>view Payroll Report For "{{ ucwords($get_month->month) }} - {{ $year }}"</strong>
                            </h3>
                            <div class="text-right">
                                <a href="{{route('viewPayrollIndex')}}" class="btn btn-info btn-rounded">Payroll</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('get_deduction')}}" class="btn btn-info btn-rounded">Add Deduction</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('add_professional_tax')}}" class="btn btn-info btn-rounded">Add Professional Tax</a>
                                &nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        @if($get_single_employee)
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 table-responsive">
                                  <table class="table table-bordered" >
                                        <tbody>
                                        <tr >
                                            <th  style="text-align: center">
                                                <div style=" font-size: 10px;"> </div>
                                                <h3>Payroll Report For {{ ucwords($get_single_employee->name) }} </h3>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <table class="headtable" width="100%" style="font-size: 10pt; border-collapse:collapse; ">
                                                    <tr>
                                                        <td style="text-align:left;">
                                                            <div style=" font-size: 10px;"> </div>
                                                            <strong> Employee Name :</strong> {{ ucwords($get_single_employee->name) }}
                                                            <br>
                                                            <strong> User Name :</strong> {{ $get_single_employee->username }}
                                                            <br>
                                                            <strong>Department :</strong>Teaching Staff
                                                            <div style=" font-size: 10px;"> </div>
                                                        </td>
                                                        <td style="background-color:#fff;">
                                                            <div style=""> </div>
                                                            <strong>Email Id :</strong>{{ $get_single_employee->email }}
                                                            <br>
                                                            <strong>Payment Id :</strong>{{ $get_single_employee->payment_id }}
                                                            <br>
                                                            <strong> Payment Date :</strong> {{ date('d-m-Y',strtotime($get_single_employee->payment_date)) }}
                                                            <div style=" font-size: 10px;"> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="text-align:left;">
                                                            <div style=" font-size: 5px;"> </div>
                                                            <strong> No of Days in Month :</strong> {{ cal_days_in_month ( CAL_GREGORIAN , $month , $year ) }}
                                                            <br>
                                                            <strong>Days Worked  :</strong>   {{ $get_single_employee->worked_days }}
                                                            <br>
                                                            <strong>Casual Leave :</strong>  {{ $get_single_employee->allowed_leave }}
                                                            <br>
                                                            <strong> Earned Leave :</strong> {{ $get_single_employee->earned_leave }}
                                                            <div style=" font-size: 10px;"> </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr class="grossRow">
                                            <td align="center">
                                                <table class="grossTable" width="100%" style="font-size: 10pt; ">
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
                                                            {{ number_format($get_single_employee->basic,2) }}
                                                            <br>
                                                            @if($get_single_employee->bonus)
                                                                {{ number_format($get_single_employee->bonus,2) }}
                                                            @else
                                                                &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                                            @endif
                                                            <br>
                                                            @if($get_single_employee->allowance)
                                                                {{ number_format($get_single_employee->allowance,2) }}
                                                            @else
                                                                &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                                            @endif
                                                           <!--  <br>
                                                            @if($get_single_employee->overtime)
                                                                {{ number_format($get_single_employee->overtime,2) }}
                                                            @else
                                                                &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                                            @endif -->

                                                            <div style=" font-size: 10px;"> </div><br>
                                                        </td>
                                                        <th style="padding-left:5px;text-align:left;border-right:none;">
                                                            <div style=" font-size: 10px;"> </div><br>
                                                            Prof Tax
                                                            <br>
                                                            @if($get_single_employee->deductions != 0  )
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
                                                            {{ number_format($get_single_employee->ptax,2) }}
                                                            <br>
                                                            @if($get_single_employee->deductions != 0  )
                                                                @if($getDeductionPercent)
                                                                    @foreach($getDeductionPercent as $deduction_key => $deduction_value)
                                                                        @php
                                                                        $basic_salary = $get_single_employee->basic;
                                                                        $getPF = $deduction_value->deduction_percentage;
                                                                        $total_pf_amnt = ($basic_salary * ( $getPF / 100 ));
                                                                        @endphp
                                                                        {{ number_format($total_pf_amnt,2) }}
                                                                        <br>
                                                                    @endforeach
                                                                @endif

                                                            @endif
                                                            <div style=" font-size: 10px;"> </div><br>
                                                        </td>
                                                    </tr> <?php $total_deduction_amount = $get_single_employee->ptax + $get_single_employee->deductions; ?>
                                                    <tr>
                                                        <th colspan="2" style="color:#000;text-align: center" align="center"><br>
                                                            <div style=" font-size: 10px;"> </div>
                                                            Gross Amount : Rs.{{ number_format($get_single_employee->gross,2) }}
                                                            <div style=" font-size: 10px;"> </div><br>
                                                        </th>
                                                        <th colspan="2" style="color:#000;text-align: center" align="center"><br>
                                                            <div style=" font-size: 10px;"> </div>
                                                            Deduction Amount : Rs.{{ number_format($total_deduction_amount,2) }}
                                                            <div style=" font-size: 10px;"> </div><br>
                                                        </th>
                                                    </tr>
                                                    <tr  >
                                                        <th colspan="4" style="color:#000;text-align: center">
                                                            <br>
                                                            <strong>
                                                                Net Pay (Rounded) : Rs.{{ number_format($get_single_employee->total_salary,2) }}
                                                            </strong>
                                                            <div style=" font-size: 10px;"> </div>
                                                            <br>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>

                                   {{-- <table class="table table-bordered table-striped table-condensed">
                                        <tr>
                                            <th>Employee Name</th>
                                            <td>{{ ucwords($get_single_employee->name) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Employee Id</th>
                                            <td>{{ $get_single_employee->username }}</td>
                                        </tr>
                                        <tr>
                                            <th>Payment Date</th>
                                            <td>{{ date('d-m-Y',strtotime($get_single_employee->payment_date)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Payment ID</th>
                                            <td>{{ $get_single_employee->payment_id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Basic</th>
                                            <td>Rs.{{ number_format($get_single_employee->basic,2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Allowance</th>
                                            <td>Rs.{{ number_format($get_single_employee->allowance,2) }}}</td>
                                        </tr>
                                        <tr>
                                            <th>OverTime</th>
                                            <td>Rs.{{ number_format($get_single_employee->overtime,2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bonus</th>
                                            <td>Rs.{{ number_format($get_single_employee->bonus,2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Professional Tax</th>
                                            <td>Rs.{{ number_format($get_single_employee->ptax,2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Deductions</th>
                                            <td>Rs.{{ number_format($get_single_employee->deductions,2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Net Salary</th>
                                            <td>Rs.{{ number_format($get_single_employee->total_salary,2) }} /-</td>
                                        </tr>

                                    </table>
                                --}}
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <br>
                                <div class="col-md-7 pull-right">
                                    {{-- <a class="btn btn-primary" href="{{ route('getTeacherAttendance') }}">
                                    --}}
                                    <form class="form" role="form" method="post" action="{{ route('send_employee_payroll_report') }}">
                                        {!! csrf_field() !!}
                                        <a class="btn btn-primary" href="{{ route('send_payroll',[$get_single_employee->employee_id, $year, $month ]) }}">
                                            <i class="fa fa-envelope-o fa-left"></i>
                                            Send Report
                                        </a>
                                            &nbsp;&nbsp;&nbsp;
                                        <input type="hidden" name="payroll_employee_id" value="{{ $get_single_employee->employee_id }}">
                                        <input type="hidden" name="payroll_employee_month" value="{{ $month }}">
                                        <input type="hidden" name="payroll_employee_year" value="{{ $year }}">
                                        <button type="submit" class="btn btn-info" value="send_pdf" name="send_pdf_report">
                                            <i class="fa fa-file-pdf-o fa-left"></i>
                                            Download as Pdf
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                </div>
           </div>
        </div>
@endsection