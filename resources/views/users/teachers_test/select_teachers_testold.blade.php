@extends('users.layouts.default')
@section('title', 'Online Test')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Online Test </a></li>
        <li class="active">Online Test </li>
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
     @if($msg)
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Well done!</strong> {{ $msg }}
                </div>
            </div>
        </div>
    @endif
    
     <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
               
                <form class="form-horizontal" role="form" method="post" action="{{ route('teachers_view_question') }}" >
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong> Online Test</strong></h3>
                           
                        </div>
                        <div class="panel-body">
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Staff</label>
                                        <div class="col-md-9">
                                            <select class="form-control viewpaymentclass" name="type">
                                                <option value="">Select Staff</option>
                                                
                                                    <option value="Teaching">Teaching Staff</option>
                                                    <option value="Non Teaching">Non Teaching Staff</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        <br/>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @php 
$index = 1;
@endphp

    @if($question)
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            
                            <div style="text-align:center;padding:10px;">
                                <h1 style="text-transform:uppercase;">{{ $school->school_name }}</h1>   
                            </div> 
                            <h2>Staff - Online Test</h2>
                        <div class="panel-body">                   
                       
                            <form class="form-horizontal" role="form" method="post" action="{{route('post.teachers.test')}}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                 <?php 
                                    $counts=1;
                                  ;?>
                                  <span class="space"> 
                                    Name :<input type="text" name="nameStaff" required>
                                </span> 
                                 <span class="space"> 
                                    Mobile No :<input type="number" name="mobile_no" required>
                                </span> 
                                
                                @foreach($question as $question)
   
                                    <p> {{ $index }}.{{ $question->question }}</p>
                                    <input type="hidden" name="question_id[{{$counts}}]" value="{{ $question->id }}">
                                   
                                                                                                   
                                    <p> 
                                        <span class="space"> 
                                            <input type="radio" name="en_answer[{{$counts}}]" class="checked-answer" data-id="{{$question->id}}" value="{{$question->option_A}}">
                                            a) {{ $question->option_A }} 
                                            
                                        </span>  
                                        <span class="space"> 
                                            <input type="radio" name="en_answer[{{$counts}}]" class="checked-answer" data-id="{{$question->id}}" value="{{$question->option_B}}">
                                            b) {{ $question->option_B }} 

                                        </span> 
                                        <span class="space"> 
                                            <input type="radio" name="en_answer[{{$counts}}]" class="checked-answer" data-id="{{$question->id}}" value="{{$question->option_C}}">
                                            c) {{ $question->option_C }} </span> 
                                        <span class="space"> 
                                            <input type="radio" name="en_answer[{{$counts}}]" class="checked-answer" data-id="{{$question->id}}" value="{{$question->option_D}}">
                                            d) {{ $question->option_D }} 
                                        </span> 
                                        
                                    </p>
                                    @php $index++; $counts++; @endphp
                                @endforeach
                                <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                    <input type="hidden" name="type" class="checked-answer"  value="{{$type}}">
                                </div>
                                
                            </div>
                            </form>                            
                       
                    </div>
                         </div>
                     </div>
                 </div>
             </div>
     </div>
 </div>
 @endif

@endsection