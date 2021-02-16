@if(Route::currentRouteName() != 'user.feeCollection')
<div class="page-sidebar">
    <ul class="x-navigation" style="padding-bottom: 30px;">
        <li class="xn-logo" style="margin-top:37px">
            <a href="{{route('user.dashboard')}}" style="background: white;">
                <img src="{{url('users/img/st-joseph.png')}}"
                     style="width:59%;margin-top:-54px;">
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
        @if(in_array('STUDENT', $userplans))
         <li class="xn-openable"><a href="{{route('get.documents.apt_letter')}}"><span class="fa fa-money"></span> <span class="xn-text">HR Document </span></a>
         <ul>
                <li>
                <a href="{{route('get.documents.apt_letter')}}"><span class="fa fa-user"></span> <span class="xn-text">Appointment letter</span></a>
                <a href="{{route('get.documents.relieving_letter')}}"><span class="fa fa-user"></span> <span class="xn-text">staff Exp letter</span></a>
                <a href="{{route('get.documents.showcause_notice')}}"><span class="fa fa-user"></span> <span class="xn-text">Show-Cause Notice</span></a>
               
                </li>
         </ul>
         <li class="xn-openable"><a href="{{route('get.documents.bonafied-IT')}}"><span class="fa fa-money"></span> <span class="xn-text">Document Student</span></a>
            <ul>
                <li>
                <a href="{{route('get.documents.bonafied-IT')}}"><span class="fa fa-user"></span> <span class="xn-text">Bonafied Certificate-IT</span></a>
                <a href="{{route('get.documents.bonafied-student')}}"><span class="fa fa-user"></span> <span class="xn-text">Bonafied Certificate-Student</span></a>
                    
                </li>
         </ul>
        @endif

         <!--  changes done by priya -->
        <li>
            <a href="{{route('view.syllabus.list')}}"><span class="fa fa-book"></span> <span class="xn-text">Syllabus</span></a>
        </li>


        @if(in_array('EMPLOYEE', $userplans))
        <li>
            <a href="{{route('get.employee')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">Employee</span></a>
        </li>
        @endif
        @if(in_array('STUDENT', $userplans))
        <li>
            <a href="{{route('get.students')}}"><span class="fa fa-user"></span> <span class="xn-text">Students</span></a>
        </li>
        @endif

      <li class="xn-openable"><a href="">
                   <span class="fa fa-venus-double"></span>
                   <span class="xn-text">NEW TRANSPORT</span>
               </a>
               <ul>
                   <li>
                       <a target="_blank" href="http://bectransport.info/login">
                           <span class="xn-text">New Transport</span>
                       </a>
                   </li>
               </ul>
 </li>

        <li>
               <a href="{{ route('get.training.material.index') }}">
                   <i class="fa fa-credit-card" aria-hidden="true"></i>
                   <span class="xn-text">Training Material</span>
               </a>
           </li>
           <!-- updated 20-4-2018 -->  

         <li class="xn-openable"><a href="">
                   <span class="fa fa-venus-double"></span>
                   <span class="xn-text">Team Viewer</span>
               </a>
               <ul>
                   <li>
                       <a target="_blank" href="https://www.teamviewer.com/en/?pid=google.tv_13.s.in&gclid=EAIaIQobChMI29iXiKK32gIVRh0rCh1PPQnuEAAYASAAEgK2jfD_BwE">
                           <span class="xn-text">Download Team Viewer</span>
                       </a>
                   </li>
               </ul>
                <ul>
                   <li>
                       <a target="_blank" href="https://anydesk.com/download?os=win">
                           <span class="xn-text">Download anyDesk</span>
                       </a>
                   </li>
               </ul>
           </li>
         
        
        @if(in_array('ATTENDANCE', $userplans))
        <li><a href="{{route('user.attendance')}}"><span class="fa fa-paperclip"></span> <span class="xn-text">Student Attendance</span></a></li>
        @endif
        @if(in_array('EMPLOYEE', $userplans))
            <li  >
                <a href="{{ route('getTeacherAttendance') }}">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <span >Employee Attendance</span>
                </a>
            </li>
        @endif

        @if(in_array('PAYROLL', $userplans))
            <li  >
                <a href="{{ route('viewPayrollIndex') }}">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    <span >Payroll</span>
                </a>
            </li>
        @endif

        @if(in_array('KNOWLEDGE BANK', $userplans))
        <li><a href="{{route('knowledgeBank')}}"><span class="fa fa-paperclip"></span> <span class="xn-text">knowledge Bank</span></a></li>        
        @endif
        @if(in_array('HOMEWORK', $userplans))
        <li><a href="{{route('user.homework')}}"><span class="fa fa-pencil"></span> <span class="xn-text">Homework</span></a></li>
        @endif
        @if(in_array('NOTIFICATION', $userplans))
        <li><a href="{{route('view.notification')}}"><span class="fa fa-bell"></span> <span class="xn-text">Notification</span></a></li>
        @endif
        @if(in_array('VOICE SMS', $userplans))
        <li><a href="http://103.255.100.62/login.php" target="_blank"><span class="fa fa-phone"></span> <span class="xn-text">Voice Message</span></a></li>
        @endif
        @if(in_array('TRANSPORT', $userplans))
        <li><a href="{{route('master.bus')}}"><span class="fa fa-bus"></span> <span class="xn-text">Transport</span></a></li>
        @endif
        @if(in_array('FEES', $userplans))
         <li class="xn-openable"><a href="{{route('get.students.payments')}}"><span class="fa fa-money"></span> <span class="xn-text">Advance Fee </span></a>
            <ul>
                <li><a href="{{route('get.students.payments')}}"><span class="xn-text">Fee Structure</span></a></li>
                <li><a href="{{route('get.students.buspayments')}}"><span class="xn-text"> Bus Fee Structure</span></a></li>
                <li><a href="{{route('user.feeCollectionnewfee')}}"><span class="xn-text">Fee Collection</span></a></li>
                 <li><a href="{{route('new.fee.staffcollectionreport')}}"><span class="xn-text">Overall Payment Report</span></a></li>
                 <li><a href="{{route('term.individual.staffreportadmin')}}"><span class="xn-text">Payment Received Report</span></a></li>
                 <li><a href="{{route('term.individual.staffreportbalance')}}"><span class="xn-text">Payment Balance Report</span></a></li>
                
            </ul>
        </li>
         @endif
       <!-- @if(in_array('FEES', $userplans))
        <li class="xn-openable"><a href="{{route('fee.structure')}}"><span class="fa fa-money"></span> <span class="xn-text">Fee</span></a>
            <ul>
                <li><a href="{{route('fee.structure')}}"><span class="xn-text">Fee Structure</span></a></li>

                <li><a onclick="window.open('{{route("user.feeCollection")}}','mywindow','width=1200,height=650');" href="#"><span class="xn-text">Fee Collection</span></a></li>

                <!--<li><a href="{{route('view.fee')}}"><span class="xn-text">View Fee</span></a></li>
            </ul>
        </li>
        @endif-->
        @if(in_array('TIMETABLE', $userplans))
        <li><a href="{{route('get.timeTable')}}"><span class="fa fa-clock-o"></span> <span class="xn-text">Time Table</span></a></li>
        @endif
        @if(in_array('REPORT', $userplans))
        <li><a href="{{route('user.report')}}"><span class="fa fa-print"></span> <span class="xn-text">Report</span></a></li>
        @endif
       
         @if(in_array('RESULT', $userplans))   
        <li class="xn-openable"><a href="{{route('user.result')}}"><span class="fa fa-bed"></span> <span class="xn-text">Result</span></a>
            <ul>
                <li><a href="{{route('user.result')}}"><span class="xn-text">Result</span></a></li>
                <li><a href="{{route('user.singleresult')}}"><span class="xn-text">Update Student Mark</span></a></li>
            </ul>
        </li>
        @endif
         
        @if(in_array('LIBRARY', $userplans))
        <li><a href="{{route('user.library')}}"><span class="fa fa-book"></span> <span class="xn-text">Library</span></a></li>
        @endif
        @if(in_array('EXPENDITURE', $userplans))    
        <li><a href="{{route('user.expList')}}"><span class="fa fa-money"></span> <span class="xn-text">Expenses</span></a></li>
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
        
         <li class="xn-openable"><a href=""><span class="fa fa-rocket"></span> <span class="xn-text">Text Sms</span></a>
            <ul>
                <li><a href="{{route('user.smssend')}}"><span class="xn-text">Text Sms</span></a></li>

                <li>
                    <a href="http://103.16.101.52/websms/shinetrack" target="_blank">Balance Check</a>
                    
                </li>

            </ul>
        </li>
       
        <li><a href="{{route('changePass')}}"><span class="fa fa-edit"></span> <span class="xn-text">Change Password</span></a></li>
        <li><a href="http://admin.bestshineeducationcampus.com/client/request" target="_blank"><span class="fa fa-edit"></span> <span class="xn-text">Customer Care</span></a></li>
        
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
        {{-- @if(in_array('USERROLE', $userplans))
        <li class="pull-right"><a href="#"><span class="fa fa-user-secret"></span> User Role</a></li> <!-- Updated 22-9-2017 by priya -->
        @endif--}}
         @if(in_array('GALLERY', $userplans))
       
        <li class="pull-right ">
            <a href="{{route('get.gallery')}}"><span class="fa fa-picture-o"></span> Gallery</a>
        </li>
        @endif
        <li class="pull-right ">
            <a href="http://adminbec.co/login" target="_blank"><span class="fa fa-user"></span> My Account</a>
        </li> 
         @if(in_array('DATA MANAGER', $userplans))
       <li class="pull-right"><a href="{{route('user.construct.index')}}"><span class="fa fa-server"></span> <span class="xn-text">Construction</span></a></li>
        @endif
        @if(in_array('DATA MANAGER', $userplans))
       <li class="pull-right"><a href="{{route('user.office.index')}}"><span class="fa fa-server"></span> <span class="xn-text">Office Document</span></a></li>
        @endif
        @if(in_array('DATA MANAGER', $userplans))
       <li class="pull-right"><a href="{{route('user.schoolfee.index')}}"><span class="fa fa-server"></span> <span class="xn-text">School Fee</span></a></li>
        @endif  
    </ul>
@endif
    @yield('cram')  