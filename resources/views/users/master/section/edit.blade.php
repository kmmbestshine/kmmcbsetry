@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Section</li>
    </ul>
    @endsection
    @section('contant')
    <style type="text/css">
        .subject-format{
            padding: 10px;
        }
    </style>
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Section</h2>
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
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('update.section')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Subject</label>
                                        <div class="col-md-11">
                                            <input type="hidden" name="id" value="{{ $section->id }}">
                                            <select class="form-control" name="class">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{ $class->id }}" {{ $section->class_id=="$class->id" ? "selected" : ""}}>{{ $class->class }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('class') as $cls)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $cls }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Section</label>
                                        <div class="col-md-11">
                                            <input type="text" name="section" class="form-control" placeholder="Add Section" value="{{ $section->section }}">
                                            @foreach($errors->get('section') as $section)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $section }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="forrm-group">
                                        <label class="col-md-2 control-label">Choose Subjects</label>
                                        <div class="col-md-10">
                                            <?php 
                                                $allsb = json_decode($section->subjects); 
                                                if(empty($allsb))
                                                {
                                                    $allsb = [];
                                                }
                                            ?>
                                            @foreach($subjects as $subject)
                                                <div class="col-md-3">
                                                    <div class="radio">
                                                        <label>
                                                            @if(in_array($subject->id, $allsb))
                                                                <input type="checkbox" name="subjects[]" value="{{ $subject->id }}" checked><span class="subject-format">{{ $subject->subject }}</span>
                                                            @else
                                                                <input type="checkbox" name="subjects[]" value="{{ $subject->id }}"><span class="subject-format">{{ $subject->subject }}</span>
                                                            @endif
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-info">Update Section</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection