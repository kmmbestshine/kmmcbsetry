@extends('users.layouts.default')
@section('title', 'View Profile')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Profile</li>
</ul>
@endsection
@section('contant')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">View Staff Profile</h3>
                       <span >
                            <a href="{{route('teachersRecruitment')}}" class="btn btn-danger" style="float:right">Back</a>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Personal Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $biodata->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contact No</th>
                                                <td>{{ $biodata->contact_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>{{ $biodata->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $biodata->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Whats App No</th>
                                                <td>{{ $biodata->whatsapp_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Face Book ID</th>
                                                <td>{{ $biodata->facebook_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Instagram</th>
                                                <td>{{ $biodata->instagram }}</td>
                                            </tr>
                                            <tr>
                                                <th>Religion</th>
                                                <td>{{ $biodata->religion }}</td>
                                            </tr>
                                            <tr>
                                                <th>Caste</th>
                                                <td>{{ $biodata->caste_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Blood Group</th>
                                                <td>{{ $biodata->blood_group }}</td>
                                            </tr>
                                            <tr>
                                                <th>Father Name</th>
                                                <td>{{ $biodata->f_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Father Contact No</th>
                                                <td>{{ $biodata->f_contact_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mother Name</th>
                                                <td>{{ $biodata->m_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mother Contact No</th>
                                                <td>{{ $biodata->m_contact_no }}</td>
                                            </tr>
                                            <!-- changes done by parthiban version v3 -->
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $biodata->address }}</td>
                                            </tr>  

                                            <tr>
                                                <th>Pin no</th>
                                                <td>{{ $biodata->pin_code }}</td>
                                            </tr>
                                            <!-- changes done by parthiban version v3 -->
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td>{{ $biodata->dob }}</td>
                                            </tr>           
                                            <tr>
                                                <th>Age</th>
                                                <td>{{ $biodata->age }}</td>
                                            </tr>
                                            <!-- changes done by parthiban version v3 -->
                                            <tr>
                                                <th>Marital Status</th>
                                                <td>{{ $biodata->maried_sta }}</td>
                                            </tr>   
                                            <tr>
                                                <th>Spouse Name</th>
                                                <td>{{ $biodata->spouse_name }}</td>
                                            </tr>
                                            <!-- changes done by parthiban version v3 -->
                                            <tr>
                                                <th>Spouse Contact No</th>
                                                <td>{{ $biodata->spouse_contact_no }}</td>
                                            </tr>        
                                            <tr>
                                                <th>Languages Known</th>
                                                <td>{{ $biodata->language_known }}</td>
                                            </tr>
                                                                                                  
                                            
                                        </table>        
                                    </div>
                                </div>
                            </div>
                           
                            
                            <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Educational Info</h3>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Qualification  : {{$qualify->qualify}}</label>
                                        
                                    </div>
                                </div>
                                    
                                    <div class="panel-body">
                                        <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th> S.No</th>
                           <th> COURSE</th>
                           <th> INSTITUTE</th>
                           <th> YEAR PASSED</th>
                           <th> BOARD/UNIVERSITY</th>
                           <th> % MARKS</th>
                           
                          </tr>
                          </thead>
                        <tbody>
                        <?php $i=1; ?>
                         @foreach($bioqualify as $staff)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$staff->course_name}}</td>
                            <td>{{$staff->institute_name}}</td>
                            <td>{{$staff->year_passed}}</td>
                            <td>{{$staff->univer_board}}</td>
                            <td>{{$staff->marks_percent}}</td>
                            
                           
                        </tr>
                         @endforeach
                        </tbody>
                    </table>


                                        </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Professional Info</h3>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Prof Type  : {{$bioexps->type}}</label>
                                        
                                    </div>
                                </div>
                                    <div class="panel-body">
                                        <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
                                <thead>
                                        <tr>
                                            
                                            <th>S.NO</th>
                                            <th> INSTITUTE WORKED</th>
                                            <th> FROM</th>
                                            <th> TO</th>
                                            <th> TENURE</th>
                                            <th> SALARY</th>
                                            <th> COMP CONTACT NO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $j=1; ?>
                                     @foreach($bioexp as $staffexp)
                                    <tr>
                                        <td>{{$j++}}</td>
                                        <td>{{$staffexp->institute_name}}</td>
                                        <td>{{$staffexp->from_dt}}</td>
                                        <td>{{$staffexp->to_dt}}</td>
                                        <td>{{$staffexp->tenure}}</td>
                                        <td>{{$staffexp->salary}}</td>
                                        <td>{{$staffexp->comp_contact_no}}</td>
                                        
                                       
                                    </tr>
                                     @endforeach
                                    </tbody>
                            </TABLE>



                                        </div>
                                </div>
                            </div>
						     
                        </div>

                        
            </div>
        </div>
        </div>
    </div>
   
@endsection