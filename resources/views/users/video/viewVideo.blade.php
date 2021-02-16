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
               
                    @if(!empty($video_event))
                   
                    <table class="table table-striped table-bordered">
                        <h3 class="panel-title"> Video / Audio / PDF :-  <b>  {{$schoolname->school_name}}</b></h3>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Created Date</th>
                                <th>Video Event Name</th>
                                <th>Audio Event Name</th>
                                <th>PDF Event Name</th>
                                <th>Video</th> 
                                <th>Audio</th>
                                <th>PDF</th>
                                <th>Event Date</th> 
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                             <?php $j=1; ?>
                           <?php for($i = 0; $i < count($video_event); $i++) : ?>
                                <tr>
                                    <td style="width: 5%"><?php echo  $j++ ?></td>
                                    <td>{{date('d-m-Y', strtotime($cre_dates[$i]))}}</td>
                                    <td>{{$videoevent_name[$i]}}</td>
                                    <td>{{$audiooevent_name[$i]}}</td>
                                    <td>{{$pdfevent_name[$i]}}</td>
                                    <td>@if($video_file[$i]!='')
                                                    <a href="{{ route('video.download.video', $video_id[$i]) }}"class="btn btn-info">Download</a>
                                                @else
                                                    No Video Found
                                                @endif</td>
                                    <td>@if($audio_file[$i]!='')
                                                    <a href="{{ route('video.download.video', $video_id[$i]) }}"class="btn btn-info">Download</a>
                                                @else
                                                    No Audio Found
                                                @endif</td>
                                        <td>@if($pdf_file[$i]!='')
                                                    <a href="{{ route('video.download.video', $video_id[$i]) }}"class="btn btn-info">Download</a>
                                                @else
                                                    No PDF Found
                                                @endif</td>
                                      <td>{{$dates[$i]}}</td>          
                                            <th>
                                         <form  method="get" action="{{ route('video.audio.delete') }}"  > 
                                       {!! csrf_field() !!}
                                            
                                            <input type="hidden" name="video_id" value="{{$video_id[$i]}}"/>
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