<div class="page-sidebar">
    <ul class="x-navigation" style="padding-bottom: 30px;">
       {{-- <li class="xn-logo">
            <a href="{{route('user.dashboard')}}">Shine School</a>--}}
        <li class="xn-logo" style="margin-top:17px">
            <a href="{{route('user.dashboard')}}" style="background: white;">
                <img src="{{url('users/img/logo_new.png')}}"
                     style="background: white;width:75%;margin-top:-33px;">
            </a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        @if(in_array('EMPLOYEE', $userplans))   
        <li>
            <a href="{{route('user.dashboard')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li>  
        @endif
        @if(in_array('EMPLOYEE', $userplans))   
        <li>
            <a href="{{route('get.students')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Student</span></a>                        
        </li>  
        @endif
        @if(in_array('STUDENT', $userplans))
        <li class="xn-openable"><a href=""><span class="fa fa-paperclip"></span> <span class="xn-text">Attendance</span></a>
            <ul>
                <li><a href="{{route('user.attendance')}}">Student</a></li>
            </ul>
        </li>
        @endif
        @if(in_array('HOMEWORK', $userplans))
        <li>
            <a href="{{route('user.homework')}}"><span class="fa fa-pencil"></span> <span class="xn-text">Homework</span></a>
        </li>
        @endif
        @if(in_array('TIMETABLE', $userplans))
        <li>
            <a href="{{route('get.timeTable')}}"><span class="fa fa-clock-o"></span> <span class="xn-text">Time Table</span></a>
        </li>
        @endif
        <!--@if(in_array('RESULT', $userplans))
        <li>
            <a href="{{route('user.result')}}"><span class="fa fa-rocket"></span> <span class="xn-text">Result</span></a>
        </li>
        @endif-->
        @if(in_array('RESULT', $userplans))
        <li class="xn-openable"><a href="{{route('addStudentsMark')}}"><span class="fa fa-money"></span> <span class="xn-text">Result</span></a>
            <ul>
                <li><a href="{{route('addStudentsMark')}}"><span class="xn-text">Add Marks</span></a></li>
                <li><a href="{{route('view.result')}}"><span class="xn-text">View Marks</span></a></li>
                <li><a href="{{route('user.result')}}"><span class="xn-text">Delete Marks</span></a></li>
                 </ul>
        </li>
        @endif
        @if(in_array('GALLERY', $userplans))
        <li>
            <a href="{{route('get.gallery')}}"><span class="fa fa-picture-o"></span> <span class="xn-text">Gallery</span></a>
        </li>
        @endif
    </ul>
</div>
<div class="page-content">
    
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel" style="padding-top: 10px;">
        
        <li class="xn-icon-button pull-right">
            <a href="{{route('logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout" class="mb-control1"><span class="fa fa-sign-out"></span> Logout</a>                        
        </li>
        <li class="xn-icon-button pull-right">
             <a href="{{route('user.homevisitcreat.index')}}" ><span class="fa fa-clock-o"></span><span class="xn-text">Home Visit </span></a>                        
        </li>
    </ul>
    @yield('cram')  