@extends('users.layouts.default')
@section('title', 'Library')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Library</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.purchase.create')}}" enctype="multipart/form-data">
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Books</strong></h3>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Receipt No</label>
                                        <div class="col-md-9">
                                            <input type="text" name="recpt_no" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> Building Name</label>
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="build_id">
                                                <option value="">Select Building Name</option>
                                                @foreach($build_name as $name)
                                                    <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                @endforeach
                                            </select>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Supplier Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control linkbuildname" name="supplier_id">
                                                <option value="">Select Supplier Name</option>
                                                @foreach($supplier_name as $name)
                                                    <option value="{{ $name->id }}">{{ $name->ventor_name }}</option>
                                                @endforeach
                                            </select>
                                       
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Purchase Date</label>
                                        <div class="col-md-9">
                                            <input type="date" name="pdate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>
                             
                            
                            <br>
<div class="panel-body">
    <div class="panel-heading">
        <div class="row>">
        </div>
        <div class="col-md-12">
            <div class="form-group fieldGroup">
                <div class="input-group">

                <div class="row " >
                    <label class="col-md-1 control-label">.</label>
                    <div class="col-md-3 ">
                        <input type="text" name="product_name[]" class="form-control" placeholder="Enter Product name" required/>
                        
                    </div>
                     <div class="col-md-2 ">
                        <input type="text" name="company_name[]" class="form-control" placeholder="Enter Product Company" required/>
                        
                    </div>
                    
                    <div class="col-md-2 ">
                        <input type="text" name="Quantity[]" class="form-control" placeholder="Enter Quantity" required/>
                        
                    </div>
                    <div class="col-md-2 ">
                        <input type="text" name="price[]" class="form-control" placeholder="Enter Price" required/>
                    </div>
                   
                    <div class="col-md-2">
                    <div class="input-group-addon"> 
                    <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true" ></span> Add</a>
                    </div>
                </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="col-md-5 pull-right">
                                            <button type="submit" class="btn btn-info btn-block">Add Purchase</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        <!--copy of input fields group -->
    <div class="form-group fieldGroupCopy" style="display: none;">
            <div class="input-group">

                <div class="row">
                    <label class="col-md-1 control-label">.</label>
                    <div class="col-md-3 ">
                       <input type="text" name="product_name[]" class="form-control" placeholder="Enter Product name" required/>
                        
                    </div>
                     <div class="col-md-2 ">
                        <input type="text" name="company_name[]" class="form-control" placeholder="Enter Product Company" required/>
                        
                    </div>
                    
                    <div class="col-md-2 ">
                         <input type="text" name="Quantity[]" class="form-control" placeholder="Enter Quantity" required/>
                        
                    </div>
                    <div class="col-md-2 ">
                        <input type="text" name="price[]" class="form-control" placeholder="Enter Price" required/>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group-addon"> 
                            <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Bootstrap css library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap js library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script >
$(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});


</script>
@endsection