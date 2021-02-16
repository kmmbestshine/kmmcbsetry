@extends('users.layouts.default')
@section('title', 'Edit Syllabus')
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
                        <h3 class="panel-title"><strong>Edit Syllabus for <strong> {{ ucfirst($getSyllabus->class) }} </strong> Class -  <strong>  {{ ucfirst($getSyllabus->subject) }} </strong>  Subject</strong></h3>
                        <div class="text-right">
                            <a href="{{ route('master.syllabus.index') }}" class="btn btn-info btn-rounded">Add Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ route('view.syllabus.list') }}" class="btn btn-info btn-rounded">View Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('get.syllabus.index')}}" class="btn btn-info btn-rounded">Get Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form class="form-horizontal" method="post" action="{{ route('update.syllabus.class') }}">
                                {!! csrf_field() !!}
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{--<select class="form-control edit_syllabus_class" name="class">
                                                <option value="">Choose Class</option>
                                                @foreach($classes as $class)
                                                    <option value="{{$class->id}}" @if($class->id == $getSyllabus->class_id) selected="selected" disabled @endif {{$class_id=="$class->id"?"selected":""}}>{{$class->class}}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('class') as $classerr)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $classerr }}
                                                </div>
                                            @endforeach--}}
                                            <input class="form-control " type="text" name="class" value="{{ ucfirst($getSyllabus->class) }}" disabled>
                                        </div>
                                        <div class="col-md-6 edit_syllabus_subject_div">
                                           <input class="form-control " type="text" name="subject" value="{{ ucfirst($getSyllabus->subject) }}" disabled>
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
                                            <textarea id="summernote" name="syllabus">{{ htmlspecialchars_decode($getSyllabus->syllabi) }} </textarea>
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
                                            <input type="hidden" name="syllabus_id" value="{{ $getSyllabus->id }}">
                                            <button class="btn-info btn btn-block" type="submit"
                                                    name="edit_syllabus" value="syllabus">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Update Syllabus
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

