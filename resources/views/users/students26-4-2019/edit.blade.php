	@extends('users.layouts.default')
	@section('title', 'Edit Student')
	@section('cram')
	<ul class="breadcrumb">
	    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
	    <li class="active">Edit Student</li>
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
		<div class="row">
	        <div class="col-md-12">
	        	<div class="panel panel-default">
	        		<div class="panel-heading">
	        			<div class="panel-title"><h3>Edit Student Form</h3></div>
	        			<div class="text-right">
	        				<a href="{{route('get.students')}}" class="btn btn-info btn-rounded">View Students</a>
	        			</div>
	        		</div>
	            <form class="form-horizontal" role="form" method="post" action="{{route('update.student')}}" enctype="multipart/form-data">
	            	{!! csrf_field() !!}
					<div class="panel panel-default tabs">                            
	                    <ul class="nav nav-tabs" role="tablist">
	                        <li class="active">
	                        	<a href="#tab-first" role="tab" data-toggle="tab">Personal Info 
	                        		&nbsp;<i class="fa fa-user"></i>
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="#tab-second" role="tab" data-toggle="tab">Academic Info
	                        		&nbsp;<i class="fa fa-user"></i>
	                        	</a>
	                        </li>
	                        <li>
	                        	<a href="#tab-fourth" role="tab" data-toggle="tab">Transport Info
	                        		&nbsp;<i class="fa fa-bus"></i>
	                        	</a>
	                        </li>
	                    </ul>
	                    <div class="panel-body tab-content">
		                    <div class="tab-pane active" id="tab-first">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
				                            <label class="col-md-3 col-xs-12 control-label">Student Name*</label>
				                            <div class="col-md-9 col-xs-12">  
				                            	<input type="hidden" name="id" value="{{$student->id
				                            	}}">                       
				                                <input type="text" class="form-control" name="name" value="{{ $student->name }}">
			                					@foreach($errors->get('name') as $name)
				                					<div class="alert alert-danger my-alert" role="alert">
									                    <button type="button" class="close" data-dismiss="alert">
											                <span aria-hidden="true">&times;</span>
											                <span class="sr-only">Close</span>
											            </button> {{ $name }}
										            </div>
				               					@endforeach
				                            </div>
				                        </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
				                            <label class="col-md-3 col-xs-12 control-label">Select Caste*</label>
				                            <div class="col-md-9 col-xs-12">    
                                                                <!--<input type="hidden" name="caste" value="{{$student->caste_id}}" />
                                                                    <select class="form-control" disabled>-->
                                                                    	<select class="form-control" name="caste" >
			                                      	<option value="">Select Caste</option>
				                                    @foreach($castes as $caste)
				                                        <option value="{{ $caste->id }}" {{ $caste->id==$student->caste_id ? "selected" : "" }}>{{ $caste->caste }}</option>
				                                    @endforeach
				                                </select>
				                                @foreach($errors->get('caste') as $caste_id)
				                					<div class="alert alert-danger my-alert" role="alert">
								                        <button type="button" class="close" data-dismiss="alert">
								                            <span aria-hidden="true">&times;</span>
									                        <span class="sr-only">Close</span>
											            </button> {{ $caste_id }}
									                </div>
				              					@endforeach
				                            </div>
				                        </div>
									</div>
								</div>
								<br/>
								<div class="row">
									<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Select Gender</label>
			               					<div class="col-md-9">
			           							<label class="col-md-2 control-label">Male</label>
			           							<div class="col-md-2 text-left text-radio">
			                						<div class="form-group">
			                							@if($student->gender=="Male")
			                								<input type="radio" name="gender" value="Male" checked>
			                							@else
			           										<input type="radio" name="gender" value="Male">
			           									@endif
			                						</div>
			                					</div>
			                					<label class="col-md-4 control-label">Female</label>
			                					<div class="col-md-2 text-left text-radio">
			                						<div class="form-group">
			               								@if($student->gender=="Female")
			           										<input type="radio" name="gender" value="Female" checked>
			           									@else
			           										<input type="radio" name="gender" value="Female">
			                									@endif
	                								</div>
			              						</div>
			           							@foreach($errors->get('gender') as $gender)
			           								<div class="alert alert-danger my-alert" role="alert">
											            <button type="button" class="close" data-dismiss="alert">
								                            <span aria-hidden="true">&times;</span>
								                            <span class="sr-only">Close</span>
								                        </button> {{ $gender }}
										            </div>
				               					@endforeach
			               					</div>
			           					</div>
			           				</div>
									<div class="col-md-6">
										<div class="form-group">
				                            <label class="col-md-3 control-label">Date of Birth*</label>
				                            <div class="col-md-9">            
				                                <!--<input type="text" class="form-control" name="dob" value="{{ $student->dob }}" readonly>-->
				                                <input type="text" class="form-control" name="dob" value="{{ $student->dob }}">
			                					@foreach($errors->get('dob') as $dob)
				                					<div class="alert alert-danger my-alert" role="alert">
											            <button type="button" class="close" data-dismiss="alert">
											                <span aria-hidden="true">&times;</span>
										                    <span class="sr-only">Close</span>
											            </button> {{ $dob }}
											        </div>
				                				@endforeach
				                            </div>
				                        </div>
									</div>
								</div>
								<br/>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
			                				<label class="col-md-3 control-label">Contact No</label>
			                				<div class="col-md-9">
			                					<input type="number" class="form-control" name="contact_no" value="{{ $student->contact_no }}">
			                				</div>
			                			</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
			                				<label class="col-md-3 control-label">Select Blood Group*</label>
			                				<div class="col-md-9">
			               						<input type="text" name="blood_group" class="form-control" value="{{ $student->blood_group }}"/>
			               						
			                                @foreach($errors->get('blood_group') as $blood_group)
			                					<div class="alert alert-danger my-alert" role="alert">
								                    <button type="button" class="close" data-dismiss="alert">
								                        <span aria-hidden="true">&times;</span>
								                        <span class="sr-only">Close</span>
								                    </button> {{ $blood_group }}							
								                </div>
			                				@endforeach
			                				</div>
			               				</div>
									</div>
								</div>
								<br/>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
			                				<label class="col-md-3 control-label">Select Religion*</label>
			                				<div class="col-md-9">
			                					
			                					<select class="form-control" name="religion">
			                                       	<option value="">Select Religion</option>
			                                        @foreach($religions as $religion)
			                                       		<option value="{{ $religion->id }}" {{ $religion->id==$student->religion ? "selected" : "" }}>{{ $religion->religion }}</option>
			                                        @endforeach
			                                   	</select>
			                                   	@foreach($errors->get('religion') as $religionerr)
				                					<div class="alert alert-danger my-alert" role="alert">
									                    <button type="button" class="close" data-dismiss="alert">
									                        <span aria-hidden="true">&times;</span>
									                        <span class="sr-only">Close</span>
										                </button> {{ $religionerr }}
											        </div>
				                				@endforeach
			                				</div>
			                			</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
												<label class="col-md-3 control-label">Father Name*</label>
												<div class="col-md-9">
														<input type="text" class="form-control" name="father_name" value="{{ $student->father_name }}">
														@foreach($errors->get('father_name') as $father_name)
																<div class="alert alert-danger my-alert" role="alert">
																	<button type="button" class="close" data-dismiss="alert">
																		<span aria-hidden="true">&times;</span>
																		<span class="sr-only">Close</span>
																			</button> {{ $father_name }}
																	</div>
														@endforeach
												</div>
												</div>
										</div>
                                                                   
								</div>
								<br/>
                              
			           			<div class="row">
                                                            
                                                           
			                		<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Address</label>
			               					<div class="col-md-9">
			           							<input type="text" class="form-control" name="address" value="{{ $student->address }}">
			           						</div>
			                			</div>
			                		</div>
                                                        <div class="col-md-6">
	                					<div class="form-group">
			                				<label class="col-md-3 control-label">Mother Name*</label>
			                				<div class="col-md-9">
			                					<input type="text" class="form-control" name="mother_name" value="{{ $student->mother_name }}">
			           							@foreach($errors->get('mother_name') as $mother_name)
				           							<div class="alert alert-danger my-alert" role="alert">
											            <button type="button" class="close" data-dismiss="alert">
											                <span aria-hidden="true">&times;</span>
									                        <span class="sr-only">Close</span>
									                    </button> {{ $mother_name }}
									                </div>
			            						@endforeach
	                						</div>
			                			</div>
			                		</div>
			               		</div>
			               		<br/>
								<div class="row">
			                		<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Student Image</label>
			                				<div class="col-md-6">
			                					<input type="file" class="form-control" name="avatar">
			               					</div>
			                				<div class="col-md-3">
			                					<img src="{{url($student->avatar)}}" class="img-thumbnail" width="100px" height="100px">
			                				</div>
			                			</div>
			                		</div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label class="col-md-3 control-label">Student Aadhar No</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="aadhar_no" id="iban" value="{{ $student->aadhar_no }}">
												@foreach($errors->get('aadhar_no') as $aadhar_nos)
													<div class="alert alert-danger my-alert" role="alert">
														<button type="button" class="close" data-dismiss="alert">
															<span aria-hidden="true">&times;</span>
															<span class="sr-only">Close</span>
														</button> {{ $aadhar_nos }}
													</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
								<br/>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-3 control-label">EMIS No</label>
											<div class="col-md-6">
												<input type="number" class="form-control" name="emi_no"
													   value="{{ $student->emi_no }}">
												@foreach($errors->get('emi_no') as $emi_nos)
													<div class="alert alert-danger my-alert" role="alert">
														<button type="button" class="close" data-dismiss="alert">
															<span aria-hidden="true">&times;</span>
															<span class="sr-only">Close</span>
														</button> {{ $emi_nos }}
													</div>
												@endforeach
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-3 control-label">RTE (Right To Education)</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="rte" value="{{ $student->rte }}">
												@foreach($errors->get('rte') as $rtes)
													<div class="alert alert-danger my-alert" role="alert">
														<button type="button" class="close" data-dismiss="alert">
															<span aria-hidden="true">&times;</span>
															<span class="sr-only">Close</span>
														</button> {{ $rtes }}
													</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-3 control-label">Parent Contact No*</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="parent_contact_no"
													   onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="{{ $student->parent_contact_no }}">
												@foreach($errors->get('parent_contact_no') as $parent_contact_no)
													<div class="alert alert-danger my-alert" role="alert">
														<button type="button" class="close" data-dismiss="alert">
															<span aria-hidden="true">&times;</span>
															<span class="sr-only">Close</span>
														</button> {{ $parent_contact_no }}
													</div>
												@endforeach
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-3 control-label">Parent Email*</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="parent_email" value="{{ $student->parent_email }}">
												@foreach($errors->get('parent_email') as $parent_email)
													<div class="alert alert-danger my-alert" role="alert">
														<button type="button" class="close" data-dismiss="alert">
															<span aria-hidden="true">&times;</span>
															<span class="sr-only">Close</span>
														</button> {{ $parent_email }}
													</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
								<br/>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-3 control-label">Student password</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="studentPassword">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-3 control-label">Parent password</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="parentPassword">
											</div>
										</div>
									</div>
								</div>
							</div>
		                    <div class="tab-pane" id="tab-second">
		                    	<div class="row">
		                    		<div class="col-md-9">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Select Session*</label>
			                				<div class="col-md-9">
                                                                                <input type="hidden" name="session_id" value="{{$student->session_id}}" />
			                					<select class="form-control" disabled>
			                						<option value="">Select Session</option>
			                						@foreach($sessions as $session)
			                							<option value="{{ $session->id }}" {{ $session->id==$student->session_id ? "selected" : "" }}>{{ $session->session }}</option>
			                						@endforeach
			                					</select>
			                					@foreach($errors->get('session_id') as $session_id)
			                						<div class="alert alert-danger my-alert" role="alert">
								                        <button type="button" class="close" data-dismiss="alert">
								                            <span aria-hidden="true">&times;</span>
										                    <span class="sr-only">Close</span>
										                </button> {{ $session_id }}
										            </div>
			                	  				@endforeach
			                				</div>
			                			</div>
			                		</div>
		                    	</div>
		                    	<br/>
								<div class="row">
			                		<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Registration No*</label>
			                				<div class="col-md-9">
                                                  <!-- <input type="hidden" name="registration_no" value="{{$student->registration_no}}" />
			                					<input type="text" class="form-control"  value="{{ $student->registration_no }}" disabled>-->
			                					
			                					<input type="text" class="form-control"  name="registration_no" value="{{ $student->registration_no }}">
			                					@foreach($errors->get('registration_no') as $registration_no)
			                						<div class="alert alert-danger my-alert" role="alert">
								                        <button type="button" class="close" data-dismiss="alert">
								                            <span aria-hidden="true">&times;</span>
										                    <span class="sr-only">Close</span>
										                </button> {{ $registration_no }}
										            </div>
			                	  				@endforeach
			                				</div>
			                			</div>
			                		</div>
			                		<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Roll No*</label>
			                				<div class="col-md-9">
                                                        <!-- updated 20-4-2018 <input type="hidden" name="roll_no" value="{{$student->roll_no}}" />-->
			                				<!--	<input type="text" class="form-control" value="{{ $student->roll_no }}" disabled>-->
			                				<input type="text" class="form-control" value="{{ $student->roll_no }}" name="roll_no">
			                					@foreach($errors->get('roll_no') as $roll_no)
				               						<div class="alert alert-danger my-alert" role="alert">
								                        <button type="button" class="close" data-dismiss="alert">
										                    <span aria-hidden="true">&times;</span>
											                <span class="sr-only">Close</span>
									                    </button> {{ $roll_no }}
											        </div>
				                				@endforeach
			                				</div>
			                			</div>
			                		</div>
			           			</div>
			           			<br/>
			                	<div class="row">
			                		<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Select Class*</label>
			                				<div class="col-md-9">
                                                                                <input type="hidden" name="class" value="{{$student->class_id}}" />
			                					<select class="form-control class" disabled>
				                                    <option value="">Select Class</option>
				                                    @foreach($classes as $class)
				                                        <option value="{{ $class->id }}" {{ $student->class_id=="$class->id" ? "selected" : ""}}>{{ $class->class }}</option>
				                                    @endforeach
				                                </select>
				                                @foreach($errors->get('class') as $clserror)
				      								<div class="alert alert-danger my-alert" role="alert">
											            <button type="button" class="close" data-dismiss="alert">
											                <span aria-hidden="true">&times;</span>
								                            <span class="sr-only">Close</span>
								                        </button> {{ $clserror }}
								                    </div>
				                				@endforeach
			                				</div>
			                			</div>
			               			</div>
			                		<div class="col-md-6">
			                			<div class="form-group">
			          						<label class="col-md-3 control-label">Select Section*</label>
			           						<div class="col-md-9 section">
                                                                                        <input type="hidden" name="section" value="{{$student->section_id}}" />
			           							<select class="form-control sel-section" disabled>	
			           								<option value="">Select Section</option>
			           								@foreach($sections as $section)
			           									<option value="{{ $section->id }}" {{ $student->section_id=="$section->id" ? "selected" : "" }}>{{ $section->section }}</option>	
			           								@endforeach 
				                                </select>
				                                @foreach($errors->get('section') as $sectionerr)
				               						<div class="alert alert-danger my-alert" role="alert">
								                        <button type="button" class="close" data-dismiss="alert">
								                            <span aria-hidden="true">&times;</span>
											                <span class="sr-only">Close</span>
									                    </button> {{ $sectionerr }}
								                    </div>
				                				@endforeach
			                				</div>
			                			</div>
			               			</div>
			           			</div>
			           			<br/>
			           			<div class="row">
			           				<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Date of Admission*</label>
			                				<div class="col-md-9">
                                                <!-- <input type="hidden" name="date_of_admission" value="{{$student->date_of_admission}}" />-->
			                					<!--<input type="text" class="form-control" value="{{ $student->date_of_admission }}" readonly>-->
			                					<input type="text" class="form-control" name="date_of_admission" value="{{ $student->date_of_admission }}">
			                					@foreach($errors->get('date_of_admission') as $date_of_admission)
				                					<div class="alert alert-danger my-alert" role="alert">
											            <button type="button" class="close" data-dismiss="alert">
											                <span aria-hidden="true">&times;</span>
								                            <span class="sr-only">Close</span>
										                </button> {{ $date_of_admission }}
								                    </div>
				          						@endforeach
			           						</div>
			           						
			           					</div>
	                				</div>
	                				<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Date of Joining*</label>
			                				<div class="col-md-9">
                                                  <!-- <input type="hidden" name="date_of_joining" value="{{$student->date_of_joining}}" />
			                					<input type="text" class="form-control" value="{{ $student->date_of_joining }}" readonly>-->
			                					<input type="text" class="form-control" name="date_of_joining" value="{{ $student->date_of_joining }}">
			                					@foreach($errors->get('date_of_joining') as $date_of_joining)
				                					<div class="alert alert-danger my-alert" role="alert">
											            <button type="button" class="close" data-dismiss="alert">
								                            <span aria-hidden="true">&times;</span>
											                <span class="sr-only">Close</span>
											            </button> {{ $date_of_joining }}
											        </div>
				                				@endforeach
			                				</div>
			                				
			               				</div>
			          				</div>
			           			</div>
		                    </div> 
		                    <div class="tab-pane" id="tab-fourth">
		                    	<div class="row">
			                		<div class="col-md-6">
			                			<div class="form-group">
			                				<label class="col-md-3 control-label">Select Route</label>
			                				<div class="col-md-9">
			                					<select class="form-control editroute" name="route">
				                					<option value="">Select Route</option>
				                					@foreach($buses as $bus)
				                						<option value="{{ $bus->id }}" {{ $student->bus_id=="$bus->id" ? "selected" : ""}}>{{ $bus->route }}</option>
				                					@endforeach
				              					</select>
			           						</div>
			           					</div>
			                		</div>
			                		<div class="col-md-6">
			           					<div class="form-group">
			                				<label class="col-md-3 control-label">Select Stop</label>
			                				<div class="col-md-9 edit-stop-box">
			                					<select class="form-control editstop" name="stop">
			                						<option value="">Select Stop</option>
			                						@if($stops)
				                						@foreach($stops as $stop)	
				                							<option value="{{ $stop->id }}" {{ $student->bus_stop_id=="$stop->id" ? "selected" : ""}}>{{ $stop->stop }}</option>
				                						@endforeach
			                						@endif
				           						</select>
			           						</div>
			                			</div>
			                		</div>
			               		</div>
                                       
                                <br/>
                                <div class="row">
                                    
                                    <div class="col-md-12 text-right">
                                            <button class="btn btn-info btn-lg pull-right" type="submit">Update
                                                            <span class="fa fa-floppy-o fa-right"></span>
                                                    </button>
                                    </div>
                                    
		                </div>
		            </div>
                                
	                	</div>
		               
	        		</div>                                
	   			</form>
	   			</div>
	        </div>
	    </div>
	    <script>
        document.getElementById('iban').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
        });
	</script>

	@endsection