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
                            <h3 class="panel-title"><center>Input Driver</center></h3>
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
                        <form class="form-horizontal" role="form" method="post" action="{{route('post.driver')}}">
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
                                        <input type="text" class="form-control" name="driver_name" placeholder="Driver Name">
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
                                        <input type="text" class="form-control" name="driver_mobile" placeholder="Drive Mobile Number">
                                    </div>
                                    @foreach($errors->get('driver_mobile') as $driver_mobile)
                                        <div class="alert alert-danger">{{ $driver_mobile }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <textarea class="form-control" name="driver_address" placeholder="Driver Address"></textarea>
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
                                        <input type="text" name="driver_city" class="form-control" placeholder="Driver City">
                                    </div>
                                    @foreach($errors->get('driver_city') as $driver_city)
                                        <div class="alert alert-danger">{{ $driver_city }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1 text-center">
                                    <button type="submit" class="btn btn-info">Add Driver</button>
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
                            <h3 class="panel-title"><center>Drivers</center></h3>
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
                                        <th>Username</th>
                                        <th>Password</th>                                        
                                        <th>City</th>
                                        <th>Driver Name</th>
                                        <th>Driver Mobile</th>
                                        <th>Driver Address</th>
                                        <th>Driver City</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($drivers as $key => $driver)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $driver->bus_no }}</td>
                                            <td>{{ $driver->route }}</td>
                                            <td>{{ $driver->username }}</td>
                                            <td>{{ $driver->hint_password }}</td>                                                                                   
                                            <td>{{ $driver->city }}</td>
                                            <td>{{ $driver->driver_name }}</td>
                                            <td>{{ $driver->driver_mobile }}</td>
                                            <td>{{ $driver->driver_address }}</td>
                                            <td>{{ $driver->driver_city }}</td>
                                            <td>
                                                <a href="{{route('edit.driver', $driver->id)}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.driver', $driver->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
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