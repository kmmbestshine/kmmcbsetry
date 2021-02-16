@extends('parent.layouts.default')
@section('title', 'Marks')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>
    <li class="active">Marks</li>
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
                                        <th>Month</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Subject</th>
                                        <th>Max Marks</th>
                                        <th>Pass Marks</th>
                                        <th>Obtained Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($marks as $key=>$mk)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$mk->month}}</td>
                                        <td>{{$mk->date}}</td>
                                        <td>{{$mk->exam_type}}</td>
                                        <td>{{$mk->subject}}</td>
                                        <td>{{$mk->max_marks}}</td>
                                        <td>{{$mk->pass_marks}}</td>
                                        <td>{{$mk->obtained_marks}}</td>
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