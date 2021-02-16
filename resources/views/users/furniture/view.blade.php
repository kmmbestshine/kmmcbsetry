@extends('users.layouts.default')
@section('title', 'View Furnitrue')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Inventory</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Inventory List</h2>
</div>
 <div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> 
                    <h3 class="panel-title"><center>Inventory-Purchase View</center></h3>
                </div>
            	<div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed">
                        <tr>
                            <th>Category-type</th>
                            <td>{{$furnitureDetails->type}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{$furnitureDetails->category}}</td>
                        </tr>
                        <tr>
                            <th>Sub-Category</th>
                            <td>{{$furnitureDetails->sub_category}}</td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td>{{$furnitureDetails->item_name}}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{$furnitureDetails->quantity}}</td>
                        </tr>
                        <tr>
                            <th>Purchase Rate</th>
                            <td>{{$furnitureDetails->purchaserate}}</td>
                        </tr>
                        <tr>
                            <th>Distribute Rate</th>
                            <td>{{$furnitureDetails->distribute_rate}}</td>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <td>{{$furnitureDetails->amount}}</td>
                        </tr>
                        <tr>
                            <th>Comment</th>
                            <td>{{$furnitureDetails->comment}}</td>
                        </tr>
                                  
                    </table> 
                    <div class="col-md-6 col-md-offset-4">
                        <div class="form-group backbtn-margin">
                            <a href="{{route('furniturelist')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
            		
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection