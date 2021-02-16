@extends('users.layouts.default')
@section('title', 'View Attendance')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Attendance</li>
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
                            <h3 class="panel-title"><strong>Get Class And Section</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control class" name="class">
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
                                        <div class="col-md-12 section">
                                            <select class="form-control sel-section" name="section" disabled>
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
        <div class="row">
            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Attendance of Class {{ $classData->class}} of Section {{ $sectionData->section }}</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.attendance')}}" class="btn btn-info btn-rounded">Add/Update Attendance</a>
                            </div>
                        </div><?php //by mari for v3//secho"<pre>";print_r($students);echo"</pre>";?>
                        @if(count($students)>0)
                        <div class="panel-body">
                            <table class="table table-borderd">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Name</th>
                                        <th>Roll No</th>
                                        <th>Register No</th>
                                        <th>Am</th>
                                        <th>Pm</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody><?php //eccho?>
                                    @foreach($students as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $value['name'] }}</td>
                                            <td>{{ $value['roll_no'] }}</td>
                                            <td>{{ $value['registration_no'] }}</td>
                                            <td>
                                                
                                                <h6>{{$value['am']}}</h6>
                                                
                                            </td>
                                            <td>
                                                
                                                        <h6>{{$value['pm']}}</h6>
                                            </td>
                                            <td>{{ date('d-m-Y',time()) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                      <?php /*  @else
                            @if(count($student)>0)
                            <div class="panel-body">
                                <table class="table table-borderd">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student Name</th>
                                            <th>Roll No</th>
                                            <th>Register No</th>
                                            <th>Am</th>
                                            <th>Pm</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($student as $key => $value)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->roll_no }}</td>
                                                <td>{{ $value->registration_no }}</td>
                                                <td>
                                                    <h6>{{$value->am}}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{$value->pm}}</h6>
                                                </td>
                                                <td>{{ date('d-m-Y',time()) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                            </div>
                            @endif
                        @endif <?php */?>
						@endif
                    </div>
                
            </div>
        </div>
@endsection