@extends('parent.layouts.default')
@section('title', 'Time Table')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>
    <li><a href="#">Resources</a></li>                    
    <li class="active">Time Table</li>
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
                            <h3 class="panel-title"><strong>Time Table</strong></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Teacher</th>
                                        <th>Period</th>
                                        <th>Day</th>
                                        <th>Start</th>
                                        <th>End</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($time as $tm)
                                    <tr>
                                        <td>{{$tm->subject}}</td>
                                        <td>{{$tm->name}}</td>
                                        <td>{{$tm->period}}</td>
                                        <td>{{$tm->day}}</td>
                                        <td>{{$tm->start_time}}</td>
                                        <td>{{$tm->end_time}}</td>
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