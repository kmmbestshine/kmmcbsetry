@extends('teacher.layouts.default')
@section('title', 'Add Homework')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('teach.dashboard')}}">Home</a></li>                    
    <li class="active">Edit Leave Approval</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('update.teach.leave')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Edit Leave Request</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6 form-group">
                                        <label class="col-md-3 control-label">Select Student</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="{{$leave->name}}" readonly>
                                            <input type="hidden" name="student_id" value="{{ $leave->student_id }}">
                                            <input type="hidden" name="id" value="{{$leave->id}}">
                                        </div>
                                    </div>  
                                    <div class="col-md-6 form-group">
                                        <label class="col-md-3 control-label">Leave From</label>
                                        <div class="col-md-5">
                                            <input type="date" name="leave_from" class="form-control">
                                            @foreach($errors->get('leave_from') as $leave_from)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $leave_from }}
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="leave_from_old" class="form-control" value="{{ $leave->from_leave }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6 form-group">
                                        <label class="col-md-3 control-label">Leave To</label>
                                        <div class="col-md-5">
                                            <input type="date" name="leave_to" class="form-control">
                                            @foreach($errors->get('leave_to') as $leave_to)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $leave_to }}
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="leave_to_old" class="form-control" value="{{ $leave->to_leave }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="col-md-3 control-label">Request By</label>
                                        <div class="col-md-9">
                                            <input type="text" name="request_by" class="form-control" value="{{ $leave->by_request }}">
                                            @foreach($errors->get('request_by') as $request_by)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $request_by }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6 form-group">
                                        <label class="col-md-3 control-label">Leave Status</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="status">
                                                <option value="">Select Status</option>
                                                <option value="process" {{ $leave->status=='process' ? "selected" : ""}}>Process</option>
                                                <option value="cancelled" {{ $leave->status=='cancelled' ? "selected" : ""}}>Cancelled</option>
                                                <option value="approved" {{ $leave->status=='approved' ? "selected" : ""}}>Approved</option>
                                            </select>
                                            @foreach($errors->get('status') as $status)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $status }}
                                                </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="col-md-3 control-label">Remarks</label>
                                        <div class="col-md-9">
                                            <input type="text" name="remarks" class="form-control" value="{{ $leave->remarks }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-info">Submit <i class="fa fa-send"></i></button> 
                                                        </div>                
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
@endsection