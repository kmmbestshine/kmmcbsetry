@extends('users.layouts.default')
@section('title', 'Teachers Analyst Report')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">Teachers Analyst</li>
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

    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Teachers Analyst Report</h2>
    </div>

    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                            @if(in_array('ATTENDANCE', $userplans))
                                <a href="{{route('user.report')}}" class="btn btn-info btn-rounded">Attendance</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('LIBRARY', $userplans))
                                <a href="{{route('libraryReport')}}" class="btn btn-info btn-rounded">Library</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            @if(in_array('STUDENT', $userplans))
                                <a href="{{route('studentsReport')}}" class="btn btn-info btn-rounded">Students</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            @if(in_array('STUDENT', $userplans))
                                <a href="{{route('analystReport')}}" class="btn btn-info btn-rounded">Students Analyst</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            @if(in_array('EMPLOYEE', $userplans))
                                <a href="{{route('teacherReport')}}" class="btn btn-info btn-rounded">Teachers Analyst</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if(in_array('FEES', $userplans))
                                <a href="{{route('feeCollectionReport')}}" class="btn btn-info btn-rounded">Fee Collection</a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Teachers Analyst Report Form</h3>
                        <!-- <div class="text-right">
                                    <a href="{{route('list.structure')}}" class="btn btn-info btn-rounded">View</a>
                                </div>  -->
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="get" action="{{route('post.teacher.detail')}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Select Teachers</label>
                                            <div class="col-md-9">
                                                <select class="form-control analystTeacher" name="teacher_id" id="teacher_id">
                                                    <option value="">Select Teacher</option>
                                                    <option value="0">All Teachers</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Select Exam Type</label>
                                            <div class="col-md-9">
                                                <select class="form-control analystExam" name="exam_type">
                                                    <option value="">Select Exam Type</option>
                                                    <option value="0">All Exam Type</option>
                                                    @foreach($exam_type as $type)
                                                        <option value="{{ $type->id }}">{{ $type->exam_type }}</option>
                                                    @endforeach
                                                </select>
                                                @foreach($errors->get('exam_type') as $subjecterror)
                                                    <div class="alert alert-danger my-alert" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button> {{ $subjecterror }}
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Select Class</label>
                                            <div class="col-md-9">
                                                <select class="form-control analystclass" name="class" id="class_id">
                                                    <option value="">Select Class</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{ $class->id }}">{{ $class->class }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Select Section</label>
                                            <div class="col-md-9 examsection">
                                                <select class="form-control homeexamsection" name="section" id="section_id" disabled>
                                                    <option value="">Select Section</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <center><button style="margin-top:20px" class="center btn btn-info">
                                        Create Report</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @if(count($getTeacherDetails)>0)
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Analyst Report
                                </h3>
                                <div class="text-right">
                                    <a href="{{route('reportDownload')}}" class="btn btn-info btn-rounded">Export</a>
                                </div>
                            </div>


                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Teacher Name</th>
                                            <th>User Name</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Exam Type</th>
                                            <th>Exam Date</th>
                                            <th>Subject</th>
                                            <th>Total Exam Marks</th>
                                            <th>Min Pass Marks</th>
                                            <th>Above 80% Marks</th>
                                            <th>Total Pass(%)</th>
                                            <th>Total Fail(%)</th>
                                            <th>Total Absent</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($getTeacherDetails as $key => $teacher)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $teacher->name }}</td>
                                                <td>{{ $teacher->username }}</td>
                                                <td>{{ $teacher->class }}</td>
                                                <td>{{ $teacher->section }}</td>
                                                <td>{{ $teacher->exam_type }}</td>
                                                <td>
                                                    {{ date('jS M Y', strtotime($teacher->date)) }}
                                                </td>
                                                <td>
                                                    {{ $teacher->subject }}
                                                </td>
                                                <td>{{ $teacher->max_marks }}</td>
                                                <td>{{ $teacher->pass_marks }}</td>
                                                <td>
                                                    
                                                        <?php $top = ($teacher->top_students / $teacher->total_students) * 100 ; ?>
                                                        @if(is_int($top))
                                                            {{ $top }}  %
                                                        @else
                                                            {{  number_format($top,2)  }} %
                                                        @endif
                                                    

                                                </td>
                                                <td>
                                                    @if($teacher->total_students !=  0)
                                                        <?php $passed = ($teacher->total_students_pass / $teacher->total_students) * 100; ?>

                                                        @if(is_int($passed))
                                                            {{ $passed }}  %
                                                        @else
                                                            {{  number_format($passed,2) }} %
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($teacher->total_students !=  0)

                                                        <?php $failed = ( ($teacher->total_students_fail + $teacher->absent_students ) / $teacher->total_students) * 100; ?>

                                                        @if(is_int($failed))
                                                            {{ $failed }}  %
                                                        @else
                                                            {{ number_format( $failed ,2) }} %
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($teacher->absent_students != 0)
                                                        {{ $teacher->absent_students }}
                                                    @else
                                                        0
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                        {{--{{ $getStudentDetails->links() }}--}}
                                        </tbody>
                                    </table>
                                    {{-- {!! $getStudentDetails->appends(Input::all())->render() !!}--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <center><h2>No Datas Found!!!</h2></center>
        @endif

    </div>
@endsection