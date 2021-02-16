@extends('users.layouts.default')
@section('title', 'Training Material')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Training Material</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Get Training Material</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table " border="1" style="border-collapse: collapse">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Login User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/1) How to login Shine School App and its types of Users.pdf')}}" title="Download Login User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Student User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/2) Add Student.pdf')}}" title="Download Student User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Teacher User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/3 ) Add Employee.pdf') }}" title="Download Teacher User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Attendance User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/4) Attendance.pdf')}}" title="Download Attendance User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Notification User Manual</td>
                                            <td>
                                                <a  target="_blank" href="{{ url('training_material/user_manual/5) Notification Alert.pdf')}}" title="Download Notification User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Exam Result User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/6)Exam Result.pdf')}}" title="Download Exam Result User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Fees User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/7)Fees.pdf')}}" title="Download Fees User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Homework User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/8)Homework.pdf')}}" title="Download Homework User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Knowledge Bank User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/9)Knowledge Bank.pdf') }}" title="Download Knowledge Bank User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Library User Manual</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/user_manual/10)Library.pdf') }}" title="Download Library User Manual" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Shine School Presentation(Ppt)</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/shineschoolapppresentation.pptx') }}" title="Download Shine School Presentation(Ppt)" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Shine School Presentation(Pdf)</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/shineschoolapppresentationpdf.pdf') }}" title="Download Shine School Presentation(Pdf)" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Shine School Presentation(Video)</td>
                                            <td>
                                                <a target="_blank" href="{{ url('training_material/shineschoolappvideo.mp4') }}" title="Download Shine School Presentation(Video)" download>
                                                    <i class="fa fa-download " style="color: #f7a62b;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection