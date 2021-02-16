@extends('users.layouts.default')
@section('title', 'View Notices')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Notice</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">View Notice</h3>
                        <div class="text-right">
                            <a href="{{route('user.notice')}}" class="btn btn-info btn-rounded">Add</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if($notices)
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Notice</th>
                                        <th>Image</th>
                                        <th>Sended To</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notices as $key => $notice)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $notice->date }}</td>
                                            <td>{{ $notice->notice }}</td>
                                            <td>
                                                @if($notice->image!='')
                                                    <img src="{{url($notice->image)}}" class="img-thumbnail" width="150px">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ ucwords(strtolower($notice->type)) }}</td>
                                            <td>
                                                <a href="{{route('delete.notice', $notice->id)}}" class="btn btn-danger" onclick="confirm('Are you sure!!!')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <center><h2>No Notice Found</h2></center>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection