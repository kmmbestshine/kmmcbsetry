@extends('users.layouts.default')
@section('title', 'View Fee Structure')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Fee Structure</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>Fee Structure </h2>
</div>

<!-- success -->
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

<!-- error -->
@if(Input::old('error'))
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Alert!</strong> {{ Input::old('error') }}
        </div>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            
            <div class="panel-body">
                @if($msg )
            <div class="alert alert-success" style="text-align: center">
            <strong></strong> class="alert-link">Class Fees Structure Deleted Successfully !!!   
            </div>
                @endif
                   
                    <table  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Bus No</th>
                                        <th>Route</th>
                                       
                                        <th>Delete</th> 
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(!empty($route))
                                   <?php $j=1;  ?>
                                        <?php for($i = 0; $i < count($route); $i++) : ?>
                                        <tr>
                                    <tr>
                                    <td>{{ $j++ }}</td>
                                    <td>{{$bus_no[$i]}}</td>
                                    <td>{{$route[$i]}}</td>
                                    
                                      <th>
                                         <form  method="get" action="{{ route('fee.sion.busdet.delete') }}"  > 
                                       
                                            
                                            <input type="hidden" name="feeId" value="{{$routeid[$i]}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>

                                    
                                </tr>
                                <?php endfor ?>
                                   @endif
                                </tbody>
                            </table>
                    
                   
                   
            </div>
        </div>
    </div>
</div>

@endsection