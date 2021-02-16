@extends('users.layouts.default')
@section('title', 'Approved List')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Approved List</li>
</ul>
@endsection
@section('contant')
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
                        <strong>Oh Snap!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
        @if($msg)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ $msg }}
                    </div>
                </div>
            </div>
        @endif
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="get">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Approved List</strong></h3>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>School Name</th>
                                        <th>Date Of Joining</th>
                                        <th>Designation</th>
                                        <th>Contract Period</th>
                                        <th>Salary</th>
                                        <th>Acknowledgement</th>
                                        <th>Appointment Order</th>
                                         <th>Staff Agreement</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            
                                            <td>{{ $bio_selected->name }}</td>
                                            <td>{{ $bio_selected->school_name }}</td>
                                            <td>{{ $bio_selected->doj }}</td>
                                            <td>{{ $bio_selected->designation }}</td>
                                            <td>{{ $bio_selected->period }}</td>
                                            <td>{{ $bio_selected->salary }}</td>
                                            <td>
                                                <a href="{{route('staff.acknow.download', $bio_selected->id)}}" class="btn  btn-info">Acknowledgement</a>
                                            </td>
                                            <td>
                                                <a href="{{route('staff.appoint.download', $bio_selected->id)}}" class="btn  btn-info">Appointment Order</a>
                                            </td>
                                            <td>
                                                <a href="{{route('staff.agreement.download', $bio_selected->id)}}" class="btn  btn-info">Staff Agreement</a>
                                            </td>
                                            
                                        </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
@endsection