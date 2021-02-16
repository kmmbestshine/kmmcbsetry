@extends('users.layouts.default')
@section('title', 'Fee Structure')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Add Bus Wise Fee </a></li>
        <li class="active">Add  Bus Fee </li>
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
     
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
               <form class="form-horizontal" role="form" method="get" action="{{ route('single_studentbusfee.new') }}" > 
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Single Student Bus Fee </strong></h3>
                            
                        </div>
                         <div class="panel-body">
                            
                            <div class="row">
                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control spaymentclass" name="class">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Section</label>
                                        <div class="col-md-9 spaymentsection">
                                            <select class="form-control homespaymentsection" name="section" disabled>
                                                <option value="">Select section</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <br/>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Student</label>
                                        <div class="col-md-9 spaymentstudent">
                                            <select class="form-control homespaymentstudent" name="student" disabled>
                                                <option value="">Select student</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Bus</label>
                                        <div class="col-md-9">
                                            <select class="form-control buspaymentclass" name="bus">
                                                <option value="">Select Bus</option>
                                                @foreach($busses as $bus)
                                                    <option value="{{ $bus->id }}">{{ $bus->bus_no }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <br/>
                            
                            
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Route</label>
                                        <div class="col-md-9 busspaymentsection">
                                            <select class='form-control homebusspaymentsection' name='routes' >
                                                <option value=''>Select Route</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Boarding</label>
                                        <div class="col-md-9 buspaymentstudent">
                                            <select class="form-control homebuspaymentstudent" name="board" >
                                                <option value="">Select boarding</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                                <br/>

                                <div class="row">
                              
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Amount</label>
                                        <div class="col-md-9 ">
                                            <input class="form-control " name="fee_amount" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Fee Name</label>
                                        <div class="col-md-9 ">
                                            <input class="form-control " name="fee_name" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <br/>
                            
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                                <div class="col-md-2">
                                        <a href="{{route('get.students.buspayments123')}}" class="btn btn-info btn-lg">Back</a>
                                    </div>
                            </div>
                        </br>
                        </div>
                        
                        
                     </div>  
                </form>
                <form class="form-horizontal" role="form" method="get" action="{{ route('buswise_studentbusfee.new') }}" > 
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Bus Fee </strong></h3>
                            
                        </div>
                         <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Bus</label>
                                        <div class="col-md-9">
                                            <select class="form-control viewbuspaymentclass" name="bus">
                                                <option value="">Select Bus</option>
                                                @foreach($busses as $bus)
                                                    <option value="{{ $bus->id }}">{{ $bus->bus_no }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Route</label>
                                        <div class="col-md-9 viewbusspaymentsection">
                                            <select class='form-control homeviewbusspaymentsection' name='routes' >
                                                <option value=''>Select Route</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <br/>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </div>
                        </br>
                        </div>
                        
                        
                     </div>  
                </form>
            </div>
        </div>
    </div>
    
      @if($getStudent)
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                             <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                            <div style="text-align:center;padding:10px;">
                                <h1 style="text-transform:uppercase;">{{ $school->school_name }}</h1>   
                            </div> 
                            <h5>Bus Route Wise Fee Summary Report</h5>
                            <div class="table-responsive" >
                           <table  class="table table-striped table-bordered table-hover">
                             <h3 class="panel-title"> Report- Bus No - <b>   {{$busses1->bus_no}}</b>  - Bus Route-  <b>  {{$routes1->route_name}}</b>  </h3>
                             <thead>
                                
                                 <tr>
                                    <th>S.No</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; ?> 
                                        <tr>
                                            @foreach($getStudent as $student)
                                            @foreach($student as $get)
                                            <td ><?php echo  $j++ ?></td> 
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->class}}</td>
                                            <td>{{$get->section}}</td>
                            <td><div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr> 
                                        <th colspan="6" align="center">&nbsp; Student Wise Bus Fee Details</th>
                                    </tr> 
                                 <tr>
                                    <th>S.No</th>
                                    <th>Create Date</th>
                                    <th>Boarding</th>
                                     <th>Fee Name</th>
                                     <th>Amount</th>
                                     <th>Delete</th>
                                 </tr>
                             </thead>
                             
                                <tbody>
                                    <?php $k=1; ?>
                                   @if($get->getfee)
                                    @foreach($get->getfee as $rel1)
                                   
                                        <tr>
                                        <td>{{ $k++ }}</td>
                                        <td>{{date('d-m-Y', strtotime( $rel1->created_at )) }}</td>
                                        <td>{{$rel1->boarding}}</td>
                                         <td>{{ $rel1->fees_name }}</td>
                                         <td>{{ $rel1->amount }}</td>
                                         <th>
                                            <form  method="get" action="{{ route('fee.sion.boardingwise.delete') }}"  > 
                                            <input type="hidden" name="feeId" value="{{$rel1->id }}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                            </form>
                                        </th>
                                        </tr>
                                        @endforeach
                                        @endif
                               
                             </tbody>
                            </table>
                            </div>
                                </td>    
                                </tr>
                            @endforeach
                            @endforeach
                             </tbody>
                         </table>
                         </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 
@endif
</div>
@endsection

