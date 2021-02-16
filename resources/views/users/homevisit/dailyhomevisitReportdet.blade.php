@extends('users.layouts.default')
@section('title', 'Summary Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Home Visit Summary Report</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>Cumulative Students Report Of Daily Visits</h2>
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
                            <h3>Cumulative Students Report Of Daily Visits</h3>
                            @foreach($getStudent as $key => $student)
                            <div class="table-responsive" >
                                <p><h5 class="panel-title"> Name Of The Teacher -<b>{{$teachers_name[$key]}}</b>  </h5> </p>
                           <table  class="table table-striped table-bordered table-hover">
                             
                             <thead>
                                
                                 <tr>
                                    <th>S.No</th>
                                    <th>Date</th>
                                    <th>Student Name</th>
                                    <th>Father -Mother Name</th>
                                     <th>Whatsapp No</th>
                                     <th>Address</th>
                                     <th>Fees</th>
                                     <th>C3</th>
                                     <th>Online Test</th>
                                     <th>LKG ADM</th>
                                     <th>STD ADM</th>
                                     <th>Album</th>
                                     <th>Remarks</th>
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; ?>     

                                
                                        <tr>
                                            
                                            @foreach($student as $get)
                                           
                                            <td ><?php echo  $j++ ?></td>
                                            <td>{{$get->date}}</td> 
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->parent_name}}<br>{{$get->mother}}</td>
                                            <td >{{$get->whatsapp_no}}</td>
                                            <td>{{$get->address}}</td> 
                                            <td>{{$get->fees}}</td>
                                            <td>{{$get->c3}}</td>
                                            <td >{{$get->onlinetest}}</td>
                                            <td>{{$get->lkgadm}}</td> 
                                            <td>{{$get->stdadm}}</td>
                                            <td>{{$get->album}}</td>
                                            <td>{{$get->remarks}}</td> 
                            
                                        </tr>
                                     @endforeach
                             </tbody>
                         </table>
                         </div>
                         @endforeach
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