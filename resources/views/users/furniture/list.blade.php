@extends('users.layouts.default')
@section('title', 'Inventory List')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Inventory</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Inventory-Purchase List</h2>
</div>

<div class="page-content-wrap">
    @if(\Session::has('Success-fur'))
    <div class="col-md-11 col-md-offset-1" style="text-align: center;">
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{!! \Session::get('Success-fur') !!} </strong> 
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
                    <h3 class="panel-title"><center>All Inventory</center></h3>
                    @if(in_array('add',$permission))
                        <div class="text-right">
                            <a href="{{route('furnitureReport')}}" class="btn btn-info btn-rounded">Report</a>
                            <a href="{{route('furniture')}}" class="btn btn-info btn-rounded">Add</a>
                            <a href="{{route('distriFurnitureList')}}" class="btn btn-info btn-rounded">Sales List</a>
                        </div>   
                    @endif                           
                </div>
                <div class="panel-body overflow-scroll">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Sub-category</th>
                                <th>Quantity</th>
                                <th>Available</th>
                                <th>Rate</th>
                                <th>Amount</th>
                                <th>View</th>
                                <th>Sales</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if(count($furniturelist)>0)
                            @foreach($furniturelist as $key => $furni)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $furni->type }}</td>
                                    <td>{{ $furni->item_name }}</td>
                                    <td>{{ $furni->category }}</td>
                                    <td>{{ $furni->sub_category }}</td>
                                    <td>{{ $furni->quantity }}</td>
                                    <td>{{ $furni->avail_quantity }}</td>
                                    <td>{{ $furni->purchaserate }}</td>
                                    <td>{{ $furni->amount }}</td>
                                    <td>
                                        <a href="{{route('viewFurniture',$furni->id)}}" class="btn btn-info">View</a>
                                    </td>
                                    <td>
                                        @if($furni->type=='Distributable')
                                        <a href="{{route('distribute',$furni->id)}}" class="btn btn-info">Sales</a>
                                        @else
                                            <a href="" class="btn btn-danger">Sold-Out</a>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{route('editFurniture',$furni->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('deleteFurniture',$furni->id)}}" class="btn btn-danger">Delete</a>
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