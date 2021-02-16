@extends('users.layouts.default')
@section('title', 'DateWise Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">SCHOOL DateWise Report</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>School DateWise Report</h2>
</div>

<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($selected_class=='0' ) $selected_class='All Class' ?>
                            <?php if($selected_term=='0' ) $selected_term='All Term' ?>
                            <?php if($selected_staff=='0' ) $selected_staff='All Staff' ?>
                        </div>
                        <div class="panel-body">
                             <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                            <div style="text-align:center;padding:10px;">
                                <h1 style="text-transform:uppercase;">{{ $school->school_name }}</h1>   
                            </div> 
                            
                            <div class="table-responsive" >
                           <table  class="table table-striped table-bordered table-hover">
                             <h3 class="panel-title"> Colleted Report Date From - <b>   {{$input['from']}}</b>  -to-  <b>  {{$input['to']}}</b>  </h3>
                             <thead>
                                <tr>
                                       <th colspan="12" ><h1 align="center">Fee Collected Details</h1></th>
                                        
                                        
                                    </tr> 
                                 <tr>
                                    <th>S.No</th>
                                    <th>Invoice ID</th>
                                    <th>Date</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Reg. No</th>
                                     <th>Roll No</th>
                                     <th>Term Type</th>
                                     <th>Fee Name</th>
                                     <th>Payment Mode</th>
                                     <th>Collected By</th>
                                     <th>Received Amount</th>
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; ?>     

                                @if($paidAmts)
                                        <tr>
                                            @foreach($paidAmts as $get)
                                           
                                            <td ><?php echo  $j++ ?></td> 
                                            <td>{{$get->invoice_id}}</td>
                                            <td>{{$get->date}}</td>
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->class}}</td>
                                            <td>{{$get->reg_no}}</td>
                                            <td>{{$get->roll_no}}</td>
                                            <td>{{$get->payment_type}}</td>
                                             <td>{{$get->fee_name}}</td>
                                             <td>{{$get->payment_mode}}</td>
                                            <td>{{$get->recived_by}}</td>
                                            <td>{{$get->amount}}</td>
                                            
                                            
                                        </tr>
                                     @endforeach

                                    <tr>
                                        <th colspan="10"></th>
                                        <th>Total</th>
                                        <th>{{$total_paidAmt}}</th>
                                    </tr>
                                @endif

                             </tbody>
                         </table>
                         </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   
    
 </div>
 @endsection
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