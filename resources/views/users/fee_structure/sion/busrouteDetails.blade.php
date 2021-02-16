@extends('users.layouts.default')
@section('title', 'Bus Stop Wise Fee')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Bus Stop Wise Fee </li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Bus No : {{$getbus->bus_no}}</h2>
        </div>
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
                        <strong>Well done!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif


    <div class="panel-body">
<form class="form-horizontal" role="form" method="post" action="{{ route('post.busfee.details') }}">
    {!! csrf_field() !!}
               <?php $j=1; ?>         
<div class="panel-body">
    <div class="panel-heading"> 
        <div class="form-group fieldGroup">
            <div class="input-group">
                <div class="row">
                    <label class="col-md-1 control-label"></label>
                    
                    <div class="col-md-3">
                       <select class="form-control " name="routename[]" >
                                                <option value="">Select Route</option>
                                                @foreach($routename as $key => $route)
                                                    <option value="{{ $route }}">{{ $route }}</option>
                                                @endforeach
                                            </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="boardpoint[]" class="form-control" placeholder="Boarding Point" required/>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="amt[]" class="form-control" placeholder="Enter Amount" required/>
                    </div>
                        <div class="input-group-addon"> 
                            <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true" ></span> Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <input type="hidden" name="busid" class="btn btn-primary" value="{{ $busid}}"/>
                    
                    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
    </div>
</div>
</form>
</div>
  

</div>
    <!--copy of input fields group -->
 <div class="form-group fieldGroupCopy" style="display: none;">
            <div class="input-group">
                <div class="row">
                    <label class="col-md-1 control-label"></label>
                     
                    <div class="col-md-3">
                        <select class="form-control " name="routename[]" >
                                                <option value="">Select Route</option>
                                                @foreach($routename as $key => $route)
                                                    <option value="{{ $route }}">{{ $route }}</option>
                                                @endforeach
                                            </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="boardpoint[]" class="form-control" placeholder="Boarding Point" required/>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="amt[]" class="form-control" placeholder="Enter Amount" required/>
                    </div>
                    
                        <div class="input-group-addon"> 
                             <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></a>
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
    var maxGroup = 15;
    
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
