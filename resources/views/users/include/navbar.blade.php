@if(Route::currentRouteName() != 'user.feeCollection')
<div class="page-sidebar">
    <ul class="x-navigation" style="padding-bottom: 30px;">
        <li class="xn-logo" style="margin-top:37px">
            <a href="{{route('user.dashboard')}}" style="background: white;">
                <img src="{{url('users/img/st-james.jpg')}}"
                     style="width:39%;margin-top:-50px;">
            </a>
            <a href="#" class="x-navigation-control"></a>
        </li>
         @if(in_array('DASHBOARD', $userplans))
        <li>
            <a href="{{route('user.dashboard')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li>         
        @endif
         @if(in_array('MASTER', $userplans))
        <li>
            <a href="{{route('masterView')}}"><span class="fa fa-eercast"></span> <span class="xn-text">Master</span></a>
        </li>
        @endif
         
        <!-- Changes done by kumaravel-->
     

         <!--  changes done by priya -->
        {{--<li>
            <a href="{{route('view.syllabus.list')}}"><span class="fa fa-book"></span> <span class="xn-text">Syllabus</span></a>
        </li>--}}


        @if(in_array('EMPLOYEE', $userplans))
        <li>
            <a href="{{route('get.employee')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">Staffs</span></a>
        </li>
        @endif
        @if(in_array('STUDENT', $userplans))
        <li>
            <a href="{{route('get.students')}}"><span class="fa fa-user"></span> <span class="xn-text">Students</span></a>
        </li>
        @endif
        @if(in_array('EMPLOYEE', $userplans))
            <li  ><a href="{{ route('getTeacherAttendance') }}"><i class="fa fa-address-book" aria-hidden="true"></i><span >Staff Attendance</span>
                </a>
            </li>
        @endif
        @if(in_array('ATTENDANCE', $userplans))
        <li><a href="{{route('user.attendance')}}"><span class="fa fa-paperclip"></span> <span class="xn-text">Student Attendance</span></a></li>
        @endif
        @if(in_array('HOMEWORK', $userplans))
        <li><a href="{{route('user.homework')}}"><span class="fa fa-pencil"></span> <span class="xn-text">Homework</span></a></li>
        @endif
        @if(in_array('TIMETABLE', $userplans))
        <li><a href="{{route('get.timeTable')}}"><span class="fa fa-clock-o"></span> <span class="xn-text">Time Table</span></a></li>
        @endif
        @if(in_array('RESULT', $userplans))   
        <li class="xn-openable"><a href="{{route('user.result')}}"><span class="fa fa-bed"></span> <span class="xn-text">Result</span></a>
            <ul>
                <li><a href="{{route('user.result')}}"><span class="xn-text">Result</span></a></li>
                <li><a href="{{route('user.singleresult')}}"><span class="xn-text">Update Student Mark</span></a></li>
            </ul>
        </li>
        @endif
        <li class="xn-openable"><a href=""><span class="fa fa-rocket"></span> <span class="xn-text">Messages</span></a>
            <ul>
            @if(in_array('NOTIFICATION', $userplans))
            <li><a href="{{route('view.notification')}}"><span class="fa fa-bell"></span> <span class="xn-text">Notification</span></a></li>
            @endif
            @if(in_array('VOICE SMS', $userplans))
            <li><a href="{{route('get.video')}}" target="_blank"><span class="fa fa-picture-o"></span> <span class="xn-text">Video/Audio/Pdf</span></a></li>
            
            @endif
            @if(in_array('VOICE SMS', $userplans))
            <li><a href="{{route('get.gallery')}}" target="_blank"><span class="fa fa-picture-o"></span> <span class="xn-text">Gallery</span></a></li>
            
            @endif

            @if(in_array('VOICE SMS', $userplans))
            <li><a href="http://103.255.100.62/login.php" target="_blank"><span class="fa fa-phone"></span> <span class="xn-text">Voice Message</span></a></li>
            @endif
            </ul>
            <ul>
                @if(in_array('VOICE SMS', $userplans))
                <li><a href="{{route('user.smssend')}}" target="_blank"><span class="fa fa-envelope"></span> <span class="xn-text">Text SMS</span></a></li>
            
            @endif
            @if(in_array('VOICE SMS', $userplans))
            <li><a href="http://103.16.101.52/websms/shinetrack" target="_blank"><span class="fa fa-envelope"></span> <span class="xn-text">Text SMS Account</span></a></li>
            
            @endif
                

            </ul>
        </li>



        <li class="xn-openable"><a href=""><span class="fa fa-rocket"></span> <span class="xn-text">Accounts</span></a>
            <ul>

            @if(in_array('FEES', $userplans))
            <li><a href="{{route('user.schoolfee.index')}}"><span class="fa fa-money"></span> <span class="xn-text">School Fee</span></a></li>
            @endif
            @if(in_array('FEES', $userplans))
            <li><a href="{{route('purchase.add.order')}}"><span class="fa fa-user"></span> <span class="xn-text">Purchase Order</span></a></li>
            @endif   
            @if(in_array('FEES', $userplans))
            <li><a href="{{route('accounts.index')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">Accounts</span></a></li>
            @endif
            @if(in_array('PAYROLL', $userplans))
            <li  ><a href="{{ route('viewPayrollIndex') }}"><i class="fa fa-credit-card" aria-hidden="true"></i><span >Payroll</span>
                </a>
            </li>
        @endif
            </ul>
        </li>
        @if(in_array('LIBRARY', $userplans))
        <li><a href="{{route('user.library.index')}}"><span class="fa fa-book"></span> <span class="xn-text">Library</span></a></li>
        @endif
        @if(in_array('REPORT', $userplans))
        <li><a href="{{route('user.report')}}"><span class="fa fa-print"></span> <span class="xn-text">Report</span></a></li>
        @endif
          @if(in_array('STUDENT', $userplans))
         <li class="xn-openable"><a href="{{route('get.documents.index')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">Admin Department</span></a>
         
         <ul>
            <li class="xn-openable"><a href="{{route('get.documents.index')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">HR Documents</span></a></li>

            <li><a href="{{route('teachersQuestion')}}"><span class="fa fa-paperclip"></span> <span class="xn-text">Staff Interview Test Qns</span></a></li> 
                
            <li><a href="{{route('teachers_onlinetest')}}"><span class="fa fa-paperclip"></span> <span class="xn-text">Staff Interview Test</span></a></li>
            <li><a href="{{route('teachersRecruitment')}}"><span class="fa fa-server"></span> <span class="xn-text">Recruitment Process</span></a></li>
            <li><a href="{{route('user.office.index')}}"><span class="fa fa-server"></span> <span class="xn-text">Office Document</span></a></li>
                
         </ul>
         
        @endif
        @if(in_array('DATA MANAGER', $userplans))
       <li class="pull-right"><a href="{{route('user.homevisit.index')}}"><span class="fa fa-server"></span> <span class="xn-text">Home Visit Form</span></a></li>
        @endif
       
        @if(in_array('FURNITURE', $userplans))   
        <li class="xn-openable"><a href="{{route('furniturelist')}}"><span class="fa fa-bed"></span> <span class="xn-text">Inventory</span></a>
            <ul>
                <li><a href="{{route('furniturelist')}}"><span class="xn-text">Inventory-Purchase</span></a></li>
                <li><a href="{{route('distriFurnitureList')}}"><span class="xn-text">Inventory-Sales</span></a></li>
            </ul>
        </li>
        @endif
        @if(in_array('DATA MANAGER', $userplans))
        <li><a href="{{route('user.managerData')}}"><span class="fa fa-server"></span> <span class="xn-text">Data Manager</span></a></li>
        @endif
        @if(in_array('EXPORT MANAGER', $userplans))
        <li><a href="{{route('user.managerExport')}}"><span class="fa fa-external-link"></span> <span class="xn-text">Export Manager</span></a></li>
        @endif
        
         
       
        <li><a href="{{route('changePass')}}"><span class="fa fa-edit"></span> <span class="xn-text">Change Password</span></a></li>
      <!--  <li><a href="http://admin.bestshineeducationcampus.com/client/request" target="_blank"><span class="fa fa-edit"></span> <span class="xn-text">Customer Care</span></a></li>-->
        
    </ul>
</div>

<div class="page-content">
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel" style="padding-top: 18px;">
        

        <li class="xn-icon-button pull-right">
            <a href="{{route('logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout" class="mb-control1"><span class="fa fa-sign-out"></span> Logout</a>                        
        </li>
         @if(in_array('POST', $userplans))
        <li class="pull-right"><a href="{{route('user.post')}}"><span class="fa fa-share"></span> Post</a></li>
        @endif

        <!--
        <li class="pull-right"><a href="{{route('user.usersRole')}}"><span class="fa fa-user-secret"></span> User Role</a></li>
        -->
        
         @if(in_array('GALLERY', $userplans))
       
        <li class="pull-right ">
            <a href="{{route('get.gallery')}}"><span class="fa fa-picture-o"></span> Gallery</a>
        </li>
        @endif
       
         @if(in_array('GALLERY', $userplans))

        <li class="pull-right ">
            <a href="{{route('get.video')}}"><span class="fa fa-picture-o"></span> Video/Audio/Pdf<span class="new-gif-wr"></span></a>
            
        </li>        
        @endif
        

    </ul>
@endif
    @yield('cram')  