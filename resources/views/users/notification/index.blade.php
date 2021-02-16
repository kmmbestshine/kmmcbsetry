@extends('users.layouts.default')
@section('title', 'Notification')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Notification</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.device.notification')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Send Notification</strong></h3>
                            <div class="text-right">
                                <a href="{{route('view.notification')}}" class="btn btn-info btn-rounded">View Notification</a>
                            </div>
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                        		<div class="col-md-6">
                        			
                        		</div>
                        	</div>
                            <div class="row">
                            	<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Notification Type</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="notification_type">
                                                <option value="">Select Notification Type</option>
                                                @foreach($notifications as $notification)
                                                    <option value="{{ $notification->id }}">{{ $notification->title }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('notification_type') as $notification_type)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $notification_type }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9">
                                            <input type="date" name="date" class="form-control">
                                            @foreach($errors->get('date') as $date)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $date }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Notification Send To</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="notification_send_to">
                                                <option value="">Select Notification Send To</option>
                                                <option value="student/parent"> Student / Parent </option>
                                                <option value="teacher"> Teacher </option>
                                            </select>
                                            @foreach($errors->get('notification_send_to') as $notification_send_to)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $notification_send_to }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-2">
                                    <label class="control-label">Select Classes</label>
                                </div>
                                <div class="col-md-10">
                                    @foreach($classes as $class)
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="checkbox" name="classes[]" value="{{$class->id}}">&nbsp;&nbsp;{{ $class->class }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                    @foreach($errors->get('classes') as $classes)
                                        <div class="alert alert-danger notification-class-filed my-alert" role="alert" style="width: 50%;">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button> {{ $classes }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection