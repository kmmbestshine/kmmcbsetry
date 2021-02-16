@extends('users.layouts.default')
@section('title', 'View Building')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Building</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>View Building </h2>
</div>
@if($msg)
   <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Alert!</strong> {{ $msg }}
        </div>
    </div>
@endif
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
               
                    @if(!empty($build_name))
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Created Date</th>
                                <th>Building Name</th>
                                <th>Area</th>
                                <th>Location</th> 
                                <th>Description</th> 
                                <th>image</th> 
                                <th>pdf</th> 
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                             <?php $j=1; ?>
                           <?php for($i = 0; $i < count($build_name); $i++) : ?>
                                <tr>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{$dates[$i]}}</td>
                                    <td>{{$build_name[$i]}}</td>
                                    <td>{{$area[$i]}}</td>
                                    <td>{{$location[$i]}}</td>
                                    <td>{{$description[$i]}}</td>
                                    <td>@if($imagefile[$i]!='')
                                                    <a href="{{ route('build.download.image', $build_id[$i]) }}"class="btn btn-info">Image Download</a>
                                                @else
                                                    No Image
                                                @endif</td>
                                    <td>@if($pdffile[$i]!='')
                                                    <a href="{{ route('build.download.pdf', $build_id[$i]) }}"class="btn btn-info">PDF Download</a>
                                                @else
                                                    No PDF Found
                                                @endif</td>
                                    <th>
                                         <form  method="get" action="{{ route('building.construction.delete') }}"  > 
                                       
                                            
                                            <input type="hidden" name="buildId" value="{{$build_id[$i]}}"/>
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