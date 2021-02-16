@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Bus</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Bus</h2>
        </div>
        @if(Input::old('success'))
            <div class="alert alert-success">{{ Input::old('success') }}</div>
        @endif
        @if(Input::old('error'))
            <div class="alert alert-danger">{{ Input::old('error') }}</div>
        @endif
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Input Bus</center></h3>
                             <div class="text-right">
                                <a href="{{route('master.bus')}}" class="btn btn-info btn-rounded">Insert Bus</a>
                                <a href="{{route('master.stop')}}" class="btn btn-info btn-rounded">Bus Stops</a>
                                <a href="{{route('master.driver')}}" class="btn btn-info btn-rounded">Insert Driver</a>
                                <a href="{{route('user.trasport')}}" class="btn btn-info btn-rounded">Student Mapping</a>
                            </div>
                        </div>
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.bus')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $bus->id }}">
                                        <input type="text" name="bus_no" class="form-control" value="{{ $bus->bus_no }}">
                                    </div>
                                    @foreach($errors->get('bus_no') as $bus_no)
                                        <div class="alert alert-danger">{{ $bus_no }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <select class="form-control" name="bus_type">
                                            <option value="">Select Bus Type</option>
                                            <option value="AC" {{ $bus->bus_type=="AC" ? "selected" : ""}}>AC</option>
                                            <option value="Non-AC" {{ $bus->bus_type=="Non-AC" ? "selected" : ""}}>Non-AC</option>
                                        </select>
                                    </div>
                                    @foreach($errors->get('bus_type') as $bus_type)
                                        <div class="alert alert-danger">{{ $bus_type }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-control" name="bus_owned_by">
                                            <option value="">Select Bus Owner</option>
                                            <option value="School" {{ $bus->bus_owned_by=="School" ? "selected" : ""}}>School</option>
                                            <option value="Vendor" {{ $bus->bus_owned_by=="Vendor" ? "selected" : ""}}>Vendor</option>
                                        </select>
                                    </div>
                                    @foreach($errors->get('bus_owned_by') as $bus_owned_by)
                                        <div class="alert alert-danger">{{ $bus_owned_by }}</div>
                                    @endforeach
                                </div>
                                <!--<div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="gps_no" class="form-control" value="{{ $bus->gps_no }}">
                                    </div>
                                    @foreach($errors->get('gps_no') as $gps_no)
                                        <div class="alert alert-danger">{{ $gps_no }}</div>
                                    @endforeach
                                </div>-->
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="capacity" class="form-control" value="{{ $bus->capacity }}">
                                    </div>
                                    @foreach($errors->get('capacity') as $capacity)
                                        <div class="alert alert-danger">{{ $capacity }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" value="{{ $bus->city }}">
                                    </div>
                                    @foreach($errors->get('city') as $city)
                                        <div class="alert alert-danger">{{ $city }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="route" class="form-control" value="{{ $bus->route }}">
                                    </div>
                                    @foreach($errors->get('route') as $route)
                                        <div class="alert alert-danger">{{ $route }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                 <div class="col-md-5  text-center">
                                    
                                </div>
                                
                                <div class="col-md-5 col-md-offset-1 text-center">
                                    <button type="submit" class="btn btn-info">Update Bus</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
@endsection