@extends('users.layouts.default')
@section('title', 'Upgrade Students')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">Upgrade Students</li>
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
                <form class="form-horizontal" role="form" method="get">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Select From Class</strong></h3>
                            <div class="text-right">
                                <a href="{{route('master.student')}}" class="btn btn-info btn-rounded">New Admission</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 ">
                                    <select class="form-control session" name="session" >
                                        <option value="">Select Session</option>
                                        @foreach($get_sessions as $sessions)
                                            <option value="{{ $sessions->id }}">{{ $sessions->session }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-3 upgrade_class">
                                    <select class="form-control class" name="class"  id="upgradeClass" disabled>
                                        <option value="">Select Class</option>
                                    </select>
                                </div>
                                <div class="col-md-3 upgrade_section">
                                    <select class="form-control upsection" name="section" disabled>
                                        <option value="">Select Section</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-info btn-block">Get Students</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                @if($students)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @if($classData and $sectionData)
                                <h3 class="panel-title">
                                    Select To Class
                                    {{--Upgrade Students <strong> {{ $sessionData->session }} </strong>
                                    Class <strong>{{ $classData->class }}</strong>
                                    of Section <strong>{{ $sectionData->section }}</strong>--}}
                                </h3>
                            @endif
                        </div>
                        <form action="{{ route('upgrade.new.student') }}" method="post">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                <br/>
                                <div class="row">
                                    <div class="col-md-4 ">
                                        <input type="hidden" name="old_session" value="{{ $session }}">
                                        <input type="hidden" name="old_class" value="{{ $classData->id }}">
                                        <input type="hidden" name="old_section" value="{{ $sectionData->id }}">
                                        <select class="form-control new_session" name="upgrade_session" >
                                            <option value="">Select Session</option>
                                            @foreach($get_sessions as $sessions)
                                                <option value="{{ $sessions->id }}">{{ $sessions->session }}</option>
                                            @endforeach
                                        </select>
                                        @foreach($errors->get('upgrade_session') as $usession)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $usession }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 new_upgrade_class">
                                        <select class="form-control new_class" name="upgrade_class"  id="upgradeClass" disabled>
                                            <option value="">Select Class</option>
                                        </select>
                                        @foreach($errors->get('upgrade_class') as $uclass)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $uclass }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 new_upgrade_section">
                                        <select class="form-control new_upsection" name="upgrade_section" disabled>
                                            <option value="">Select Section</option>
                                        </select>
                                        @foreach($errors->get('upgrade_section') as $usection)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $usection }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        @if($classData and $sectionData)
                                            <h3 class="panel-title">
                                                Students From
                                                <strong>
                                                    {{ $classData->class }} - {{ $sectionData->section }}
                                                </strong> Class ( <strong>
                                                    {{ $sessionData->session }}
                                                </strong> )
                                            </h3>
                                        @endif
                                    </div>
                                </div>
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Registration No</th>
                                        <th>Result</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $key => $student)
                                        <tr>
                                            <input type="hidden" name="student_id[]" value="{{ $student->id }}">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->registration_no }}</td>
                                            <td>

                                                Pass : <input type="checkbox" name="status[]" value="pass"
                                                              id="check_p_{{ $student->id }}" onclick="return upgrade_radio(this.value,this.id)">
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                Fail : <input type="checkbox" name="status[]" value="fail"
                                                              id="check_f_{{ $student->id }}" onclick="return upgrade_radio(this.value,this.id)">
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                Tc : <input type="checkbox" name="status[]" value="tc"
                                                            id="check_tc_{{ $student->id }}" onclick="return upgrade_radio(this.value,this.id)">
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <select class="failClass" name="fail_class[]" style="display: none" id="fail_class_{{ $student->id }}" onchange="return fail_function(this.value,this.id)">
                                                    <option value="">Select Class</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{ $class->id }}">{{ $class->class }}</option>
                                                    @endforeach
                                                </select>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <select class="section" name="fail_section[]" style="display: none" id="fail_section_{{ $student->id }}">
                                                    <option value="">Select Session</option>
                                                </select>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-12 " align="center">
                                        <button type="submit" class="btn btn-success" name="new_upgrade_students" value="new">Upgrade Students</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    <center><h2>No Students</h2></center>
                @endif
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function upgrade_radio(value,id)
        {
            var student = id.split("_");
            var student_id = student[2];
            if(value == 'pass')
            {
                $('#check_p_'+student_id).prop("checked", true);
                $('#check_f_'+student_id).prop("checked", false);
                $('#check_tc_'+student_id).prop("checked", false);

                $('#fail_class_'+student_id).hide();
                $('#fail_section_'+student_id).hide();
            }
            else if(value == 'fail')
            {
                $('#check_f_'+student_id).prop("checked", true);
                $('#check_p_'+student_id).prop("checked", false);
                $('#check_tc_'+student_id).prop("checked", false);

                $('#fail_class_'+student_id).show();
                $('#fail_section_'+student_id).show();

                var fail=$('#check_f_'+student_id).val();
                var srsession = $('.new_session').val();
                if(srsession)
                {
                    $.post("../get/session/class/ajax",
                        {
                            srsession:srsession
                        },
                        function(data)
                        {
                            var cont ="<option value=''>Select Class</option>";
                            for(me in data)
                            {
                                cont+= "<option value='"+data[me]['id']+"'>"+data[me]['class']+"</option>";
                            }
                            $('#fail_class_'+student_id)
                                .find('option')
                                .remove()
                                .end().append(cont);
                        });
                }
            }
            else
            {
                $('#check_tc_'+student_id).prop("checked", true);
                $('#check_p_'+student_id).prop("checked", false);
                $('#check_f_'+student_id).prop("checked", false);

                $('#fail_class_'+student_id).hide();
                $('#fail_section_'+student_id).hide();
            }
        }

        function fail_function(value,id)
        {
            var student = id.split("_");
            var student_id = student[2];
            var srsession = $('.new_session').val();
            if(value!="")
            {
                $.post("../get/upgrade/section/ajax",
                    {
                        srclass:value,srsession:srsession
                    },
                    function(data)
                    {
                        var cont ="<option value=''>Select Section</option>";
                        for(me in data)
                        {
                            cont+= "<option value='"+data[me]['id']+"'>"+data[me]['section']+"</option>";
                        }
                        $('#fail_section_'+student_id)
                            .find('option')
                            .remove()
                            .end().append(cont);
                    });
            }
        }
    </script>
@endsection