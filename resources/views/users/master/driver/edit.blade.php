@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Bus Driver</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Bus Driver</h2>
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
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.driver')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $driver->id }}">
                                        <input type="hidden" name="user_id" value="{{ $driver->user_id }}">
                                        <label>Select Bus</label>
                                        <select class="form-control" name="bus_id">
                                            <option value="">Select Bus</option>
                                            @foreach($buses as $bus)
                                                <option value="{{ $bus->id }}" {{ $driver->bus_id=="$bus->id" ? "selected" : "" }}>{{ $bus->bus_no }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @foreach($errors->get('bus_id') as $bus_id)
                                        <div class="alert alert-danger">{{ $bus_id }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Driver Name</label>
                                        <input type="text" class="form-control" name="driver_name" value="{{ $driver->driver_name }}">
                                    </div>
                                    @foreach($errors->get('driver_name') as $driver_name)
                                        <div class="alert alert-danger">{{ $driver_name }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Driver Mobile</label>
                                        <input type="text" class="form-control" name="driver_mobile" value="{{ $driver->driver_mobile }}">
                                    </div>
                                    @foreach($errors->get('driver_mobile') as $driver_mobile)
                                        <div class="alert alert-danger">{{ $driver_mobile }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Driver Address</label>
                                        <textarea class="form-control" name="driver_address" value="{{ $driver->driver_address }}">{{ $driver->driver_address }}</textarea>
                                    </div>
                                    @foreach($errors->get('driver_address') as $driver_address)
                                        <div class="alert alert-danger">{{ $driver_address }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Driver City</label>
                                        <input type="text" name="driver_city" class="form-control" value="{{ $driver->driver_city }}">
                                    </div>
                                    @foreach($errors->get('driver_city') as $driver_city)
                                        <div class="alert alert-danger">{{ $driver_city }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Driver Password</label>
                                        <input type="text" name="driver_password" class="form-control" value="{{ $users->hint_password }}">
                                    </div>
                                    @foreach($errors->get('hint_password') as $hint_password)
                                        <div class="alert alert-danger">{{ $hint_password }}</div>
                                    @endforeach
                                </div>
                                
                            </div>
                            <div class="row">
                                
                            </div><br/>
                            <div class="row">
                                <div class=" text-center">
                                    <button type="submit" class="btn btn-info">Update Driver</button>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                
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