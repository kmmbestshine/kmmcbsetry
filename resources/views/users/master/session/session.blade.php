@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Session</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Session</h2>
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
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('post.session')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Session</label>
                                    <input type="text" name="session" class="form-control" placeholder="Session">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <input type="date" name="fromDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <input type="date" name="toDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <label></label>
                                <button type="submit" class="btn btn-block btn-info">Add Session</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Sessions</center></h3>
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
                                        <th>Session</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Activate/Deactivate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sessions as $key => $session)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $session->session }}</td>
                                            <td>
                                                <a href="{{route('edit.session', $session->id)}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.session', $session->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                            </td>
                                             {{-- updated 6-11-2017 by priya
                                            <td>
                                                @if($session->active==1)
                                                    <a href="{{route('operate.session', $session->id)}}" class="btn btn-success">Deactivate</a>
                                                @else
                                                    <a href="{{route('operate.session', $session->id)}}" class="btn btn-warning">Activate</a>
                                                @endif
                                            </td>--}}
                                            @if($session->active==1)
                                                <td>
                                                    <a href="{{route('operate.session', $session->id)}}" style="background-color: green" class="btn btn-success" >
                                                        Active
                                                    </a>
                                                </td>
                                            @else
                                                <td>
                                                    <a href="{{route('operate.session', $session->id)}}" class="btn btn-warning">
                                                        Deactive
                                                    </a>
                                                </td>
                                            @endif
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