@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<!-- <ul class="breadcrumb">
<li><a href="{{route('user.dashboard')}}">Home</a></li>                    
<li class="active">Fee Collection</li>
</ul> -->
@endsection
@section('contant')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
<div class="row" ng-app="app">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="container" ng-controller="payment">
                <nav class="navbar navbar-default" style="margin-top: 50px;">
                    <div class="container-fluid">

                        <div style="display:inline;">
                            <form ng-submit="getStudent()" style="text-align: center;margin-top: 13px;">
                                {!! csrf_field() !!}
                                <input type="text" placeholder="Enter register no" name="registerNo" ng-model ="registerNo"/>
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </nav>

                <div id="singleStudentPayment">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
