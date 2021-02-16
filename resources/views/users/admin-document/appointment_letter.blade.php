

@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<div ng-app="app">
<div class="container" ng-controller="feeRecipt">
	<div class="row">
	<!-- New payment page -->
    <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1" id="paymentRecipt">

    	<table>
    		<thead>
    			
    		</thead>
    		<tbody>
                &nbsp&nbsp

    			<div id="wrapper">
				<!--<div id="header">
					<div id="headerContent2">Ph:{{$schooldetails->mobile}}</div>
					<div id="headerContent">{{$schooldetails->school_name}}</div>
					<div id="headerContent1">{{$schooldetails->address}}</div>
				</div>-->

					  <div id="content">
					  	&nbsp&nbsp
                        &nbsp&nbsp
                        &nbsp&nbsp
                        &nbsp&nbsp
					      <h4><p align="center"  class="ex1"><b><u>LETTER OF APPOINTMENT</u></b></p></h4>
                          <p >Dear <b>{{$teacherdetails->name}},</b></p>
                          @if($userdetails->type =='teacher')
                          
                          <p class="ex2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  We are hereby pleased to inform you that, Management from <b>&quot{{$schooldetails->school_name}}&quot</b> System offers you appointment as a TEACHER in our institution for handling   <b>&quot{{$class}} &quot</b> STD. Based upon your interview and tests in which you have qualified and performed best among other candidates. The monthly salary in respect of this appointment will be  <b>Rs. {{$teacherdetails->salary}}/-</b>.</p>
					       <p class="ex2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If you wish to accept this offer of appointment in our school under the conditions set out in the attached Conditions of Service for Teachers in our group of Schools, sign the Letter of Acceptence and Conditions of Services.</p>
                            <p class="ex2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp A meeting will be held and you will be told about all the rules and regulation along with working pattern of our school before commencement of our school for this academic year. This is really an honor for us to hire such a competent candidate like you in our valued institute. We wish you good luck in futre and hope that you will be according to our requirements and will be capable to fulfill tasks assigned to you, its really a good opportunity for you to prove yourself in this institute and make your worth as significant person.</p>
                            
                            @elseif ($userdetails->type =='user_role')
                            
                            <p class="ex2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If you wish to accept this offer of appointment in our school under the conditions set out in the attached Conditions of Service for Teachers in our group of Schools, sign the Letter of Acceptence and Conditions of Services.</p>
                        
                        @else
                        
                        <p class="ex2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If you wish to accept this offer of appointment in our school under the conditions set out in the attached Conditions of Service for Teachers in our group of Schools, sign the Letter of Acceptence and Conditions of Services.</p>
                        
                        @endif
                       &nbsp&nbsp
                        &nbsp&nbsp
                        &nbsp&nbsp
                        &nbsp&nbsp
                        <p>With Best Regards,</p>
                        &nbsp&nbsp
                        &nbsp&nbsp
                        <p>Chairman,</p>

                       </div>
					    <div id="separator"></div>
					  </div>
					  <!--<div id="footer">
					      <div id="footerContent">Ph:{{$schooldetails->mobile}}</div>
					      <div id="footerContent1">𝓐𝓷 𝓤𝓷𝓲𝓽𝔂 𝓸𝓯 𝓓𝓮𝓿𝓪𝓷𝓪𝔂𝓪𝓰𝓲 𝓔𝓭𝓾𝓬𝓪𝓽𝓲𝓸𝓷𝓪𝓵 𝓣𝓻𝓾𝓼𝓽</div>
					  </div>-->

    		</tbody>
            
    	</table>
        <button ng-click="print('paymentRecipt')">
                <span class="glyphicon glyphicon-print"></span>
                </button>
    </div>
    </div>
    </div>
    </div>

			
  	<!--</div>      
  	</div> 
</div>
</div>-->
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
    p.ex1 {margin: 20mm 0 10mm 0;  }
     p.ex2 { text-align-last: left; }
</style>
