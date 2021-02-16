@extends('student.layouts.default')
@section('title', 'Employee')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>
    <li><a href="#">Resources</a></li>                    
    <li class="active">Employee</li>
</ul>
@endsection
@section('contant')
<style type="text/css">
    .avatar{
        height:50px;
        width:50px;
    }
</style>
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('post.homework')}}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Employee</strong></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $key=>$emp)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img src="{{url('employee/'.$emp->avatar)}}" class="img-responsive img-circle avatar"></td>
                                        <td>{{$emp->name}}</td>
                                        <td>{{$emp->email}}</td>
                                        <td>{{$emp->mobile}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection