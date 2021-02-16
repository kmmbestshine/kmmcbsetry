@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<div ng-app="app">
<div class="container" ng-controller="feeRecipt">
	<div class="row">
	<!-- New payment page -->
    <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2" id="paymentRecipt">


			<div class="row">
        	 <?php $mrs='Mrs'; ?>
                <?php $mr='Mr';  ?>
                <?php $her='her';  ?>
                <?php $his='his';  ?>
                <?php $he='he';  ?>
                <?php $she='she';  ?>
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
      <p align="right"><b>Date : {{date('d-m-Y')}} </b></p>
			<br>
			<h3 style="text-align: center;">TO WHOM SO EVER IT MAY CONCERN</h3>
			
        </div>
		
        <div class="panel-body">
        <div >
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                </thead>
                <tbody>
                  <p >This is to certify that <b>{{$students->name}}</b> S/O / D/O of <b>{{$parents->name}} </b> is a bonafied student of our school studying in <b>{{$class->class}}</b> Std  during the academic year {{$session->session}}.</p>
                           &nbsp&nbsp
                        &nbsp&nbsp
                          <p> His / Her Date of Birth according to the School's Register is {{$students->dob}} and his / her Admission Number is {{$students->registration_no}}.</p>
                          
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
<style>
    html, body {height: 100%;font-size:1.25em;margin: 0;background:#efefef;}
    #wrapper {min-height:100%;margin: 0 auto -75px;}
    #header {background-color:#104ba9;min-width:90%;height:110px;float:left}
    #headerContent {width:940px;margin:0 auto;padding:5px;font-size:2.5em;color:white;text-align: center;}
    #headerContent1 {width:940px;margin:0 auto;padding:5px;font-size:1.25em;color:white;text-align: center;}
    #headerContent2 {width:940px;margin:0 auto;padding:5px;font-size:1.25em;color:white;text-align: right;}
    #separator {height:60px;}
    #content {margin:0 auto;width:940px;padding:25px;font-size:1.5em; }
    #footer {background:#6a93d4;min-width:90%;height:75px;float:left;}
    #footerContent {margin: 0 auto;width:940px;padding:2px;color:black;font-size:1.25em;text-align: center;}
    #footerContent1 {margin: 0 auto;width:940px;padding:2px;color:black;font-size:1.75em;text-align: center;}
    p.ex1 {margin-top: 25px;  }
     p.ex2 { text-align-last: left; }
</style>
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
