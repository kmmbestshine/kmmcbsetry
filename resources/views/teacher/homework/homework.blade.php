@extends('teacher.layouts.default')
@section('title', 'Add Homework')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Homework</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.teacher.homework')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Homework</strong></h3>
                            <div class="text-right">
                                <a href="{{route('view.teach.homework')}}" class="btn btn-info btn-rounded">View Homework</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-md-12 form-group">
                                        <label>Subject</label>
                                        <div class="subject">
                                        <select class="form-control" name="subject">
                                            <option value="">Choose Subject</option>
                                            @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                                            @endforeach
                                        </select>
                                        @foreach($errors->get('subject') as $sub)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $sub }}
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Upload Picture</label>
                                        <input type="file" class="form-control" name="image">
                                        @foreach($errors->get('image') as $image)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $image }}
                                            </div>
                                        @endforeach
                                    </div>  
                                    <div class="col-md-12 form-group">
                                        <label>Upload PDF File</label>
                                        <input type="file" class="form-control" name="pdf">
                                        @foreach($errors->get('pdf') as $pdf)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $pdf }}
                                            </div>
                                        @endforeach
                                    </div>  
                                    <div class="col-md-12 form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description"></textarea>
                                        @foreach($errors->get('description') as $description)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $description }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control">
                                        @foreach($errors->get('date') as $date)
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> {{ $date }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="btn btn-info">Submit <i class="fa fa-send"></i></button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection