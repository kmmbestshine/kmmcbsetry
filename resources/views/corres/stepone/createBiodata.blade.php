@extends('users.layouts.default')
@section('title', 'New Recruitment')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">New Recruitment</li>
    
</ul>
@endsection
@section('contant')
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
    @if($msg1)
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Oh Snap!</strong> {{ $msg1}}
                </div>
            </div>
        </div>
    @endif
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
	<div class="row">
        <div class="col-md-12">
        	<div class="panel panel-default">
        		<div class="panel-heading">
        			<div class="panel-title"><h3>New Recruitment Form</h3></div>
        			<!--<div class="text-right">
        				<a href="{{route('get.students')}}" class="btn btn-info btn-rounded">View Students</a>
        			</div>-->
        		</div>
            <form class="form-horizontal" role="form" method="post" action="{{route('post.biodata')}}" enctype="multipart/form-data">
            	{!! csrf_field() !!}
				<div class="panel panel-default tabs">                            
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                        	<a href="#tab-first" role="tab" data-toggle="tab">Personal Info 
                        		&nbsp;<i class="fa fa-user"></i>
                        	</a>
                        </li>
                      <!--  <li>
                        	<a href="#tab-second" role="tab" data-toggle="tab">Educational Info
                        		&nbsp;<i class="fa fa-user"></i>
                        	</a>
                        </li>
                        <li>
                        	<a href="#tab-fourth" role="tab" data-toggle="tab">Professional Info
                        		&nbsp;<i class="fa fa-user"></i>
                        	</a>
                        </li>-->
                       
                        
                    </ul>
                    <div class="panel-body tab-content">
	                    <div class="tab-pane active" id="tab-first">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			                            <label class="col-md-3 col-xs-12 control-label"> Name*</label>
			                            <div class="col-md-9 col-xs-12">                         
			                                <input type="text" class="form-control" name="name" value="{{ Input::old('name') }}" required>
		                					
			                            </div>
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label"> Contact No*</label>
										<div class="col-md-9">
											<input type="number" class="form-control" name="contact_no" required>
											<input type="hidden" class="form-control" name="username" value="{{$username}}">
											<input type="hidden" class="form-control" name="password" value="{{$password}}">
										</div>
									</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			                            <label class="col-md-3 col-xs-12 control-label">Select Gender*</label>
			                            <div class="col-md-9 col-xs-12">     
			                            	<label class="col-md-2 control-label">Male</label>
		                					<div class="col-md-2 text-left text-radio">
		                						<div class="form-group">
		                							<input type="radio" name="gender" value="Male" required>
		                						</div>
		                					</div>
		                					<label class="col-md-4 control-label">Female</label>
		               						<div class="col-md-2 text-left text-radio">
		           								<div class="form-group">
		           									<input type="radio" name="gender" value="Female" required>
		           								</div>
		           							</div>
		               						
			                            </div>
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label"> Email*</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="email" required>
											
										</div>
									</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
		                				<label class="col-md-3 control-label">Whats App No</label>
		                				<div class="col-md-9">
		                					<input type="number" class="form-control" name="whatsapp_no" >
		                				</div>
		                			</div>
								</div>
								<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Face Book ID</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="facebook_id" >
		                					
		                				</div>
		                			</div>
		                		</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Instagram</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="instagram" >
		                					
		                				</div>
		                			</div>
		                		</div>
                                <div class="col-md-6">
									<div class="form-group">
		                				<label class="col-md-3 control-label">Select Religion*</label>
		                				<div class="col-md-9">
		                					<select class="form-control" name="religion" required>
		                                       	<option value="">Select Religion</option>
		                                       		<option value="hindu" >Hindu</option>
		                                       		<option value="cheristian" >Christian</option>
		                                       		<option value="mushlin" >Mushlim</option>
		                                   	</select>
		                				</div>
		                			</div>
								</div>
							</div>
							<br/>
		           			<div class="row">
		                		<div class="col-md-6">
									<div class="form-group">
			                            <label class="col-md-3 col-xs-12 control-label">Select Caste*</label>
			                            <div class="col-md-9 col-xs-12">     
			                            	<select class="form-control" name="caste" required>
		                                      	<option value="">Select Caste</option>
			                                        <option value="oc" >OC</option>
			                                        <option value="bc" >BC</option>
			                                        <option value="mbc" >MBC</option>
			                                        <option value="sc/st" >SC/ST</option>
		                                    </select>
			                            </div>
			                        </div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
		                				<label class="col-md-3 control-label">Select Blood Group</label>
		                				<div class="col-md-9">
		               						<select class="form-control" name="blood_group" >
			                                    <option value="">Select Blood Group</option>
			                                    <option value="A+">A+</option>
			                                    <option value="A-">A-</option>
			                                    <option value="AB-">AB-</option>
			                                    <option value="AB+">AB+</option>
			                                    <option value="O+">O+</option>
			                                    <option value="O-">O-</option>
			                                    <option value="B+">B+</option>
			                                    <option value="B-">B-</option>
			                                    <option value="NA">NA</option>
			                                </select>
		                				</div>
		               				</div>
								</div>
		               		</div>
		               		<br/>
		                	<div class="row">
		                		<div class="col-md-6">
                					<div class="form-group">
		                				<label class="col-md-3 control-label">Father Name*</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="father_name" required>
		           							
                						</div>
		                			</div>
		                		</div>
                                <div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label">Father Contact No</label>
										<div class="col-md-9">
											<input type="number" class="form-control" name="father_contact_no" >
										</div>
									</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-6">
                					<div class="form-group">
		                				<label class="col-md-3 control-label">Mother Name*</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="mother_name" required>
		           							
                						</div>
		                			</div>
		                		</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label">Mother Contact No</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="mother_contact_no" >
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Address*</label>
		               					<div class="col-md-9">
		           							<input type="text" class="form-control" name="address" required>
		           						</div>
		                			</div>
		                		</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label">Pin Code*</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="pin_no" required>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			                            <label class="col-md-3 col-xs-12 control-label">Date of Birth*</label>
			                            <div class="col-md-9 col-xs-12">            
			                                <input type="date" class="form-control" name="dob" required>
			                            </div>
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label">Age*</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="age" required>
										</div>
									</div>
								</div>
							</div>
							<br><div class="row">
								<div class="col-md-6">
									<div class="form-group">
			                            <label class="col-md-3 col-xs-12 control-label">Marital Status*</label>
			                            <div class="col-md-9 col-xs-12">     
			                            	<label class="col-md-2 control-label">Single</label>
		                					<div class="col-md-2 text-left text-radio">
		                						<div class="form-group">
		                							<input type="radio" name="maried_status" value="single" >
		                						</div>
		                					</div>
		                					<label class="col-md-4 control-label">Maried</label>
		               						<div class="col-md-2 text-left text-radio">
		           								<div class="form-group">
		           									<input type="radio" name="maried_status" value="married" >
		           								</div>
		           							</div>
		               						
			                            </div>
			                        </div>
								</div>
								<div class="col-md-6">
                					<div class="form-group">
		                				<label class="col-md-3 control-label">Spouse Name</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="spouse_name" >
                						</div>
		                			</div>
		                		</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label">Spouse Contact No</label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="spouse_contact_no" >
										</div>
									</div>
								</div>
								<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Languages Known*</label>
		               					<div class="col-md-9">
		           							<input type="text" class="form-control" name="lang_known" required>
		           						</div>
		                			</div>
		                		</div>
							</div>



							<div class="row">
								</br> 
								<div class="row">
						     	<div class="col-md-10">
								  <div class="form-group">
								   <label class="col-md-3 control-label"><h3>Educational Details:</h3></label>
								   </div>
								 </div>
						     </div>  
						     </br>      
	                    		<div class="col-md-10">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Qualification *</label>
		                				<div class="col-md-9">
		                					<input type="text" class="fname" name="qualification" placeholder="Enter Qualification" required />
		                				</div>
		                			</div>
		                		</div>
	                    	</div>
							<div>
                                <br/>
						                       

					<table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
						<thead>
					      <tr>
					       <th> COURSE</th>
					       <th> INSTITUTE</th>
					       <th> YEAR PASSED</th>
					       <th> BOARD/UNIVERSITY</th>
					       <th> % MARKS</th>
					       <th> Delete</th>
					      </tr>
					      </thead>
						<tbody>
						<?php $j=1; ?>
					    <tr>
					        
					        <td>
					            <input type="text" class="fname" name="course_name[]" placeholder="Enter Course Name" required/>
					        </td>
					        <td>
					            <input type="text" class="fname" name="institute_name[]" placeholder="Enter Institute Name" required/>
					        </td>
					        <td>
					            <input type="text" class="fname" name="passed_yr[]" placeholder="Enter Year Passed" required />
					        </td>
					        <td>
					            <input type="text" class="fname" name="univ_board[]" placeholder="Enter Board/ Univ" required />
					        </td>
					        <td>
					            <input type="text" class="fname" name="scored[]" placeholder="Enter Scored %" required />
					        </td>
					        <td>
					            <input type="button" value="Delete" class="btn btn-danger remove"/>
					        </td>
					    </tr>
					    
					    </tbody>
					</table>
					<p>
					    <input type="button" value="Insert row" class="btn btn-info">
					</p>
				</div>


				<div class="row">
		               		<div class="col-md-12" >
		               			</br> 
								<div class="row">
						     	<div class="col-md-10">
								  <div class="form-group">
								   <label class="col-md-3 control-label"><h3>Professional Details:</h3></label>

								   </div>
								 </div>
						     </div>  
								 	
		                	<div class="form-group" class="center">
		                		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                	Experienced <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" > 
		                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                	Fresher <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" checked><br>
						    <div id="ifYes" style="visibility:hidden" >
						        <div >
                                <br/>
                               <INPUT type="button" value="Add Row" class="btn btn-info" onclick="addRow('dataTable')" />

							<INPUT type="button" value="Delete Row" class="btn btn-danger remove" onclick="deleteRow('dataTable')" />
							<br/>

							<TABLE id="dataTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
								<thead>
                                        <tr>
                                            <th>Check Box</th>
                                            <th>S.NO</th>
                                            <th> INSTITUTE WORKED</th>
                                            <th> FROM</th>
                                            <th> TO</th>
                                            <th> TENURE</th>
                                            <th> SALARY</th>
                                            <th> CONTACT NO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								<TR>
									<TD><INPUT type="checkbox" name="chkbox[]"/></TD>
									<TD> 1 </TD>
									<TD> <INPUT type="text" name="company_name[]" placeholder="Enter Institute Name" /> </TD>
									<TD> <INPUT type="date" name="from[]" placeholder="From date" /> </TD>
									<TD> <INPUT type="date" name="to[]" placeholder="To date" /> </TD>
									<TD> <INPUT type="text" name="tenure[]" placeholder=" Enter Tenure" /> </TD>
									<TD> <INPUT type="text" name="salary[]" placeholder="Enter Salary" /> </TD>
									<TD> <INPUT type="text" name="contact[]" placeholder="Enter Contact No" /> </TD>
								</TR>
							</tbody>
							</TABLE>
						</div>
	    					</div>
			                						
			                        </div>
								</div>
			               		</div>
			               		
                                <br/>
                                <div class="row">
		                   		<div class="col-md-12 text-left">
		                   			<INPUT type="checkbox" name="accept" required/> 
					               		<span > I HEREBY DECLARE THAT ALL ABOVE INFORMATION GIVEN BY ME ARE TRUE & CORRECT TO THE BEST OF MY KNOWLEDGE AND BELIEF </span>
					               	</INPUT>
		                   		</div>
		                    </div>
                            </br>
                                <div class="row">
		                   		<div class="col-md-12 text-right">
		                   			<button class="btn btn-info btn-lg pull-right" type="submit">Save
					               		<span class="fa fa-floppy-o fa-right"></span>
					               	</button>
		                   		</div>
		                    </div>
						</div>
						
	                  
	                    </div> 
		                </div>
                	</div>
        		</div>                                
   			</form>
   			</div>
   			
        </div>
    </div>
    <script type="text/javascript">
    function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript">
$('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td><input type="text" class="fname" name="course_name[]" placeholder="Enter Course Name" /></td><td><input type="text" class="fname" name="institute_name[]" placeholder="Enter Institute Name"/></td><td><input type="text" class="fname" name="passed_yr[]" placeholder="Enter Year Passed"/></td><td><input type="text" class="fname" name="univ_board[]" placeholder="Enter Board/ Univ"/></td><td><input type="text" class="fname" name="scored[]" placeholder="Enter Scored %"/></td><td><input type="button" value="Delete" class="btn btn-danger remove"/></td></tr>')
});
    </script>
    <script>
function deleteRow(id,row) {
    document.getElementById(id).deleteRow(row);
}

function insRow(id) {
    var filas = document.getElementById("myTable").rows.length;
    var x = document.getElementById(id).insertRow(filas);
    var y = x.insertCell(0);
    var z = x.insertCell(1);
    y.innerHTML = '<input type="text" id="fname">';
    z.innerHTML ='<button id="btn" name="btn" > Delete</button>';
}
</script>

    <script>
        document.getElementById('iban').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
        });
	</script>
	<SCRIPT language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			cell2.innerHTML = rowCount + 0 ;

			var cell3 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "text";
			element2.name = "company_name[]";
			cell3.appendChild(element2);

			var cell4 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "date";
			element3.name = "to[]";
			cell4.appendChild(element3);

			var cell5 = row.insertCell(4);
			var element4 = document.createElement("input");
			element4.type = "date";
			element4.name = "from[]";
			cell5.appendChild(element4);

			var cell6 = row.insertCell(5);
			var element5 = document.createElement("input");
			element5.type = "text";
			element5.name = "tenure[]";
			cell6.appendChild(element5);

			var cell7 = row.insertCell(6);
			var element6 = document.createElement("input");
			element6.type = "text";
			element6.name = "salary[]";
			cell7.appendChild(element6);

			var cell8 = row.insertCell(7);
			var element7 = document.createElement("input");
			element7.type = "text";
			element7.name = "contact[]";
			cell8.appendChild(element7);

		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}


		

	</SCRIPT>
	


@endsection