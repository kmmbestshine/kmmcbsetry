@extends('users.layouts.default')
@section('title', 'Add Overtime')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
        <li class="active">OverTime</li>
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
                        <strong>Oohh!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>Add OverTime</strong>
                            </h3>
                            <div class="text-right">
                                <a href="{{route('viewPayrollIndex')}}" class="btn btn-info btn-rounded">Payroll</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('get_deduction')}}" class="btn btn-info btn-rounded">Add Deduction</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('add_professional_tax')}}" class="btn btn-info btn-rounded">Add Professional Tax</a>
                                &nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9">
                                            <input  type="date" class="form-control" name="special_date" placeholder="Enter Date">
                                            @foreach($errors->get('special_date') as $sdate)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $sdate }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Start</label>
                                        <div class="col-md-9">
                                            <input  type="text" class="form-control"
                                                    name="start" placeholder="Enter Start Time">
                                            @foreach($errors->get('start') as $dstart)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $dstart }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">End</label>
                                        <div class="col-md-9">
                                            <input  type="text" class="form-control" name="end" placeholder="Enter End Time">
                                            @foreach($errors->get('end') as $dend)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $dend }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Bonus</label>
                                        <div class="col-md-9">
                                            <input  class="form-control" name="bonus" placeholder="Enter the Bonus Value"
                                                    onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                            @foreach($errors->get('bonus') as $dbonus)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $dbonus }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Note</label>
                                        <div class="col-md-9">
                                            <textarea  class="form-control" name="reason" rows="3" placeholder="Describe yourself here..."></textarea>
                                            @foreach($errors->get('reason') as $dreason)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $dreason }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12 pull-right">
                                            <center>
                                                <button type="submit" class="btn btn-info" value="bonus" name="submit_bonus">
                                                    <i class="fa fa-floppy-o fa-left"></i>
                                                    Add Detail
                                                </button>
                                            </center>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
           @if(count($getBonus)>0)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>View Details</center></h3>
                            <ul class="panel-controls">
                                <li>
                                    <a href="#" class="panel-collapse">
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-refresh">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-remove">
                                        <span class="fa fa-times"></span>
                                    </a>
                                </li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Bonus</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getBonus as $key => $bonus)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ date('d-m-Y',strtotime($bonus->date)) }}</td>
                                            <td>{{ $bonus->start }}</td>
                                            <td>{{ $bonus->end }}</td>
                                            <td>{{ $bonus->bonus }}</td>
                                            <td>
                                                <a href="{{route('edit_bonus', $bonus->id)}}" class="btn btn-info">
                                                    <span class="fa fa-pencil fa-left"></span>
                                                    Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete_bonus', $bonus->id)}}" class="btn btn-danger">
                                                    <span class="fa fa-trash fa-left"></span>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
           @endif
        </div>
@endsection