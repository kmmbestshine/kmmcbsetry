@extends('users.layouts.default')
@section('title', 'View Expenditure')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Employee</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Expenditure Details</h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">                                
                <h3 class="panel-title"><center>View Expenditure</center></h3>
            </div>
        
        	<div class="panel-body">
                <table class="table table-bordered table-striped table-condensed">
                    <tr>
                        <th>Name</th>
                        <td>{{$expenditurelist->name}}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{date('d-m-Y',strtotime($expenditurelist->date))}}</td>
                    </tr>
                    <tr>
                        <th>Purpose</th>
                        <td>{{$expenditurelist->purpose}}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{$expenditurelist->category}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$expenditurelist->descrption}}</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{$expenditurelist->quantity}}</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>{{$expenditurelist->comment}}</td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>{{$expenditurelist->amount}}</td>
                    </tr>
                    <tr>
                        <th>Approved By</th>
                        <td>{{$expenditurelist->approved_by}}</td>
                    </tr>
                    <!-- changes done by parthiban version v3 -->
                    <tr>
                        <th>Given By</th>
                        <td>{{$expenditurelist->given_by}}</td>
                    </tr>                   
                </table> 
                <div class="col-md-6 col-md-offset-4">
                    <div class="form-group backbtn-margin">
                        <a href="{{route('user.expList')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
        		
        	</div>
        </div>
    </div>
</div>
@endsection