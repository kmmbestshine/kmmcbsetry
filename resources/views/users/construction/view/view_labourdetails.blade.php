@extends('users.layouts.default')
@section('title', 'View Labour')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Labour</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>View Labour </h2>
</div>

<!-- success -->
@if($msg )
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Well done!</strong> {{ $msg  }}
            </div>
        </div>
    </div>
@endif
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
                    @if(!empty($labour_name))
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Building Name</th>
                                <th>Work Category</th>
                                <th>Contractor Name</th>
                               <th>Labour Name</th>
                               <th>Labour Types</th>
                                <th>Phone No</th> 
                                <th>Address</th> 
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                             <?php $j=1; ?>
                           <?php for($i = 0; $i < count($labour_name); $i++) : ?>
                                <tr>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{$build_name}}</td>
                                    <td>{{$work_type}}</td>
                                    <td>{{$contractor_name}}</td>
                                    <td>{{$labour_name[$i]}}</td>
                                    <td>{{$user_type[$i]}}</td>
                                    <td>{{$phone_no[$i]}}</td>
                                    <td>{{$address[$i]}}</td>
                                    
                                    <th>
                                         <form  method="get" action="{{ route('labour.construction.delete') }}"  > 
                                       {!! csrf_field() !!}
                                            
                                            <input type="hidden" name="labour_id" value="{{$labour_id[$i]}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                   
                    @endif
            </div>
        </div>
    </div>
</div>

@endsection