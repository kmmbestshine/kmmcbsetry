@extends('users.layouts.default')
@section('title', 'Vendor ')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li><a href="">Library</a></li>
    <li class="active">Category</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.supplier')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Supplier</strong></h3>
                           <!-- <div class="text-right">
                                <a href="{{route('user.library')}}" class="btn btn-info btn-rounded">Add Book</a>&nbsp;&nbsp;&nbsp;
                                <a href="{{route('user.issue.book')}}" class="btn btn-info btn-rounded">Issue Book</a>&nbsp;&nbsp;&nbsp;
                                <a href="{{route('return.book')}}" class="btn btn-info btn-rounded">Return Book</a>&nbsp;&nbsp;&nbsp;
                            </div>-->
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Material Supplier</label>
                                        <div class="col-md-4">
                                            <input type="text" name="suppliername" class="form-control" placeholder="Enter Material Supplier Name ">
                                            
                                        </div>
                                        <label class="col-md-2 control-label">Phone No</label>
                                        <div class="col-md-4">
                                            <input type="number" name="phone_no" class="form-control" placeholder="Enter Phone No">
                                        </div>
                                    </div>
                                </div>
                                 <br>
                                 <br>
                                 <br>
                                 <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-4">
                                            <input type="text" name="address" class="form-control" placeholder="Enter Address">
                                           
                                        </div>
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Building name   :</label>
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="build_nameid">
                                                <option value="">Select Building Name</option>
                                                @foreach($build_name as $name)
                                                    <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <br>
                                        <div class="col-md-5 pull-right">
                                            <button type="submit" class="btn btn-info btn-block">Add Material Supplier</button>
                                        </div>
                                </div>
                            </div>
                            <br/>
                            
                            
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>category</center></h3>                                
                        </div>
                      
                    </div>
               </div>
            </div>
    </div>
@endsection 