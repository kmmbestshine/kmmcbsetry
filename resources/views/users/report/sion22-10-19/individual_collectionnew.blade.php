@extends('users.layouts.default')
@section('title', 'Collection Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Collection Report</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Collection Report</h2>
</div>
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="panel panel-default">
                    <div class="panel-heading text-right">
                       
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row school-name" attr-name="{{ $school->school_name }}">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Collection Report</h3>
                               
                            </div>
                            <div class="panel-body">
                            	<form class="form-horizontal" method="post" action="{{route('term.individual.staffreport')}}">
                                
                                    {!! csrf_field() !!}
                                    <?php $recvdBy=\Auth::user()->username; ?>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Staff ID</label>
                                        <div class="col-md-10">
                                           <!-- <select name="staff" class="form-control">
                                             <option value="" selected="selected">Select Class</option>
                                                 @foreach($staffid as $staff)
                                                <option value="{{$staff->recived_by}}">{{$staff->recived_by}}</option>
                                                @endforeach
                                            </select>-->
                                           
                                           <input type="text" name="staff" class="form-control" value="{{$recvdBy}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Term</label>
                                        <div class="col-md-11">
                                           <select name="termtyp" class="form-control" required>
                                            <option value="" selected="selected">Select Term</option>
                                            <option value="0" >All</option>
                                                <option value="Term I">Term I</option>
                                                <option value="Term II">Term II</option>
                                                <option value="Term III">Term III</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">From</label>
                                        <div class="col-md-10">
                                            <input type="date" name="from" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">TO</label>
                                        <div class="col-md-11">
                                        <input type="date" name="to" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <button style="margin-top:20px" class="pull-right btn btn-info">Create Report</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
 </div>
 @endsection

 