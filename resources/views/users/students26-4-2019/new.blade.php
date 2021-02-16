@extends('users.layouts.default')
@section('title', 'Add Student')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Add Student</li>
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
            <form class="form-horizontal" role="form" method="post" action="{{route('post.student')}}" enctype="multipart/form-data">
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
                        	<a href="#tab-third" role="tab" data-toggle="tab">Parent Info
                        		&nbsp;<i class="fa fa-user"></i>
                        	</a>
                        </li>
                        <li>
                        	<a href="#tab-fourth" role="tab" data-toggle="tab">Transport Info
                        		&nbsp;<i class="fa fa-bus"></i>
                        	</a>
                        </li>
                        <li>
                        	<a href="#tab-fifth" role="tab" data-toggle="tab">Documents
                        		&nbsp;<i class="fa fa-user"></i>
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
			                                <input type="text" class="form-control" name="name" value="{{ Input::old('name') }}">
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
			                            	<select class="form-control" name="caste">
		                                      	<option value="">Select Caste</option>
			                                    @foreach($castes as $caste)
			                                        <option value="{{ $caste->id }}" {{ $caste->id==Input::old('caste') ? "selected" : "" }}>{{ $caste->caste }}</option>
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
			                            <label class="col-md-3 col-xs-12 control-label">Select Gender*</label>
			                            <div class="col-md-9 col-xs-12">     
			                            	<label class="col-md-2 control-label">Male</label>
		                					<div class="col-md-2 text-left text-radio">
		                						<div class="form-group">
		                							<input type="radio" name="gender" value="Male">
		                						</div>
		                					</div>
		                					<label class="col-md-4 control-label">Female</label>
		               						<div class="col-md-2 text-left text-radio">
		           								<div class="form-group">
		           									<input type="radio" name="gender" value="Female">
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
			                            <label class="col-md-3 col-xs-12 control-label">Date of Birth*</label>
			                            <div class="col-md-9 col-xs-12">            
			                                <input type="date" class="form-control" name="dob">
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
		                					<input type="number" class="form-control" name="contact_no" value="{{ Input::old('contact_no') }}">
		                				</div>
		                			</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
		                				<label class="col-md-3 control-label">Select Blood Group*</label>
		                				<div class="col-md-9">
		               						<select class="form-control" name="blood_group">
			                                    <option value="">Select Blood Group</option>
			                                    @foreach($groups as $group)
			                                        <option value="{{ $group->id }}" {{ $group->id==Input::old('blood_group') ? "selected" : "" }}>{{ $group->blood_group }}</option>
			                                    @endforeach
			                                </select>
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
		                                       		<option value="{{ $religion->id }}" {{ $religion->id==Input::old('religion') ? "selected" : "" }}>{{ $religion->religion }}</option>
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
		                				<label class="col-md-3 control-label">Email</label>
		                				<div class="col-md-9">
		                					<input type="email" class="form-control" name="email" value="{{ Input::old('email') }}">
		                				</div>
		               				</div>
								</div>
							</div>
							<br/>
		                	<div class="row">
		                		<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Nationality</label>
		               					<div class="col-md-9">
		           							<input type="text" class="form-control" name="nationality" value="Indian" readonly>
		                				</div>
		                			</div>
		                		</div>
		                		<div class="col-md-6">
		               				<div class="form-group">
		           						<label class="col-md-3 control-label">State*</label>
		           						<div class="col-md-9">
		           							<select name="state" class="form-control">
		           								<option value="">Select State</option>
		           								<option value="Haryana">Haryana</option>
		           								<option value="Punjab">Punjab</option>
		           								<option value="Rajasthan">Rajasthan</option>
		           							</select>
		                					@foreach($errors->get('state') as $state)
			                					<div class="alert alert-danger my-alert" role="alert">
								                    <button type="button" class="close" data-dismiss="alert">
								                        <span aria-hidden="true">&times;</span>
								                        <span class="sr-only">Close</span>
										            </button> {{ $state }}
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
		           						<label class="col-md-3 control-label">City*</label>
		           						<div class="col-md-9">
		           							<input type="text" class="form-control" name="city" value="{{ Input::old('city') }}">
		                					@foreach($errors->get('city') as $city)
			                					<div class="alert alert-danger my-alert" role="alert">
								                    <button type="button" class="close" data-dismiss="alert">
								                        <span aria-hidden="true">&times;</span>
								                        <span class="sr-only">Close</span>
										            </button> {{ $city }}
										        </div>
			                				@endforeach
		                				</div>
		                			</div>
		                		</div>
		                		<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Address</label>
		               					<div class="col-md-9">
		           							<input type="text" class="form-control" name="address" value="{{ Input::old('address') }}">
		           						</div>
		                			</div>
		                		</div>
		               		</div>
		               		<br/>
		               		<div class="row">
		                		<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Pin Code*</label>
		               					<div class="col-md-9">
		           							<input type="number" class="form-control" name="pin_code" value="{{ Input::old('pin_code') }}">
		                					@foreach($errors->get('pin_code') as $pin_code)
			                					<div class="alert alert-danger my-alert" role="alert">
										            <button type="button" class="close" data-dismiss="alert">
										                <span aria-hidden="true">&times;</span>
								                        <span class="sr-only">Close</span>
								                    </button> {{ $pin_code }}
								                </div>
			                				@endforeach
		                				</div>
		                			</div>
		               			</div>
		                		<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Previous School</label>
		                				<div class="col-md-9">
		               						<input type="text" class="form-control" name="previous_school" value="{{ Input::old('previous_school') }}">
		           						</div>
		           					</div>
		           				</div>
	              			</div>
	              			<br/>
		                	<div class="row">
		                		<div class="col-md-6">
		               				<div class="form-group">
		           						<label class="col-md-3 control-label">Student Image</label>
		           						<div class="col-md-9">
		           							<input type="file" class="form-control" name="avatar">
	               						</div>
	             	                </div>
		                		</div>
		               		</div>
	                    </div>
	                    <div class="tab-pane" id="tab-second">
							<div class="row">
		                		<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Registration No*</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="registration_no" value="{{ Input::old('registration_no') }}">
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
		                					<input type="text" name="roll_no" class="form-control" value="{{ Input::old('roll_no') }}">
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
		                					<select class="form-control class" name="class">
			                                    <option value="">Select Class</option>
			                                    @foreach($classes as $class)
			                                        <option value="{{ $class->id }}">{{ $class->class }}</option>
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
		           							<select class="form-control sel-section" name="section" disabled>
	                                            <option value="">Select Section</option>
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
		                					<input type="date" class="form-control" name="date_of_admission" placeholder="dd-mm-yyyy" value="{{ Input::old('date_of_admission') }}">
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
		                					<input type="date" class="form-control" name="date_of_joining" placeholder="dd-mm-yyyy" value="{{ Input::old('date_of_joining') }}">
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
	                    <div class="tab-pane" id="tab-third">
	                        <div class="row">
		                		<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Father Name*</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="father_name" value="{{ Input::old('father_name') }}">
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
		           				<div class="col-md-6">
                					<div class="form-group">
		                				<label class="col-md-3 control-label">Mother Name*</label>
		                				<div class="col-md-9">
		                					<input type="text" class="form-control" name="mother_name" value="{{ Input::old('mother_name') }}">
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
		           						<label class="col-md-3 control-label">Father Occupation</label>
		           						<div class="col-md-9">
		                					<input type="text" class="form-control" name="father_occupation" value="{{ Input::old('father_occupation') }}">
		                				</div>
		                			</div>
		               			</div>
		           				<div class="col-md-6">
		           					<div class="form-group">
		           						<label class="col-md-3 control-label">Mother Occupation</label>
                						<div class="col-md-9">
		                					<input type="text" class="form-control" name="mother_occupation" value="{{ Input::old('mother_occupation') }}">
		                				</div>
		                			</div>
		               			</div>
		           			</div>
		           			<br/>
		           			<div class="row">
                				<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Parent Email*</label>
		               					<div class="col-md-9">
		           							<input type="email" class="form-control" name="parent_email" value="{{ Input::old('email') }}">
		           						</div>
		           					</div>
		                		</div>
		                		<div class="col-md-6">
		           					<div class="form-group">
		           						<label class="col-md-3 control-label">Parent Contact No*</label>
		           						<div class="col-md-9">
	               							<input type="text" class="form-control" name="parent_contact_no" value="{{ Input::old('parent_contact_no') }}">
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
	            			</div>
	                    </div>
	                    <div class="tab-pane" id="tab-fourth">
	                    	<div class="row">
		                		<div class="col-md-6">
		                			<div class="form-group">
		                				<label class="col-md-3 control-label">Select Route</label>
		                				<div class="col-md-9">
		                					<select class="form-control route" name="route">
			                					<option value="">Select Route</option>
			                					@foreach($buses as $bus)
			                						<option value="{{ $bus->id }}">{{ $bus->route }}</option>
			                					@endforeach
			              					</select>
		           						</div>
		           					</div>
		                		</div>
		                		<div class="col-md-6">
		           					<div class="form-group">
		                				<label class="col-md-3 control-label">Select Stop</label>
		                				<div class="col-md-9 stop-box">
		                					<select class="form-control stop" name="stop" disabled>
			           							<option value="">Select Stop</option>
			           						</select>
		           						</div>
		                			</div>
		                		</div>
		               		</div>
	                    </div>
	                    <div class="tab-pane" id="tab-fifth">
	                    	<div class="row">
	                    		<label class="col-md-3 control-label">Upload Documents</label>
	                    		<div class="col-md-6">
	                    			<div class="form-group">
	                    				<input type="file" name="documents" class="form-control" multiple>
	                    			</div>
	                    		</div>
	                    	</div>
	                    </div>
                	</div>
	                <div class="panel-footer">    
	                	<button class="btn btn-info btn-lg pull-right">Submit
	                		<span class="fa fa-floppy-o fa-right"></span>
	                	</button>
	            	</div>
        		</div>                                
   			</form>
        </div>
    </div>

@endsection