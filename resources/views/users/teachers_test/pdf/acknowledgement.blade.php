@extends('users.layouts.default')
@section('title', 'Acknowledgement')
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
    <h3 style="text-align: center;"><u>LETTER OF ACKNOWLEDGEMENT</u></h3>
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With reference to our appointment letter dated {{$bio_selected->created_at}}, this is to place on record that, we received your ORIGINAL CERTIFICATES with below mentioned details that was submitted by you as per the terms of the appointment, will remain in our custody until your successful tenure of the signed and agreed contract.
        </p>
      </div>
       <table border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
			<th>S.No</th>
			<th>DEGREE</th>
			<th>TITLE</th>
			<th>CERT. NO</th>
			<th>SERIEL NO</th>
			<th>DATE OF ISSUE</th>
			</tr>
        </thead>
        <tbody>
          <?php $j=1; ?>
			 @foreach($bio_selected1 as $get)
			<tr>
			<td >{{$j++}}</td>
			<td >{{$get->degree}}</td>
			<td >{{$get->title}}</td>
			<td >{{$get->certNo}}</td>
			<td >{{$get->serNo}}</td>
			<td >{{$get->issuedt}}</td>
			</tr>
			@endforeach
          
        </tbody>
        <tfoot>
          <tr>
            <td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We thank you for trusting us with your valued certificates, we ensure you that your above certificates will be safe and secure with us and will be returned to you at the end of your contract.</td>
          </tr>
        </tfoot>
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