@extends('users.layouts.default')
@section('title', 'Fee Structure')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Fee Structure</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Fee Head</h2>
</div>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

<div class="row" ng-app="app">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Add Classwise Fees </strong></h3>
                <div class="text-right">
                    <a href="{{route('get.previous.payment')}}" class="btn btn-info btn-rounded">Add Studentwise Fees</a>
                </div>
            </div>
            <div class="panel-body" ng-controller="feeTable" id="feeTable">
                <form method="post" action="{{ route('post fee structure')}}">
                    {!! csrf_field() !!}

<!--                     <div class="row">
                        <div class="col-md-2">
                            <b>Select class :</b>
                        </div>
                        <div class="col-md-10">
                            @if(count($classes) > 0)
                            <?php $i=0; ?>
                            @foreach($classes as $key => $value)
                                <?php $i++; 
                                    $row = $i % 6;
                                ?>
                                @if($row == '1')
                                    <div class='row'>
                                @endif
                                <div class='col-md-2'>
                                    <input type="radio" name="class_id" value="{{$value-> id}}">&nbsp{{$value-> class}}
                                </div>
                                @if($row == '0')
                                    </div>
                                @endif  
                            @endforeach
                            @endif
                        </div>
                    </div> -->

                    <br/>
<!--                     <div class="row">
                        <div class="col-md-2">
                            <br/><b>select session : </b>
                        </div>
                        <div class="col-md-8 center-block">
                            <div></div>
                            @if(count($session)>0)
                            <select name="session" id="selectSession">
                                @foreach($session as $key=>$value)
                                    <option value="{{$value-> session}}">{{ $value-> session}}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>
                    
                        <div class="form-group">
                            <button ng-hide="!fees.length" type="button" class="btn btn-danger pull-right" ng-click="remove()">Remove</button>
                            <button class="btn btn-primary addnew pull-right" type="button" ng-click="addNew()">Add New</button>
                        </div>
                    </div> -->

                    <!-- changes done by parthiban 14-11-2017 -->
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control class" name="class_id" id="selectClass">
                                <option value="">Select Class</option>
                                @foreach($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->class }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control session" name="session" id="selectSession">
                                <option value="">Select Session</option>
                                @foreach($session as $value)
                                    <option value="{{ $value->session }}">{{ $value->session }}</option>
                                @endforeach                                
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="button" class="btn btn-warning pull-left" ng-click="getfee()" value="Get Fee"/>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group">
                            <button ng-hide="!fees.length" type="button" class="btn btn-danger pull-right" ng-click="remove()">Remove</button>
                            <button class="btn btn-primary addnew pull-right" type="button" ng-click="addNew()">Add New</button>
                        </div>                    
                    </div>                    
                    <!-- changes done by parthiban 31-10-2017 -->
                    <p id="jsErrors" style="color: red;font-weight: bold;"></p>
                    <table class="table table-striped table-bordered" id="feesTable">
                        <thead>
                            <tr>
                                <th><input type="checkbox" ng-model="selectedAll" ng-click="checkAll()" /></th>
                                <th>Fees Name</th>
                                <th>Student Type</th>
                                <th>Payment Type</th>
                                <th>Amount</th>
                                <th>Payment Last date</th>
                                <th>Fine(Per day)</th>                                
                                <th>No of installment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="fee in fees">
                                <td>
                                    <input type="checkbox" ng-model="fee.selected"/>
                                    <input type="hidden" name="rows" id="rows" value="<% $index+1 %>"/>
                                </td>
                                <td><input type="text" name="fee_name_<% $index %>" class="form-control" ng-model="fee.feesName" required/></td>
                                <td>
                                    <select ng-options="studenttype for studenttype in fee.studentType track by studenttype" 
                                            id="student_type_<% $index %>" name="student_type_<% $index %>" ng-model="studentType" required>
                                    </select>
                                </td>
                                <td>
                                    <select ng-options="paymenttype for paymenttype in fee.paymentType track by paymenttype" ng-change="checkInstallment($event)" 
                                            ng-model="paymentType" name="payment_type_<% $index %>" id="payment_type_<% $index %>" required>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" ng-model="fee.amount" name="amount_<% $index %>" id="amount_<% $index %>" required/>
                                </td>
                                <td>
                                    <input type="text" class="form-control datepicker" ng-model="fee.last_date" name="last_date_<% $index %>" id="last_date_<% $index %>">
                                </td> 
                                <td>
                                    <input type="number" class="form-control" ng-model="fee.fine" name="fine_<% $index %>" id="fine_<% $index %>">
                                </td>                                
                                <td>
                                    <input type="text" ng-keyup="showInstallment($event)" name="installment_<% $index %>" id="installment_<% $index %>" disabled/>
                                    <input type="hidden" ng-keyup="showInstallment($event)" name="installment_id_<% $index %>" id="installment_id_<% $index %>" value=""/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <input type="button" class="btn btn-warning pull-left" ng-click="getfee()" value="Get Fee"/> -->
                    <input type="submit" name="post_fees" value="submit" class="btn btn-success pull-right" id="post_fees"/>
                </form>
                <!-- Modal -->
                <div id="myInstallmentModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                <h4 class="modal-title">Installment</h4>
                            </div>
                            <div class="modal-body">
                                <div id= "installment_form">
                                    <form>
                                        <table class="table table-striped table-bordered" id="installmentTable" >
                                            <tr><th>S.No</th><th>Amount</th><!--<th><input type="radio" name="instalmentType" id="enableDate" value="date" > Date</th>--><th><input type="radio" name="instalmentType" value="type" id="enableInstallmentType" checked> Installment Type</th></tr>
                                        </table>
                                        <div class="row">
                                            <div class="show-error-msg" style="display:none;font-size: 14px;font-weight: bold;color: red;">All fields required</div>

                                            <input type="button" class="btn btn-success col-md-offset-10 col-md-2" ng-click="submitInstallment($event)" value="submit" id="post_installment"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>-->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection