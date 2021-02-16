@extends('users.layouts.default')
@section('title', 'View Inventory-Sales')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Inventory-Sales</li>
</ul>
@endsection
@section('contant')
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> Inventory-Sales Details</h2>
    </div>
 <div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel panel-info">
                    <div class="panel-heading">                                
                        <h3 class="panel-title"><center>Inventory-Sales view</center></h3>
                    </div>
                </div> 
            	<div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed">
                        <tr>
                            <th>Class</th>
                            <td>{{$distributeview->class_name}}</td>
                        </tr>
                        <tr>
                            <th>Section</th>
                            <td>{{$distributeview->section_name}}</td>
                        </tr>
                        <tr>
                            <th>Reg-No</th>
                            <td>{{$distributeview->registration_no}}</td>
                        </tr>
                        <tr>
                            <th>Student Name</th>
                            <td>{{$distributeview->student_name}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{$distributeview->category}}</td>
                        </tr>
                        <tr>
                            <th>Sub-Category</th>
                            <td>{{$distributeview->sub_category}}</td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td>{{$distributeview->item_name}}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{$distributeview->quantity}}</td>
                        </tr>
                        <tr>
                            <th>Rate</th>
                            <td>{{$distributeview->distribute_rate}}</td>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <td>{{$distributeview->amount}}</td>
                        </tr>
                        <tr>
                            <th>Available Quantity</th>
                            <td>{{$distributeview->avail_quantity}}</td>
                        </tr>
                        <tr>
                            <th>Comment</th>
                            <td>{{$distributeview->comment}}</td>
                        </tr>
                                  
                    </table> 
                    <div class="col-md-6 col-md-offset-4">
                        <div class="form-group backbtn-margin">
                            <a href="{{route('distriFurnitureList')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
            		
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection