@extends('users.layouts.default')
@section('title', 'Add Attendance')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">Attendance</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.cred')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Student Attendance</strong></h3>
                            <div class="text-right">
                                <a href="{{route('view.attendance')}}" class="btn btn-info btn-rounded">View Today's Attendance</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control attenclass" name="class">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('class') as $clserror)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $clserror }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12 mainsection">
                                            <select class="form-control attensection" name="section" disabled>
                                                <option value="">Select Section</option>
                                            </select>
                                            @foreach($errors->get('section') as $sectionerr)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $sectionerr }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-block">Get Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if($getclass)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <strong>Add Attendance For {{ $getclass->class}} - {{ $getsection->section }} ( {{date('A')}} ) </strong>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{route('post.attendance')}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                        <table class="table table-borderd">
                            <thead>
                            <tr>
                                <th># </th>
                                <th>Student Name </th>
                                <th>Roll No</th>
                                <th>Present</th>
                                <th>Absent</th>
                                <!-- <th>Leave</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <input type="hidden" name="attendance_session" value="{{date('a')}}" >
                            @foreach($students as $key => $student )
                            <tr>
                                <td>{{ $key+1  }}</td>
                                <td>
                                    <input type="hidden" id="studentId" name="student_id[]" value="{{ $student->id }}" >
                                    {{ $student->name  }}
                                </td>
                                <td>{{ $student->roll_no }}</td>
                                <td>
                                    <span>P</span>
                                        <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_p_{{ $student->id  }}"
                                               name="attendance[]" value="p" onclick="enable_check_box(this.id)" checked>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                                <td>
                                    <span>A</span>
                                        <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_a_{{ $student->id  }}"
                                               name="attendance[]" value="a" onclick="enable_check_box(this.id)">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                                <!-- <td>
                                    <span>L</span>
                                        <input type="checkbox" class="student_attendance_radio_{{ $student->id  }}" id="attendance_l_{{ $student->id  }}"
                                               name="attendance[]" value="l" onclick="enable_check_box(this.id)">
                                </td> -->
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}" readonly>
                                <input type="hidden" name="class" value="{{ $getclass->id }}">
                                <input type="hidden" name="section" value="{{ $getsection->id }}">
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-info btn-lg" id="submit">
                                Add Attendance
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
            <p>
            <h3>
                <center>No datas Found!!!</center>
            </h3>
            </p>
        @endif
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