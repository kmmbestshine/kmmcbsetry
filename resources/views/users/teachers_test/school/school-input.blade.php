@extends('users.layouts.default')
@section('title', 'Add School')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Add School</li>
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
                            <h3 class="panel-title"><strong>Add School</strong></h3>
                        </div>
                       
                            <div class="panel-body">
                                <form action="{{route('post.job.school')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row-form">
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Name:</strong></label>
                                    <input type="text" class="form-control" placeholder="Enter School Name" name="school_name"/>
                                    @foreach($errors->get('school_name') as $school_name)
                                        <p class="error pull-right">{{ $school_name }}</p>
                                    @endforeach
                                </div>
                                </div>
                                <div class="col-md-6">
                                   
                                <div class="col-md-9">
                                     <label><strong>School Email:</strong></label>
                                    <input type="email" class="form-control" placeholder="Enter School Email Address" name="school_email"/>
                                    @foreach($errors->get('school_email') as $school_email)
                                        <p class="error pull-right">{{ $school_email }}</p>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Contact No</strong></label><input type="text" class="form-control" placeholder="Enter School Contact Number" name="school_mobile"/>
                                    @foreach($errors->get('school_mobile') as $school_mobile)
                                        <p class="error pull-right">{{ $school_mobile }}</p>
                                    @endforeach
                                </div>
                                </div>
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Address:</strong></label>
                                    <input type="text" class="form-control" placeholder="Enter School Address" name="school_address"/>
                                    @foreach($errors->get('school_address') as $school_address)
                                        <p class="error pull-right">{{ $school_address }}</p>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School City:</strong></label>
                                    <input type="text" class="form-control" placeholder="Enter School City" name="school_city"/>
                                    @foreach($errors->get('school_city') as $school_city)
                                        <p class="error pull-right">{{ $school_city }}</p>
                                    @endforeach
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="col-md-9">
                                    <label><strong>School Image:</strong></label>

                                    <input type="file" class="form-control" placeholder="Enter School Name" name="school_image"/>
                                    @foreach($errors->get('school_image') as $school_image)
                                        <p class="error pull-right">{{ $school_image }}</p>
                                    @endforeach
                                </div>
                                </div>
                                 
                               

                            </div>
                            <div class="row-form">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning btn-lg pull-right">Add School</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
                            </div>
                       
                        
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection