@extends('users.layouts.default')
@section('title', 'Library')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Library</li>
</ul>
@endsection
@section('contant')
    @if($msg)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ $msg}}
                    </div>
                </div>
            </div>
        @endif
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
       

@if($build_detail)
<div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('issue.material.postone')}}" enctype="multipart/form-data">
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Issue Product</strong></h3>
                            
                        </div>
                        <div class="panel-body">


                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="worktype_id">
                                                <option value="">Select Work Type</option>
                                                @foreach($build_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->work_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <div class="col-md-9">
                                           <select class="form-control linkbuildname" name="contractor_id">
                                                <option value="">Select Contractor Name</option>
                                                @foreach($build_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->contractor_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9">
                                            <input type="date" name="idate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <br/>
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
                        <select class="form-control linkbuildname" name="product_id[]">
                                                <option value="">Product Name</option>
                                                @foreach($product_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->product_name }}</option>
                                                @endforeach
                                            </select>
                        
                    </div>
                     <div class="col-md-2 ">
                         <select class="form-control linkbuildname" name="company_id[]">
                                                <option value="">Product Company</option>
                                                @foreach($product_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->product_company }}</option>
                                                @endforeach
                                            </select>
                        
                    </div>
                    
                    <div class="col-md-2 ">
                        <input type="text" name="Quantity[]" class="form-control" placeholder="Enter Quantity" required/>
                        
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
        @endif
        <!--copy of input fields group -->
    <div class="form-group fieldGroupCopy" style="display: none;">
            <div class="input-group">

                <div class="row">
                    <label class="col-md-1 control-label">.</label>
                    <div class="col-md-3 ">
                       <select class="form-control linkbuildname" name="product_id[]">
                                                <option value="">Product Name</option>
                                                @foreach($product_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->product_name }}</option>
                                                @endforeach
                                            </select>
                        
                    </div>
                     <div class="col-md-2 ">
                       <select class="form-control linkbuildname" name="company_id[]">
                                                <option value="">Product Company</option>
                                                @foreach($product_detail as $name)
                                                    <option value="{{ $name->id }}">{{ $name->product_company }}</option>
                                                @endforeach
                                            </select>
                        
                    </div>
                    
                    <div class="col-md-2 ">
                         <input type="text" name="Quantity[]" class="form-control" placeholder="Enter Quantity" required/>
                        
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