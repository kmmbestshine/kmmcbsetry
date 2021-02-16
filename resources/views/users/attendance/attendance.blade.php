@extends('users.layouts.default')
@section('title', 'Edit Attendance')
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
                <form class="form-horizontal" role="form" method="post" action="{{route('update.attendance')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>Edit Attendance For {{ $getclass->class}} - {{ $getsection->section }} ( {{ date('A') }} )</strong>
                            </h3>
                            <div class="text-right">
                                <a href="{{route('view.attendance')}}" class="btn btn-info btn-rounded">View List</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div style="height: 1000px; overflow: auto">
                        <table style="border: 1px solid black" class="table datatable table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Roll No</th>
                                    @if($holidays)
                                        <th>Attendance</th>
                                    @else
                                        <th>Present</th>
                                        <th>Absent</th>
                                        <th>Leave</th>
                                    @endif

                                </tr>
                                </thead>
                                <tbody>
                                <input type="hidden" name="attendance_session" value="{{ $session }}" >
                                @foreach($students as $key => $student)
                                    <tr>
                                        <td>
                                            <input type="hidden" id="studentId" name="student_id[]" value="{{ $student->id }}" >
                                            {{ $key+1  }}
                                        </td>
                                        <td>{{ $student->name  }}</td>
                                        <td>{{ $student->roll_no }}</td>
                                        @if($holidays)
                                            <td>
                                                <span>H</span>
                                                <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_p_{{ $student->id  }}"
                                                       name="attendance[]" checked value="h">
                                            </td>
                                        @elseif($student->attendance)
                                            @if(count($student->attendance) > 0 )
                                                @foreach($student->attendance as $attendance)
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_p_{{ $student->id  }}"
                                                       name="attendance[]" value="p" onclick="enable_check_box(this.id)" @if($attendance->attendance != 'A' && $attendance->attendance != 'L') checked @endif>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_a_{{ $student->id  }}"
                                                           name="attendance[]" value="a" onclick="enable_check_box(this.id)" @if($attendance->attendance == 'A') checked @endif>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_l_{{ $student->id  }}"
                                                           name="attendance[]" value="l" onclick="enable_check_box(this.id)" @if($attendance->attendance == 'L') checked @endif disabled>
                                                </td>
                                               @endforeach
                                            @else
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_p_{{ $student->id  }}"
                                                       name="attendance[]" value="p" onclick="enable_check_box(this.id)" checked>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_a_{{ $student->id  }}"
                                                       name="attendance[]" value="a" onclick="enable_check_box(this.id)">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_l_{{ $student->id  }}"
                                                       name="attendance[]" value="l" onclick="enable_check_box(this.id)" disabled>
                                                </td>
                                            @endif
                                        @endif


                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}" readonly>
                                    <input type="hidden" name="class" value="{{ $getclass->id }}">
                                    <input type="hidden" name="section" value="{{ $getsection->id }}">
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-info btn-lg" id="submit" @if($holidays) disabled @endif>Update Attendance</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function enable_check_box(id)
        {
            var student = id.split("_");
            var student_id = student[2];
            $(".student_attendance_radio_"+student_id).change(function()
            {
                $('.student_attendance_radio_'+student_id).not(this).prop('checked',false);
            });
        }

    </script>
@endsection
