@extends('users.layouts.default')
@section('title', 'Add Payment')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Add Payment</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('create.labour.payment')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Payment</strong></h3>
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Work Category  :</label>
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="work_nameid">
                                                <option value="">Select Work Category</option>
                                                @foreach($build_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->work_type }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contractor name   :</label>
                                        <div class="col-md-9">
                                           <select class="form-control ppaymentclass" name="contractor_name">
                                                <option value="">Select Contractor Name</option>
                                                @foreach($build_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->contractor_name }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                <br/>
                            <div class="row">
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection