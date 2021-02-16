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
    <h2><span class="fa fa-arrow-circle-o-left"></span>Home Visit Summary Report</h2>
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
                            <h5>Home Visit Summary Report</h5>
                            <div class="table-responsive" >
                           <table  class="table table-striped table-bordered table-hover">
                             <h3 class="panel-title"> Report - <b>   {{$classes->class}}</b>  -  <b>  {{$section->section}}</b> - Teacher Name : <b>  {{$teacher_details->name}}</b></h3>
                             <thead>
                                
                                 <tr>
                                    <th>S.No</th>
                                    <th>Visited Date</th>
                                    <th>Student Name</th>
                                    <th>Image</th>
                                     <th>Parents Suggestion</th>
                                     <th colspan="3" >&nbsp; Points Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trouble Points Details</th>
                                    
                                     
                                     
                                     
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; ?>     

                                
                                        <tr>
                                            @foreach($getStudent as $student)
                                            @foreach($student as $get)
                                           
                                            <td ><?php echo  $j++ ?></td>
                                            <td>{{$get->created_at}}</td> 
                                            <td>{{$get->name}}</td>
                                            <td>
                                                @if($get->par_img!='')
                                                    <img src="{{url($get->par_img)}}" class="img-thumbnail" width="100px" height="100px">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{$get->par_point}}</td>
                                            
                            <td><div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover">
                                <thead>
                               
                                 <tr>
                                    <th>S.No</th>
                                    <th>Points</th>
                                     <th>Status</th>
                                     <th style="width: 5%">Reason</th>
                                     <th>Trouble Points</th>
                                     <th>Status</th>
                                     <th>Reason</th>
                                     
                                     
                                     
                                 </tr>
                             </thead>
                             
                                <tbody>
                                    <?php $k=1; ?>
                                    <tr>
                                <?php for($i = 0; $i< 10; $i++) : ?>
                                <td>{{$k++}}</td>
                                <td>{{$get->enq_point[$i]}}</td>
                                <td>{{$get->enq_staut[$i]}}</td>
                                <td width: 100px;>{{$get->enq_descr[$i]}}</td>
                                <td>{{$get->tr_point[$i]}}</td>
                                <td>{{$get->tr_staut[$i]}}</td>
                                <td >{{$get->tr_descr[$i]}}</td>
                                </tr>
                               <?php endfor ?>
                             </tbody>
                             
                             
                                            </table>

                                        </div>
                                </td>
                                
                                            
                                            
                                        </tr>
                                     @endforeach
                                     @endforeach

                                    

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