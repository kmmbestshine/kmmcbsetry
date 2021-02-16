@extends('users.layouts.default')
@section('title', 'Bus Details')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Bus Details </li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Bus Details </h2>
        </div>
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
                        <strong>Well done!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
               <form class="form-horizontal" role="form" method="get" action="{{ route('add.bus.routename') }}" > 
                
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Bus-Route Details</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Bus No </label>
                                        <div class="col-md-9">
                                            <select name="bus_type" class="form-control"
                                                    onchange="return select_employee_designation(this.value)">
                                                <option value=""> -- Select Bus No-- </option>
                                                <option value="other">Add New Bus No</option>
                                                 @foreach($buses as $buss)
                                                <option value="{{ $buss->id }}">{{ $buss->bus_no }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="display:none" id="newbus_no">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">New Bus No</label>
                                        <div class="col-md-9">
                                            <input  id="newbus_no_value" name="newbus_no" class="form-control" placeholder="Enter Bus No">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <br>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Route Name</label>
                                        <div class="col-md-9">
                    <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                           <th> Route Name</th>
                           <th> Delete</th>
                          </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input type="text" name="route[]" class="fname" placeholder="Enter Route Name"/>
                            </td>
                            <td>
                                <input type="button" value="Delete" class="btn btn-danger remove"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p>
                        <input type="button" value="Insert row" class="btn btn-primary btn-sm">
                    </p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                        <br/>
                            <br/>
                            <br/>
                           
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-info btn-lg">Submit</button>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('get.students.buspayments123')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                    <table  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Bus No</th>
                                        <th>Route</th>
                                        <th>Route Delete</th>
                                        <th>Bus No Delete</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(!empty($busdetail))
                                   <?php $j=1;  ?>
                                        @foreach($busdetail as $bus)
                                        <tr>
                                    <tr>
                                    <td>{{ $j++ }}</td>
                                    <td>{{$bus->bus_no}}</td>
                                    <td>{{$bus->route_name}}</td>
                                    
                                      <th>
                                         <form  method="get" action="{{ route('fee.sion.busdet.delete') }}"  > 
                                            <input type="hidden" name="routeId" value="{{$bus->id}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                    <th>
                                         <form  method="get" action="{{ route('fee.sion.busdet.delete') }}"  > 
                                            <input type="hidden" name="busId" value="{{$bus->busid}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                                   @endif
                                </tbody>
                            </table>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript">
$('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td><input type="text" name="route[]" class="fname" placeholder="Enter Route Name"/></td><td><input type="button" value="Delete" class="btn btn-danger remove"/></td></tr>')

});
    </script>
    <script type="text/javascript">
        function select_employee_designation(value)
        {
            if(value=='other')
            {
                $("#newbus_no").show();
            }
            else
            {
                $("#newbus_no").hide();
                $("#newbus_no_value").val(value);
            }
        }
    </script>

@endsection

