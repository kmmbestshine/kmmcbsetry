@extends('users.layouts.default')
@section('title', 'Online Test')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Online Test </a></li>
        <li class="active">Online Test </li>
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
     @if($msg)
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Well done!</strong> {{ $msg }}
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header">
                        <a href="/home"><i class="fa fa-arrow-left" style="margin-right: 10px"></i>     </a>
                        {{--<a title="Add Subject" href="{{route('add-subject')}}" class="close">+</a>--}}
                        {{$pageTitle}}
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <?php
                        $teaching='Teaching';
                        $non_teaching='Non Teaching';
                        ?>

                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item">
                                <a href="{{ route('teachers_view_question',['type'=>'Teaching']) }}"><h2>{{$teaching}}</h2></a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('teachers_view_question',['type'=>'Non Teaching']) }}"><h2>{{$non_teaching}}</h2></a>
                            </li>
                            
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
