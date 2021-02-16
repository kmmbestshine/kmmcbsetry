@extends('users.layouts.default')
@section('title', 'Deduction Type')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
        <li class="active">Deduction Type</li>
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
                    <strong>Oohh!</strong> {{ Input::old('error') }}
                </div>
            </div>
        </div>
    @endif
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <strong>Deduction Type</strong>
                        </h3>
                        <div class="text-right">
                            <a href="{{route('viewPayrollIndex')}}" class="btn btn-info btn-rounded">Payroll</a>
                            &nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="panel-body">
                        {{-- <form class="form-horizontal" role="form" method="post" action="{{route('postDeduction')}}">
                        --}}
                        <form class="form-horizontal" role="form" method="post" action="{{ route('post_deduction_percentage') }}">
                            {!! csrf_field() !!}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="deduction" class="form-control" placeholder="Deduction Types">
                                    @foreach($errors->get('deduction') as $type)
                                        <div class="alert alert-danger my-alert" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button> {{ $type }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="padding-left:15px;">
                                    <input name="percentage" class="form-control" placeholder="Deduction Percentage %"
                                           onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" >
                                    @foreach($errors->get('percentage') as $percent)
                                        <div class="alert alert-danger my-alert" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button> {{ $percent }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="submit" name="submit_deduction" value="deduction" class="btn btn-block btn-info">
                                    <i class="fa fa-plus-circle fa-left" aria-hidden="true"></i>
                                    Add Deduction
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if($getDeduction)
            @if(count($getDeduction)>0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center> View Deduction Types </center></h3>
                                <ul class="panel-controls">
                                    <li>
                                        <a href="#" class="panel-collapse">
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-refresh">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-remove">
                                            <span class="fa fa-times"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Deduction Type</th>
                                        <th>Percentage%</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getDeduction as $key => $dd)
                                        <tr>
                                            <td> {{ $key+1 }}</td>
                                            <td>{{ ucwords($dd->deduction_type) }}</td>
                                            <td>{{$dd->deduction_percentage}} % </td>
                                            <td>
                                                <a href="{{route('edit_deduction', $dd->id)}}" class="btn btn-info">
                                                    <span class="fa fa-pencil fa-left"></span>
                                                    Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete_deduction', $dd->id)}}" class="btn btn-danger">
                                                    <span class="fa fa-trash fa-left"></span>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p>
                <center>
                    <h3>
                        No Datas Found !!!
                    </h3>
                </center>
                </p>
            @endif
        @endif
    </div>
@endsection