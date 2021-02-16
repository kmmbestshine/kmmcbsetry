@extends('admin.layouts.default')
@section('title', 'Create Account')
@section('content')
<div class="page-content">
    <div class="container">
        <div class="page-toolbar">
            <div class="page-toolbar-block">
                <div class="page-toolbar-title">All Registered Schools</div>
                <div class="page-toolbar-subtitle">
                    <i class="fa fa-bars fa-2x"></i>
                    <i class="fa fa-bars fa-2x"></i>
                    List Here
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>School Name</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schools as $key => $school)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $school->school_name }}</td>
                                    <td>{{ $school->mobile }}</td>
                                    <td>{{ $school->email }}</td>
                                    <td>{{ $school->address }}</td>
                                    <td>{{ $school->city }}</td>
                                    <td>
                                        <img src="school/{{ $school->image }}" class="img-thumbnail">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection