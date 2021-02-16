@extends('users.layouts.default')
@section('title', 'Daily Home Visit')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Daily Home Visit</li>
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
                            <h3 class="panel-title">Add Daily Home Visit Form </h3>
                        </div>
                        <div class="panel-body">
                           <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                            <div class="panel-heading" align="center">
                            <h3 >{{$school->school_name}}</h3>
                        </div>
                            <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
                                <tr>
                                                <th>Students Name</th>
                                                <td>{{$students->student_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Parents Name</th>
                                                <td>{{ $students->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mobile</th>
                                                <td>{{ $students->mobile }}</td>
                                            </tr>
                                            <tr>
                                                <th>class</th>
                                                <td>{{ $class}}/{{$section }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date Time</th>
                                                <td>{{ date("d-m-Y") }}</td>
                                            </tr>
                                            <tr>
                                                <th>Teacher Name</th>
                                                <td>{{ $received_by }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $students->address}}</td>
                                            </tr>
                            </table>
                                            
                                
                               
                            
                         
                        <form method="post" action="{{route('user.homevisitaddform')}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                
                        
                        
                            
                        <div class="panel-heading">
                                <h3 class="panel-title">Daily Visit Form:</h3>
                                </div>
                                <div class="panel-body">

                                    <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
                                <tr>
                                                <th>WhatsApp Numbers of Parents</th>
                                                <td><input type="text" name="whatsapp_no" placeholder="Whats App No"></td>
                                            </tr>
                                            <tr>
                                                <th>Did you discuss about FEES?</th>
                                                <td><select name="fees">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </td>
                                            </tr>
                                            <tr>
                                                <th>CDid you Discuss about C# & NEET / JEE Results?</th>
                                                <td>
                                                <select name="c3">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                                <th>Is the student attending ONLINE CLASSES & TESTS Properly?</th>
                                                <td>
                                                    <select name="onlinetest">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Is there any NEW LKG admissions available?></th>
                                                <td>
                                                    <select name="lkgadm">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Is there any NEW STD admissions available?</th>
                                                <td>
                                                    <select name="stdadm">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Did you show & explain the ALBUM & its content?</th>
                                                <td>
                                                    <select name="album">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Remarks</th>
                                                <td>
                                                    <textarea class="form-control" name="remarks" placeholder="Remarks"></textarea>
                                                </td>
                                            </tr>
                            </table>

                               
                        </div>
                           
                       
                        </div>
                        <div>   <th><input type="hidden" name="type" value="dailyvisit" ></th>
                                <th><input type="hidden" name="studentsid" value="{{ $studentsid }}" ></th>
                                <th><input type="hidden" name="classid" value="{{ $classid }}" ></th>
                                <th><input type="hidden" name="sectionid" value="{{ $sectionid }}" ></th>
                                <th><input type="hidden" name="sectionid" value="{{ $sectionid }}" ></th>
                               <th><input type="submit"name="amt" class="btn btn-primary" value='SUBMIT' ></th>
                               <p id="msg"></p>
                        </div>
                        </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

function select_employee_designation1(value)
        {
            if(value=='Yes')
            {
                $("#designation1").show();
            }
            else
            {
                $("#designation1").hide();
                $("#designation_value1").val(value);
            }
        }

        function select_employee_designation2(value)
        {
            if(value=='No')
            {
                $("#designation2").show();
            }
            else
            {
                $("#designation2").hide();
                $("#designation_value2").val(value);
            }
        }

        function select_employee_designation3(value)
        {
            if(value=='Yes')
            {
                $("#designation3").show();
            }
            else
            {
                $("#designation3").hide();
                $("#designation_value3").val(value);
            }
        }

        function select_employee_designation4(value)
        {
            if(value=='Yes')
            {
                $("#designation4").show();
            }
            else
            {
                $("#designation4").hide();
                $("#designation_value4").val(value);
            }
        }

        function select_employee_designation5(value)
        {
            if(value=='No')
            {
                $("#designation5").show();
            }
            else
            {
                $("#designation5").hide();
                $("#designation_value5").val(value);
            }
        }

        function select_employee_designation6(value)
        {
            if(value=='Yes')
            {
                $("#designation6").show();
            }
            else
            {
                $("#designation6").hide();
                $("#designation_value6").val(value);
            }
        }


  $("#btn-mail").change(function () 
  {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});   
function check_checkboc(id)
        {
            var fee = id.split("_");
            var fee_id = fee[2];
            window.alert(fee_id);
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












