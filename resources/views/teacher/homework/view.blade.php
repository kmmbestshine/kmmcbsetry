@extends('teacher.layouts.default')
@section('title', 'View Homework')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('teach.dashboard')}}">Home</a></li>                    
    <li class="active">View Homework</li>
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
                @if($homeworks)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">View Homework</h3>
                            <div class="text-right">
                                <a href="{{route('teach.homework')}}" class="btn btn-info btn-rounded">Add Homework</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Subject</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>PDF</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($homeworks as $key => $homework)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $homework->class }}</td>
                                            <td>{{ $homework->section }}</td>
                                            <td>{{ $homework->subject }}</td>
                                            <td>{{ $homework->description }}</td>
                                            <td>
                                                @if($homework->image!='')
                                                    <img src="{{url($homework->image)}}" class="img-thumbnail" width="100px" height="100px">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                @if($homework->pdf!='')
                                                    <a href="{{url($homework->pdf)}}" class="btn btn-info">View PDF</a>
                                                @else
                                                    No PDF Found
                                                @endif
                                            </td>
                                            <td>{{ $homework->date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <center><h2>No Homework</h2></center>
                @endif
            </div>
        </div>
    </div>
@endsection