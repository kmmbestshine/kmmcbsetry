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
    <h2><span class="fa fa-arrow-circle-o-left"></span> Fee Head</h2>
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
                    @if(count($fees)>0)
                    <div class="row"><p class="text-center">Classes : {{$classes->class}}</p></div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Fees Name</th>
                                <th>Student Type</th>
                                <th>Payment Type</th>
                                <th>Amount</th>
                                <th>No of installment</th>
                                <th>Payment Last Date</th>
                                <th>Fine Amount(Per Day)</th>                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fees as $key=>$value)
                                <tr>
                                    <td>{{$value->fees_name}}</td>
                                    <td>{{$value->student_type}}</td>
                                    <td>{{$value->payment_type}}</td>
                                    <td>{{$value->amount}}</td>
                                    <!-- changes done by Parthiban 03-10-2017 -->
                                    @if($value->payment_type == "ANNUAL")
                                        @php $explode = explode(",",$value->installment_id); @endphp
                                        <td>{{ count($explode)  }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    <td>
                                        @if(!empty($value->last_date))
                                            {{$value->last_date}}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if(!empty($value->fine))
                                            {{$value->fine}}
                                        @else
                                            -
                                        @endif                                        
                                    </td>                                    
                                    <th>
                                        <form method="post" action="{{ route('fee.structure.delete')}}">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="feeId" value="{{$value->id}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="row text-center">No Record Found</div>
                    @endif
            </div>
        </div>
    </div>
</div>

@endsection