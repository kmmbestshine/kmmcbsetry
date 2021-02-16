@extends('users.layouts.default')
@section('title', 'Notifications')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Notifications</li>
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

    <div class="page-content-wrap">
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Notifications</center></h3>
                            <div class="text-right">
                                <a href="{{route('user.notification')}}" class="btn btn-info btn-rounded">Send Notification</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div style="overflow: auto">
                        <table style="border: 1px solid black" class="table datatable table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Notification Title</th>
                                        <th>Notification Description</th>
                                        <th>Date</th>
                                        <th>User</th>
                                        <th>Message Type</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($notifications)
                                    @foreach($notifications as $key => $notification)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $notification->title }}</td>
                                            <td>{{ $notification->description }}</td>
                                            <td>{{ $notification->date }}</td>
                                            <td>{{ $notification->role }}</td>
                                            <td>
                                                @if($notification->message_type=='text_msg') Text Message @endif
                                                @if($notification->message_type=='push_msg') Push Message @endif
                                            </td>
                                            <td><a href="{{route('deleteNotificationHistory', $notification->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    </div>
@endsection