@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Student Mapping</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Mapping</h2>
        </div>
        @if(Input::old('success'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ Input::old('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if(Input::old('error'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Input Student Map</center></h3>
                             <div class="text-right">
                                <a href="{{route('master.bus')}}" class="btn btn-primary btn-rounded">Insert Bus</a>
                                <a href="{{route('master.stop')}}" class="btn btn-primary btn-rounded">Bus Stops</a>
                                <a href="{{route('master.driver')}}" class="btn btn-primary btn-rounded">Insert Driver</a>
                                <a href="{{route('user.trasport')}}" class="btn btn-primary btn-rounded">Student Mapping</a>
                                <a href="{{route('user.drivertrack')}}" class="btn btn-primary btn-rounded">Driver Track </a>
                            </div>
                        </div>

            </div>
            </div>
            </div>
             
            <div class="row" >
                <div class="col-md-12" style="height:500px;" ng-app="mapapp" ng-controller="mapcontroller">
                <div class="col-md-3">
                </div>
                <div class="col-md-7"  id="maps" style="height: 100%;width: 100%;"></div>
                </div>
               
          <script type="text/javascript" src="{{url('users/js/drivermaps.js')}}"></script>      
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCVkU7YnGfown4_i_sm6X36HP2jWTv54&callback=initmap"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTp90g8u0wII10XDlwumtKafiW5PUE2vk&callback=initmap"></script>


   

        </div>
@endsection