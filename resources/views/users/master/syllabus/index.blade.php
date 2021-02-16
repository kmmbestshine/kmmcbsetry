@extends('users.layouts.default')
@section('title', 'Index Syllabus')
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
                        <h3 class="panel-title"><strong>Input Syllabus</strong></h3>
                        <div class="text-right">
                            <a href="{{ route('view.syllabus.list') }}" class="btn btn-info btn-rounded">View Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('get.syllabus.index')}}" class="btn btn-info btn-rounded">Get Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form class="form-horizontal" method="post" action="{{ route('post.syllabus.class') }}">
                                {!! csrf_field() !!}
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="row">
                                        <div class="col-md-6">
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
                                        <div class="col-md-6 syllabus_subject_div">
                                            <select class="form-control syllabus_subject" name="subject" disabled>
                                                <option value="">Choose Subject</option>
                                            </select>
                                            @foreach($errors->get('subject') as $subjecterr)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $subjecterr }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class=" control-label">Describe syllabus....</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="summernote" name="syllabus"> </textarea>
                                            @foreach($errors->get('syllabus') as $summernote1)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $summernote1 }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 "></div>
                                        <div class="col-md-3">
                                            <button class="btn-info btn btn-block" type="submit" name="submit_syllabus" value="syllabus">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                Input Syllabus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(isset($getQuestions))
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>List</strong></h3>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-striped datatable">
                            <tr style="background:#f5f5f5">
                                <th>S.No.</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Subject</th>
                               {{-- <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Questions</th>--}}
                                <th>Delete</th>
                            </tr>
                            @foreach($getQuestions as $key => $question)
                            <tr>
                                <td> {{ $key+1 }}</td>
                                <td>{{ $question->class }}</td>
                                <td>{{ ucwords($question->section) }}</td>
                                <td>{{ ucwords($question->subject) }}</td>
                                {{--<td>
                                    {!!  ucwords(str_limit($question->question,50)) !!}
                                </td>--}}
                                <td >
                                    <a href="{{route('deleteQuestion', $question->id)}}" class="btn btn-danger" title="Delete Question">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
<script>
    tinymce.init({
        // General options
        selector: '#summernote',
        plugins: ['lists advlist',' textcolor'],
       // plugins: ['lists advlist',' textcolor','link image code fullscreen imageupload','uploadimage'],
        //toolbar: "forecolor backcolor",
        //toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload | code | fullscreen | print preview media | forecolor backcolor emoticons | codesample | mybutton',
        toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | forecolor backcolor emoticons | codesample | mybutton',
       // toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | mybutton',
        height : "250"
    });

</script>
@endsection

