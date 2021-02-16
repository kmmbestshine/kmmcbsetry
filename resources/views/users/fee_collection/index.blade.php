@extends('users.layouts.default')
@section('title', 'Fee Collection')
@section('cram')
<!-- <ul class="breadcrumb">
<li><a href="{{route('user.dashboard')}}">Home</a></li>                    
<li class="active">Fee Collection</li>
</ul> -->
@endsection
@section('contant')
</div></div>
@if(Input::old('success'))
<div class="row">
<div class="col-md-10 col-md-offset-1">
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Well done!</strong> {!! Input::old('success') !!}
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
        <form class="form-horizontal" role="form" method="post" action="{{route('post.fee')}}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add Fee Collection</strong></h3>
                    <div class="text-right">
                     <a href="{{route('view.fee')}}" class="btn btn-info">View Fee</a>
                 </div>
             </div>
             <div class="panel-body">
                <div class="row">
                    <form method="get" action="">
                        <div class="col-md-12">    
                            <input type="text" class="form-control searchStudent" placeholder="Enter Registration No./Student Name">

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
                                <!-- <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary btn-block">Get</button>
                                </div> -->
                            </form>
                        </div><br>
                        <div class="row">
                            <form action="{{route('fee.collection.post')}}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="student_id" id="student_id">
                                <div class="col-md-4">
                                    <table class="table well">
                                        <tr>
                                            <th>Reg. No. : </th>
                                            <td id="regNo"></td>
                                            <td rowspan="3"><img src="{{url('student/default_avatar.png')}}" class=" img-thumbnail studentImg pull-right" style="height:100px"></td>
                                        </tr>
                                        <tr>
                                            <th>Class :</th>
                                            <td colspan="2" id="class"></td>
                                        </tr>
                                        <tr>
                                            <th>Section :</th>
                                            <td colspan="2" id="section"></td>
                                        </tr>
                                        <tr>
                                            <th>Name :</th>
                                            <td colspan="2" id="name"></td>
                                        </tr>
                                        <tr>
                                            <th>Father Name :</th>
                                            <td colspan="2" id="father"></td>
                                        </tr>
                                        <tr>
                                            <th>Mother Name :</th>
                                            <td colspan="2" id="mother"></td>
                                        </tr>
                                        <tr>
                                            <th>DOB :</th>
                                            <td colspan="2" id="dob"></td>
                                        </tr>
                                        <tr>
                                            <th>Email :</th>
                                            <td colspan="2" id="email"></td>
                                        </tr>
                                        <tr>
                                            <th>Contact No. :</th>
                                            <td colspan="2" id="mobile"></td>
                                        </tr>
                                        
                                        
                                    </table>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Payment Date</label>
                                            <input type="date" class="form-control" name="date"></div>
                                            <div class="col-md-6">
                                                <label>Pay Type</label>
                                                <select class="form-control paymentType" name="pay_type">
                                                    <option>Choose Type</option>
                                                    
                                                    <option value="annual">Annual</option>
                                                    <option value="month">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row month">
                                            <div class="col-md-12"><br>
                                                <label>Month</label>
                                                <ul class="list-group month_list" id="months">
                                                  
                                                </ul>
                                            </div>
                                        </div><br>
                                        <div class="row ">
                                            <div class="col-md-6">
                                               <table class="table">
                                                   <thead>
                                                       <tr>
                                                           <th>Fee Type</th>
                                                           <th>Fee Amount</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody class="month" id="priceList">
                                                    
                                                   </tbody>
                                                   <tbody class="annual" id="priceList1">
                                                    
                                                   </tbody>
                                               </table> 
                                               <label>Remarks</label>
                                               <textarea name="remarks" rows="4" style="resize:none;" class="form-control"></textarea>
                                               <br>
                                               <label>Discount</label>
                                               <input type="number" id="discount" name="discount" value="" placeholder="0.00" class="form-control">
                                           </div>                                            
                                           <div class="col-md-6">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Fee Type</th>
                                                        <th>Fee Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                   <tr id="bus_stop_id">
                                                   </tr>
                                                   <tr>
                                                       <td>Annual Fee</td>
                                                       <td id="annual"></td>
                                                   </tr>
                                                   <tr>
                                                       <td>Total Fee</td>
                                                       <td id="total_fee"></td>
                                                   </tr>
                                                   <tr>
                                                       <td>Pay Fee</td>
                                                       <td id="pay_balance"></td>
                                                   </tr>
                                                   <tr>
                                                       <td>Discount</td>
                                                       <td id="total_discount"></td>
                                                   </tr>
                                                   <tr>
                                                       <th>Balance</th>
                                                       <th id="balance"></th>
                                                   </tr>
                                               </tbody>
                                           </table>
                                           
                                           <!-- <div class="col-md-12"> -->
                                           <label>Pay Rs.</label>
                                           <input type="text" name="pay" class="form-control" placeholder="0.00" max="">

                                           <!-- </div> -->
                                       </div>
                                   </div>
                                   
                                   <br>
                                   <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-10">
                                    
                                </div>
                                <div class="col-md-2 text-center">
                                    <button type="submit" class="btn-block btn btn-info">Add Fee Collection</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>  
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

@endsection