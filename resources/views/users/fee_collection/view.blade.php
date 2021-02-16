@extends('users.layouts.default')
@section('title', 'View Fee')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Fee</li>
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
                <form class="form-horizontal" role="form" method="get">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Get Registration No</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.feeCollection')}}" class="btn btn-info btn-rounded">Add</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="reg_no" class="form-control" placeholder="Enter Registration No">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-block">Get Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Collection</strong></h3>
                                    <div class="pull-right">
                                        <a href="{{route('feeStatement', $student->registration_no)}}" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
                                    </div>
                                </div>
                                <div class="panel-body">           
                                <table class="table">
                                    <tr class="active">
                                        <th>Name</th>
                                        <td>{{$student->name}}</td>
                                        <th>Class</th>
                                        <td>{{$student->class}}</td>
                                        <th>Annual Fees</th>
                                        <td>{{$total_amount}}</td>
                                    </tr>
                                </table>
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pay Type</th>
                                        <th>Month</th>
                                        <th>Date</th>
                                        <th>Discount</th>
                                        <th>Pay Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($fees)>0 and $fees)
                                        @foreach($fees as $key => $fee)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $fee->pay_type }}</td>
                                                @if($fee->months == 'null')
                                                <td>...</td>
                                                @else
                                                <td>{{ $fee->months }}</td>
                                                @endif
                                                <td>{{ $fee->date }}</td>
                                                <td>{{ $fee->discount }}</td>
                                                <td>{{ $fee->pay_amount }}</td>
                                            </tr>
                                        @endforeach
                                            <tr>

                                            <th colspan="4">Total Paid Amount</th>
                                            <th>{{$total_discount}}</th>
                                            <th>{{$total_pay}}</th>
                                            </tr>
                                            <tr>
                                                <th colspan="5">Balance</th>
                                                <th>{{$balance}}</th>
                                            </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection