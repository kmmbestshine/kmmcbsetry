@extends('users.layouts.default')
@section('title', 'View Fee Structure')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Fee Structure</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>Fee Structure </h2>
</div>

<!-- success -->
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

<!-- error -->
@if(Input::old('error'))
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Alert!</strong> {{ Input::old('error') }}
        </div>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            
            <div class="panel-body">
                @if($msg )
            <div class="alert alert-success" style="text-align: center">
            <strong class="alert-link">Class Fees Structure Deleted Successfully !!! </strong>   
            </div>
                @endif
                    @if(!empty($fees_name))
                    <div class="row"><p class="text-center">Classes : {{$class}}</p></div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Payment Type</th>
                                <th>Fees Name</th>
                                <th>Amount</th>
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                             <?php $j=1; ?>
                           <?php for($i = 0; $i < count($fees_name); $i++) : ?>
                                <tr>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{$payment_type[$i]}}</td>
                                    <td>{{$fees_name[$i]}}</td>
                                    <td>{{$amount[$i]}}</td>
                                    <th>
                                         <form  method="get" action="{{ route('fee.sion.structure.delete') }}"  > 
                                       
                                            
                                            <input type="hidden" name="feeId" value="{{$id[$i]}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                   
                    @endif
            </div>
        </div>
    </div>
</div>

@endsection