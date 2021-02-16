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
                        <!-- <form class="form-horizontal" role="form" method="post" action="{{route('post.mapping')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                    	<label>Registration No.</label>
                                        <input type="text" class="form-control" placeholder="Registration No." name="reg_no">
                                    </div>
                                    @foreach($errors->get('bus_id') as $bus_id)
                                        <div class="alert alert-danger">{{ $bus_id }}</div>
                                    @endforeach
                                </div>
                                
                            </div><br>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                    	<label>Bus No</label>
                                        <select class="form-control route" name="bus_id">
                                            <option value="">Select Bus</option>
                                           @foreach($bus as $bs)
                                           	<option value="{{$bs->id}}">{{$bs->bus_no}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    @foreach($errors->get('stop') as $stop)
                                        <div class="alert alert-danger">{{ $stop }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                    <label>Bus Stop</label>
                                        <select class="form-control stop" disabled name="stop">
                                            <option value="">Select Stop</option>
                                           
                                        </select>
                                    </div>
                                    @foreach($errors->get('stop') as $stop)
                                        <div class="alert alert-danger">{{ $stop }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            
                            <br/>
                            
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6 text-center">
                                    <button type="submit" class=" pull-right btn btn-info">Submit</button>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                
                            </div>
                        </form> -->
                         <div class="row" style="text-align:center;width:100%">
                            <label style="width:100%;">Please Click Student Edit Option and Mapping to  Student in Transport Info</label>
                        </div>
                        <div class="row" style="text-align: center;width: 100%;margin-left: -45%;padding: 20px;">
                            <a href="{{route('get.students')}}" style="text-align:center;"><button  type="button" class=" pull-right btn btn-info">Click Student Mapping</button></a>
                        </div>
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
                                        <th>Registration No</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Route Name</th>
                                        <th>Bus No</th>
                                        <th>Stop Name</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($mapping)
                                   @foreach($mapping as $key=>$map)
                                   	<tr>
                                   		<td>{{$key+1}}</td>
                                   		<td>{{$map->registration_no}}</td>
                                   		<td>{{$map->name}}</td>
                                   		<td>{{$map->class}}</td>
                                   		<td>{{$map->route}}</td>
                                   		<td>{{$map->bus_no}}</td>
                                   		<td>{{$map->stop}}</td>
                                   		<td><a href="{{route('delete.mapping', $map->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                   	</tr>
                                   @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection