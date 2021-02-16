@extends('users.layouts.default')
@section('title', 'Expenditure Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Expenditure Report</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>Expenditure Report</h2>
</div>

<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                            <div style="text-align:center;padding:10px;">
                                <h1 style="text-transform:uppercase;">{{ $schoolname->school_name }}</h1>   
                            </div> 
                            <div class="table-responsive" >
                           <table  class="table table-striped table-bordered table-hover">
                             <h4 class="panel-title">  <b> {{$reporthead}}</b> </h4>
                             <thead>
                                
                                 <tr>
                                    <th>S.No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                     <th>Category</th>
                                     <th>Payment Mode</th>
                                     <th>Cheque / Trans No</th>
                                    <th>Cheque / Trans Date</th>
                                    <th>Bank Name</th>
                                     <th>Purpose</th>
                                     <th>Quantity</th>
                                     <th>Description</th>
                                     <th>Comment</th>
                                     <th>Approved-By</th>
                                      <th>Given-By</th>
                                      <th>Amount</th>
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; ?>     

                                @if($expenditureList)
                                        <tr>
                                            @foreach($expenditureList as $get)
                                            <td ><?php echo  $j++ ?></td> 
                                            <td>{{$get->date}}</td>
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->category}}</td>
                                            <td>{{$get->payment_mode}}</td>
                                            <td>{{$get->cheque_no}}{{$transaction_no}}</td>
                                            <td>{{$get->cheque_date}}</td>
                                            <td>{{$get->bank_name}}{{$online_bankname}}</td>
                                            <td>{{$get->purpose}}</td>
                                            <td>{{$get->quantity}}</td>
                                            <td>{{$get->descrption}}</td>
                                            <td>{{$get->comment}}</td>
                                            <td >{{$get->approved_by}}</td>
                                            <td>{{$get->given_by}}</td>
                                            <td>{{$get->amount}}</td>
                                        </tr>
                                     @endforeach

                                    <tr>
                                        <th colspan="13"></th>
                                        <th>Total</th>
                                        <th>{{$totamt}}</th>
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