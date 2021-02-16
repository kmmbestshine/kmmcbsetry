@extends('users.layouts.default')
@section('title', 'Add Payment')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Add Payment</li>
</ul>
@endsection
@section('contant')
    @if($msg)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ $msg }}
                    </div>
                </div>
            </div>
        @endif
    @if(Input::old('success'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ Input::old('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if(Input::old('error'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh Snap!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
       <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Payment</h3>
                        </div>
                        <div class="panel-body">
                           <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                            <div class="panel-heading" align="center">
                            <h3 >{{$school->school_name}}</h3>
                        </div>
                            <table>
                            <tr>
                                <td ><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Name : {{$single_student->name}} </b></h5></td>
                               <tr> <td ><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Contractor Name : {{$contractor_name}}</b></h5></td></tr>

                            </tr>
                        </table>  
                        <form method="post" action="{{route('user.checkboxamt.construction')}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                <div class="panel-heading">
                                <h3 class="panel-title">Add Payment</h3>
                                </div>
                            @if(!empty($contractor_name))
                            <table class="table table-striped table-bordered table-hover">
                            <thead>

                                <tr>
                                <td ><h5><b>Payment Date :  </b></h5></td> 
                                <td ><h5><b> <input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}" required> </b></h5></td> 
                            </tr>
                            <tr>
                               <th>S.No</th>
                               <!--<th>Date</th>-->
                                <th>Contractor name</th>
                                <th>Amount</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1;  ?>
                           
                            <tr>
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                               <!-- <td style="width: 5%"><input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}" > <br></td>-->
                                <td style="width: 25%"><div class="input-field"><input type="checkbox" name="contractor_name" value="{{$contractor_name}}"  > {{ $contractor_name }} <span class="fee-format"></span><br></div></td>
                                <td style="width: 10%"><input type="text" name="con_checkboxamt" value="" > <br></td>
                                
                            </tr>
                               
                           <tbody>
                        </table>
                        @endif
                        
                        @if(!empty($labour_name))
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <!--<th>Date</th>-->
                                <th>Labour name</th>
                                 <th>Type of Workers</th>
                                <th>Amount</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1;  ?>
                            <?php for($i = 0; $i<count($labour_name); $i++) : ?>
                            <tr>
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                               <!--<td style="width: 5%"><input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}" > <br></td>-->
                                <td style="width: 25%"><div class="input-field"><input type="checkbox" name="labour_id[]" value="{{$labour_id[$i]}}"  > {{ $labour_name[$i] }} <span class="fee-format"></span><br></div></td>
                                <td style="width: 25%"><div class="input-field"><input type="hidden" name="workers_category[]" value="{{$workers_category[$i]}}"  > {{ $workers_category[$i] }} <span class="fee-format"></span><br></div></td>
                                <td style="width: 10%"><input type="text" name="checkboxamt[]" value="" > <br></td>
                                
                            </tr>
                                <?php endfor ?>
                               <input type="hidden" class="form-control" name="work_nameid" value="{{$work_nameid}}" >
                           <tbody>
                        </table>
                        @endif
                        </div>
                        <div> 
                               <th><input type="submit"name="amt" class="btn btn-primary" value='SUBMIT' ></th>
                        </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
<script type="text/javascript">
  $("#btn-mail").change(function () 
  {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});   
function check_checkboc(id)
        {
            var fee = id.split("_");
            var fee_id = fee[2];
            if($('#select_all_'+fee_id).prop("checked")== true)
            {
                $('#select_all_'+fee_id).prop("checked", true);
            }
            else
            {
                $('#select_all_'+fee_id).prop("checked", false);
            }
        }  
</script>
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
    


@endsection