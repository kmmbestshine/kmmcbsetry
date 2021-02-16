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
                                        <label class="col-md-3 control-label">Select Bus No</label>
                                        <div class="col-md-9">
                                            <select class="form-control " name="busno">
                                                <option value="">Select Bus</option>
                                                @foreach($busfee as $busno)
                                                    <option value="{{ $busno->bus_no }}">{{ $busno->bus_no }}</option>
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
                                        <label class="col-md-3 control-label">Select Bus Route</label>
                                        <div class="col-md-9  ">
                                            <select class="form-control  " name="route" >
                                                 <option value="">Select Route</option>
                                                  @foreach($busfee as $busroute)
                                                    <option value="{{ $busroute->route }}">{{ $busroute->route }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Boarding</label>
                                        <div class="col-md-9 ">
                                            <input class="form-control " name="board" >
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
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Add Single Student Bus Fee</button>
                                </div>
                            </div>
                        </br>
                        </div>
                        
                        
                     </div>  
                </form>
            </div>
        </div>
    </div>
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{route('fee.add.sion.studentmapping')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Bus Fee Through Excel Sheet</strong></h3>
                            <div class="text-right">
                                <a href="{{ route('fee.add.sion.busdetails') }}"  class="btn btn-info btn-rounded">Add Bus Details</a>
                                <a href="{{ route('fee.view.sion.boardingfees') }}"  class="btn btn-info btn-rounded">Add Bus Fees</a>
                                
                                <!--<a href="{{ route('fee.add.sion.mapping') }}"  class="btn btn-info btn-rounded">Add Student- Bus Mapping</a>-->
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="data" class="form-control">
                                                    <option value="">Select Add Bus Fee</option>
                                                    <option value="studentmapping">Add Bus Fee</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-info">Upload Bus Fee</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Sample Files For Data Upload Manager</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{url('data-manager/studentmapping.xlsx')}}" class="btn btn-info">Bus Fee Mapping Sample File</a>
                                                    </div>
                                                   

                                                </div>
                                                <br>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-6 col-md-6">
                                    <div class="panel panel-default">
                                           
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection