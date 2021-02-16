@extends('users.layouts.default')
@section('title', 'Dashboard')
@section('contant')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>                    
        <li class="active">Dashboard</li>
    </ul>

    <!-- School and Non-Teaching Staff -->
    @if(Auth::user()->type == 'school' || Auth::user()->type == 'user_role')     

        <div class="page-content-wrap">                 
            <div class="row">
                <div class="col-md-3">
                    <div class="widget widget-info widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00:00</div>                            
                        <div class="widget-subtitle plugin-date">Loading...</div>                          
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="{{route('get.students')}}">
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-users icon-color"></span>
                            </div>                             
                            <div class="widget-data">
                                <div class="widget-int num-count">{{ $students }}</div>
                                <div class="widget-title">Students</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('get.employee')}}">
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-user icon-color"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{ $employees }}</div>
                                <div class="widget-title">Staffs</div>
                            </div>                           
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('master.bus')}}">
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-bus icon-color"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{ $busCount }}</div>
                                <div class="widget-title">Buses</div>
                            </div> 
                        </div>
                    </a>
                </div>
                
            </div>                  
            <div class="row">
                <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading colorHeader">
                        <div class="panel-title-box">
                            <h3>Today's Birthday</h3>
                        </div>
                    </div>
                    @if(\Session::has('birthdayNotificationSendSuccess'))
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <strong>{!! \Session::get('birthdayNotificationSendSuccess') !!} </strong> 
                            </div>
                        </div>
                    @endif
                    <div class="panel-body" style="height:216px; overflow-y: auto;">
                        @if(count($birthdays)>0)
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll No</th>
                                        <th>Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($birthdays as $birthday)
                                        <tr>
                                            <td>{{ $birthday->name }}</td>
                                            <td>{{ $birthday->roll_no }}</td>
                                            <td>{{ $birthday->class }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
    <!--                        <textarea class="form-control" rows="1"></textarea>
                            <br/>-->
                            <div class="row text-right">
                                <a href="/users/dashboard/send/birthday-notification"><button type="button" class="btn btn-info">Send Wishes To All</button></a>
                            </div>
                        @else
                            <center>
                                <h1 style="color:#ccc"><i class="fa fa-birthday-cake fa-4x"></i></h1>
                                <h4>No Birthday Found :</h4>
                            </center>
                        @endif
                    </div>
                </div>
            </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading colorHeader">
                            <div class="panel-title-box">
                                <h3>Today Total Attendance</h3>
                                
                            </div>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="chart-holder" id="dashboard-donut-1" style="height: 216px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading colorHeader">
                            <div class="panel-title-box">
                                <h3>School Profile</h3>
                            </div>
                        </div>
                        @if(!$school_profile->post)
                        <div class="panel-body padding-0 profileBox" style="height:216px; background-image: url({{url('')}})">
                        @else
                        <div class="panel-body padding-0 profileBox" style="height:216px; background-image: url({{url($school_profile->post)}})">
                        @endif
                            <div class="layers">
                              
                                <div class="box">
                                @if($school_profile)      
                                <img src="{{url($school_profile->logo)}}" class="logo_school">
                                @endif
                                    <h1>{{$school_profile->school_name}}</h1>
                                    <p>{{$school_profile->email}}, {{$school_profile->mobile}}</p>
                                    <p>{{$school_profile->address}}, {{$school_profile->city}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading colorHeader">
                            <div class="panel-title-box">
                                <h3>Staff's Wedding Day & Birthday Wishes</h3>
                                <span>Today </span>
                            </div>                                    
                        </div>                                
                        <div class="panel-body" style="height:216px; overflow-y: auto;">
                        @if(count($emp_dob)>0)
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll No</th>
                                        <th>Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($emp_dob as $birth)
                                        <tr>
                                            <td>{{ $birth->name }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
    <!--                        <textarea class="form-control" rows="1"></textarea>
                            <br/>-->
                            <div class="row text-right">
                                <a href="/users/dashboard/send/birthday-notification"><button type="button" class="btn btn-info">Send Wishes To All</button></a>
                            </div>
                        @else
                            <center>
                                <h1 style="color:#ccc"><i class="fa fa-birthday-cake fa-4x"></i></h1>
                                <h4>No Birthday Found :</h4>
                            </center>
                        @endif
                    </div>     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading colorHeader">
                            <div class="panel-title-box">
                                <h3>Class Attendance - Absent / Leave Taken Chart</h3>
                                <span>Today </span>
                            </div>                                    
                        </div>                                
                        <div class="panel-body padding-0 attendance" style="overflow: scroll;">
                            <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
                        </div>      

                    </div>
                </div>
                  
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading colorHeader">
                            <div class="panel-title-box">
                                <h3>Today-Total Staff Attendance</h3>
                            </div>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="chart-holder" id="dashboard-donut-2" style="height: 216px;"></div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="block-full-width"></div>

    @else

        <div class="page-content-wrap">                 
            <div class="row">
                <div class="col-md-4">
                    <div class="widget widget-info widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00:00</div>                            
                        <div class="widget-subtitle plugin-date">Loading...</div>                          
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <a href="{{route('get.students')}}"> -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-users icon-color"></span>
                            </div>                             
                            <div class="widget-data">
                                <div class="widget-int num-count">{{ $students }}</div>
                                <div class="widget-title">Students</div>
                            </div>
                        </div>
                    <!-- </a> -->
                </div>
                <div class="col-md-4">
                    <!-- <a href="{{route('get.employee')}}"> -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-user icon-color"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{ $employees }}</div>
                                <div class="widget-title">Employees</div>
                            </div>                           
                        </div>
                    <!-- </a> -->
                </div>
            </div>                  
            <div class="row">
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                   <div class="panel panel-default">
                        <div class="panel-heading colorHeader">
                            <div class="panel-title-box">
                                <h3>School Profile</h3>
                            </div>
                        </div>
                        @if(!$school_profile->post)
                        <div class="panel-body padding-0 profileBox" style="height:216px; background-image: url({{url('')}})">
                        @else
                        <div class="panel-body padding-0 profileBox" style="height:216px; background-image: url({{url($school_profile->post)}})">
                        @endif
                            <div class="layers">
                              
                                <div class="box">
                                @if($school_profile)      
                                <img src="{{url($school_profile->logo)}}" class="logo_school">
                                @endif
                                    <h1>{{$school_profile->school_name}}</h1>
                                    <p>{{$school_profile->email}}, {{$school_profile->mobile}}</p>
                                    <p>{{$school_profile->address}}, {{$school_profile->city}}</p>
                                </div>

                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="col-md-4">
 
                </div>
            </div>
        </div>
        <div class="block-full-width"></div>    
    @endif
@endsection