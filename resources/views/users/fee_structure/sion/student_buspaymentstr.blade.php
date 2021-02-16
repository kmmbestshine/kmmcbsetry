@extends('users.layouts.default')
@section('title', 'Fee Structure')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Add Bus Wise Fee </a></li>
        <li class="active">Add  Bus Fee </li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('fee.add.sion.studentmapping')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Bus Fee Through Excel Sheet</strong></h3>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="data" class="form-control">
                                                    <option value="">Select Add Bus Fee</option>
                                                    <option value="studentmapping">Add Bus Fee</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-info">Upload Bus Fee</button>
                                                &times;&times;&times;&times;&times;&times;&times;<a href="{{route('get.students.buspayments123')}}" class="btn btn-info">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Sample Files For Data Upload Manager</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{url('data-manager/studentmapping.xlsx')}}" class="btn btn-info">Bus Fee Mapping Sample File</a>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="page-content-wrap">
            <br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">    
                            <h3 class="panel-title">Bus ID, Route ID and Boarding ID</h3>  
                        </div>
                        <?php $k=1; ?>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Bus No</th>
                                        <th>Bus ID</th>
                                        <th>Route Name</th>
                                        <th>Route ID</th>
                                        <th>Boarding Name</th>
                                        <th>Boarding ID</th>
                                        <th>Bus Fee</th>
                                        <th>Delete Boarding</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($boardings as $board)
                                        <tr>
                                            <td>{{ $k++ }}</td>
                                            <td>{{ $board['bus_no'] }}</td>
                                            <td>{{ $board['bus_id'] }}</td>
                                            <td>{{ $board['route'] }}</td>
                                            <td>{{ $board['route_id'] }}</td>
                                            <td>{{ $board['boarding'] }}</td>
                                             <td>{{ $board['boardingid'] }}</td>
                                             <td>{{ $board['bus_fee'] }}</td>
                                             <th>
                                            <form  method="get" action="{{ route('fee.sion.board.delete') }}"  > 
                                            <input type="hidden" name="feeId" value="{{$board['boardingid']}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                            </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
 </div>


@endsection

