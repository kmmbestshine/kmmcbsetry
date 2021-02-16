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
            <div class="col-md-12">
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Input Question</strong></h3>
                            <div class="text-right">
                                <a href="{{route('viewquestion')}}" class="btn btn-info btn-rounded">View Question</a>
                                
                            </div>
                             
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form class="form-horizontal" method="get" action="{{route('teachersQuestion')}}">
                                <div class="col-md-10">
                                    <select class="form-control" name="type">
                                        <option selected disabled value="">Choose Staff</option>
                                            <option value="Teaching" >Teaching </option>
                                            <option value="Non Teaching" >Non Teaching </option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn-info btn btn-block">Input Question</button>
                                    
                                </div>
                                </form>
                            </div>

                        </div>
                        
                        @if($type)
                            <div class="panel-body">
                                <form action="{{route('postTeachersQuestion', $type)}}" method="post">
                                {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Question</label>
                                            <textarea style="resize:none;" rows="4" name="question" class="form-control" placeholder="Write Question" required></textarea>
                                        </div>
                                        
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" name="option[]" placeholder="Option 1" class="form-control" required></div>
                                        <div class="col-md-6"><input type="text" name="option[]" placeholder="Option 2" class="form-control" required></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" name="option[]" placeholder="Option 3" class="form-control" required></div>
                                        <div class="col-md-6"><input type="text" name="option[]" placeholder="Option 4" class="form-control" required></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select class="form-control" name="correct" required>
                                                <option value=''>Choose Correct Option</option>
                                                <option value="0">Option 1</option>
                                                <option value="1">Option 2</option>
                                                <option value="2">Option 3</option>
                                                <option value="3">Option 4</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" name="marks" placeholder="Enter Marks" class="form-control" required></div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 pull-right">
                                            <button class="btn btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif
                        
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection