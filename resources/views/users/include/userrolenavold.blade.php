@if(Route::currentRouteName() != 'user.feeCollection')
<div class="page-sidebar">
    <ul class="x-navigation" style="padding-bottom: 30px;">
        <li class="xn-logo">
            <a href="{{route('user.dashboard')}}">Shine School</a>
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
        
        @if(in_array('employee', $roler))
        <li>
            <a href="{{route('get.employee')}}"><span class="fa fa-user-circle"></span> <span class="xn-text">Employee</span></a>
        </li>
        @endif
        
        @if(in_array('student', $roler))
        <li>
            <a href="{{route('get.students')}}"><span class="fa fa-user"></span> <span class="xn-text">Students</span></a>
        </li>
        @endif
        
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
        @if(in_array('fee', $roler))
        <li><a href="{{route('fee.structure')}}"><span class="fa fa-money"></span> <span class="xn-text">Fee Structure</span></a></li>
        @endif

        @if(in_array('fee', $roler))
        <li><a onclick="window.open('{{route("user.feeCollection")}}','mywindow','width=1200,height=650');" href="#"><span class="fa fa-hdd-o"></span><span class="xn-text">Fee Collection</span></a></li>
        <!-- <li><a href="{{route('user.feeCollection')}}"><span class="fa fa-hdd-o"></span> <span class="xn-text">Fee Collection</span></a></li> -->
        @endif

        @if(in_array('timetable', $roler))
        <li><a href="{{route('get.timeTable')}}"><span class="fa fa-clock-o"></span> <span class="xn-text">Time Table</span></a></li>
        @endif

        @if(in_array('result', $roler))
        <li><a href="{{route('user.result')}}"><span class="fa fa-rocket"></span> <span class="xn-text">Result</span></a></li>
        @endif

        @if(in_array('library', $roler))
        <li><a href="{{route('user.library')}}"><span class="fa fa-book"></span> <span class="xn-text">Library</span></a></li>
        @endif

        @if(in_array('datamanager', $roler))
        <li><a href="{{route('user.managerData')}}"><span class="fa fa-server"></span> <span class="xn-text">Data Manager</span></a></li>
        @endif

        @if(in_array('student', $roler))
        <li><a href="{{route('user.managerExport')}}"><span class="fa fa-external-link"></span> <span class="xn-text">Export Manager</span></a></li>
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
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        
        <li class="xn-icon-button pull-right">
            <a href="{{route('logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout" class="mb-control1"><span class="fa fa-sign-out"></span></a>                        
        </li>
        @if(in_array('post', $roler))
            <li class="pull-right"><a href="{{route('user.post')}}"><span class="fa fa-share"></span> Post</a></li>
        @endif

        @if(in_array('gallery', $roler))
            <li class="pull-right"><a href="{{route('get.gallery')}}"><span class="fa fa-picture-o"></span> Gallery</a></li>
        @endif
    </ul>
    @endif
    @yield('cram')  