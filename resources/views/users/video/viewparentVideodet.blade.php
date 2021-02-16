@extends('users.layouts.default')
@section('title', 'View Video / Audio / PDF')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Video / Audio / PDF</li>
</ul>
@endsection
@section('contant')
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>View Video / Audio / PDF </h2>
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

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            
            <div class="panel-body">
               
                    @if(!empty($studentName))
                   
                    <table class="table table-striped table-bordered">
                        <h3 class="panel-title"> Student Video / Audio / PDF :-  <b>  {{$schoolname->school_name}}</b></h3>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Created Date</th>
                                <th>Student Name</th>
                                <th>Parent Name</th>
                                <th>Mobile No</th>
                                <th>Class</th> 
                                <th>Section</th>
                                <th>Event</th>
                                <th>Description</th>
                                <th>File</th> 
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                             <?php $j=1; ?>
                           <?php for($i = 0; $i < count($studentName); $i++) : ?>
                                <tr>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{date('d-m-Y', strtotime($create_date[$i]))}}</td>
                                    <td>{{$studentName[$i]}}</td>
                                    <td>{{$parentName[$i]}}</td>
                                    <td>{{$mobile[$i]}}</td>
                                    <td>{{$class[$i]}}</td>
                                    <td>{{$section[$i]}}</td>
                                    <td>{{$eventName[$i]}}</td>
                                    <td>{{$description[$i]}}</td>
                                    <td>
                                        @if($file[$i]!='')
                                        <img src="{{url($file[$i])}}" class="img-thumbnail" width="100px" height="100px">
                                            <a href="{{ route('video.download.video', $video_id[$i]) }}"class="btn btn-info"> Download</a>
                                        @else
                                            No Image
                                        @endif
                                            </td>
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