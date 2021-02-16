@extends('users.layouts.default')
@section('title', 'Fee Structure')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Fee Structure </li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Fee Structure </h2>
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
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                @if($classData )
                    <h3 class="panel-title"> Fee Structure Of <strong> {{ $classData->class }} </strong> Class ( <strong>{{ $sessionData->session }}</strong> )Of Session</h3>
                @endif
            </div>
        </div>
                @if($msg )
            <div class="alert alert-success" style="text-align: center">
            <strong></strong><a href="{{route('get.students.payments')}}" class="alert-link">Class Fees Structure Created Successfully !!! <br>Click here!  Return Back Again Insert
            </div>
                @endif
    @if($classData )
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h3 class="panel-title">Payment Details</h3>
                    </div>
                        <div class="panel-body">
<form class="form-horizontal" role="form" method="post" action="{{ route('post.classwisefee.payment') }}">
    {!! csrf_field() !!}
<div class="panel-body">
    <div class="panel-heading"> 
        <div class="form-group fieldGroup">
            <div class="input-group">
                <div class="row">
                    <label class="col-md-1 control-label">.</label>
                     <div class="col-md-3">
                        <select class="form-control" name="term_type[]" required>
                            <option value="">Select Term</option>
                            <option value="Term I">Term I</option>
                            <option value="Term II">Term II</option>
                            <option value="Term III">Term III</option>                                 
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="name[]" class="form-control" placeholder="Enter Fees name" required/>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="amt[]" class="form-control" placeholder="Enter Amt" required/>
                    </div>
                            <div class="input-group-addon"> 
                            <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true" ></span> Add</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <input type="hidden" name="class" class="btn btn-primary" value="{{ $classData->class }}"/>
                    <input type="hidden" name="session" class="btn btn-primary" value="{{ $sessionData->session }}"/>
                    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
</div>
@endif
 <!--copy of input fields group -->
        <div class="form-group fieldGroupCopy" style="display: none;">
            <div class="input-group">
                <div class="row">
                    <label class="col-md-1 control-label">.</label>
                    <div class="col-md-3">
                        <select class="form-control" name="term_type[]" required>
                            <option value="">Select Term</option>
                            <option value="Term I">Term I</option>
                            <option value="Term II">Term II</option>
                            <option value="Term III">Term III</option>                                 
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="name[]" class="form-control" placeholder="Enter Fees name" required/>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="amt[]" class="form-control" placeholder="Enter Amt" required/>
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
