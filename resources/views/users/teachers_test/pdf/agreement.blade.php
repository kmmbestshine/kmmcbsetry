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
			<h3 style="text-align: center;">STAFF AGREEMENT</h3>
			<h5 style="text-align: right;">Date:<?php echo date('d-m-Y'); ?></h5>
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
                	<h3>DEFENITIONS</h3>
                	
					<p>1.	“Management” Means ,  a Team comprising of Trust Members , Director, School Leader, Correspondent, Principal, Mangers, Admin Officer who strategize, Create, plan , Execute and Implement various policies and procedures to achieve goals of AIMS, OBJECTIVES and QUALITIES of the organization.</p>
                	<P>2.	“Academic Year “Means, The period from 1st of June in year to the 31st of May of the successive year. Ex. 01.06.2019 – 31.05.2020.</P>
                	<P>3.	“School Leader “Means, one of the trust members who has the highest authority in day to day operation of the school and involves in strategizing, Creating, planning, Executing, Implementing and monitoring of various policies and procedures meant for the organization.</P>
                	<P>4.	“Staff “ Means , any person or a group of persons holding position   and working for the school in various departments such as teaching, Non- Teaching, Office, Hostel, Transport, Housekeeping etc. </P>
                    <h3>I. 	CONFIDENTIALITY POLICY</h3>
                    <P>All staff should maintain strict CONFIDENTIALITY throughout his / her service on the following issues.</P>
                    <P>•	Records about the STUDENTS, SCHOOL, MANAGEMENT and FELLOW STAFF.</P>
                    <P>•	Methodology and Ideology of the school and its leaders.</P>
                    <P>•	Contact information about the STUDENTS, PARENTS, STAFF, MANAGEMENT and various BUSINESS ASSOCIATES related to the school.</P>
                    <P>•	Various INNOVATIVE methods implemented by school and its leader required for 21st century. </P>
                    <P>•	Different, unique and new methodologies being followed by the school.</P>
                    <P>•	Procedures and methods discussed in any in-house and out-door WORKSHOPS and SEMINARS etc conducted by the school for its individual growth  and developments</P>
                
                    <h3>II.	RESIGNING / RELEIVING POLICY</h3>
                	<P>•	Resignation should be in the prescribed format and HAND DELIVERED to the school LEADER through the HEAD TEACHER or their department heads.</P>
                	<P>•	Staff may RESIGN from the service only at the END of an ACADEMIC YEAR. However staff are required as per their contract to give THREE MONTHS notice to the management specifying the DATE on which they will be leaving the service.</P>
                	<P>•	If a staff desires to be relieved / resigned during his/her CONTRACT PERIOD, it will be mandatory for him / her to give TWO MONTHS salary unless and otherwise the management permits relaxation under some special circumstances at the full discretion of the Chairman.</P>
                	<P>•	Staff who does not honor his/her commitment and leave the school on false reasons to join other school may face holding back PF for SIX MONTHS, not give any SERVICE CERTIFICATE and send a letter to the new employer or legal notice as the case may be.</P>
					<h3>III.	 LEAVE POLICY</h3>
					<p>•	Leave request should be given in the prescribed format only.</p>
					<p>•	Grant of LEAVE shall be at the discretion of the HEAD TEACHER and SCHOOL LEADER.</p>
					<p>•	No LEAVE will be granted during MAJOR SCHOOL EVENTS, WORKSHOPS and SEMINARS etc.</p>
					<p>•	Except in any un-avoidable circumstances, it is mandatory to submit a LEAVE LETTER in ADVANCE. If no, a phone message can be sent to the school leader before 9 AM on the day of absence. However a proper leave letter should be submitted on the subsequent day.</p>
					<p>•	Taking leave without informing may lead to SALARY DEDUCTION even if the staff has leave in his / her balance.</p>
					<p>•	Staff will be entitled for 12 days CASUAL LEAVE per academic year. If the CL exceeds 12, then INCREAMENT will be denied and if required TERMINATION of the CONTRACT will be effected at the discretion of the management. (Academic year means from 01st June to 31st May)</p>
					<p>•	Teachers working extra days / hours due to WORKSHOPS, TRAINING, MEETINGS, PRACTICE for various events etc is part of their mandatory duties. Hence this cannot be COMPENSATED for any working days.</p>
					<p>•	It is prohibited to take CL on FIRST and LAST day of each month and as well as FIRST and LAST day of each week.</p>
					<p>•	If any CL is taken on MONDAY or SATURDAY, then SUNDAY will also be counted as CL.</p>
                	<h3>IV.	ATTENDANCE POLICY</h3>
                	<p>•	Every staff is expected to reach the school punctually well in time and punch the BIO-METRIC machine on ARRIVAL and also at the time of DEPARTURE.</p>
                	<p>•	A staff who has failed to punch in the BIO-METRIC machine as mentioned above is liable to be considered as ABSENT from duty for that date.</p>
                	<p>•	Late coming beyond 9.00 AM more than TWO TIMES in a month will result in deduction of HALF DAY SALARY for that month.</p>
                	<p>•	Only once in a month a staff is allowed to go ONE HOUR early with prior permission from the HEAD TEACHER, Principal and or School leader.</p>
                	<p>•	If a staff needs to go early before 3.00 PM or ONE HOUR prior regular closing time, HALF DAY LEAVE has to be applied.</p>
                	<h3>V.	EXAMINATION POLICY</h3>
                	<p>•	All teachers are responsible for planning, conducting, executing, evaluating and analyzing of examination for the students of their standard and section.</p>
                	<p>•	The following exams / tests are to be conducted by each teacher as applicable to each standard and as set by the school leader during yearly plan as well as whenever it is necessary as instructed by the head teacher or school leader.
									<p>(a)	Random Home tests<br>
										(b)	Daily tests<br>
										(c)	Weekly tests<br>
										(d)	Monthly tests<br>
										(e)	OMR tests<br>
										(f)	Midterm tests<br>
										(g)	Term exams</p>
									
					</p>
                	<p>•	Every teacher must create his / her question paper with answer script (key answer) well in advance and submit the same to the school leader / Principal in clear printed format for his perusal without fail.</p>
                	<p>•	Upon completion of exams / tests, correction of answer sheets should be executed immediately and mark sheets should be submitted to the school leader / Principal within one day of completion of exams.</p>
                	<p>•	Each teacher should correct/evaluate the answer sheets judiciously without any mal practice. If any teacher is found involved in any Mal practices he/she will be subjected to disciplinary action at the discretion of the management and based on the depth of the mal practice may terminate the teacher.</p>
                	<p>•	Conducting and supervising of the examination should be done very strictly with full control of the students ensuring zero mal practices both by the students and the teachers.</p>
                	<p>•	All the tests / exams should be conducted in the same manner as if a board exam is conducted.</p>
                	<p>•	Professionalism and best practice should be maintained while setting question papers. </p>
                	<p>•	Disclosing of questions to the students is strictly prohibited and if found, serious action will be initiated against the teacher. </p>
                	<h3>VI.	TEACHING POLICY</h3>
                	<p>•	Unlike other schools in the industry, we don’t follow conventional method of teaching and strictly avoid ROTE LEARNING.</p>
                	<p>•	Every teacher must follow 21st CENTURY SKILLS based TEACHING methodology as advised by the CHAIRMAN during WORKSHOPS at the time of induction and time to time.</p>
                	<p>•	XSEED TEACHERS must strictly follow the rules, procedures and methods recommended by the system while teaching and managing the class.</p>
                	<p>•	However all the teachers must follow the correct teaching methodology based on the following elements
                			<p>
                				(1)	 Learning Pyramid<br>
								(2)	 Learning Styles<br>
								(3)	 Brain Science<br>
								(4)	 Forgetting Curve<br>
								(5)	 Spaced repetition Technique
                			</p>	
                	</p>
                	<p>•	It is mandatory for all teachers to understand that LEARNING is their first priority. </p>
                	<p>•	While preparing for XSEED teaching, strict compliance should be followed with respect to “SPARK the candle” procedure.</p>
                	<p>•	XSEED teachers will be subjected to BLUE SCALE evaluation at regular intervals where as other teachers will also be evaluated by a similar tool to ensure proper and effective teaching.</p>
                	<p>•	Every teacher must read the lesson thoroughly prior teaching and follow the step by step guidelines given in the lesson plan (BLUE BOOK or CURRICULAM MANUAL) during teaching.</p>
                	<h3>VII.	CHAIRMAN’S POLICY</h3>
                	<p>•	All the staff at all the times while in the school campus and also while in transit by school vehicle must communicate in ENGLISH only.</p>
                	<p>•	Strict measures to be enforced among the students to maintain SPOKEN ENGLISH by following the DEFAULTER CARDS and TRANSFERING of CARDS procedures as explained during DEBRIEFING.</p>
                	<p>•	All staff should strictly follow the below mentioned best practice tools as briefed.
                			<p>(1)	 THANK<br>
								(2)	 HEART<br>
								(3)	 LAST approach<br>
								(4)	 SPARK the candle
								</p>
                	</p>
                	<p>•	All staff must strictly follow the team/house system and strive to achieve highest scoring for their teams by continuously motivating their team’s students.</p>
                	<p>•	Usage of mobile phones during school hours is strictly prohibited.</p>
                	<p>•	Any staff MUST NOT have any direct or indirect communication with parents without permission. Only some specified staff are allowed to have direct in and out communication with parents.</p>
                	<h3>VIII.	WORKING DAYS/HOURS POLICY</h3>
                	<p>•	Working days and holidays will be as per school’s calendar. It may be modified based on the announcements by CEO time to time</p>
                	<p>•	The daily normal working hours is 8 hours ie from 0830 to 1630 hrs and summing up to not less than 48 teaching hours per week.
                			<p>1.	Nursery LKG – UKG : 0830 to 1630 hrs<br>
								2.	Primary I – V : 0830 to 1630 hrs<br>
								3.	Matric VI – VIII : 0830 to 1630 hrs<br>
								4.	Matric IX – X : 0800 to 1800 hrs<br>
								5.	Hr. Sec. XI – XII : 0700 to 1800 hrs
								</p>
                	</p>
                	<p>•	The working hours may be different for Teaching and Non-teaching staff as required by the management.</p>
                	<p>•	The normal total working days per academic year will not be less than 225 days, however it may be extended or shortened as per the instructions from the CEO.</p>
                	<p>•	Additional work hours and work days will have to be put in by the teachers who are handling 9th to 12th to prepare the students for board and competitive exams. Such extra hours or days will be decided and at the full discretion of the school leader. No extra payment will be given for the above as it is part of their role and their wages covers it all. </p>
                	<h3>IX.	RTE POLICY</h3>
                	<p>•	All teachers must strictly abide to the provision of RTE act especially regarding “Prohibition of Physical punishment and mental harassment to child”.</p>
                	<p>•	Any violation of above will lead to issuance of show-cause notice followed by suspension from service giving some time to give clarification and or apology letter with a declaration for no such recurrence. Subsequently the teacher in guilt may be terminated from service at the full discretion of the school leader.  </p>
                	<h3>X.	UNIFORM POLICY</h3>
                	<p>•	All staff at all times must be in proper Uniform.</p>
                	<p>•	Uniform is relaxed on every Fridays and on Birthdates, Anniversaries etc of the staff.</p>
                	<p>•	Staff in improper uniform will be penalized at the discretion of the head teacher/Admin officer in order to maintain strict discipline in the campus as we believe that, the teachers are the Roll-models for the students.  </p>
               		<h3>XI.	TERMINATION POLICY</h3>
               		<p>•	Any staff will be subjected to TERMINATION at any time with a prior show-cause notice on the following grounds.
               			<p>
               				1.	Involving in any act which may damage the brand value of the school.<br>
							2.	Involving in any act which may be a threat to the safety and security of the students.<br>
							3.	Involving in any mal-practice which is against the good practices of a good teacher who is supposed to be working from the HEART.<br>
							4.	If he/she does not produce success oriented results.<br>
							5.	If he/she does not maintain good relationship with fellow staff and the entire school family resulting in possible threat to the HORMONY of the school.<br>
							6.	If he/she violates any of the written and or verbal policies and procedures as mentioned above and as directed by the school leader time to time.

               		</p>
               		</p>

               </tbody>
            </table>
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
