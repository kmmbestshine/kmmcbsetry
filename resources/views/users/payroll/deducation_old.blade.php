@extends('users.layouts.default')
@section('title', 'Deduction Type')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li><a href="#">Payroll</a></li>
        <li class="active">Deduction Type</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Deduction Type</h2>
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
                        <strong>Oohh!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('postDeduction')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="deduction" class="form-control" placeholder="Deduction Types">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="padding-left:15px;">
                                    <input type="number" min="1" name="percentage" class="form-control" placeholder="Deduction Percentage %">
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-block btn-info">Add Deduction</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Deduction</center></h3>
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
                                        <th>Delete</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($deductions as $dd)
                                   <tr>
                                       <td></td>
                                       <td>{{$dd->deduction_type}}</td>
                                       <td>{{$dd->percentage}}</td>
                                       <td><a href="{{route('deleteDeduction', $dd->id)}}" class="btn btn-danger">Delete</a></td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection