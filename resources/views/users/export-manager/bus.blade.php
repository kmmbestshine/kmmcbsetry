@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Buses</center></h3>
                            <div class="text-right">
                                <a href="{{route('export.bus')}}" class="btn btn-info btn-rounded">Export To Excel</a>
                            </div>                               
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Bus Id</th>
                                        <th>Bus No</th>
                                        <th>Bus Type</th>
                                        <th>Bus Owner</th>
                                        <th>GPS No</th>
                                        <th>Capacity</th>
                                        <th>Route</th>
                                        <th>City</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($buses as $bus)
                                        <tr>
                                            <td>{{ $bus->id }}</td>
                                            <td>{{ $bus->bus_no }}</td>
                                            <td>{{ $bus->bus_type }}</td>
                                            <td>{{ $bus->bus_owned_by }}</td>
                                            <td>{{ $bus->gps_no }}</td>
                                            <td>{{ $bus->capacity }}</td>
                                            <td>{{ $bus->route }}</td>
                                            <td>{{ $bus->city }}</td>
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