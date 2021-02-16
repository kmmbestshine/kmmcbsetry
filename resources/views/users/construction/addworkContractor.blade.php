@extends('users.layouts.default')
@section('title', 'Add Labour')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Add Labour</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.buildingdet.labour')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Labour Name</strong></h3>
                            
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
<div class="panel-body">
    <div class="panel-heading">
        <div class="row>">
        </div>
        <div class="col-md-12">
            <div class="form-group fieldGroup">
                <div class="input-group">

                <div class="row " >
                    <label class="col-md-1 control-label">.</label>
                    <div class="col-md-2 ">
                        <input type="text" name="labour_name[]" class="form-control" placeholder="Enter Labour name" required/>
                        
                    </div>
                    <div class="col-md-2 ">
                        <input type="text" name="workerscategory[]" class="form-control" placeholder="Workers Category" required/>
                        
                    </div>
                    <div class="col-md-2 ">
                        <input type="text" name="phone_no[]" class="form-control" placeholder="Enter Phone No" required/>
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="address[]" class="form-control" placeholder="Enter Address" required/>
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
         <input type="hidden" name="school_name" class="btn btn-primary" value="{{ $schoolname->school_name }}"/>
             <br/>
            <div class="row">
                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Add Labour</button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--copy of input fields group -->
    <div class="form-group fieldGroupCopy" style="display: none;">
            <div class="input-group">

                <div class="row">
                    <label class="col-md-1 control-label">.</label>
                    <div class="col-md-2 ">
                        <input type="text" name="labour_name[]" class="form-control" placeholder="Enter Labour name" required/>
                        
                    </div>
                    <div class="col-md-2 ">
                        <input type="text" name="workerscategory[]" class="form-control" placeholder="Workers Category" required/>
                        
                    </div>
                    <div class="col-md-2 ">
                        <input type="text" name="phone_no[]" class="form-control" placeholder="Enter Phone No" required/>
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="address[]" class="form-control" placeholder="Enter Address" required/>
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