@if($getAllTeacherAttendance)
<table class="table ">
	<thead>
	<tr>
		<th colspan="11" style="background-color: #FF0000;color:#ffffff">
			<strong>
				View Employee Attendance List
			</strong>
		</th>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Date </th>
		<th>Employee Name </th>
		<th>Employee Id</th>
		<th>Department</th>
		<th>Contact No</th>
		<th>Attendance</th>
		<th>In Time</th>
		<th>Out Time</th>
		<th>Leave</th>
		<th>Absent</th>
	</tr>
	</thead>
	@if(count($getAllTeacherAttendance)>0)
		<tbody>
		@foreach($getAllTeacherAttendance as $key => $attendance)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ date('d-m-Y',strtotime($attendance->date)) }}</td>
				<td>{{ $attendance->name }}</td>
				<td>{{ $attendance->username }}</td>
				<td>{{ $attendance->staff_type }}</td>
				<td>{{ $attendance->mobile }}</td>
				<td>
					@if($attendance->attendance == 'P')
						Present
					@elseif($attendance->attendance == 'L')
						Leave
					@else
						Absent
					@endif
				</td>
				@if($attendance->attendance == 'P')
					<td>
						{{ $attendance->in }}
					</td>
					<td>
						{{ $attendance->out }}
					</td>
				@else
					<td>
						&nbsp;-&nbsp;&nbsp;&nbsp;
					</td>
					<td>
						&nbsp;-&nbsp;&nbsp;&nbsp;
					</td>
				@endif
				<td>
					@if($attendance->attendance == 'L')
						{{ $attendance->attendance }}
					@else
						&nbsp;-&nbsp;&nbsp;&nbsp;
					@endif
				</td>
				<td>
					@if($attendance->attendance == 'A')
						{{ $attendance->attendance }}
					@else
						&nbsp;-&nbsp;&nbsp;&nbsp;
					@endif
				</td>
			</tr>
		@endforeach
		</tbody>
	@else
		<p>
		<center>
			No Datas Found !!!
		</center>
		</p>
	@endif
</table>
@elseif($getDailyTeacherAttendance)
	<table class="table ">
		<thead>
		<tr>
			<th colspan="7" style="background-color: #FF0000;color:#ffffff">
				<strong>
					@if($input['daily_staff_type'] !='all_staff')
						@foreach($getDailyTeacherAttendance as $day => $dailyValue)
						@endforeach
						{{  ucwords($dailyValue->staff_type) }}
					@else
						All Staff(s)
					@endif
					Daily Attendance Report
					@if($input['daily_status'] == 'A') (Absent) @else (Leave) @endif

				</strong>
			</th>
		</tr>
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
@elseif($getAllTeachers)
    <?php
    $days = cal_days_in_month ( CAL_GREGORIAN , $input['month'] , $input['year'] );
    ?>
	<table class="table " border="1">
		<thead>
		<tr style="background-color: #17619a;color:#ffffff;border: 1px solid white;">
			<th colspan="4">Date</th>

			@for($i=1;$i<= $days;$i++)
				<th> {{ $i }}</th>
			@endfor

		</tr>
		<tr style="background-color: #17619a;color:#ffffff;border: 1px solid white;">
			<th>S.No</th>
			<th >Name</th>
			<th colspan="2">Employee ID</th>
			@for($k=1;$k<= $days;$k++)
				<th></th>
			@endfor
		</tr>
		</thead>
		@if(count($getAllTeachers)>0)
			<tbody>
			@foreach($getAllTeachers as $monthly => $monthReport)
				<tr>
					<td rowspan="2">
						<strong>{{ $monthly+1 }}</strong>
					</td>
					<td rowspan="2">
						<strong>{{ ucwords($monthReport->name) }}</strong>
					</td>
					<td rowspan="2">
						<strong>{{ $monthReport->username }}</strong>
					</td>
					<td>
						<table>
							<tr></tr>
							<tr>
								<td>In
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
														{{--<input value="AB" disabled="disabled"
                                                        style="border: transparent;background-color: transparent">
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
							<tr>
								<td>Out
								</td>
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
						</table>
					</td>


				</tr>
			@endforeach
			<tr>
				<th colspan="12">
					<center>No Of days In Month :</center>
				</th>
				<th colspan="{{ $days-8 }}"> {{ $days }} Days</th>

			</tr>
			</tbody>
		@endif
	</table>
@else
	No Datas Found !!!
@endif