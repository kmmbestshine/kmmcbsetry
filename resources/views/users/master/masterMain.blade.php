@extends('users.layouts.default')
@section('title', 'Master')
@section('contant')
 <ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Master</li>
</ul>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Master</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.session')}}"><i class="fa fa-calendar-plus-o fa-5x"></i><br/><span>Session</span></a>
                    	</div>
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.class')}}"><i class="fa fa-child fa-5x"></i><br/><span>Class</span></a>
                    	</div>
                        <div class="col-md-2 wellBox text-center">
                            <a href="{{route('master.subject')}}"><i class="fa fa-book fa-5x"></i><br/><span>Subject</span></a>
                        </div>
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.section')}}"><i class="fa fa-puzzle-piece fa-5x"></i><br/><span>Section</span></a>
                    	</div>
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.exam')}}"><i class="fa fa-pencil-square-o fa-5x"></i><br/><span>Exam Type</span></a>
                    	</div>
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.staff')}}"><i class="fa fa-users fa-5x"></i><br/><span>Staff Type</span></a>
                    	</div>                    	
                    </div>
                    <div class="row">
                    	<!--<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.events')}}"><i class="fa fa-calendar fa-5x"></i><br/><span>Events</span></a>
                    	</div>-->
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.caste')}}"><i class="fa fa-futbol-o fa-5x"></i><br/><span>Caste</span></a>
                    	</div>
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.religion')}}"><i class="fa fa-rebel fa-5x"></i><br/><span>Religion</span></a>
                    	</div>
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.holiday')}}"><i class="fa fa-hand-grab-o fa-5x"></i><br/><span>Holiday</span></a>
                    	</div>
                    	<!-- <div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.bus')}}"><i class="fa fa-bus fa-5x"></i><br/><span>Bus</span></a>
                    	</div>
                    	<div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.stop')}}"><i class="fa fa-hand-paper-o fa-5x"></i><br/><span>Bus Stop</span></a>
                    	</div>                    	 -->
                        <div class="col-md-2 wellBox text-center">
                            <a href="{{route('master.notification')}}"><i class="fa fa-bell fa-5x"></i><br/><span>Notification Type</span></a>
                        </div>
                        <div class="col-md-2 wellBox text-center">
                            <a href="{{route('master.syllabus.index')}}"><i class="fa fa-book fa-5x"></i><br/><span>Syllabus</span></a>
                        </div>
                    </div>
                    <div class="row">
                    	<!-- <div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.driver')}}"><i class="fa fa-user-secret fa-5x"></i><br/><span>Driver</span></a>
                    	</div> -->
                    	
                    	<!-- <div class="col-md-2 wellBox text-center">
                    		<a href="{{route('class.deposit')}}"><i class="fa fa-check-circle fa-5x"></i><br/><span>Class Wise Amount</span></a>
                    	</div> -->
                    	<!-- <div class="col-md-2 wellBox text-center">
                    		<a href="{{route('master.grade')}}"><i class="fa fa-bullseye fa-5x"></i><br/><span>Grade</span></a>
                    	</div>                    	 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
