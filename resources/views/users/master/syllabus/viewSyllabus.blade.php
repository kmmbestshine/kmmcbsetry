@extends('users.layouts.default')
@section('title', 'Get Syllabus')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Syllabus</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Syllabus</strong></h3>
                        <div class="text-right">
                            <a href="{{route('master.syllabus.index')}}" class="btn btn-info btn-rounded">Add Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('view.syllabus.list')}}" class="btn btn-info btn-rounded">View Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form class="form-horizontal" method="get" action="">
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control syllabus_class" name="class">
                                                <option value="">Choose Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{$class->id}}" {{$class_id=="$class->id"?"selected":""}}>{{$class->class}}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('class') as $classerr)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $classerr }}
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-4 syllabus_subject_div">
                                            <select class="form-control syllabus_subject" name="subject" disabled>
                                                <option value="">Choose Subject</option>
                                            </select>
                                            @foreach($errors->get('subject') as $subjecterr)
                                                <br>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $subjecterr }}
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn-info btn btn-block" name="view_syllabus" value="syllabus">
                                                <i class="fa fa-get-pocket" aria-hidden="true"></i>
                                                Get Syllabus
                                            </button>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(isset($syllabus))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <strong>
                                                Syllabus For <strong> {{ ucfirst($getClassName->class) }} </strong> Class -  <strong>  {{ ucfirst($getSubjectName->subject) }} </strong>  Subject
                                            </strong>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <tr style="background:#f5f5f5">
                                            <td>
                                                <textarea id="summernote" > {{ htmlspecialchars_decode($syllabus->syllabi) }}</textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: '#summernote',
            plugins: 'lists advlist',
            height : "300",
            menubar:false,
            statusbar: false,
            toolbar: false,
            readonly : 1
        });
    </script>
@endsection