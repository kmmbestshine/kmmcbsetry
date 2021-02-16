@extends('users.layouts.default')
@section('title', 'Add Mark')
@section('cram')
<ul class="breadcrumb">
<li><a href="{{route('user.dashboard')}}">Home</a></li>                    
<li class="active">Mark</li>
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
            <form class="form-horizontal" role="form" method="post" action="{{route('post.singleresult')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <!--  <h3 class="panel-title"><strong>Add Result of Class {{ $getclass->class}} of Section {{ $getsection->section }}</strong></h3> -->
                        <div class="text-right">
                            <a href="{{route('user.result')}}" class="btn btn-warning btn-rounded">Go Back</a>
                            <a href="{{route('view.result')}}" class="btn btn-info btn-rounded">View Result</a>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Roll No</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Marks</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        {{$students->name}}
                                    </td>
                                    <td>
                                        {{$students->roll_no}}
                                    </td>
                                    <td>
                                        {{$students->class}}
                                    </td>
                                    <td>
                                         {{$students->section}}
                                    </td>
                                    <td>
                                        <input type="hidden" name="examid" value="{{$exams->id}}">
                                        <input type="hidden" name="subid" value="{{$subjects->id}}">
                                        <input type="hidden" name="result_id" value="{{$marks->id}}">
                                        <input type="hidden" name="student_id" value="{{$students->id}}">
                                      <input type="number" name="marks" value="{{$students->marks}}" class="form-control" required maxlength="{{$exams->max_marks}}">
                                    </td>
                                    <td><input type="submit" name="Add/Update" value="update" class="btn btn-info btn-block"></td>

                                </tr>
                            </tbody>
                        </table>
                     
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>
@endsection