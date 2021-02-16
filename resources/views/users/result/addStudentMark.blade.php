@extends('users.layouts.default')
@section('title', 'Student Result')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Student Result</li>
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
                @if($getStudents)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>
                                    View
                                    @if($getStudentClass)
                                        {{ $getStudentClass->class }}
                                    @endif
                                    Class
                                    @if($getStudentSection)
                                       ' {{ $getStudentSection->section }} '
                                    @endif
                                    Section
                                    Students
                                </strong>
                            </h3>
                            <div class="text-right">
                            </div>
                            <div class="text-right">
                                <a href="{{route('addStudentsMark')}}" class="btn btn-info btn-rounded">Add Marks</a>
                            </div>
                        </div>
                        <form action="{{ route('postStudentResult') }}" method="post">
                            {!! csrf_field() !!}
                        <div class="panel-body">
                            <div style="overflow: scroll;">
                            <table class="table datatable table-striped table-bordered table-hover">
                                    {{--<table class="table table-borderd datatable">--}}
                                        <thead>
                                        <tr>
                                            <th>
                                                S No.
                                                <input  name="countStudent" type="hidden" value="{{count($getStudents)}}" id="student_key_value"  >
                                            </th>
                                            <th>Student Name</th>
                                            <th>Roll No</th>
                                            <th>Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($getStudents)>0)
                                        @foreach($getStudents as $key =>$student)
                                            <tr>
                                                <td>
                                                    {{ $key+1 }}
                                                </td>
                                                <td>
                                                    {{ $student->name }}
                                                    <input  name="student_id[]" type="hidden" value="{{ $student->id }}" id="student_id"  >
                                                </td>
                                                <td>{{ $student->roll_no }}</td>
                                                <td>
                                                    <table class="table table-borderd table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Max</th>
                                                            <th>Pass</th>
                                                            <th>Ob.Marks</th>
                                                            <th>Grade</th>
                                                            <th>Result</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if($getPassMarks)
                                                            @foreach($getPassMarks as $pass)
                                                                <tr>
                                                                    <td>
                                                                        {{ $pass->max_marks }}
                                                                        <input class="max_marks"  name="max_marks"  value="{{ $pass->max_marks }}" id="max_marks" type="hidden">
                                                                    </td>
                                                                    <td>
                                                                        {{ $pass->pass_marks }}
                                                                        <input class="pass_marks"  name="pass_marks" value="{{ $pass->pass_marks }}" id="pass_marks" type="hidden" >

                                                                    </td>
                                                                    <td>
                                                                    @if($student->id == $student->absent_student)
                                                                        <input class="obtained_marks" name="obtained_marks[]" style="border: none;background-color: transparent;"
                                                                          value="AB" id="obtained_marks_{{ $student->id }}"  disabled="disabled"  >
                                                                        <input type="hidden" class="obtained_marks" name="obtained_marks[]" value="AB" id="obtained_marks_{{ $student->id }}" >
                                                                        <input value='AB'  name='grade[]' type='hidden' >
                                                                            <input value='AB'  name='result[]' type='hidden' >
                                                                    @else
                                                                        <input class="obtained_marks" name="obtained_marks[]" style="border: none;background-color: white;"
                                                                            id="obtained_marks_{{ $student->id }}" type="text" placeholder="Enter Obtained Marks" autocomplete="off"
                                                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"      onchange="return getGradeSystem(this.id, this.value)"  >
                                                                    @endif
                                                                   
                                                                    </td>
                                                                    <td class="grade_{{ $student->id }}">

                                                                    </td>
                                                                    <td class="result_{{ $student->id }}">

                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif

                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>

                                    </table>
                            </div>



                                <center>
                                    <input type="hidden" name="class" value="{{ $input['class'] }}">
                                    <input type="hidden" name="section" value="{{ $input['section'] }}">
                                    <input type="hidden" name="subject" value="{{ $input['subject'] }}">
                                    <input type="hidden" name="teacher" value="{{ $input['teacher'] }}">
                                    <input type="hidden" class="examtype" name="examtype" id="examtype" value="{{ $input['exam'] }}">
                                    <input type="hidden" name="getExamDate" value="{{ $input['exam_date'] }}">
                                    <label for="terms_and_conditions">Verify Your Entered Marks then Click Checkbox for Enable Submit Button</label>
                                        <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" />
                                        <br>
                                        <button type="submit" id="submit_button" style="margin-top:20px" class="center btn btn-info" disabled>Submit</button>
                                        <br>
                                </center>
                        </div>
                        </form>
                    </div>
                @else
                    <h2><center>No Data Found!!!</center></h2>
                @endif
            </div>
        </div>
    </div>
        <script type="text/javascript">
    function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit_button").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit_button").disabled = true;
    }
    }
    </script>
    <script>
        /*** @ To get Grade & Result From Grade System Based On Obtained Marks @  ***/
        function getGradeSystem(id,value)
        {
           // alert(id);
           // alert(value);
            var srcexamtype =  $(".examtype").val();
            var student = id.split("_");
            var student_id = student[2];
           // alert(student_id);

            if(value != "")
            {
                $.post("../../../get/grade/details",
                    {
                        srcexamtype:srcexamtype,obtained_marks:value
                    },
                    function(data)
                    {
                        //alert(data);
                        //alert(data[0]['result']);
                        if(data == 'Result not Available')
                        {
                            $('.grade_'+student_id).html("<input value='"+data+"'  style='border: none;background-color: transparent;color:#ff0000;' id='grade' disabled='disabled' >");

                        }
                        else if(data == 'No Grade')
                        {
                            $('.grade_'+student_id).html("<input value='-'  style='border: none;background-color: transparent;width:40px;color:#ff0000;' id='grade' disabled='disabled' ><input value='AB'  name='grade[]' type='hidden' >");
                            $('.result_'+student_id).html("<input value='-'  style='border: none;background-color: transparent;width:40px;color:#ff0000;' id='result' disabled='disabled' ><input value='AB'  name='result[]' type='hidden' >");
                        }
                        else
                        {
                            $('.grade_'+student_id).html("<input value='"+data[0]['grade']+"'  style='border: none;background-color: transparent;width:40px;' id='grade' disabled='disabled' ><input value='"+data[0]['grade']+"'  name='grade[]' type='hidden' >");
                            if(data[0]['result'] == 'Pass')
                            {
                                $('.result_'+student_id).html("<input value='"+data[0]['result']+"'  style='border: none;background-color: transparent;width:40px;color:#00cc44' id='result' disabled='disabled' ><input value='"+data[0]['result']+"'  name='result[]' type='hidden' >");
                            }
                            else
                            {
                                $('.result_'+student_id).html("<input value='"+data[0]['result']+"'  style='border: none;background-color: transparent;width:40px;color:#ff0000' id='result' disabled='disabled' ><input value='"+data[0]['result']+"'  name='result[]' type='hidden' >");
                            }
                        }
                    });
            }
            else
            {
                $('.grade_'+student_id).html("<input value='You Cannt leave the field empty'  style='border: none;background-color: transparent;color:#ff0000;' id='grade' disabled='disabled' >");
            }
        }

    </script>



@endsection