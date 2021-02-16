@extends('users.layouts.default')
@section('title', 'View Student')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Student</li>
</ul>
@endsection
@section('contant')
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">View Student Complete Info</h3>
                        <div class="text-right">
                            <button onclick="return myFunction('print_div')">
                                Print Student Details
                            </button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Basic Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $student->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Caste</th>
                                                <td>{{ $student->caste }}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>{{ $student->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td>{{ $student->dob }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contact No</th>
                                                <td>{{ $student->contact_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Aadhar No</th>
                                                <td>{{ $student->aadhar_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>EMIS No</th>
                                                <td>{{ $student->emi_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>RTE</th>
                                                <td>{{ $student->rte }}</td>
                                            </tr>
                                            <tr>
                                                <th>Blood Group</th>
                                                <td>{{ $student->blood_group }}</td>
                                            </tr>
                                            <tr>
                                                <th>Religion</th>
                                                <td>{{ $student->religion }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $student->address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Father Name</th>
                                                <td>{{ $student->father_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mother Name</th>
                                                <td>{{ $student->mother_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Contact No</th>
                                                <td>{{ $student->parent_contact_no }}</td>
                                            </tr>
                                            <!-- changes done by parthiban version v3 -->
                                            <tr>
                                                <th>Parent Email</th>
                                                <td>{{ $student->parent_email }}</td>
                                            </tr>                                            
                                            
                                        </table>        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Academic Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>Image</th>
                                                <td>
                                                    <img src="{{url($student->avatar)}}" class="img-thumbnail" width="150px" height="150px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Session</th>
                                                <td>{{ $student->session }}</td>
                                            </tr>
                                            <tr>
                                                <th>Registration No</th>
                                                <td>{{ $student->registration_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Roll No</th>
                                                <td>{{ $student->roll_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Class</th>
                                                <td>{{ $student->class }}</td>
                                            </tr>
                                            <tr>
                                                <th>Section</th>
                                                <td>{{ $student->section }}</td>
                                            </tr>
                                            <tr>
                                                <th>Subjects</th>
                                                <td>
                                                    {{ $allsubs }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Date of Admission</th>
                                                <td>{{ $student->date_of_admission }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of Joining</th>
                                                <td>{{ $student->date_of_joining }}</td>
                                            </tr>
                                        </table>        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Transport Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>Bus No</th>
                                                <td>{{ $student->bus_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Route</th>
                                                <td>{{ $student->route }}</td>
                                            </tr>
                                        </table>  
                                         @if(!empty($fees_name))
                    <div class="row"><p class="text-center">Classes : {{$student->class}}</p></div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Payment Type</th>
                                <th>Fees Name</th>
                                <th>Amount</th>
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                             <?php $j=1; ?>
                           <?php for($i = 0; $i < count($fees_name); $i++) : ?>
                                <tr>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{$payment_type[$i]}}</td>
                                    <td>{{$fees_name[$i]}}</td>
                                    <td>{{$amount[$i]}}</td>
                                    <th>
                                         <form  method="get" action="{{ route('stufee.sion.structure.delete') }}"  > 
                                       
                                            
                                            <input type="hidden" name="feeId" value="{{$id[$i]}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                   
                    @endif      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="print_div" style="display:none">
            <table align="center" style="border:solid 1px #bfbfbf">
                <tbody>
                <tr>
                    <td >
                        <div class="row" style="font-size:20px;background-color:#F0F0F0" align="center">
                            <div class="col-md-12">
                                <center>
                                    <div class="row">
                                        <div class="col-md-2 pull-left">
                                            <br>
                                            <img src="{{url($currentSchool->image)}}" class="img-thumbnail" width="100px" height="100px">
                                        </div>
                                        <div class="col-md-9 pull-left">
                                            <h1> {{ ucwords($currentSchool->school_name) }} </h1>
                                            <h3 > {{ ucwords($currentSchool->address) }} </h3>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row" style="font-size:20px;background-color:#F0F0F0" align="center">
                            <div class="col-md-12">
                                <strong>
                                    Student Admission Form
                                </strong>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="row" style="font-size:14px;font-family:Arial,Helvetica,sans-serif;">
                            <div class="col-md-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Basic Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $student->name }}</td>
                                                <td rowspan="4">
                                                    <img src="{{url($student->avatar)}}" class="img-thumbnail" width="150px" height="150px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Caste</th>
                                                <td>{{ $student->caste }}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>{{ $student->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td>{{ date('d-m-Y',strtotime($student->dob) ) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contact No</th>
                                                <td>{{ $student->contact_no }}</td>
                                                <td rowspan="11"></td>
                                            </tr>
                                            <tr>
                                                <th>Aadhar No</th>
                                                <td>{{ $student->aadhar_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>EMIS No</th>
                                                <td>{{ $student->emi_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>RTE</th>
                                                <td>{{ $student->rte }}</td>
                                            </tr>
                                            <tr>
                                                <th>Blood Group</th>
                                                <td>{{ $student->blood_group }}</td>
                                            </tr>
                                            <tr>
                                                <th>Religion</th>
                                                <td>{{ $student->religion }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $student->address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Father Name</th>
                                                <td>{{ $student->father_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mother Name</th>
                                                <td>{{ $student->mother_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Contact No</th>
                                                <td>{{ $student->parent_contact_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Email</th>
                                                <td>{{ $student->parent_email }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="font-size:14px;font-family:Arial,Helvetica,sans-serif;">
                            <div class="col-md-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Academic Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>Session</th>
                                                <td>{{ $student->session }}</td>
                                            </tr>
                                            <tr>
                                                <th>Registration No</th>
                                                <td>{{ $student->registration_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Roll No</th>
                                                <td>{{ $student->roll_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>Class</th>
                                                <td>{{ $student->class }}</td>
                                            </tr>
                                            <tr>
                                                <th>Section</th>
                                                <td>{{ $student->section }}</td>
                                            </tr>
                                            <tr>
                                                <th>Subjects</th>
                                                <td>
                                                    {{ $allsubs }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Date of Admission</th>
                                                <td>{{ date('d-m-Y',strtotime($student->date_of_admission)) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of Joining</th>
                                                <td>{{ date('d-m-Y',strtotime($student->date_of_joining)) }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td  bgcolor="#F3F3F3" style="font-size:12px;font-family:Arial,Helvetica,sans-serif;">
                        <center>
                            <div class="row">
                                <div class="col-md-6 pull-left">
                                    <br>
                                    <br>
                                    <br>
                                    Parent's Signature
                                    <br>
                                    <br>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <br>
                                    <br>
                                    <br>
                                    Principal's Signature
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </center>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>

        function myFunction(elem)
        {
            var printContents = document.getElementById(elem).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents ;
            window.print();
            document.body.innerHTML = originalContents;

        }
    </script>
@endsection