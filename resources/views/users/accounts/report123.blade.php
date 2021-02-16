@extends('users.layouts.default')
@section('title', 'Summary Report')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Summary Report</li>
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
       <form class="form-horizontal" action="{{route('acc.post.reportlist')}}" method="post">
                            {!! csrf_field() !!}
      <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                          <label for="year" class="col-md-4 control-label">@lang('From Date')</label>

                          <div class="col-md-6">
                              <input id="from_date" type="date" class="form-control datepicker" name="from_date"   required>

                              
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                          <label for="year" class="col-md-4 control-label">@lang('To Date')</label>

                          <div class="col-md-6">
                              <input id="to_date" type="date" class="form-control datepicker" name="to_date"   required>

                              
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-1">
                          <button type="submit" class="btn btn-danger">@lang('Get Income List')</button>
                        </div>
                        <div class="col-sm-offset-1 col-sm-1">
                          
                          <a href="{{route('accounts.index')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                       
                      </div>
                      

             </form>
              </div>

               
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
                            <h5>Summary Report</h5>


                            <div class="row">
                            <div class="column" style="background-color:#90EE90;">
                              <h2>INCOME</h2>
                              
                              <div class="table-responsive" >
                               
                           <table  class="table table-striped table-bordered table-hover">
                             <h3 class="panel-title"> Category Wise Report</b>  </h3>
                             <thead>
                                
                                 <tr>
                                    <th>S.No</th>
                                    <th>Category Name</th>
                                    <th>Amount</th>
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; $total=0;?> 
                              @if($getsector)
                              @foreach($getsector as $sector)
                                            @foreach($sector as $get)
                                        <tr>
                                            
                                            <td ><?php echo  $j++ ?></td> 
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->sub_amount}}</td>
                                                  @php
                                                    $price = $get->sub_amount;
                                                    $total += $price;
                                                @endphp
                                </tr>
                                @endforeach
                            @endforeach
                           
                            <tr>
                                    <td colspan="2"> Grand Total </td>
                                    <td>
                                        
                                            Rs. {{$total}}
                                       
                                    </td>
                                <tr/>
                             @endif
                             </tbody>
                         </table>
                        
                         </div>

                            </div>
                            <div class="column" style="background-color:#ffcccb;">
                              <h2>EXPENSE</h2>

                               <div class="table-responsive" >
                                
                           <table  class="table table-striped table-bordered table-hover">
                             <h3 class="panel-title"> Category Wise Report </h3>
                             <thead>
                                
                                 <tr>
                                    <th>S.No</th>
                                    <th>Category Name</th>
                                    <th>Amount</th>
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; $total1=0; ?> 
                             @if($getsectors)
                                        <tr>
                                            @foreach($getsectors as $sectors)
                                            @foreach($sectors as $get)
                                            <td ><?php echo  $j++ ?></td> 
                                            <td>{{$get->name}}</td>
                                            <td>{{$get->sub_expamount}}</td>
                                            @php
                                                    $price = $get->sub_expamount;
                                                    $total1 += $price;
                                                @endphp
                             
                                </tr>
                            @endforeach
                            @endforeach
                           <tr>
                                    <td colspan="2"> Grand Total </td>
                                    <td>
                                        
                                            Rs. {{$total1}}
                                       
                                    </td>
                                <tr/>
                            @endif
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
     </div>
 </div>
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>


@endsection