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
                                <th>Date</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Purpose</th>
                                <th>Payment Mode</th>
                                <th>Cheque/Trans No</th>
                                <th>Bank Name</th>
                                <th>Cheq Date</th>
                                <th>Amount</th>
                                <th>View</th>
                                
                                <!--<th>Edit</th>-->
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if(count($expenditurelist)>0)
                            @foreach($expenditurelist as $key => $exp)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{$exp->date}}</td>
                                    <td>{{ $exp->name }}</td>
                                    <td>{{ $exp->category }}</td>
                                    <td>{{ $exp->purpose }}</td>
                                    <td>{{$exp->payment_mode}}</td>
                                    <td>{{$exp->cheque_no}}{{$exp->transaction_no}}</td>
                                    <td>{{$exp->bank_name}}{{$exp->online_bankname}}</td>
                                    <td>{{$exp->cheque_date}}</td>
                                    <td>{{ $exp->amount }}</td>
                                    <td>
                                        <a href="{{route('viewExpense',$exp->id)}}" class="btn btn-info">View</a>
                                    </td>
                                    <!--<td>
                                        <a href="{{route('editExpense',$exp->id)}}" class="btn btn-info">Edit</a>
                                    </td>-->
                                    <td>
                                        <a href="{{route('deleteExpense',$exp->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="panel-body overflow-scroll">
                     <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                    <table class="table datatable">
                        <thead>
                            <h3 class="panel-title"><center>Deleted Expenditure Report</center></h3>
                            <tr>
                                 <th>#</th>
                                <th>Date</th>
                                <th>Name</th>
                               <th>Category</th>
                                <th>Purpose</th>
                                <th>Payment Mode</th>
                                <th>Cheque/Trans No</th>
                                <th>Bank Name</th>
                                <th>Cheq Date</th>
                                <th>Amount</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($deletedlist)>0)
                            @foreach($deletedlist as $key => $exps)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{$exps->date}}</td>
                                    <td>{{ $exps->name }}</td>
                                    <td>{{ $exps->category }}</td>
                                    <td>{{ $exps->purpose }}</td>
                                    <td>{{$exps->payment_mode}}</td>
                                    <td>{{$exps->cheque_no}}{{$exps->transaction_no}}</td>
                                    <td>{{$exps->bank_name}}{{$exps->online_bankname}}</td>
                                    <td>{{$exps->cheque_date}}</td>
                                    <td>{{ $exps->amount }}</td>
                                    <!--<td>
                                        <a href="{{route('viewExpense',$exp->id)}}" class="btn btn-info">View</a>
                                    </td>
                                    <td>
                                        <a href="{{route('editExpense',$exp->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('deleteExpense',$exp->id)}}" class="btn btn-danger">Delete</a>
                                    </td>-->
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
</div>
  

@endsection('contant')
<script type="text/javascript">

function printScreen(divID) {
    //Get the HTML of div
    var divElements = document.getElementById(divID).innerHTML;
    //Get the HTML of whole page
    var oldPage = document.body.innerHTML;
    var SchoolName = $(".school-name").attr("attr-name");
    //Reset the page's HTML with div's HTML only
    document.body.innerHTML = 
      "<html><head><title>"+SchoolName+"</title></head><body>" + 
      divElements + "</body>";

    //Print Page
    window.print();

    //Restore orignal HTML
    document.body.innerHTML = oldPage;
}
 </script>