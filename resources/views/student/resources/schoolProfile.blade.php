@extends('student.layouts.default')
@section('title', 'School Profile')
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
                            <div class="row">
                                <div class="col-md-3 col-md-offset-2">
                                    <img src="{{url($school->image)}}" class="img-responsive img-circle img-thumbnail" style="width: 250px;height:250px;">
                                </div>
                                <div class="col-md-5" style="padding-top:20px">
                                    <table class="table">
                                        <tr>
                                            <th class="col-md-2">Name :</th>
                                            <td>{{$school->school_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Address :</th>
                                            <td>{{$school->address}}, {{$school->city}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email :</th>
                                            <td>{{$school->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Contact :</th>
                                            <td>{{$school->mobile}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection