@extends('users.layouts.default')
@section('title', 'Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Report</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> School Date Wise Report</h2>
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
                                <h3 class="panel-title">School Date Wise Report</h3>
                            </div>
                            <div class="panel-body">
                            	<form class="form-horizontal" method="post" action="{{route('school.fee.Datewise.reportdet')}}">
                                    {!! csrf_field() !!}
                                    <?php $recvdBy=\Auth::user()->username; ?>
                                    <div class="row">
                                    <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">From</label>
                                        <div class="col-md-10">
                                            <input type="date" name="from" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                  <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">TO</label>
                                        <div class="col-md-11">
                                        <input type="date" name="to" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <br>
                              
                                <button style="margin-top:20px" class="pull-right btn btn-info">Create Date Wise Report</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
 </div>
 @endsection

 