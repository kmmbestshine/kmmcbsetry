@extends('users.layouts.default')
@section('title', 'Expenditure List')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Employee</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Expenditure List</h2>
</div>

<div class="page-content-wrap">
    @if(\Session::has('Success-exp'))
    <div class="col-md-12" style="text-align: center;">
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{!! \Session::get('Success-exp') !!} </strong> 
        </div>
    </div>
    @endif
    @if(\Session::has('Error'))
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{!! \Session::get('Error') !!} </strong> 
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">                                
                    <h3 class="panel-title"><center>All Expenditure</center></h3>
                    @if(in_array('add',$permission))
                    <div class="text-right">
                        <a href="{{route('expensesreport')}}" class="btn btn-info btn-rounded">Report</a>
                        <a href="{{route('user.expend')}}" class="btn btn-info btn-rounded">Add</a>
                    </div>   
                    @endif                           
                </div>
                <div class="panel-body overflow-scroll">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Purpose</th>
                                <th>Amount</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if(count($expenditurelist)>0)
                            @foreach($expenditurelist as $key => $exp)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $exp->name }}</td>
                                    <td>{{ $exp->category }}</td>
                                    <td>{{ $exp->purpose }}</td>
                                    <td>{{ $exp->amount }}</td>
                                    <td>
                                        <a href="{{route('viewExpense',$exp->id)}}" class="btn btn-primary">View</a>
                                    </td>
                                    <td>
                                        <a href="{{route('editExpense',$exp->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('deleteExpense',$exp->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
       </div>
    </div>
</div>
  

@endsection('contant')