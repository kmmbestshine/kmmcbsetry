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
                            <h3 class="panel-title"><center>Input Bus Stops</center></h3>
                             <div class="text-right">
                                <a href="{{route('master.bus')}}" class="btn btn-info btn-rounded">Insert Bus</a>
                                <a href="{{route('master.stop')}}" class="btn btn-info btn-rounded">Bus Stops</a>
                                <a href="{{route('master.driver')}}" class="btn btn-info btn-rounded">Insert Driver</a>
                                <a href="{{route('user.trasport')}}" class="btn btn-info btn-rounded">Student Mapping</a>
                                <a href="{{route('user.drivertrack')}}" class="btn btn-info btn-rounded">Driver Track</a>
                            </div>
                        </div>
        <div class="page-content-wrap">
         
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('post.stop')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-control" name="bus_id">
                                            <option value="">Select Bus</option>
                                            @foreach($buses as $bus)
                                                <option value="{{ $bus->id }}">{{ $bus->bus_no }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @foreach($errors->get('bus_id') as $bus_id)
                                        <div class="alert alert-danger">{{ $bus_id }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="stop" placeholder="Bus Stop">
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
                                        <input type="text" class="form-control" name="stop_index" placeholder="Stop Index">
                                    </div>
                                    @foreach($errors->get('stop_index') as $stop_index)
                                        <div class="alert alert-danger">{{ $stop_index }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="lattitude" class="form-control" placeholder="Lattitude">
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
                                        <input type="text" name="longitude" class="form-control" placeholder="Longitude">
                                    </div>
                                    @foreach($errors->get('longitude') as $longitude)
                                        <div class="alert alert-danger">{{ $longitude }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="transport_fee" class="form-control" placeholder="Enter Monthly Fee">
                                    </div>
                                    @foreach($errors->get('transport_fee') as $transport_fee)
                                        <div class="alert alert-danger">{{ $transport_fee }}</div>
                                    @endforeach
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-1 text-center">
                                    <button type="submit" class="btn btn-info">Add Bus Stop</button>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Bus Stops</center></h3>
                            <ul class="panel-controls">
                                <li>
                                    <a href="#" class="panel-collapse">
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-refresh">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-remove">
                                        <span class="fa fa-times"></span>
                                    </a>
                                </li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Bus No</th>
                                        <th>Route</th>
                                        <th>City</th>
                                        <th>Bus Stop</th>
                                        <th>Stop Index</th>
                                        <th>Lattitude</th>
                                        <th>Longitude</th>
                                        <th>Transport Fee</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($stops as $key => $stop)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $stop->bus_no }}</td>
                                            <td>{{ $stop->route }}</td>
                                            <td>{{ $stop->city }}</td>
                                            <td>{{ $stop->stop }}</td>
                                            <td>{{ $stop->stop_index }}</td>
                                            <td>{{ $stop->lattitude }}</td>
                                            <td>{{ $stop->longitude }}</td>
                                            <td>{{ $stop->transport_fee }}</td>
                                            <td>
                                                <a href="{{route('edit.stop', $stop->id)}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.stop', $stop->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection