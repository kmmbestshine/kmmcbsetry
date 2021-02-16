@if(Route::currentRouteName() != 'user.feeCollection')
<div class="page-sidebar">
    <ul class="x-navigation" style="padding-bottom: 30px;">
        {{--<li class="xn-logo">
            <a href="{{route('user.dashboard')}}">Shine School</a>--}}
        <li class="xn-logo" style="margin-top:17px">
            <a href="{{route('user.dashboard')}}" style="background: white;">
                <img src="{{url('users/img/logo_new.png')}}"
                     style="background: white;width:75%;margin-top:-33px;">
            </a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li>
            <a href="{{route('user.dashboard')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li>     
        @if(in_array('master', $roler))
        <li>
            <a href="{{route('masterView')}}"><span class="fa fa-eercast"></span> <span class="xn-text">Master</span></a>
        </li>
        @endif
        <!--  changes done by priya 14-12-2017 -->
        @if(in_array('syllabus', $roler))
            <li>
                <a href="{{route('view.syllabus.list')}}"><span class="fa fa-book"></span> <span class="xn-text">Syllabus</span></a>
            </li>
        @endif


        @if(in_array('employee', $roler))
        <li>
            <a href="{{route('get.employee')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">Employee</span></a>
        </li>
        @endif

        @if(in_array('employee', $roler))
            <li>
                <a href="{{route('getTeacherAttendance')}}"><span class="fa fa-address-book"></span> <span class="xn-text">Employee Attendance</span></a>
            </li>
        @endif
        @if(in_array('payroll', $roler))
        <li>
            <a href="{{route('viewPayrollIndex')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">PayRoll</span></a>
        </li>
        @endif
        
        @if(in_array('student', $roler))
        <li>
            <a href="{{route('get.students')}}"><span class="fa fa-user"></span> <span class="xn-text">Students</span></a>
        </li>
        @endif
        
        <li>
               <a href="{{ route('get.training.material.index') }}">
                   <i class="fa fa-credit-card" aria-hidden="true"></i>
                   <span class="xn-text">Training Material</span>
               </a>
           </li>

        
        @if(in_array('attendance', $roler))
        <li class="xn-openable"><a href=""><span class="fa fa-paperclip"></span> <span class="xn-text">Attendance</span></a>
            <ul>
                <li><a href="{{route('user.attendance')}}">Student</a></li>
                <!-- <li><a href="{{route('user.teacherAttendance')}}">Employee</a></li> -->
            </ul>
        </li>
        @endif
        
        @if(in_array('homework', $roler))
        <li><a href="{{route('user.homework')}}"><span class="fa fa-pencil"></span> <span class="xn-text">Homework</span></a></li>
        @endif
        
        @if(in_array('notification', $roler))
        <li><a href="{{route('view.notification')}}"><span class="fa fa-bell"></span> <span class="xn-text">Notification</span></a></li>
        @endif
        
        
        @if(in_array('trasport', $roler))
        <li><a href="{{route('user.trasport')}}"><span class="fa fa-bus"></span> <span class="xn-text">Transport</span></a></li>
        @endif
        
