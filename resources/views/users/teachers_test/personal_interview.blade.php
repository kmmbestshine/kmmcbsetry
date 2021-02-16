@extends('users.layouts.default')
@section('title', 'Personal Interview')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Personal Interview</li>
</ul>
@endsection
@section('contant')
        @if(\Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('success') !!} </strong> 
                </div>
            </div>
        @endif
         @if(\Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('error') !!} </strong> 
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
                            <h3 class="panel-title">Personal Interview</h3>
                            <span >
                            <a href="{{route('teachersRecruitment')}}" class="btn btn-danger" style="float:right">Back</a>
                        </span>
                        </div>
                        <div class="panel-body">
                           <div id="printDiv">
                            
                            <div class="panel-heading" align="center">
                            <h3 >{{$school->school_name}}</h3>
                        </div>
                        <form method="post" action="{{route('user.personal.interview',$biodata->id)}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                <div class="panel-heading">
                                <h3 class="panel-title">Personal Interview</h3>
                                </div>
                                
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Observations</th>
                               <th style="text-align:center">YES</th>
                               <th style="text-align:center">NO</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 2%">1</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list2[]" value="Money Minded / Greedy" > Money Minded / Greedy<br></td>
                                  
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="yes" name="list2[1][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="no" name="list2[1][]" /></td>
                                 
                                </tr>
                                <tr>
                                    <td style="width: 2%">2</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list2[]" value="Over Confidence" > Over Confidence<br></td>
                                  
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="yes" name="list2[2][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="no" name="list2[2][]" /></td>
                                 
                                </tr>
                                <tr>
                                    <td style="width: 2%">2</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list2[]" value="Decision Making" > Decision Making<br></td>
                                  
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="yes" name="list2[3][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="no" name="list2[3][]" /></td>
                                 
                                </tr>
                            
                                
                           <tbody>
                        </table>
                        
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Observations</th>
                               <th>Bad (1 Mark)</th>
                               <th>Need Imp (2 Mark)</th>
                                <th>Satisfactory (3 Mark)</th>
                                <th>Good (4 Mark)</th>
                                <th>Excellent (5 Mark)</th>
                            </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td style="width: 2%">1</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="Attitude" > Attitude<br></td>
                                  
                                  <td style="width: 5%" align="left">
                                    <input type="checkbox" class="radio" value="1" name="fooby[1][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="2" name="fooby[1][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="3" name="fooby[1][]" /></td>
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="4" name="fooby[1][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="5" name="fooby[1][]" /></td>
                                </tr>
                                <tr>
                                    <td style="width: 2%">2</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="Flexibility" > Flexibility<br></td>
                                  
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="1" name="fooby[2][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="2" name="fooby[2][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="3" name="fooby[2][]" /></td>
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="4" name="fooby[2][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="5" name="fooby[2][]" /></td>
                                </tr>
                                <tr>
                                    <td style="width: 2%">3</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="Faithfullness" > Faithfullness<br></td>
                                  
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="1" name="fooby[3][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="2" name="fooby[3][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="3" name="fooby[3][]" /></td>
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="4" name="fooby[3][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="5" name="fooby[3][]" /></td>
                                </tr>
                                <tr>
                                    <td style="width: 2%">4</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="Dedication" > Dedication<br></td>
                                  
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="1" name="fooby[4][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="2" name="fooby[4][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="3" name="fooby[4][]" /></td>
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="4" name="fooby[4][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="5" name="fooby[4][]" /></td>
                                </tr>
                                <tr>
                                    <td style="width: 2%">5</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="Readyness" > Readiness<br></td>
                                  
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="1" name="fooby[5][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="2" name="fooby[5][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="3" name="fooby[5][]" /></td>
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="4" name="fooby[5][]" /></td>
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="5" name="fooby[5][]" /></td>
                                </tr>
                            
                           <tbody>
                        </table>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
// the selector will match all input controls of type :checkbox
// and attach a click event handler 
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

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












