@extends('users.layouts.default')
@section('title', 'View  Time Table')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">Time Table</li>
    </ul>
    <script type="text/css">
        .mt-actions .mt-action .mt-action-body .mt-action-row .mt-action-buttons
        {
            vertical-align: top;
            display: table-cell;
            text-align: center;
            width: 160px;
            white-space: nowrap;
            padding-top: 10px;
        }
    </script>
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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <strong>View Time Table</strong>
                </h3>
                <div class="text-right">
                    <a href="{{route('user.add_exam_timetable')}}" class="btn btn-info btn-rounded">
                        Add Exam TImeTable</a>
                    <a href="{{route('user.timeTable')}}" class="btn btn-info btn-rounded">Add TIme Table</a>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="get">
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-control session" name="session">
                                <option value="">Select Session</option>
                                @foreach($sessions as $session)
                                    <option value="{{ $session->id }}">{{ $session->session }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 upgrade_class">
                            <select class="form-control class" name="class" disabled>
                                <option value="">Select Class</option>
                            </select>
                        </div>
                        <div class="col-md-3 upgrade_section">
                            <select class="form-control upsection" name="section" disabled>
                                <option value="">Select Section</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-info btn-block">Get Timetable</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            @if($classData && $sessionData && $sectionData)
                                Class <strong> {{ $classData->class }} </strong> -
                                Section <strong> {{ $sectionData->section }}</strong> Timetable ( <strong> {{ $sessionData->session }}  </strong> )
                            @else
                                All Class & Section Timetable ( <strong> {{ $currentSession }}</strong> )
                            @endif
                        </h3>
                    </div>
                    <div class="panel-body">
                        @if(count($timetables)>0)
                            <form method="get" action="{{route('delete_all_timetable')}}">
                                
                                    <div style="overflow: auto">
                        <table style="border: 1px solid black" class="table @if($currentSession) datatable @endif table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>
                                            Select All <input type="checkbox"  id="select_all" value="check"
                                                              onchange=" return select_all_checkbox()">
                                        </th>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>subject</th>
                                        <th>Teacher</th>
                                        <th>Day</th>
                                        <th>Period</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($timetables as $key => $timetable)
                                        <tr>
                                            <th>
                                                <input type="hidden" name="time_table_id[]" value="{{ $timetable->id }}">
                                                <input type="checkbox" name="select[]" class="select_all_checkboc_class"
                                                       id="select_all_{{$timetable->id}}" value="{{ $timetable->id }}"
                                                       onchange="check_checkboc(this.id)" >
                                            </th>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $timetable->class }}</td>
                                            <td>{{ $timetable->section }}</td>
                                            <td>{{ $timetable->subject }}</td>
                                            <td>{{ $timetable->name }}</td>
                                            <td>{{ $timetable->day }}</td>
                                            <td>{{ $timetable->period }}</td>
                                            <td>{{ date('h:i:s A', strtotime($timetable->start_time)) }}</td>
                                            <td>
                                                {{ date('h:i:s A', strtotime($timetable->end_time)) }}
                                            </td>
                                            <td>
                                                <a href="{{route('editTimetableDetail', $timetable->id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('deleteTimetable', $timetable->id)}}" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if($classData && $sessionData && $sectionData)
                                        <tr>
                                            <td colspan="12"  align="center">
                                                <button type="submit" title="Delete All Timetable" class="btn btn-danger" name="delete_all" value="ok">
                                                    Delete All
                                                </button>
                                                {{--<div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="submit" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>--}}
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>

                                </table>
                            </div>
                            </form>
                        @else
                            <center><h2>No Time Table Found!!!</h2></center>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function select_all_checkbox()
        {
            if($('#select_all').prop("checked") == true)
            {
                $('.select_all_checkboc_class').prop("checked", true);
            }
            else
            {
                $('.select_all_checkboc_class').prop("checked", false);
            }

        }
        function check_checkboc(id)
        {
            var timetable = id.split("_");
            var timetable_id = timetable[2];
            if($('#select_all_'+timetable_id).prop("checked")== true)
            {
                $('#select_all_'+timetable_id).prop("checked", true);
            }
            else
            {
                $('#select_all_'+timetable_id).prop("checked", false);
            }
        }
    </script>
@endsection