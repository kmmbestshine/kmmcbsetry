@extends('users.layouts.default')
@section('title', 'View Employee Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>
    <li><a href="">Attendance</a></li>
    <li class="active">Employee</li>
</ul>
@endsection
@section('contant')
	<style>

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
				<strong>Oh Snap!</strong> {{ Input::old('error') }}
			</div>
		</div>
	</div>
@endif
<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" role="form" method="get">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>View Employee Attendance</strong>
						</h3>
						<div class="text-right">
							<a href="{{route('getTeacherAttendance')}}" class="btn btn-info btn-rounded">Add Employee Attendance</a>
							&nbsp;&nbsp;&nbsp;
							
						</div>
					</div>

				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<!-- Monthly Wise Attendance Report  -->
		<div class="col-md-6">
			<form class="form-horizontal" role="form" method="get">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>View Monthly Wise Employee Attendance</strong>
						</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" >
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Staff Type</label>
										<div class="col-md-9">
											<select class="form-control " name="staff_type">
												<option value="">Select Staff Type</option>
												<option value="all">All Staff Type</option>
												@foreach($getStaffType as $staffType)
													<option value="{{$staffType->id  }}">
														{{ $staffType->staff_type }}
													</option>
												@endforeach
											</select>
											@foreach($errors->get('staff_type') as $type)
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> {{ $type }}
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Month</label>
										<div class="col-md-9">
											<select class="form-control" name="month">
												<option value="">Select Month</option>
												@foreach($getMonth as $month)
													<option value="{{ $month->id }}">{{ $month->month }}</option>
												@endforeach
											</select>
											@foreach($errors->get('month') as $months)
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> {{ $months }}
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Year</label>
										<div class="col-md-9">
											<select class="form-control " name="year">
												<option value="">Select Year</option>
												@for($i=0;$i<5;$i++)
													<option value="{{ 2000+$i }}">{{ 2021+$i }}</option>
												@endfor
											</select>
											@foreach($errors->get('year') as $years)
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> {{ $years }}
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12 pull-right">
											<center>
												<button type="submit"  name="monthly_report" value="monthlyReport" class="btn btn-info">
													<i class="fa fa-floppy-o fa-left"></i>
													Get Monthly Report
												</button>
											</center>
										</div>
									</div>
								</div>

							</div>
						</form>
					</div>
				</div>
			</form>
		</div>
		<!-- Daily Attendance Report  -->
		<div class="col-md-6">
			<form class="form-horizontal" role="form" method="get">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>View Employee's Daily Report</strong>
						</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" >
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Staff Type</label>
										<div class="col-md-9">
											<select class="form-control " name="daily_staff_type">
												<option value="">Select Staff Type</option>
												<option value="all_staff">All Staff Type</option>
												@foreach($getStaffType as $staffType)
													<option value="{{$staffType->id  }}">
														{{ $staffType->staff_type }}
													</option>
												@endforeach
											</select>
											@foreach($errors->get('daily_staff_type') as $daily)
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> {{ $daily }}
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Date</label>
										<div class="col-md-9">
											<input  type="date" class="form-control" name="daily_date">
											@foreach($errors->get('daily_date') as $ddate)
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> {{ $ddate }}
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Status</label>
										<div class="col-md-9">
											<select name='daily_status' class="form-control">
												<option value="">Select Status</option>
												<option value="L">Leave</option>
												<option value="A">Absent</option>
											</select>
											@foreach($errors->get('daily_status') as $dstatus)
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> {{ $dstatus }}
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12 pull-right">
											<center>
												<button type="submit" name="daily_report" value="dailyReport" class="btn btn-info">
													<i class="fa fa-floppy-o fa-left"></i>
													Get Daily Report
												</button>
											</center>
										</div>
									</div>
								</div>

							</div>
						</form>
					</div>
				</div>
			</form>
		</div>

	</div>
	<!-- View All Attendance Report  -->
	@if($getAllTeacherAttendance))
	<div class="row">
        <div class="col-md-12">
			<div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
						<strong>
							View All Employee Attendance List
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
									{{--<th>S.No</th>--}}
									<th>Date </th>
									<th>Employee Name </th>
									<th>Employee Id</th>
									<th>Department</th>
									<th>Contact No</th>
									{{--<th>Session</th>--}}
									<th>Attendance</th>
									<th>View</th>
									<th>Edit</th>
									{{--<th>Delete</th>--}}
								</tr>
							</thead>
							@if(count($getAllTeacherAttendance)>0)
							<tbody>
								@foreach($getAllTeacherAttendance as $key => $attendance)
									@if($attendance->attendance != 'H')
									<tr>
										{{--<td>{{ $key+1 }}</td>--}}
										<td>{{ date('d-m-Y',strtotime($attendance->date)) }}</td>
										<td>{{ $attendance->name }}</td>
										<td>{{ $attendance->username }}</td>
										<td>{{ $attendance->staff_type }}</td>
										<td>{{ $attendance->mobile }}</td>
										{{--<td>{{ ucwords($attendance->session_type) }}</td>
										--}}
										<td>
											<table class="table table-borderd table-striped">
												<thead>
													<tr>
														<th>P</th>
														<th>L</th>
														<th>A</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															@if($attendance->attendance == 'P')

																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>In Time</th>
																		<th>Out Time</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			{{ $attendance->in }}
																		</td>
																		<td>
																			{{ $attendance->out }}
																		</td>
																	</tr>
																	</tbody>
																</table>

															@else
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>In Time</th>
																		<th>Out Time</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																	</tr>
																	</tbody>
																</table>
															@endif
														</td>
														<td>
															@if($attendance->attendance == 'L')
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			{{ $attendance->attendance }}
																		</td>
																	</tr>
																	</tbody>
																</table>
															@else
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																	</tr>
																	</tbody>
																</table>

															@endif
														</td>
														<td>
															@if($attendance->attendance == 'A')
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			{{ $attendance->attendance }}
																		</td>
																	</tr>
																	</tbody>
																</table>
															@else
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																	</tr>
																	</tbody>
																</table>
															@endif
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											{{--<a href="{{route('view.teacher.attendance.id',$attendance->id ) }}" class="btn  btn-info" >
											--}}
											<a href="{{route('viewTeacherAttendance',$attendance->id ) }}" class="btn  btn-info" >
												<span class="fa fa-eye fa-left"></span>	View
											</a>
										</td>
										<td>
											<a href="{{route('editTeacherAttendance',$attendance->id ) }}" class="btn  btn-primary" >
												<span class="fa fa-pencil fa-left"></span>	Edit
											</a>
										</td>
										{{--<td>
											<a href="{{route('deleteTeacherAttendance',$attendance->id ) }}" class="btn  btn-danger" >
												<span class="fa fa-trash fa-left"></span>Delete</a>
										</td>--}}
									</tr>
									@endif
								@endforeach
							</tbody>
							@endif
						</table>
					</div>
				</div>
			</div>
    	</div>
    </div>
	<!-- View Daily Attendance Report  -->
	@elseif($getDailyTeacherAttendance)
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>
								@if($input['daily_staff_type'] !='all_staff')
									@foreach($getDailyTeacherAttendance as $day => $dailyValue)
									@endforeach
									{{  ucwords($dailyValue->staff_type) }}(s)
								@else
									All Staff(s)
								@endif
								Daily Attendance Report
								@if($input['daily_status'] == 'A')(Absent) @else (Leave) @endif

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
							<table class="table ">
								<thead>
								<tr>
									<th>S.No</th>
									<th>Date </th>
									<th>Employee Name </th>
									<th>Employee Id</th>
									<th>Department</th>
									<th>Contact No</th>
									<th>Date</th>
								</tr>
								</thead>
								@if(count($getDailyTeacherAttendance)>0)
									<tbody>
									@foreach($getDailyTeacherAttendance as $day => $dailyValue)
										<tr>
											<td>{{ $day+1 }}</td>
											<td>{{ date('d-m-Y',strtotime($dailyValue->date)) }}</td>
											<td>{{ $dailyValue->name }}</td>
											<td>{{ $dailyValue->username }}</td>
											<td>{{ $dailyValue->staff_type }}</td>
											<td>{{ $dailyValue->mobile }}</td>
											<td>
												{{ date('d-m-Y',strtotime($dailyValue->date ))}}
											</td>
										</tr>
									@endforeach
									<tr>
										<td colspan="5"></td>
										<td >Total</td>
										<td >{{ count($getDailyTeacherAttendance) }} Employee(s)</td>

									</tr>
									</tbody>
								@endif
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- View Monthly Wise Attendance Report  -->
	@elseif($getAllTeachers)
        <?php
        $days = cal_days_in_month ( CAL_GREGORIAN , $input['month'] , $input['year'] );
        ?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>
								@if($getMonthName)
									View Employee Report For " {{ ucwords($getMonthName->month) }} - {{ $input['year'] }} "
								@else
									View Employee Monthly Attendance List
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
						<div class="table-responsive" >

							<table class="table " border="1" >
								<thead >
								<tr>
									<th colspan="4">Date</th>

									@for($i=1;$i<= $days;$i++)
										<th> {{ $i }} </th>
									@endfor

								</tr>
								<tr>
									<th >S.No</th>
									<th >Name</th>
									<th colspan="2">Employee ID</th>
									@for($k=1;$k<= $days;$k++)
										<th > </th>
									@endfor
								</tr>
								</thead>
								@if(count($getAllTeachers)>0)
									<tbody>
									@foreach($getAllTeachers as $monthly => $monthReport)
										<tr >
											<td rowspan="2">
												<strong>{{ $monthly+1 }}</strong>
											</td>
											<td rowspan="2">
												<strong>{{ ucwords($monthReport->name) }}</strong>
											</td>
											<td rowspan="2">
												<strong>{{ $monthReport->username }}</strong>
											</td>
											<td >
												<strong>In</strong>
											</td>
											@for($j=1;$j<= $days;$j++)
												<td width="10%">
													@if($monthReport->monthlyReport)
														@foreach($monthReport->monthlyReport as $report => $reportValue)
															@if(date('d',strtotime($reportValue->date)) == $j)
																@if($reportValue->attendance == 'P')
																	{{ $reportValue->in }}
																@elseif($reportValue->attendance == 'A')
																	AB
																	{{--<input value="AB" disabled="disabled" style="border: transparent;background-color: transparent">
																--}}
																@elseif($reportValue->attendance == 'L')
																	L
																@else

																@endif
															@endif
														@endforeach
													@endif
												</td>
											@endfor
										</tr>
										<tr >
											<td ><strong>Out</strong></td>
											@for($p=1;$p<= $days;$p++)
												<td width="10%">
													@if($monthReport->monthlyReport)
														@foreach($monthReport->monthlyReport as $report => $reportValue)
															@if(date('d',strtotime($reportValue->date)) == $p)
																@if($reportValue->attendance == 'P')
																	{{ $reportValue->out }}
																@elseif($reportValue->attendance == 'A')
																	AB
																@elseif($reportValue->attendance == 'L')
																	L
																@else

																@endif
															@endif
														@endforeach
													@endif
												</td>
											@endfor
										</tr>
									@endforeach
									<tr>
										<th colspan="12">
											<center>No Of days In Month : </center></th>
										<th  colspan="{{ $days-8 }}"> {{ $days }} Days </th>

									</tr>
									</tbody>
								@endif
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	@else

		<p>
		<center>
			No Datas Found !!!
		</center>
		</p>

	@endif
</div>
@endsection