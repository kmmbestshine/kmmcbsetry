@extends('users.layouts.default')
@section('title', 'Edit Employee')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">Edit Employee</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('update.employee')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Edit Employee Form</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Staff Type</label>
                                        <div class="col-md-9">
                                            <input type="hidden" name="id" value="{{ $employee->id }}">
                                            <select class="form-control" name="type">
                                                <option value="">Select Staff Type</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{ $staff->id }}" {{ $staff->id==$employee->type ? "selected" : "" }}>{{ $staff->staff_type }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('type') as $type)
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" value="{{ $employee->name }}"
                                                   onkeyup="return this.value = this.value.replace(/[^A-Za-z ]/g,'')">
                                            @foreach($errors->get('name') as $name)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $name }}
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
                                        <label class="col-md-3 control-label">Contact No</label>
                                        <div class="col-md-9">
                                            {{-- <input type="number" name="mobile" class="form-control" min="6666666666" max="9999999999" value="{{ $employee->mobile }}">
                                             --}}
                                            <input type="text" name="mobile" class="form-control"
                                                   onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                   maxlength="10" value="{{ $employee->mobile }}">
                                            @foreach($errors->get('mobile') as $mobile)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $mobile }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
                                            @foreach($errors->get('email') as $email)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $email }}
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
                                        <label class="col-md-3 control-label">Salary</label>
                                        <div class="col-md-9">
                                            <input type="text" name="salary" class="form-control" value="{{ $employee->salary }}"
                                                   onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                            @foreach($errors->get('salary') as $editSalary)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $editSalary }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">password</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="employeePassword">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            {{--<div class="row">
                                <!--updated 9-5-2018-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Designation</label>
                                        <div class="col-md-9">
                                            <input name="designation" class="form-control" value="{{ $employee->designation }}">
                                        </div>
                                    </div>
                                </div>
                                <!--end -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image</label>
                                        <div class="col-md-6">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <img src="{{url($employee->avatar)}}" class="img-thumbnail" width="100px" height="100px">
                                        </div>
                                    </div>
                                </div>
                            </div>--}}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Designation </label>
                                        <div class="col-md-9">
                                            <select name="designation_type" class="form-control"
                                                    onchange="return select_employee_designation(this.value)">
                                                <option value=""> -- Select Designation -- </option>
                                                <option value="class_teacher" @if($employee->designation == 'class_teacher') selected="selected" @endif>Class Teacher</option>
                                                <option value="principal" @if($employee->designation == 'principal') selected="selected" @endif>Principal</option>
                                                <option value="other" @if($employee->designation != 'class_teacher' && $employee->designation != 'principal') selected="selected" @endif>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"  @if($employee->designation == 'principal' || $employee->designation == 'class_teacher') style="display:none" @endif id="designation">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Designation</label>
                                        <div class="col-md-9">
                                            <input  id="designation_value" name="designation" class="form-control" value="{{ $employee->designation }}">
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
                                            <select class="form-control editclass" name="class">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}" {{ $employee->class=="$class->id" ? "selected" : ""}}>{{ $class->class }}</option>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Section</label>
                                        <div class="col-md-9 edit-section">
                                            <select class="form-control editsection" name="section">
                                                <option value="">Select Section</option>
                                                @foreach($sections as $section)
                                                    <option value="{{ $section->id }}" {{ $employee->section=="$section->id" ? "selected" : ""}}>{{ $section->section }}</option>
                                                @endforeach
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
                            </div>
                            <br/>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image</label>
                                        <div class="col-md-6">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <img src="{{url($employee->avatar)}}" class="img-thumbnail" width="100px" height="100px">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-6 pull-right">
                                    <button type="submit" class="btn btn-info btn-block">Update Employee</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @foreach($staffs as $staff)
                    @if($staff->staff_type == 'Non Teaching Staff')
                        @if($staff->id == $employee->type)
                            <a  href="{{route('asign.usersRole', $employee->id)}}"><button class="btn btn-info btn-block">Asign role for non teaching</button></a>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function select_employee_designation(value)
        {
            if(value=='other')
            {
                $("#designation").show();
                //$("#designation_value").removeAttr('value');
            }
            else
            {
                $("#designation").hide();
                $("#designation_value").removeAttr('value');
                $("#designation_value").val(value);
            }
        }
    </script>
@endsection