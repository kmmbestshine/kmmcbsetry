@extends('users.layouts.default')
@section('title', 'View Syllabus')
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
                                 <a href="{{route('get.syllabus.index')}}" class="btn btn-info btn-rounded">Get Syllabus</a>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             </div>
                         </div>
                        <div class="panel-body">
                            @if(isset($allSyllabus))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <strong>
                                                    Syllabus For All Classes & All Subjects
                                                </strong>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <table class="table table-striped table-datatable">
                                            <thead>
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>Class</th>
                                                    <th>Subject</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($allSyllabus))
                                                @foreach($allSyllabus as $key => $syll)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td> {{ucfirst($syll->class) }}</td>
                                                    <td>{{ ucfirst($syll->subject) }}</td>
                                                    <td>
                                                        <a href="{{route('editSyllabusId', $syll->id)}}" class="btn btn-primary" title="Edit Syllabus">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('deleteSyllabusId', $syll->id)}}" class="btn btn-danger" title="Delete Syllabus">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
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