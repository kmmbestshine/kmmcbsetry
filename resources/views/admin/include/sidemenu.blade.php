<div class="page-navigation">

    <div class="page-navigation-info" style="height: 100px;">
        <a href="{{route('admin.dashboard')}}" class="logo">
            <img src="{{url('users/img/st-joseph.png')}}"
                 style="width:190%;margin-top:-14px;margin-left: 40px;" >
        </a>
    </div>

    <div class="profile" >
        <img src="{{url('users/img/st-joseph.png')}}"/>
        <div class="profile-info">
            <a href="#" class="profile-title">{{Auth::user()->name}}</a>
            <span class="profile-subtitle">Administrator</span>
            <div class="profile-buttons">
                <div class="btn-group">
                    <a class="but dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                    <ul class="dropdown-menu" role="menu" style="margin-left: -117px;">
                        <li><a href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <ul class="navigation">

        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="xn-openable"><a href=""><i class="fa fa-paperclip"></i>School</a>
            <ul>
                <li><a href="{{route('createSchool')}}">Add School</a></li>
                <li><a href="{{route('viewSchool')}}">View Schools</a></li>
                <li><a href="{{route('smsusers')}}">Sms Users</a></li>
            </ul>
        </li>
    </ul>
</div>