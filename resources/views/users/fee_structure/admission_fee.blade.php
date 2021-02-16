@extends('users.layouts.default')
@section('title', 'Admission Fee')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Admission Fee</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Admission Fee</h2>
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
            <strong>Oh Snap!</strong> {{ Input::old('error') }}
        </div>
    </div>
</div>
@endif
<div class="page-content-wrap">

           <!--  <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <a href="" class="btn btn-info btn-rounded">Fee Head</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-success btn-rounded">Admission Fee</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-warning btn-rounded">Fee Amount</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-danger btn-rounded">Transport Fee</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-default btn-rounded">Other Fee</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-primary btn-rounded">Print Receipt</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-info btn-rounded">Pre Pay Slip</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        -->
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Fee Form</h3>
                            <div class="text-right">
                                <a href="{{route('registration')}}" class="btn btn-info btn-rounded">Registration Fee</a>
                                <a href="{{route('security')}}" class="btn btn-info btn-rounded">Security Fee</a>
                                <a href="{{route('fee.structure')}}" class="btn btn-info btn-rounded">Fee Head Type</a>
                                    <a href="{{route('fee_head.amount')}}" class="btn btn-info btn-rounded">Fee Head Amount</a>
                                    <a href="{{route('fee.admission')}}" class="btn btn-info btn-rounded">Admission Amount</a>
                                   
                            </div> 
                        </div>
                        <div class="panel-body">
                            <div class="row">      
                                <div class="col-md-6">
                                    <form action="{{route('post.admission')}}" method="post">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <select class="form-control" name="class" required>
                                                <option>Choose Class</option>
                                                @foreach($classes as $class)
                                                <option value="{{$class->id}}">{{$class->class}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" required name="amount" placeholder="Enter Admission Amount">
                                        </div>
                                        <input type="submit" class="btn btn-primary pull-right" value="Submit">
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Class</th>
                                                <th>Amount</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($fields)
                                            @foreach($fields as $key=>$field)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$field->class}}</td>
                                                <td>{{$field->amount}}</td>
                                                <td><a href="{{route('delete.feeAdmission', $field->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    {!! $fields->render() !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection