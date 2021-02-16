@extends('users.layouts.default')
@section('title', 'Inventory-Sales List')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Inventory</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Inventory-Sales List</h2>
</div>

<div class="page-content-wrap">
    @if(\Session::has('Success-distri'))
    <div class="col-md-11 col-md-offset-1" style="text-align: center;">
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{!! \Session::get('Success-distri') !!} </strong> 
        </div>
    </div>
    @endif
    @if(\Session::has('Error'))
    <div class="col-md-11 col-md-offset-1">
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
                    <h3 class="panel-title"><center>Inventory-Sales</center></h3>
                    @if(in_array('add',$permission))
                        <div class="text-right">
                            <a href="{{route('distributereport')}}" class="btn btn-info btn-rounded">Report</a>
                            <a href="{{route('furniturelist')}}" class="btn btn-info btn-rounded">Stock List</a>
                        </div>   
                    @endif                           
                </div>
              

                <div class="panel-body overflow-scroll">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Reg-No</th>
                                <th>Stu-Name</th>
                                <th>Product-Name</th>
                                <th>Category</th>
                                <th>Sub-category</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Amount</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if(count($furniturelist)>0)
                            @foreach($furniturelist as $key => $furni)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $furni->class_name }}</td>
                                    <td>{{ $furni->section_name }}</td>
                                    <td>{{ $furni->registration_no }}</td>
                                    <td>{{ $furni->student_name }}</td>
                                    <td>{{ $furni->item_name }}</td>
                                    <td>{{ $furni->category }}</td>
                                    <td>{{ $furni->sub_category }}</td>
                                    <td>{{ $furni->quantity }}</td>
                                    <td>{{ $furni->distribute_rate }}</td>
                                    <td>{{ $furni->amount }}</td>
                                    <td>
                                        <a href="{{route('distributeview',$furni->id)}}" class="btn btn-info">View</a>
                                    </td>
                                    <td>
                                        <a href="{{route('distributeedit',$furni->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('distributedelete',$furni->id)}}" class="btn btn-danger">Delete</a>
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