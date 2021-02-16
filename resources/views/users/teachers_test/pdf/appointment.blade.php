@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<div ng-app="app">
<div class="container" ng-controller="feeRecipt">
	<div class="row">
	<!-- New payment page -->
    <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2" id="paymentRecipt">


			<div class="row">
        	
			<div class="receipt-header">
				<div class="col-xs-6 col-sm-6 col-md-5">
					<div class="receipt-left">
						<img class="img-responsive" alt="student-image" src="{{ asset($school->image) }}" style="width: 30%;hight: 20%; border-radius: 23px;">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 text-left">
					<div class="receipt-left">
						<h3 style="text-align: left;">{{ $school->school_name }}</h3>
						<p>{{ $school->email }} <i class="fa fa-envelope-o"></i></p>
						<p>{{ $school->address }} <i class="fa fa-location-arrow"></i></p>
					</div>
				</div>
			</div>
        </div>
		<div class="row">
			<br>
			<br>
			<br>
			<h3 style="text-align: center;">LETTER OF APPOINTMENT</h3>
			
        </div>
		<div class="row">
			<p><h3>To:</h3></p>
			<div class="receipt-header receipt-header-mid">
				<div class="col-xs-8 col-sm-8 col-md-8 text-left">
					<div class="receipt-left">
						<p>{{$bio_selected->name}},</p>
						<p>{{$bio_selected->address}},</p>
						<p>Pin Code -{{$bio_selected->pin_code}}</p>
					</div>
				</div>
			</div>
        </div>
        <div class="panel-body">
        <div >
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                </thead>
                <tbody>
                	<p >Dear <b>{{$bio_selected->name}},</b></p>
                          <p class="ex2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  With reference to the interview dated {{$bio_selected->created_at}}, we are pleased to offer you an appointment in one of our esteemed institutes {{ $school->school_name }} , {{ $school->address }} as TEACHER with effect from {{$bio_selected->doj}} with following terms and conditions as mentioned below and in annexure herewith attached.</p>
                         
                         <table class="table table-striped table-bordered table-hover" >
			                <thead>
			                </thead>
			                <tbody>
			                    <tr>
			                   
			                  <td >•	You will be a {{$bio_selected->designation}} handling GRADE VIII.</td>
			                    </tr>
			                    <tr>
			                   
			                  <td >•	You will be on a Probation period for SIX months from the date of joining.</td>
			                    </tr>
			                    <tr>
			                  
			                  <td >•	You will be on CONTRACT for a period of {{$bio_selected->period}} YEARS from {{$bio_selected->doj}}. Contract may be renewed for a further period based on your performance at the full discretion of the management.</td>
			                    </tr>
			                    <tr>
			                  
			                  <td >•	You will be drawing a monthly gross salary of Rs.{{$bio_selected->salary}}/- inclusive of all such as EPF contributions etc.</td>
			                    </tr>
			                    <tr>
			                   
			                  <td >•	Your appointment will be confirmed only after you submit your following documents to the office.</td>
			                    </tr>
			                    <tr>
			                  <td >
			                  					1.	Original certificate of Degree or Equivalent<br>
											    2.	Copy of Service / Experience certificates of your previous tenure<br>
											    3.	Copy of Aadhar card<br>
											    4.	Copy of PAN card

			                  </td>
			                    </tr>
			                    <tr>
			                  <td >
			                  	•	Strictly abide to the general rules and regulations as instructed by the school time to time.
			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		•	Strictly adhere to the provisions of RTE act as instructed by the school Leader in the meeting.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		•	Ensure non-violation/contravention of RTE act especially regarding “Prohibition of Physical punishment and mental harassment to child”.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		•	Strictly co-operate with the Head teacher for your standard in all respect and keep her/him fully informed on all activities involved in “Class room management”. 			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		•	Maintain regularity and punctuality in attending school.			

			                  </td>
			                    </tr>


			                    <tr>
			                  <td >
			                  		•	Complete the entire curriculum within the specified time.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		•	Assess the learning ability of each child and accordingly supplement additional instructions, if any, as required. 			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		•	Hold regular meetings with parents and guardians and apprise them about the regularity in attendance, ability to learn, progress made in learning and any other relevant information about the child.			

			                  </td>
			                    </tr>
			                    <tr>
			                  <td >
			                  		•	Perform such other duties as may be prescribed by the school management / education department time to time.			

			                  </td>
			                  
			                    </tr>
			                    <tr>
			                    	<td >
			                  		<p class="card-text">
				                       {!! $bio_selected->condition !!}
				                    </p>
			                  </td>
			                    </tr>
			                </tbody>
			            </table>
                          
                </tbody>
            </table>
              
            
           </div>
        </div>
        <div class="row">
			<h5 style="text-align:left;font-weight: bold;">Thanking you</h5>
        </div>
        
		<div class="row">
			<div class="receipt-header receipt-header-mid receipt-footer">
				<div class="col-xs-8 col-sm-8 col-md-8 text-left">
					<div class="receipt-right">
						<p><b>Date :</b> {{$paydate}} </p>
					</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="receipt-left">
						<h1 style="font-weight: bold !important;">With regards</h1>
					</div>
				</div>
			</div>
        </div>
        

    	<button ng-click="print('paymentRecipt')">
			<span class="glyphicon glyphicon-print"></span>
		</button>
  	</div>      
  	</div> 
</div>
</div>
@endsection
<style type="text/css">

	.receipt-main {
		background: #ffffff none repeat scroll 0 0;
		border-bottom: 12px solid #333333;
		border-top: 12px solid #f7a62b;
		margin-top: 50px;
		margin-bottom: 50px;
		padding: 40px 30px !important;
		position: relative;
		box-shadow: 0 1px 21px #acacac;
		color: #333333;
		font-family: open sans;
	}
	.receipt-main p {
		color: #333333;
		font-family: open sans;
		line-height: 1.42857;
	}
	.receipt-footer h1 {
		font-size: 15px;
		font-weight: 400 !important;
		margin: 0 !important;
	}
	.receipt-main::after {
		background: #414143 none repeat scroll 0 0;
		content: "";
		height: 5px;
		left: 0;
		position: absolute;
		right: 0;
		top: -13px;
	}
	.receipt-main thead {
		background: #414143 none repeat scroll 0 0;
	}
	.receipt-main thead th {
		color:#fff;
	}
	.receipt-right h5 {
		font-size: 16px;
		font-weight: bold;
		margin: 0 0 7px 0;
	}
	.receipt-right p {
		font-size: 12px;
		margin: 0px;
	}
	.receipt-right p i {
		text-align: center;
		width: 18px;
	}
	.receipt-main td {
		padding: 9px 20px !important;
	}
	.receipt-main th {
		padding: 13px 20px !important;
	}
	.receipt-main td {
		font-size: 13px;
		font-weight: initial !important;
	}
	.receipt-main td p:last-child {
		margin: 0;
		padding: 0;
	}	
	.receipt-main td h2 {
		font-size: 20px;
		font-weight: 900;
		margin: 0;
		text-transform: uppercase;
	}
	.receipt-header-mid .receipt-left h1 {
		font-weight: 100;
		margin: 34px 0 0;
		text-align: right;
		text-transform: uppercase;
	}
	.receipt-header-mid {
		margin: 24px 0;
		overflow: hidden;
	}
</style>
