@extends('users.layouts.default')
@section('title', 'Payroll Report')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">Payroll</li>
    </ul>
    @endsection

    @section('contant')
        @if(Input::old('success'))
            <br>
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
            <br>
        @endif
        @if(Input::old('error'))
            <br>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh Snap!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
            <br>
        @endif
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>Payroll For Employee</strong>
                            </h3>
                            <div class="text-right">
                               {{-- <a href="{{route('getTeacherAttendance')}}" class="btn btn-info btn-rounded">Add Employee Attendance</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('viewMonthlyReport')}}" class="btn btn-info btn-rounded">Employee's Daily Report</a>
                                &nbsp;&nbsp;&nbsp;
                                --}}<!-- <a href="{{route('add_bonus_payroll')}}" class="btn btn-info btn-rounded">Add Overtime</a>
                                &nbsp;&nbsp;&nbsp; -->
                                <a href="{{route('get_deduction')}}" class="btn btn-info btn-rounded">Add Deduction</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('add_professional_tax')}}" class="btn btn-info btn-rounded">Add Professional Tax</a>
                                &nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#newPayroll">Add Payroll</button>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{ route('add_allowed_leave') }}" class="btn btn-info btn-rounded">Add Allowed Leave</a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal" >
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control" name="payroll_month">
                                            <option value="">Select Month</option>
                                            @foreach($getMonth as $month)
                                                <option value="{{ $month->id }}">{{ $month->month }}</option>
                                            @endforeach
                                        </select>
                                        @foreach($errors->get('payroll_month') as $pmonth)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $pmonth }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control " name="payroll_year">
                                            <option value="">Select Year</option>
                                            @for($i=0;$i<100;$i++)
                                                <option value="{{ 2000+$i }}">{{ 2000+$i }}</option>
                                            @endfor
                                        </select>
                                        @foreach($errors->get('payroll_year') as $pyear)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $pyear }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-3 pull-right">
                                        <center>
                                            <button type="submit" name="submit_payroll"
                                                    value="payroll" class="btn btn-info">
                                                <i class="fa fa-floppy-o fa-left"></i>
                                                Get Payroll Report
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal fade" id="newPayroll" role="dialog">
                            <div class="modal-dialog modal-lg">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">New payroll entry</h4>
                                    </div>

                                    <div class="modal-body">

                                        <form class="form" role="form" method="POST" action="{{ route('add_new_payroll') }}">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group payroll_payment_day">
                                                        <label class="control-labe">Payment day <small>(required)</small></label>
                                                        <input type="date" id="payday" class="form-control payment_day" name="pay_day"  required="" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-labe">Payment ID</label>
                                                        <input type="text" class="form-control" name="payroll_id" value="{{ $lastInsertedID }}" disabled="disabled">
                                                        <input type="hidden" class="form-control" name="payroll_id" value="{{ $lastInsertedID }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group payroll_teacher_class" >
                                                        <label class="control-label">Select Employee <small>(required)</small></label>
                                                        <select name="employee_id" class="form-control custom-select mb-2 mr-sm-2 mb-sm-0 payroll_teacher" disabled>
                                                            <option value="">Please Choose One</option>
                                                            {{--@foreach($getTeachers as $teacher)
                                                                <option value="{{ $teacher->id }}">{{ ucwords($teacher->name) }}</option>
                                                            @endforeach--}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Basic amount <small>(required)</small></label>
                                                        <input type="text" class="form-control basic_payroll_salary"  required="">
                                                        <input type="hidden" class="form-control basic_salary" name="basic" >
                                                        {{--<input type="text" pattern="\d+(\.\d{2})?" class="form-control basic_payroll_salary" name="basic" required="">
                                                    --}}
                                                        <div class="displayEmployeeSalary"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Allowance</label>
                                                        <input type="text" class="form-control payroll_allowance" name="allowance"
                                                               onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group payment_bonus_value">
                                                        <label class="control-labe">HRA</label>
                                                        <input type="text"  class="form-control payroll_bonus" name="bonus"
                                                               onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">


                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Prof Tax</label>
                                                        <input type="text"  class="form-control payroll_tax" >
                                                        <input type="hidden"  class="form-control payroll_tax_amount" name="tax" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Deductions</label>
                                                        <input type="text"  class="form-control payroll_deductions">
                                                        <input type="hidden"  class="form-control payroll_deductions_amount" name="deduction" >
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <div class="form-group pull-right">
                                                    <input type="hidden" name="total_leave" class="form-control total_leave_days">
                                                    <input type="hidden" name="allowed_leave" class="form-control total_allowed_leave">
                                                    <input type="hidden" name="worked_days" class="form-control total_worked_days">
                                                    <input type="hidden" name="gross_value" class="form-control payroll_gross">
                                                    <button type="submit" class="btn btn-primary" name="add_new_payroll" value="new_payroll">Create</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($getPayrollDetail)
                @if(count($getPayrollDetail)>0)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
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
                            </h3>
 <div class="text-right">
     <a href="{{ route('downloadEmployeeReport') }}" class="btn btn-info btn-rounded">
         <i class="fa fa-download fa-left" aria-hidden="true"></i>    Export
     </a>
 </div>
</div>
<div class="panel-body">
 <div class="table-responsive">
     <table class="table datatable">
         <thead>
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
            <!--  <th>OverTime </th> -->
             <th>Allowance </th>
             <th>HRA</th>
             <th>Gross</th>
             <th>Prof Tax</th>
             <th>Deduction</th>
             <th>CTC</th>
             <th>View</th>
            {{-- <th>Edit</th>--}}
             {{--<th>Delete</th>--}}
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
                 <!-- <td>
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
                 <td>
                     <a href="{{route('viewSingleEmployeePayroll',[$payroll->employee_id, $payroll_year, $payroll_month ])}}" class="btn  btn-info" >
                         <span class="fa fa-eye fa-left"></span>	View
                     </a>
                 </td>
                 {{--<td>
                     <a href="{{route('editSingleEmployeePayroll',[$payroll->employee_id, $payroll_year, $payroll_month ])}}" class="btn  btn-primary" >
                         <span class="fa fa-pencil fa-left"></span>	Edit
                     </a>
                 </td>--}}
             </tr>
         @endforeach
         </tbody>
     </table>
 </div>
</div>
</div>
</div>
</div>
@endif
@else
<p>
<center>
<h1>No Datas Found !!!</h1>
</center>
</p>
@endif

</div>
@endsection