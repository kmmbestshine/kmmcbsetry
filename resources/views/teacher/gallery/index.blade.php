@extends('teacher.layouts.default')
@section('title', 'Gallery')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('teach.dashboard')}}">Home</a></li>                    
    <li class="active">Gallery</li>
</ul>
@endsection
@section('contant')
    <div class="page-content-wrap">
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>All Galleries</center></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                        <th>Images</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($galleries as $key => $gallery)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $gallery->event }}</td>
                                            <td>{{ $gallery->date }}</td>
                                            <td>
                                                <div class="row">
                                                    @foreach($gallery->hasManyImages as $images)
                                                        <div class="col-md-3">
                                                            <img src="{{url($images->image)}}"  class="img-thumbnail" width="100px" height="100px">
                                                        </div>
                                                    @endforeach
                                                </div>
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