@extends('users.layouts.default')
@section('title', 'Fee Structure')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Add Student Fee </a></li>
        <li class="active">Add Student Wise Fee </li>
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
     
    
   
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('post.manager')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Student Wise Fee Through Excel Sheet</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="data" class="form-control">
                                                    <option value="">Select Student Fee</option>
                                                    <option value="studentfees">Student Wise Fees</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-info">Upload Fee</button>
                                                <a href="{{route('get.students.feeindex')}}" class="btn btn-info">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Sample Files For Fee Upload Excel Sheet</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{url('data-manager/studentfees.xlsx')}}" class="btn btn-info">Download Student Fees Sample File</a>
                                                    </div>
                                                    </div>
                                                <br>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-6 col-md-6">
                                    <div class="panel panel-default">
                                           
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection