@extends('users.layouts.default')
@section('title', 'Collection')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Collection</li>
</ul>
@endsection
@section('contant')
        @if(\Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('success') !!} </strong> 
                </div>
            </div>
        @endif
         @if(\Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('error') !!} </strong> 
                </div>
            </div>
        @endif
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
                <form class="form-horizontal" role="form" method="post" action="{{ route('schoolPaymentnew') }}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Collect Payment</strong></h3>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <!-- <div class="col-md-12">
                                            <input type="text" name="regno" placeholder="Reg No" class="form-control">
                                           
                                        </div>-->
                            <div class="col-md-12">    
                            <input type="text" name="regno" class="form-control searchStudent" placeholder="Enter Registration No.">

                            <div class="dropBox">
                                <table class="table table-striped" id="result">
                                    <tr>
                                        <td>Name :</td>
                                       <td>Reg.No :</td>
                                        <td>Class :</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                                    </div>
                                </div>
                                
                                 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-block"  >Get Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        <div class="panel-heading">
            <h3 class="panel-title" align="center"><strong>OR</strong></h3>
                           
        </div>
    </div>
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{ route('schoolPaymentnew') }}" >
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Fee Collection</strong></h3>
                           
                        </div>
                        <div class="panel-body">
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control cpaymentclass" name="class">
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
                                        <div class="col-md-9 cpaymentsection">
                                            <select class="form-control homecpaymentsection" name="section" disabled>
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
                                        <div class="col-md-9 cpaymentstudent">
                                            <select class="form-control homecpaymentstudent" name="student" disabled>
                                                <option value="">Select student</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <br/>
                            

                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Fee Collection</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection