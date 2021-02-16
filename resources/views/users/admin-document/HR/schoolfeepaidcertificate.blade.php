@extends('users.layouts.default')
@section('title', 'School Fees Paid')
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
    <h3 style="text-align: center;"><u>SCHOOL FEES PAID CERTIFICATE</u></h3>
    <h3 style="text-align: center;"><u>TO WHOM SO EVER IT MAY CONCERN</u></h3>
   
    <div class="content"> <!-- use this div only if it is required for styling -->
        <p>
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThis is to certify that Thiru / selvi {{$student->student_name}} S/o / D/o {{$student->parent_name}} residing at {{$student->address}} is a bonafide student of our school studying in {{$student->class}} standard during the academic year {{$session->session}}.
        </p>
        <p>
        	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHe / She has paid a sum of Rs.{{$input['amt']}} in words ({{$input['amt_words']}})  as Tuition fees and all other fees inclusive of all for the academic year {{$session->session}}. 
        </p>
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp This certificate is issued for the purpose of {{$input['purpose']}}.</p>
       
      </div>
		<div class="row">
			<div class="receipt-header receipt-header-mid receipt-footer">
				<div class="col-xs-8 col-sm-8 col-md-3 text-left">
					<div class="receipt-right">
						<p><b></b>  </p>
					</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-9">
					<div class="receipt-left">
						<h3 style="font-weight: bold !important;">Seal & Sign of the Principal of the school</h3>
					</div>
				</div>
			</div>
        </div>  
        <br> 
        <br>
        <br>   
        <div class="row">
        	<div class="receipt-right">
				<h6 style="text-align:right">Name of the Principal: ---------------------------------</h6>
			</div>
        </div>
        <div class="row">
        	<div class="receipt-right">
				<h6 style="text-align:right">Date : ---------------------------------</h6>
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
