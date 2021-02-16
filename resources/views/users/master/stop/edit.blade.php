@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Bus Stop</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Bus Stop</h2>
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
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.stop')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $stop->id }}">
                                        <select class="form-control" name="bus_id">
                                            <option value="">Select Bus</option>
                                            @foreach($buses as $bus)
                                                <option value="{{ $bus->id }}" {{ $stop->bus_id=="$bus->id" ? "selected" : "" }}>{{ $bus->bus_no }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @foreach($errors->get('bus_id') as $bus_id)
                                        <div class="alert alert-danger">{{ $bus_id }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="stop" value="{{ $stop->stop }}">
                                    </div>
                                    @foreach($errors->get('stop') as $stop)
                                        <div class="alert alert-danger">{{ $stop }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="stop_index" value="{{ $stop->stop_index }}">
                                    </div>
                                    @foreach($errors->get('stop_index') as $stop_index)
                                        <div class="alert alert-danger">{{ $stop_index }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="lattitude" class="form-control" value="{{ $stop->lattitude }}">
                                    </div>
                                    @foreach($errors->get('lattitude') as $lattitude)
                                        <div class="alert alert-danger">{{ $lattitude }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" name="longitude" class="form-control" value="{{ $stop->longitude }}">
                                    </div>
                                    @foreach($errors->get('longitude') as $longitude)
                                        <div class="alert alert-danger">{{ $longitude }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="transport_fee" class="form-control" value="{{ $stop->transport_fee }}">
                                    </div>
                                    @foreach($errors->get('transport_fee') as $transport_fee)
                                        <div class="alert alert-danger">{{ $transport_fee }}</div>
                                    @endforeach
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1 text-center">
                                    <button type="submit" class="btn btn-info">Update Bus Stop</button>
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