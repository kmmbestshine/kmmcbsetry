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
    <h2><span class="fa fa-arrow-circle-o-left"></span> Overall Report</h2>
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
                                <h3 class="panel-title">Overall Report</h3>
                            </div>
                            <div class="panel-body">
                            	<form class="form-horizontal" method="post" action="{{route('new.fee.term.class.staffreport')}}">
                                    {!! csrf_field() !!}
                                    <?php $recvdBy=\Auth::user()->username; ?>
                                    <div class="row">
                                    <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Term</label>
                                        <div class="col-md-10">
                                           <select name="termtyp" class="form-control">
                                            <option value="" selected="selected">Select Term</option>
                                            <option value="0" >All</option>
                                                <option value="Term I">Term I</option>
                                                <option value="Term I">Term II</option>
                                                <option value="Term I">Term III</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                   <div class="col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Class</label>
                                        <div class="col-md-11">
                                            <select name="class" class="form-control">
                                                <option value="" selected="selected">Select Class</option>
                                                <option value="0">All</option>
                                                @foreach($classes as $clas)
                                                <option value="{{$clas->class}}">{{$clas->class}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <br>
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
                                <button style="margin-top:20px" class="pull-right btn btn-info">Create Report</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
 </div>
 @endsection

 