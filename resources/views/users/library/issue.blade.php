@extends('users.layouts.default')
@section('title', 'Library')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li class="active">Library</li>
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
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('issue.book.post')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Issue Book</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.library.index')}}" class="btn btn-info btn-rounded">Back</a>&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Acc No</label>
                                        <div class="col-md-9">
                                            <input type="text" name="book_no" id="bookid" class="form-control">
                                            @foreach($errors->get('book_no') as $book_no)
                                                <div class="alert alert-success" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $book_no }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info" id="BookStatus">Book Status</button>
                                </div>
                            </div>
                            <br/>

                            <div class="row" id="BookLayoutInLibrary">
                                <div class="col-md-12"></div>
                            </div>
                            <br/>
                            <div class="mainheader" style="display:none">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="col-md-9">
                                                {{-- updated 14-10-2017 by priya
                                                <label class="col-md-3 control-label">User</label>--}}
                                                <label class="col-md-3 control-label">Issued To</label>
                                                <!--                                            <input type="text" name="registration_no" class="form-control" id="RegNoInLibrary">-->
                                                <select name="user_role" class="form-control" id="user_role">
                                                    <option value="">Select Role Type</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Teacher">Teacher</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="childdivstudent" style="display:none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Barcode/Admission No</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="registration_no" class="form-control" id="RegNoInLibrary">
                                                    @foreach($errors->get('registration_no') as $registration_no)
                                                        <div class="alert alert-danger my-alert" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button> {{ $registration_no }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-info" id="getStudentInLibrary">Get Student Info</button>
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="row" id="StudentLayoutInLibrary">
                                        <div class="col-md-12"></div>
                                    </div>
                                </div>
                                <br/>
                                <div class="childdivteacher" style="display:none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Barcode/Username</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="user_name" class="form-control" id="username">
                                                    @foreach($errors->get('user_name') as $username)
                                                        <div class="alert alert-danger my-alert" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button> {{ $username }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-info" id="getTeacherInLibrary">Get Teacher Info</button>
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="row" id="TeacherLayoutInLibrary">
                                        <div class="col-md-12"></div>
                                    </div>
                                </div>
                                </br>
                                <div class="issuedet" style="display:none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Issue Date</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="issue_date" class="form-control" value="{{date('d-M-Y')}}" readonly>
                                                    @foreach($errors->get('issue_date') as $issue_date)
                                                        <div class="alert alert-danger my-alert" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button> {{ $issue_date }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Return date</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="return_date" class="form-control">
                                                    @foreach($errors->get('return_date') as $return_date)
                                                        <div class="alert alert-danger my-alert" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button> {{ $return_date }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection