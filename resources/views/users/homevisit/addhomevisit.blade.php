@extends('users.layouts.default')
@section('title', 'Home Visit')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Home Visit</li>
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
                            <h3 class="panel-title">Add Home Visit Form Details</h3>
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
                            
                            <body>
                                
                                <tr><td ><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Students Name      : {{$students->student_name}} </b></h5></td></tr>
                                <tr><td ><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Parents Name       : {{$students->name}} </b></h5></td></tr>
                                <tr><td ><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Mobile             : {{$students->mobile}} </b></h5></td></tr>
                                <tr> <td><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;class              : {{$class}}/{{$section}}</b></h5></td></tr>
                                <tr><td><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Date Time           : {{date("d-m-Y")}}  </b></h5></td></tr>
                                <tr><td><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Teacher Name        : {{$received_by}}</b></h5></td></tr>
                               <tr> <td style="width:103px;word-wrap:break-word;"><h5><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Address : {{$students->address}}</b></h5></td></tr>
                               
                            </body>
                        </table>  
                        <form method="post" action="{{route('user.homevisitaddform')}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                <div class="panel-heading">
                                <h3 class="panel-title">Enquiry Points:</h3>
                                </div>
                        
                        
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Points</th>
                                <th>Yes / No</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1; $k=1;$m=4; ?>
                           
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Is the student obedient at home?" > Is the student obedient at home?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type21[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Is he/she using mobile phones or social media?" > Is he/she using mobile phones or social media?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type21[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Does he/she speak in English with his/her siblings?" > Does he/she speak in English with his/her siblings?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type21[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                             <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Are the parents aware of coming year changes such as fees, uniform, books etc?" > Are the parents aware of coming year changes such as fees, uniform, books etc?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type21[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                                <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Is there any LKG students for the coming academic year?" > Is there any LKG students for the coming academic year?<br></td>
                                <td style="width: 25%"><div class="input-field">
                               <div class="col-md-9">
                                            <select name="select_type1" class="form-control"
                                                    onchange="return select_employee_designation1(this.value)">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                
                                            </select>
                                        </div>
                                        <br>
                                         <br>
                                          <br>
                                        <div class="col-md-12" style="display:none" id="designation1">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <input  id="designation_value1" name="designation1" class="form-control"><br>PleaseType Child Details
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Is the student living with his/her parents? If not with whom?" > Is the student living with his/her parents? If not with whom?<br></td>
                                <td style="width: 25%"><div class="input-field">
                               <div class="col-md-9">
                                            <select name="select_type2" class="form-control"
                                                    onchange="return select_employee_designation2(this.value)">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                
                                            </select>
                                        </div>
                                        <br>
                                         <br>
                                          <br>
                                        <div class="col-md-12" style="display:none" id="designation2">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <input  id="designation_value2" name="designation2" class="form-control"><br>Please Type Guardian details
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Any medical issues that need to be taken care while in the school?" > Any medical issues that need to be taken care while in the school?<br></td>
                                <td style="width: 25%"><div class="input-field">
                               <div class="col-md-9">
                                            <select name="select_type3" class="form-control"
                                                    onchange="return select_employee_designation3(this.value)">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                              </select>  
                                        </div>
                                        <br>
                                         <br>
                                          <br>
                                        <div class="col-md-12" style="display:none" id="designation3">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <input  id="designation_value3" name="designation3" class="form-control"><br>Please Type reason
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="How do the parents rate our school?" > How do the parents rate our school?<br></td>
                                <td style="width: 25%"><div class="input-field">
                               <div class="col-md-9">
                                            <select name="select_type4" class="form-control"
                                                    onchange="return select_employee_designation4(this.value)">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                
                                            </select>
                                        </div>
                                        <br>
                                         <br>
                                          <br>
                                        <div class="col-md-12" style="display:none" id="designation4">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <input  id="designation_value4" name="designation4" class="form-control"><br>Please Type the Rate :<br>Rate 1 Means Good<br>
                                    Rate 2 Means Beter <br> Rate 3 Means Best <br> Rate 4 Means Excellent
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Are Parents happy about diet plan?" > Are Parents happy about diet plan?<br></td>
                                <td style="width: 25%"><div class="input-field">
                               <div class="col-md-9">
                                            <select name="select_type5" class="form-control"
                                                    onchange="return select_employee_designation5(this.value)">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                
                                                
                                            </select>
                                        </div>
                                        <br>
                                         <br>
                                          <br>
                                        <div class="col-md-12" style="display:none" id="designation5">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <input  id="designation_value5" name="designation5" class="form-control"><br>Please Type Reason
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="points[]" value="Is anyone studying in other schools?" > Is anyone studying in other schools?<br></td>
                                <td style="width: 25%"><div class="input-field">
                               <div class="col-md-9">
                                            <select name="select_type6" class="form-control"
                                                    onchange="return select_employee_designation6(this.value)">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                
                                            </select>
                                        </div>
                                        <br>
                                         <br>
                                          <br>
                                        <div class="col-md-12" style="display:none" id="designation6">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <input  id="designation_value6" name="designation6" class="form-control"><br>Please Type Name and School details
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                            

                           <tbody>
                        </table>
                        <div class="panel-heading">
                                <h3 class="panel-title">Trouble given by students at home:</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Points</th>
                                <th>Yes / No</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1; $k=1;$m=4; ?>
                           
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Students are Watching TV?" > Students are Watching TV?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="They are not eating properly?" > They are not eating properly?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Students are not doing the work given by parents?" > Students are not doing the work given by parents?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                             <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Students are not obeying and respecting the elders?" > Students are not obeying and respecting the elders?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Students are not reading during holiday?" > Students are not reading during holiday?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Students are speaking too much of words?" > Students are speaking too much of words?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="when there is holiday children are not available at home?" > when there is holiday children are not available at home?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                             <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Students are not maintaining their personal hygiene like brushing , bathing?" > Students are not maintaining their personal hygiene like brushing , bathing?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Students are riding vehicles like bicycle and bikes?" > Students are riding vehicles like bicycle and bikes?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                             <tr>
                                 <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trou_points[]" value="Childrens are eating more junk food?" > Childrens are eating more junk food?<br></td>
                                <td style="width: 25%">
                                            <select name="select_type22[]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                </td>
                            </tr>
                            

                           <tbody>
                        </table>
                                <br>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Remarks</label>
                                        <div class="col-md-9">
                                           <textarea class="form-control" name="trouble" placeholder="Remarks"></textarea>
                                            @foreach($errors->get('description') as $description)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $description }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <!-- <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Points</th>
                                <th>Yes / No</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1; $L=1; ?>
                            <?php for($i = 0; $i<7; $i++) : ?>
                            <tr>
                                
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="trouble[]" value="{{ $troublelist[$i] }}" > {{$troublelist[$i]}}<br></td>
                                <td style="width: 25%"><div class="input-field"><input type="checkbox" name="trou_yeslist[]" value="{{ $yeslist[$i] }}{{$L++ }}"  > {{$yeslist[$i]}} <span class="fee-format"></span><br></div></td>
                                
                            
                            </tr>
                                
                                <?php endfor ?>
                               
                           <tbody>
                        </table>-->
                        <div class="panel-heading">
                                <h3 class="panel-title">Parents Suggestions:</h3>
                                </div>
                        <div class="panel-body">
                                <br>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-9">
                                           <textarea class="form-control" name="sugestion" placeholder="Decription"></textarea>
                                            @foreach($errors->get('description') as $description)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $description }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <br>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Parents Image</label>
                                        <div class="col-md-9">
                                           <input type="file" name="image" class="form-control">
                                            @foreach($errors->get('image') as $image)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $image }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                            <!--<table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Points</th>
                                <th>Yes / No</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            <?php $j=1; $m=1;  ?>
                            <?php for($i = 0; $i<7; $i++) : ?>
                            <tr>
                                
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                                <td style="width: 50%"><input type="hidden" name="sugest[]" value="{{ $parentslist[$i] }}" > {{$parentslist[$i]}}<br></td>
                                <td style="width: 25%"><div class="input-field"><input type="checkbox" name="suggestionlist[]" value="{{ $yeslist[$i] }}{{$m++ }}" > {{$yeslist[$i]}} <span class="fee-format"></span><br></div></td>
                                
                            
                            </tr>
                                
                                <?php endfor ?>
                               
                           <tbody>
                        </table>-->
                        </div>
                        <div>
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












