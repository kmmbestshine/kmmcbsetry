@extends('users.layouts.default')
@section('title', 'Teachers Online Test')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Teachers Online Test</li>
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
            <div class="col-md-10">
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Input Question</strong></h3>
                        </div>
                       
                            <div class="panel-body">
                                <form action="{{route('postTeachersQuestion')}}" method="post">
                           {{-- <form action="{{ route('store-question') }}" method="post">--}}
                           {!! csrf_field() !!}

                           

                            <div class="form-group">
                                <label for="subject">Teachers Type</label>
                                <select class="form-control" name="type">
                                        <option selected disabled value="">Choose Staff</option>
                                            <option value="Teaching" >Teaching </option>
                                            <option value="Non Teaching" >Non Teaching </option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="questionName">Question Name</label>
                                <input type="text" class="form-control" id="questionName" name="question_name" required>
                            </div>
                            <div class="form-group">
                                <label for="option_1">Answer 1</label>
                                <input type="text" class="form-control" id="option_1" name="option_1" required>
                            </div>
                            <div class="form-group">
                                <label for="option_2">Answer 2</label>
                                <input type="text" class="form-control" id="option_2" name="option_2" required>
                            </div>
                            <div class="form-group">
                                <label for="option_3">Answer 3</label>
                                <input type="text" class="form-control" id="option_3" name="option_3" required>
                            </div>
                            <div class="form-group">
                                <label for="option_4">Answer 4</label>
                                <input type="text" class="form-control" id="option_4" name="option_4" required>
                            </div>
                            <div class="form-group">
                                <label for="correct_option">Correct Answer</label>
                                <select class="form-control" id="correct_option" name="correct_option" required>
                                    <option disabled selected value="">--Select--</option>
                                    <option value='option_1'>Answer 1</option>
                                    <option value='option_2'>Answer 2</option>
                                    <option value='option_3'>Answer 3</option>
                                    <option value='option_4'>Answer 4</option>
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary"
                                    name="submit">Submit
                            </button>
                        </form>
                            </div>
                       
                        
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection