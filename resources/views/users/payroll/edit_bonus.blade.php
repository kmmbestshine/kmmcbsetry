@extends('users.layouts.default')
@section('title', 'Edit Overtime')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
        <li><a href="{{route('add_bonus_payroll')}}">Overtime</a></li>
        <li class="active">Edit</li>
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
                                <strong>Edit Bonus</strong>
                            </h3>
                            <div class="text-right">
                                <a href="{{route('add_bonus_payroll')}}" class="btn btn-info btn-rounded">Add Overtime</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('get_deduction')}}" class="btn btn-info btn-rounded">Add Deduction</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{route('add_professional_tax')}}" class="btn btn-info btn-rounded">Add Professional Tax</a>
                                &nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="{{ route('update_bonus') }}">
                                {!! csrf_field() !!}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9">
                                            <input  type="date" class="form-control"
                                                    @if($getBonus->date) value="{{ $getBonus->date }}" @endif disabled>
                                            <input  type="hidden" class="form-control" name="special_date"
                                                    @if($getBonus->date) value="{{ $getBonus->date }}" @endif>
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
                                                    name="start" @if($getBonus->start) value="{{ $getBonus->start }}" @endif>
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
                                            <input  type="text" class="form-control" name="end" @if($getBonus->end) value="{{ $getBonus->end }}" @endif>
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
                                            <input  class="form-control" name="bonus"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                    @if($getBonus->bonus) value="{{ $getBonus->bonus }}" @endif>
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
                                            <textarea  class="form-control" name="reason" rows="3">@if($getBonus->reason) {{ trim(ucfirst($getBonus->reason)) }} @endif</textarea>
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
                                                <input type="hidden" name="bonus_id" @if($getBonus->id) value="{{ $getBonus->id }}" @endif>
                                                <button type="submit" class="btn btn-info" value="updating" name="update_bonus">
                                                    <i class="fa fa-pencil-square-o fa-left"></i>
                                                    Update Detail
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
        </div>
@endsection