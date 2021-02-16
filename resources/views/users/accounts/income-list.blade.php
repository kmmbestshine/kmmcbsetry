@extends('users.layouts.default')
@section('title', 'Income List')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Income List</li>
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
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                             <form class="form-horizontal" action="{{route('acc.post.incomelist')}}" method="post">
                            {!! csrf_field() !!}
                          
                      <div class="form-group">
                          <label for="year" class="col-md-4 control-label">@lang('From Date')</label>

                          <div class="col-md-6">
                             <!-- <input id="from_date" type="date" class="form-control datepicker" name="from_date"   required>-->
                              <input type="date" id="from_date" name="from_date" class="form-control" required>
                              
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="year" class="col-md-4 control-label">@lang('To Date')</label>

                          <div class="col-md-6">
                             <!-- <input id="to_date" type="date" class="form-control datepicker" name="to_date"   required>-->
                              <input type="date" id="to_date" name="to_date" class="form-control" required>
                              
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="name" class="col-md-4 control-label">@lang('Sector Name')</label>

                          <div class="col-md-6">
                              <select class="form-control" id="sector_name" name="sector_name" required>
                                <option value="">Select Category</option>
                                <option value="0">All Category</option>
                                @foreach($sectors as $sector)
                                  <option value="{{$sector->id}}">{{$sector->name}}</option>
                                @endforeach
                              </select>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
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
        </div>
        @if($input)
        <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2" id="paymentRecipt">
          <div id="printableArea">
            <div class="row">
              <?php if($input['sector_name'] == 0){
                $sector="All";
              }else{
                $sector1=$input['sector_name'];
                $sector2 = \DB::table('account_sectors')->where('type', 'income')->where('id', $sector1)->first();
                $sector=$sector2->name;
              }
             ?>
          
      <div class="receipt-header">
        <div class="col-xs-6 col-sm-6 col-md-5">
          <div class="receipt-left">
            <img class="img-responsive" alt="student-image" src="{{ asset($school->image) }}" style="width: 30%;hight: 20%; border-radius: 23px;">
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-left">
          <div class="receipt-left">
            <h3 style="text-align: left;">{{ $school->school_name }}</h3>
            <p>{{ $school->email }} <i class="fa fa-envelope-o"></i></p>
            <p>{{ $school->address }} <i class="fa fa-location-arrow"></i></p>
          </div>
        </div>
      </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
             <div id="printDiv">
                    <div class="table-responsive">
                      
                      
                     
                      <h5>{{$sector}} - Category Income Report From - {{$input['from_date']}}- To - {{$input['to_date']}}</h5>
                      <table class="table table-data-div table-bordered table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">@lang('Date')</th>
                            <th scope="col">@lang('Sector Name')</th>
                            <th scope="col">@lang('Description')</th>
                            <th scope="col">@lang('Amount')</th>
                           <!-- <th scope="col">@lang('Action')</th>-->
                          </tr>
                        </thead>
                        <tbody>
                          <?php $j=1; ?>
                          @foreach($incomes as $income)
                          <tr>
                            <td><?php echo  $j++ ?></td>
                             <td>{{ Carbon\Carbon::parse($income->date)->format('d-m-Y')}}</td>
                            <td>{{$income->name}}</td>
                            <td>{{$income->description}}</td>
                            <td>{{$income->amount}}</td>
                           <!-- <td>
                                    <div class="row">
                                                <div class="col-md-4">
                                                    <form action="{{url('accounts/delete-income1',$income->id)}}" method="post">
                                                      {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')" ><i class="fa fa-trash-o"></i> Delete</button>
                                                      
                                                </div>
                                            </div>
                                </td>-->
                        {{--  <td><a title='Edit' class='btn btn-danger btn-sm' href="{{url('accounts/delete-income1/'.$income->id)}}">@lang('Delete')</a></td>--}}
                          </tr>
                          @endforeach
                          <?php  $total=0; ?>
                          <tr>
                                  
                                    <td colspan="4"> Grand Total </td>
                                    <td>
                                      
                                      @foreach($incomes as $ic)
                                        @php
                                        $price = $ic->amount;
                                        $total += $price;
                                        @endphp
                                            
                                       @endforeach
                                       Rs. {{$total}}
                                    </td>
                                    
                                <tr/>
                        </tbody>
                      </table>
                      
                    </div>
                  
            </div>
          </div>
    </div>
   </div>

<input type="button" onclick="printDiv('printableArea')" value="print" />
</div>
@endif
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script>
$('.datepicker').datepicker({
  format: 'yyyy',
  viewMode: "years",
  minViewMode: "years",
  autoclose:true,
});
$("#btnPrint").on("click", function () {
            var divContents = $("#printDiv").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>@lang('Income List')</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.document.body.innerHTML = divContents;
            printWindow.print();
        });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <style>
    canvas {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
    }
    </style>
    <script>
        'use strict';

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

    var color = Chart.helpers.color;
    var config = {
      type: 'bar',
      data: {
        datasets: [{
                    label: @json( __('Income')),
          backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
          borderColor: window.chartColors.green,
          fill: false,
          data: [@foreach($incomes as $s)
                        {
                            t:"{{Carbon\Carbon::parse($s->created_at)->format('Y-d-m')}}",
                            y:{{$s->amount}}
                        },
                        @endforeach]
        }]
                },
      options: {
        title: {
                    display: true,
          text: @json( __('Income (In Dollar) in Time Scale'))
        },
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            type: 'time',
            time: {
              parser: 'YYYY-DD-MM',
              tooltipFormat: 'll HH:mm'
            },
            scaleLabel: {
              display: true,
              labelString: @json( __('Date'))
            }
          }],
          yAxes: [{
            scaleLabel: {
              display: true,
              labelString: @json( __('Money'))
            }
          }]
        },
      }
    };

    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myLine = new Chart(ctx, config);

    };
      </script>


@endsection