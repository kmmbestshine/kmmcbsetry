@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Holiday</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Holiday</h2>
        </div>
        @if(Input::old('success'))
            <div class="alert alert-success">{{ Input::old('success') }}</div>
        @endif
        @if(Input::old('error'))
            <div class="alert alert-danger">{{ Input::old('error') }}</div>
        @endif
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.holiday')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $holiday->id }}">
                                        <input type="text" class="form-control" name="holiday" value="{{ $holiday->holiday }}">
                                    </div>
                                    @foreach($errors->get('holiday') as $holiday)
                                        <div class="alert alert-danger">{{ $holiday }}</div>
                                    @endforeach
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <?php $given_date = date('Y-m-d', strtotime($holiday->date)) ?>
                                        <input type="date" name="date" class="form-control" value="{{ $given_date }}">
                                    </div>
                                    @foreach($errors->get('date') as $date)
                                        <div class="alert alert-danger">{{ $date }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <br/>
                            <div class="row"> 
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="remarks" placeholder="Remarks" value="{{ $holiday->remarks }}">
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-1 text-center">
                                    <button type="submit" class="btn btn-info">Update Holiday</button>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection