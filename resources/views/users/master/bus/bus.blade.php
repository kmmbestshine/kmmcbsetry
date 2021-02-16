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
            <h2><span class="fa fa-arrow-circle-o-left"></span> Transport</h2>
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
                            <h3 class="panel-title"><center>Input Bus</center></h3>
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
                        <form class="form-horizontal" role="form" method="post" action="{{route('post.bus')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" name="bus_no" class="form-control" placeholder="Bus No">
                                    </div>
                                    @foreach($errors->get('bus_no') as $bus_no)
                                        <div class="alert alert-danger">{{ $bus_no }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <select class="form-control" name="bus_type">
                                            <option value="">Select Bus Type</option>
                                            <option value="AC">AC</option>
                                            <option value="Non-AC">Non-AC</option>
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
                                            <option value="School">School</option>
                                            <option value="Vendor">Vendor</option>
                                        </select>
                                    </div>
                                    @foreach($errors->get('bus_owned_by') as $bus_owned_by)
                                        <div class="alert alert-danger">{{ $bus_owned_by }}</div>
                                    @endforeach
                                </div>
                                <!--<div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="gps_no" class="form-control" placeholder="GPS No">
                                    </div>
                                    @foreach($errors->get('gps_no') as $gps_no)
                                        <div class="alert alert-danger">{{ $gps_no }}</div>
                                    @endforeach
                                </div>-->
                                 <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="capacity" class="form-control" placeholder="Capacity">
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
                                        <input type="text" name="city" class="form-control" placeholder="City">
                                    </div>
                                    @foreach($errors->get('city') as $city)
                                        <div class="alert alert-danger">{{ $city }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <input type="text" name="route" class="form-control" placeholder="Bus Route">
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
                                <div>
                                    <button type="submit" class="btn btn-info">Add Bus</button>
                                </div>
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
                            <h3 class="panel-title"><center>Buses</center></h3>
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
                                        <th>Bus Type</th>
                                        <th>Bus Owner</th>                                        
                                        <th>Capacity</th>
                                        <th>Route</th>
                                        <th>City</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($buses as $key => $bus)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $bus->bus_no }}</td>
                                            <td>{{ $bus->bus_type }}</td>
                                            <td>{{ $bus->bus_owned_by }}</td>                                            
                                            <td>{{ $bus->capacity }}</td>
                                            <td>{{ $bus->route }}</td>
                                            <td>{{ $bus->city }}</td>
                                            <td>
                                                <a href="{{route('edit.bus', $bus->id)}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.bus', $bus->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
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