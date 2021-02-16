@extends('users.layouts.default')
@section('title', 'Master Forms')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Exam</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Exam</h2>
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
                        <!-- <form class="form-horizontal" role="form" method="post" action="{{route('post.exam')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="exam_type" class="form-control" placeholder="Exam">
                                </div>
                                @foreach($errors->get('exam_type') as $exam_type)
                                    <div class="alert alert-danger">{{ $exam_type }}</div>
                                @endforeach
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-block btn-info">Add Exam Type</button>
                            </div>
                        </form> -->
                         <form class="form-horizontal" role="form" method="post" action="{{route('post.exam')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" name="exam_type" class="form-control" placeholder="Exam">
                                    </div>
                                    @foreach($errors->get('exam_type') as $exam_type)
                                        <div class="alert alert-danger my-alert" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button> {{ $exam_type }}
                                        </div>
                                    @endforeach
                                </div>
                                
                                <div class="col-md-4 text-center">
                                    <button type="submit" formaction="{{route('post.exam')}}" class="btn btn-block btn-info">Add Exam Type</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Exam Types</center></h3>
                            <ul class="panel-controls">
                                <li>
                                    <a href="#" class="panel-collapse">
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-refresh">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-remove">
                                        <span class="fa fa-times"></span>
                                    </a>
                                </li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Exam Type</th>
                                        <th>Edit</th>
                                        <th>Add Grade</th>

                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($exams as $key => $exam)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $exam->exam_type }}</td>
                                            <td>
                                                <a href="{{route('edit.exam', $exam->id)}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                             <a href="{{route('exam.grade', $exam->id)}}" class="btn btn-info">Grade</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.exam', $exam->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection