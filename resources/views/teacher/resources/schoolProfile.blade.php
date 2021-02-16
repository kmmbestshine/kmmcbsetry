@extends('teacher.layouts.default')
@section('title', 'Add Homework')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>
    <li><a href="#">Resources</a></li>                    
    <li class="active">School Profile</li>
</ul>
@endsection
@section('contant')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('post.homework')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>School Profile</strong></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>School Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $school->school_name }}</td>
                                        <td>{{ $school->email }}</td>
                                        <td>{{ $school->mobile }}</td>
                                        <td>{{ $school->address }}</td>
                                        <td>{{ $school->city }}</td>
                                        <td>
                                            <img src="{{url($school->image)}}" class="img-thumbnail">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection