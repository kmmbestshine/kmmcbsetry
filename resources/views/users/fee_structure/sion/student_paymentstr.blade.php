@extends('users.layouts.default')
@section('title', 'Fee Structure')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Add Class Wise Fee </a></li>
        <li class="active">Add Class Wise Fee </li>
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
               <form class="form-horizontal" role="form" method="post" action="{{ route('post.classwisefee.payment') }}" > 
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Class Wise Fee </strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Session</label>
                                        <div class="col-md-9 ">
                                            <input class="form-control " type="text" name="session_id" value="{{$session->session}}" disabled>
                                            <input class="form-control " type="hidden" name="session_id" value="{{$session->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control ppaymentclass" name="class">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                </div>
            </div>      
                <div class="row">
                    <div class="col-md-5"></div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-info btn-lg">Submit </button>
                        </div>
                        <div class="col-md-2">
                                <a href="{{route('get.students.feeindex')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                    </div>
                </div>
            </div>
                </form>
            </div>
               
                
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
        <div class="panel-body">
                        <div class="panel-heading">
                            <h3 class="panel-title">Class Wise Fee </h3>
                        </div>
                                @if(!empty($getFee))
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                           
                            <tr>
                                <th>S.No</th>
                                <th>Date</th>
                                <th>Class</th>
                                <th>Payment Type</th>
                                <th>Fees Name</th>
                                <th>Amount</th>
                                <th>Delete</th> 
                            </tr>
                        
                            </thead>
                            <tbody>
                            <?php $j=1;  ?>
                            @foreach($getFee as $fee)
                             <tr>
                                <?php $row['join_date'] = $fee->created_at;
                                $nice_date = date('d-m-Y', strtotime( $row['join_date'] ));  ?>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{$nice_date}}</td>
                                    <td>{{$fee->class}}</td>
                                    <td>{{$fee->payment_type}}</td>
                                    <td>{{$fee->fees_name}}</td>
                                    <td>{{$fee->amount}}</td>
                                    <th>
                                         <form  method="get" action="{{ route('fee.sion.structure.delete') }}"  > 
                                       
                                            
                                            <input type="hidden" name="feeId" value="{{$fee->id}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                           <tbody>
                        </table>
                        @endif
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