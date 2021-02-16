@extends('users.layouts.default')
@section('title', 'Add Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Employee</li>
</ul>
@endsection
@section('contant')
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.attendance')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Attendance of Class {{ $getclass->class}} of Section {{ $getsection->section }}</strong></h3>
                            <div class="text-right">
                                <a href="{{route('view.attendance')}}" class="btn btn-info btn-rounded">View List</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-borderd">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Roll No</th>
                                        <th id="am_table_head">Am</th>
                                        <th id="pm_table_head">Pm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->name  }}</td>
                                            <td>{{ $student->roll_no }}</td>
                                            <td>
                                                <!--<div class="col-md-12">
                                                    <div class="col-md-2">
                                                        <div class="radio">
                                                            <input type="radio" name="attendance[{{$student->id}}]" value="P" checked>P
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="radio">
                                                            <input type="radio" name="attendance[{{$student->id}}]" value="L">L
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="radio">
                                                            <input type="radio" name="attendance[{{$student->id}}]" value="A">A
                                                        </div>
                                                    </div>
                                                </div> phase 2 by siva-->
                                                <?php $am_ab_ids =array();
                                                      $pm_ab_ids =array(); 
                                                ?>
                                                @if(count($attendance) > 0 )
                                                
                                                           
                                                    @foreach($attendance as $attendance_key => $attendance_value)
                                                        @if($attendance_value->attendance_session == 'am')
                                                            <?php
                                                            $am_ab_ids []= $attendance_value->student_id; ?>
                                                                    @if($student->id == $attendance_value->student_id)
                                                                            @if($attendance_value->attendance == 'A')
                                                                                <span>A</span>
                                                                                <input type="checkbox" name="attendance[{{ $student->id }}_am]" onclick="enable_button()">
                                                                            @elseif($attendance_value->attendance == 'L')
                                                                                <span>L</span>
                                                                                <input type="checkbox" name="attendance[{{ $student->id }}_am]" disabled="disabled">    
                                                                            @endif
                                                                            @if($attendance_value->attendance == 'P')
                                                                                <input type="hidden" name="attendance[{{ $student->id }}_am]" value="off" >
                                                                                <input type="checkbox" name="attendance[{{ $student->id }}_am]" checked onclick="enable_button()">
                                                                            @endif
                                                                    </select>
                                                                    @endif

                                                        @endif
                                                    @endforeach 
                                                    
                                                    @if( !in_array($student->id, array_unique($am_ab_ids)))
                                                            <input type="hidden" name="attendance[{{ $student->id }}_am]" value="off">
                                                            <input type="checkbox" name="attendance[{{ $student->id }}_am]" checked onclick="enable_button()">
                                                    @endif
                                                @else
                                                        <input type="hidden" name="attendance[{{ $student->id }}_am]" value="off">
                                                        <input type="checkbox" name="attendance[{{ $student->id }}_am]" checked onclick="enable_button()">
                                                @endif
                                            </td>
                                            <td>
                                                @if(count($attendance) > 0 )
                                                    @foreach($attendance as $attendance_key => $attendance_value)
                                                        @if($attendance_value->attendance_session == 'pm')
                                                            <?php
                                                            $pm_ab_ids []= $attendance_value->student_id; ?>

                                                                @if($student->id == $attendance_value->student_id)

                                                                        @if($attendance_value->attendance == 'A')
                                                                                <span>A</span>
                                                                                <input type="checkbox" name="attendance[{{ $student->id }}_pm]" onclick="enable_button()">
                                                                        @elseif($attendance_value->attendance == 'L')
                                                                                <span>L</span>
                                                                                <input type="checkbox" name="attendance[{{ $student->id }}_pm]" disabled="disabled"> 
                                                                        @endif
                                                                        @if($attendance_value->attendance == 'P')
                                                                            <input type="hidden" name="attendance[{{ $student->id }}_pm]" value="off">
                                                                            <input type="checkbox" name="attendance[{{ $student->id }}_pm]" checked onclick="enable_button()">
                                                                        @endif
                                                                @endif
                                                            @endif
                                                        @endforeach 
                                                        @if( !in_array($student->id, array_unique($pm_ab_ids)))
                                                            <input type="hidden" name="attendance[{{ $student->id }}_pm]" value="off">
                                                            <input type="checkbox" name="attendance[{{ $student->id }}_pm]" checked onclick="enable_button()">
                                                        @endif
                                                @else
                                                        <input type="hidden" name="attendance[{{ $student->id }}_pm]" value="off">
                                                        <input type="checkbox" name="attendance[{{ $student->id }}_pm]" checked onclick="enable_button()">
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach($errors->get('attendance') as $attendance)
                                        <tr>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $attendance }}
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="date" value="{{date('d-m-Y')}}" readonly>
                                    <input type="hidden" name="class" value="{{ $getclass->id }}">
                                    <input type="hidden" name="section" value="{{ $getsection->id }}">
                                    @foreach($errors->get('date') as $date)
                                        <div class="alert alert-danger my-alert" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button> {{ $date }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-info btn-lg" disabled="disabled" id="submit">Update Attendance</button>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script>
        function changeAmPM(){
		var selected = $('#chooseAmPm :selected').val();
		if(selected == 'am'){
			$('#pm_table_head').hide();
			$('#tableRow td:nth-child(4)').hide();
			$('#am_table_head').show();
			$('#tableRow td:nth-child(3)').show();
		}else{
			$('#am_table_head').hide();
			$('#tableRow td:nth-child(3)').hide();
			$('#pm_table_head').show();
			$('#tableRow td:nth-child(4)').show();
		}
	}
        function enable_button(){
            var button =$('#submit').attr('disabled');
            if(button == "disabled"){
                $('#submit').prop('disabled', false);
            }
        }
    </script>
@endsection