<!--        @if(in_array('fee', $roler))
        <li><a href="{{route('fee.frequency')}}"><span class="fa fa-money"></span> <span class="xn-text">Fee Frequency</span></a></li>
        @endif
        -->
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
       <!-- @if(in_array('fee', $roler))
        <li><a href="{{route('fee.structure')}}"><span class="fa fa-money"></span> <span class="xn-text">Fee Structure</span></a></li>
        @endif

        @if(in_array('fee', $roler))
        <li><a onclick="window.open('{{route("user.feeCollection")}}','mywindow','width=1200,height=650');" href="#"><span class="fa fa-hdd-o"></span><span class="xn-text">Fee Collection</span></a></li>
       <!--  <li><a href="{{route('user.feeCollection')}}"><span class="fa fa-hdd-o"></span> <span class="xn-text">Fee Collection</span></a></li> 
        @endif-->

        @if(in_array('timetable', $roler))
        <li><a href="{{route('get.timeTable')}}"><span class="fa fa-clock-o"></span> <span class="xn-text">Time Table</span></a></li>
        @endif

        @if(in_array('result', $roler))
        <li><a href="{{route('user.result')}}"><span class="fa fa-rocket"></span> <span class="xn-text">Result</span></a></li>
        @endif

        @if(in_array('library', $roler))
        <li><a href="{{route('user.library')}}"><span class="fa fa-book"></span> <span class="xn-text">Library</span></a></li>
        @endif

        @if(in_array('expenditure', $roler))    
        <li><a href="{{route('user.expList')}}"><span class="fa fa-money"></span> <span class="xn-text">Expenses</span></a></li>
        @endif
        @if(in_array('furniture', $roler))    
        <li class="xn-openable"><a href="{{route('furniturelist')}}"><span class="fa fa-bed"></span> <span class="xn-text">Inventory</span></a>
            <ul>
                <li><a href="{{route('furniturelist')}}"><span class="xn-text">Inventory-Purchase</span></a></li>
                <li><a href="{{route('distriFurnitureList')}}"><span class="xn-text">Inventory-Sales</span></a></li>
            </ul>
        </li>
        @endif

        @if(in_array('datamanager', $roler))
        <li><a href="{{route('user.managerData')}}"><span class="fa fa-server"></span> <span class="xn-text">Data Manager</span></a></li>
        @endif

        @if(in_array('student', $roler))
        <li><a href="{{route('user.managerExport')}}"><span class="fa fa-external-link"></span> <span class="xn-text">Export Manager</span></a></li>
        @endif

        @if(in_array('transport', $roler))
        <li><a href="{{route('master.bus')}}"><span class="fa fa-bus"></span> <span class="xn-text">Transport</span></a></li>
        @endif
         @if(in_array('Voicemessage', $roler))
        <li><a href="http://103.255.100.62/login.php" target="_blank"><span class="fa fa-phone"></span> <span class="xn-text">Voice Message</span></a></li>
		@endif
         @if(in_array('knowledgebank', $roler))
        <li><a href="{{route('knowledgeBank')}}"><span class="fa fa-paperclip"></span> <span class="xn-text">knowledge Bank</span></a></li>        
        @endif
        
         @if(in_array('report', $roler))
         <li><a href="{{route('user.report')}}"><span class="fa fa-print"></span> <span class="xn-text">Report</span></a></li>
        @endif
        
          @if(in_array('CustomerCare', $roler))
         <li><a href="http://admin.bestshineeducationcampus.com/client/request" target="_blank"><span class="fa fa-print"></span> <span class="xn-text">CustomerCare</span></a></li>
        @endif
	    <!-- Updated 22-9-2017 
		@if(in_array('gallery', $roler))
        <li><a href="{{route('get.gallery')}}"><span class="fa fa-picture-o"></span> <span class="xn-text">Gallery</span></a></li>
        @endif  -->
		
		@if(Auth::user()->type != 'user_role')
		@if(in_array('gallery', $roler))
			<li><a href="{{route('get.gallery')}}"><span class="fa fa-picture-o"></span> <span class="xn-text">Gallery</span></a></li>
		@endif		 
		@endif
       <!---------->
	   
    </ul>
</div>
<div class="page-content">
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel" style="padding-top: 10px;">
        
        <li class="xn-icon-button pull-right">
            <a href="{{route('logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout" class="mb-control1"><span class="fa fa-sign-out"></span></a>                        
        </li>
        @if(in_array('post', $roler))
            <li class="pull-right"><a href="{{route('user.post')}}"><span class="fa fa-share"></span> Post</a></li>
        @endif

        @if(in_array('gallery', $roler))
            <li class="pull-right"><a href="{{route('get.gallery')}}"><span class="fa fa-picture-o"></span> Gallery</a></li>
        @endif
        @if(in_array('FEES', $userplans))
       <li class="pull-right"><a href="{{route('user.schoolfee.index')}}"><span class="fa fa-server"></span> <span class="xn-text">School Fee</span></a></li>
        @endif  
    </ul>

@endif
    @yield('cram')  