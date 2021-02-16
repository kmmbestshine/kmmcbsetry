@extends('users.layouts.default')
@section('title', 'Appointment')
@section('cram')
<div ng-app="app">
<div class="container" ng-controller="feeRecipt">
	<div class="row">
	<!-- New payment page -->
    <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2" id="paymentRecipt">
   <html>
  <head>
    <meta charset="utf-8" /> <!-- first element so that the encoding is applied to the title etc. -->
    <link rel="stylesheet" href="letter.css" />
  </head>
			
			     <body>
    <header> 
      <address class="return-address">
      	<div class="col-xs-6 col-sm-6 col-md-5">
			<div class="receipt-left">
				<img class="img-responsive" alt="student-image" src="{{ asset($school->image) }}" style="width: 30%;hight: 20%; border-radius: 23px;">
			</div>
		</div>
       <h3> {{ $school->school_name }}</h3>
        {{ $school->email }} <br/>
        {{ $school->address }} <br/>    
      </address>
    </header>
<hr>
    <h3 style="text-align: center;"><u> Appointment Order</u></h3>
    <address class="return-address">
      	<p>To:</p>
       {{$bio_selected->name}}<br/>
        {{$bio_selected->address}} <br/>
        Pin Code -{{$bio_selected->pin_code}} <br/>    
      </address>
    <div class="content"> <!-- use this div only if it is required for styling -->
        <p>
          Dear {{$bio_selected->name}},
          <br class="salution" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With reference to the interview dated {{$bio_selected->created_at}}, we are pleased to offer you an appointment in one or two of our esteemed institutes {{$bio_selected->school_name}}  as {{$bio_selected->designation}} for TAMIL with effect from {{$bio_selected->doj}} under following terms and conditions as mentioned below and in annexure herewith attached.
        </p>
      </div>
      <table border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover" >
			                <thead>
			                </thead>
			                <tbody>
			                    <tr>
			                   
			                  <td >1.	You will be the {{$bio_selected->designation}} for TAMIL, assigned for both {{$bio_selected->school_name}}  handling {{$bio_selected->grade}} standards.</td>
			                    </tr>
			                    <tr>
			                   
			                  <td >2.	You will be on a Probation period for SIX months from the date of joining.</td>
			                    </tr>
			                    <tr>
			                  
			                  <td >3.	You will be on CONTRACT for an approximately period of {{$bio_selected->period}} from {{$bio_selected->doj}}. </td>
			                    </tr>
			                    <tr>
			                  
			                  <td >4.	Contract may be renewed for a further period based on your performance at the full discretion of the management.</td>
			                    </tr>
			                    <tr>
			                   
			                  <td >5.	You will be drawing a monthly gross salary of Rs. {{$bio_selected->salary}}/- inclusive of all such as EPF contributions etc. </td>
			                    </tr>
			                    <tr>
			                  <td >6.	However due to COVID 19 and LOCKDOWN situation, the schools are not functioning as required and usual. Only limited duties such as online VIRTUAL classes and related duties are required to be carry out. Hence a reduction in above said salary will be paid at the full discretion of the management. 

			                  </td>
			                    </tr>
			                    <tr>
			                  <td >
			                  	7.	The agreed full salary will automatically come into effect from the day of REOPENING of schools.  
			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		8.	Strictly abide to the general rules and regulations as instructed by the school leader time to time.		

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		9.	Strictly adhere to the provisions of RTE act and as being instructed by the school leader in regular meetings.		

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		10.	Ensure non-violation/contravention of RTE act especially regarding “Prohibition of Physical punishment and mental harassment to child”.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		11.	Strictly co-operate with the management/school leader in all respect and keep her/him fully informed on all activities related and involved in the school campuses.			

			                  </td>
			                    </tr>


			                    <tr>
			                  <td >
			                  		12.	Strictly maintain regularity and punctuality in attending school.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		13.	Complete the entire planning within the specified time and with strict punctuality.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		14.	Asses the learning ability of each student and accordingly supplement additional instructions if any as required.			

			                  </td>
			                    </tr>
			                    <tr>
			                  <td >
			                  		15.	Hold regular meetings with parents and guardians and apprise them about the regularity in attendance, ability to learn, progress made in learning and any other relevant information about the student.			

			                  </td>
			                  
			                    </tr>
			                    <tr>
			                  <td >
			                  		16.	Perform such other duties as may be prescribed by the school management / education department time to time.		

			                  </td>
			                    </tr>


			                    <tr>
			                  <td >
			                  		17.	All duties as promised by you verbally during your induction and interview should be performed without fail.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		18.	Utmost important should be given to the FEES COLLECTION, RECORD MAINTAINING, STUDENTS ENROLLMENTS, VIRTUAL CLASS, ONLINE TESTS, etc. Professionalism should be exercised in complying these most important duties.			

			                  </td>
			                    </tr>
			                     <tr>
			                  <td >
			                  		19.	Needless to pen down everything that you need to perform. However the ultimate goal and focus should be on result oriented performance at the end of every exams & the academic year.			

			                  </td>
			                    </tr>
			                    <tr>
			                  <td >
			                  		20.	Your appointment will be confirmed only after you submit your following documents to the office.
													1.	 Original certificates of Degree or Equivalent
													2.	Original certificates of SSLC & HSC
													3.	 Copy of Service / Experience certificates of your previous tenure
													4.	 Copy of Aadhar card
													5.	 Copy of PAN card
		

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
       
		<div class="row">
			<h5 style="text-align:left;font-weight: bold;">Thanking you</h5>
        </div>
        
		<div class="row">
			<div class="receipt-header receipt-header-mid receipt-footer">
				<div class="col-xs-8 col-sm-8 col-md-8 text-left">
					<div class="receipt-right">
						<p><b>Date :</b>  </p>
					</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="receipt-left">
						<h1 style="font-weight: bold !important;">With regards</h1>
					</div>
				</div>
			</div>
        </div>      
        <div class="row">
        	<div class="receipt-right">
				<h6 style="text-align:right">Read and Understood</h6>
			</div>
        </div>
  </body>
  			

</html>



			
        

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
