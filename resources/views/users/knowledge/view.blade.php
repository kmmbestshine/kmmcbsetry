@extends('users.layouts.default')
@section('title', 'Knowledge')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Knowledge</li>
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
                            <h3 class="panel-title"><strong>Questions</strong></h3>
                            <div class="text-right">
                                <a href="{{route('knowledgeBank')}}" class="btn btn-info btn-rounded">Insert</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form class="form-horizontal" method="get" action="">
                                <div class="col-md-10">
                                    <select class="form-control" name="class">
                                        <option selected disabled value="">Choose Class</option>
                                        @foreach($classes as $class)
                                            <option value="{{$class->id}}" {{Input::get('class')=="$class->id"?"selected":""}}>{{$class->class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn-info btn btn-block">Questions & Answers</button>
                                    
                                </div>
                                </form>
                            </div>

                        </div>
                      @if($questions)
                        <div class="panel-body">
                           <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                    @foreach($questions as $ques)
                                        <tr style="background:#f5f5f5">
                                            <td>{{$ques->question}}</td>
                                            <td width="10%"><a href="{{route('deleteQuestion', $ques->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="row">
                                                @foreach($ques->option as $key=>$opt)
                                                    <div class="col-md-6">
                                                        @if($opt->correct == '1')
                                                            <b style="color:lightgreen">{{$key+1}}) {{$opt->option}}</b>
                                                        @else
                                                            <b style="color:red">{{$key+1}}) {{$opt->option}}</b>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                    </table>
                                </div>
                           </div>
                        </div>
                      @endif
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection