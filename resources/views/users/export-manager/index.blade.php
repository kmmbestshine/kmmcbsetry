@extends('users.layouts.default')
@section('title', 'Export Manager')
@section('cram')
<ul class="breadcrumb">
  <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
  <li class="active">Export Manager</li>
</ul>
@endsection
@section('contant')
<div class="page-content-wrap">
 <div class="row">
   <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="panel-title">Export Master</h3>
      </div>
      <div class="panel-body">
         <div class="row text-center">
           <div class="col-md-3">
               <a href="{{route('export.session.view')}}" class="btn btn-info btn-rounded">Session</a>
         </div>
         <div class="col-md-3">
               <a href="{{route('export.class.view')}}" class="btn btn-info btn-rounded">Class</a>
       </div>
       <div class="col-md-3">
          <a href="{{route('export.section.view')}}" class="btn btn-info btn-rounded">Section</a>
       </div>
       <div class="col-md-3">
          <a href="{{route('export.subject.view')}}" class="btn btn-info btn-rounded">Subject</a>
       </div>
    </div>
    <br/><br/>
    <div class="row text-center">
     <div class="col-md-3">
       <a href="{{route('export.exam.view')}}" class="btn btn-info btn-rounded">Exam Type</a>
    </div>
    <div class="col-md-3">
       <a href="{{route('export.staff.view')}}" class="btn btn-info btn-rounded">Staff Type</a>
    </div>
    <div class="col-md-3">
       <a href="{{route('export.events.view')}}" class="btn btn-info btn-rounded">Events</a>
    </div>
    <div class="col-md-3">
       <a href="{{route('export.caste.view')}}" class="btn btn-info btn-rounded">Caste</a>
    </div>
 </div>
 <br/><br/>
 <div class="row text-center">
 <div class="col-md-3">
    <a href="{{route('export.religion.view')}}" class="btn btn-info btn-rounded">Religion</a>
 </div>
 <div class="col-md-3">
    <a href="{{route('export.bus.view')}}" class="btn btn-info btn-rounded">Bus</a>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection