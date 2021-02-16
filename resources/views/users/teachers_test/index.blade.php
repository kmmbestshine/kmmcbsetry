@extends('users.layouts.default')
@section('title', 'View Question')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        
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
    
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header">
                       <strong><h1> {{$teaching_type}}</h1></strong>
                       <a title="Add Question" href="{{route('teachersQuestion')}}" class="close">+ Add Queestion</a>
                        
                    </div>

                  <div class="card-body">
                        

                        <?php
                        $questions = DB::table('bio_qutions')->where('type', $teaching_type)->get();
                        $total_questions = DB::table('bio_qutions')->where('type', $teaching_type)->count();
                        $counter = 1;
                        
                        ?>
                         
                        <?php foreach($questions as $question) {
                        $options = DB::table('bio_options')->where('question_id', $question->id)->get();
                        ?>
                        {{$counter}}. {{$question->question}} <a title="Delete Question"
                                                               href="{{route('delete.questio', ['id' => $question->id, 'type' => $teaching_type])}}">Delete</a>

                        <div style="margin-left: 20px;">
                            <?php
                            $option_counter = 1;
                            foreach($options as $option) { ?>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                       id="option_{{$option->id}}_{{$option_counter}}" value="option_1" disabled>
                                <label class="custom-control-label"
                                       for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_1}}</label>
                            </div>
                            <?php $option_counter++ ?>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                       id="option_{{$option->id}}_{{$option_counter}}" value="option_2" disabled>
                                <label class="custom-control-label"
                                       for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_2}}</label>
                            </div>
                            <?php $option_counter++ ?>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                       id="option_{{$option->id}}_{{$option_counter}}" value="option_3" disabled>
                                <label class="custom-control-label"
                                       for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_3}}</label>
                            </div>
                            <?php $option_counter++ ?>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                       id="option_{{$option->id}}_{{$option_counter}}" value="option_4" disabled>
                                <label class="custom-control-label"
                                       for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_4}}</label>
                            </div>

                            <?php $option_counter++; } ?>
                        </div>
                        <?php $counter++;  } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection