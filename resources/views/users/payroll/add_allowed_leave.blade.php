@extends('users.layouts.default')
@section('title', 'Add Bonus')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
        <li class="active">Allowed Leave</li>
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
                                <strong>Allowed Leave Entry</strong>
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
                                        <label class="col-md-3 control-label">Allowed Leave</label>
                                        <div class="col-md-9">
                                            <input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                   class="form-control" name="leave_days">
                                            @foreach($errors->get('leave_days') as $ldays)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $ldays }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 pull-right">
                                            <center>
                                                <button type="submit" class="btn btn-info" value="allowed_leave" name="submit_allowed_leave">
                                                    <i class="fa fa-floppy-o fa-left"></i>
                                                    Create
                                                </button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                       {{-- <div class="modal fade" id="editAllowedLeave" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Actual Leave entry</h4>

                                    </div>

                                    <div class="modal-body">

                                        <form class="form" role="form" method="POST" action="{{ route('edit_allowed_leave') }}">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-8">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-labe">Leave</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                                   value="@if($editAllowedLeave->allowed_leave){{ $editAllowedLeave->allowed_leave }} @endif"    class="form-control" name="edit_leave_days">
                                                                @foreach($errors->get('edit_leave_days') as $editdays)
                                                                    <div class="alert alert-danger my-alert" role="alert">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            <span class="sr-only">Close</span>
                                                                        </button> {{ $editdays }}
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="hidden" value="{{ $editAllowedLeave->id }}" name="allowed_id">
                                                        <button type="submit" class="btn btn-primary"  name="edit_allowed_leave" value="allowed_leave">Create</button>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                                            --}}{{--<span aria-hidden="true">&times;</span>--}}{{--Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                </div>

                            </div>

                        </div>--}}
                    </div>
                </div>
           </div>
           @if(count($getAllowedLeave)>0)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>View Allowed Leave Details</center></h3>
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
                                        <th>Allowed Leave</th>
                                       {{-- <th>Edit</th>--}}
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getAllowedLeave as $key => $leave)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $leave->allowed_leave }}</td>
                                           {{-- <td>
                                                <button type="button" class="btn btn-info " data-toggle="modal" data-target="#editAllowedLeave">
                                                    <span class="fa fa-pencil fa-left"></span>
                                                    Edit
                                                </button>
                                                <a href="{{route('edit_allowed_leave', $leave->id)}}" class="btn btn-info" >
                                                    <span class="fa fa-pencil fa-left"></span>
                                                    Edit
                                                </a>
                                            </td>--}}
                                            <td>
                                                <a href="{{route('delete_allowed_leave', $leave->id)}}" class="btn btn-danger" >
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