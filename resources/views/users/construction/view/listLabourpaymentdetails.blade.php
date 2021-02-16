@extends('users.layouts.default')
@section('title', 'View Payment')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Payment</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>View Payment </h2>
</div>

<!-- success -->
@if($msg )
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Well done!</strong> {{ $msg  }}
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
                    @if(!empty($contractor_id))
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Work Date</th>
                                <th>Contractor Name</th>
                               <th>Labour Name</th>
                               <th>Labour Category</th>
                               <th>Phone No</th>
                                <th>Amount</th> 
                                <th>Contractor Amount</th> 
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                             <?php $j=1; ?>
                           <?php for($i = 0; $i < count($contractor_id); $i++) : ?>
                                <tr>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{$payment_date[$i]}}</td>
                                    <td>{{$contractor_name}}</td>
                                    <td>{{$labour_name[$i]}}</td>
                                    <td>{{$user_type[$i]}}</td>
                                    <td>{{$phone_no[$i]}}</td>
                                    <td>{{$labour_amt[$i]}}</td>
                                    <td>{{$contractor_amt[$i]}}</td>
                                    <th>
                                         <form  method="get" action="{{ route('labourpayment.construction.delete') }}"  > 
                                       {!! csrf_field() !!}
                                            
                                            <input type="hidden" name="ids" value="{{$ids[$i]}}"/>
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