@extends('users.layouts.default')
@section('title', 'Expense List')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Expense List</li>
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
              <div class="page-panel-title">@lang('View List of  Expense')
                <button class="btn btn-xs btn-success pull-right" role="button" id="btnPrint" ><i class="material-icons">print</i> @lang('Print This Expense List')</button></div>
                    <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('acc.post.expenselist')}}" method="post">
                            {!! csrf_field() !!}
                          
                      <div class="form-group">
                          <label for="year" class="col-md-4 control-label">@lang('From Date')</label>

                          <div class="col-md-6">
                              <input type="date" id="from_date" name="from_date" class="form-control" required>

                              
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="year" class="col-md-4 control-label">@lang('To Date')</label>

                          <div class="col-md-6">
                              <input type="date" id="to_date" name="to_date" class="form-control" required>

                              
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
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
                          <button type="submit" class="btn btn-danger">@lang('Get Expense List')</button>
                        </div>
                        <div class="col-sm-offset-1 col-sm-1">
                          
                          <a href="{{route('accounts.index')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          
            <div class="col-md-12">
              <div id="printableArea">
                 <div class="row">
                        <?php if($input['sector_name'] == 0){
                          $sector="All";
                        }else{
                          $sector1=$input['sector_name'];
                          $sector2 = \DB::table('account_sectors')->where('type', 'expense')->where('id', $sector1)->first();
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
                    <div class="table-responsive">
                      <h5>{{$sector}} - Category Expense Report From - {{$input['from_date']}}- To - {{$input['to_date']}}</h5>
                      <table class="table table-data-div table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">@lang('Date')</th>
                            <th scope="col">@lang('Name')</th>
                            <th scope="col">@lang('Sector Name')</th>
                            <th scope="col">@lang('Amount')</th>
                            <th scope="col">@lang('Description')</th>
                            <th scope="col">@lang('Cash Deposit')</th>
                            <th scope="col">@lang('Mode')</th>
                            <th scope="col">@lang('Cheque No-Date-Bank')</th>
                            <th scope="col">@lang('Online Transaction')</th>
                           {{-- <th scope="col">@lang('Action')</th>--}}
                          </tr>
                        </thead>
                        <tbody>
                          <?php $j=1; ?>
                          @foreach($expenses as $expense)
                          <tr>
                            <td><?php echo  $j++ ?></td>
                            <td>{{Carbon\Carbon::parse($expense->date)->format('d-m-Y')}}</td>
                            <td>{{$expense->name}}</td>
                            <td>{{$expense->expense_type}}</td>
                            <td>{{$expense->amount}}</td>
                            <td>{{$expense->description}}</td>
                            <td>{{$expense->cash_deposit}}</td>
                            <td>{{$expense->mode}}</td>
                            <td>{{$expense->cheq_no}}-{{$expense->cheq_date}}-<br>{{$expense->cheq_bankname}}</td>
                            <td>{{$expense->trans_no}}-<br>{{$expense-> online_bankname}}</td>
                            <td>
                                    <div class="row">
                                                <div class="col-md-4">
                                                    <form action="{{route('acc.add.deleteexpense',$expense->id)}}" method="get">
                                                      {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')" ><i class="fa fa-trash-o"></i> Delete</button>
                                                      
                                                </div>
                                            </div>
                                </td>
                          {{--  <td><a title='Edit' class='btn btn-info btn-sm' href='{{url("accounts/edit-expense")}}/{{$expense->id}}'>@lang('Edit')</a></td>--}}
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      
                    </div>
                    <input type="button" onclick="printDiv('printableArea')" value="print" />
            </div>
          </div>
    </div>
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
            printWindow.document.write('<html><head><title>@lang('Expense List')</title>');
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
                    label: @json( __('Expense')),
          backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
          borderColor: window.chartColors.red,
          fill: false,
          data: [@foreach($expenses as $s)
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
          text: @json( __('Expense (In Dollar) in Time Scale'))
        },
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            type: @json( __('time')),
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