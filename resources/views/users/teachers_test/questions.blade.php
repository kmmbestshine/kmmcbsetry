@extends('users.layouts.default')
@section('title', 'Online Test')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('get.homework')}}">Online Test </a></li>
        <li class="active">Online Test </li>
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
                        <a href="{{url()->previous()}}"><i class="fa fa-arrow-left" style="margin-right: 10px"></i> </a>
                        {{--<a title="Add Question" href="{{route('add-question')}}" class="close">+</a>--}}
                        {{$pageTitle}}
                    </div>

                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="countdown text-danger text-center"></div>

                        <form id="quizForm" action="{{ route('post.teachers.test') }}" method="post">
                          {!! csrf_field() !!}

                            <?php
                            $questions = DB::table('bio_qutions')->where('type', $type)->get();
                            $total_questions = DB::table('bio_qutions')->where('type', $type)->count();
                            $counter = 1;
                            ?>

                            <?php foreach($questions as $question) {
                            $options = DB::table('bio_options')->where('question_id', $question->id)->get();
                            ?>
                            {{$counter}}. {{$question->question}}

                            <div style="margin-left: 20px;">
                                <?php
                                $option_counter = 1;
                                foreach($options as $option) { ?>

                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                           id="option_{{$option->id}}_{{$option_counter}}" value="option_1">
                                    <label class="custom-control-label"
                                           for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_1}}</label>
                                </div>
                                <?php $option_counter++ ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                           id="option_{{$option->id}}_{{$option_counter}}" value="option_2">
                                    <label class="custom-control-label"
                                           for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_2}}</label>
                                </div>
                                <?php $option_counter++ ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                           id="option_{{$option->id}}_{{$option_counter}}" value="option_3">
                                    <label class="custom-control-label"
                                           for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_3}}</label>
                                </div>
                                <?php $option_counter++ ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="question_{{$question->id}}"
                                           id="option_{{$option->id}}_{{$option_counter}}" value="option_4">
                                    <label class="custom-control-label"
                                           for="option_{{$option->id}}_{{$option_counter}}">{{$option->option_4}}</label>
                                </div>

                                <?php $option_counter++; } ?>
                            </div>
                            <?php $counter++;  } ?>

                            
                            <input type="hidden" name="type" value="{{$type}}">
                            <input type="hidden" name="total_questions" value="{{$total_questions}}">
                            <br>
                            <h3>Enter Your Name : </h3><input type="text" name="name" value="" required>
                            <br>
                            <br>
                            <br>
                            <h3>Enter Registerd Mobile No :</h3><input type="text" name="mobile_no" value="" required>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary"
                                    name="btnSubmit">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    var timer2 = "30:00";
    var interval = setInterval(function () {

        var timer = timer2.split(':');
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) clearInterval(interval);
        seconds = (seconds < 0) ? 59 : seconds;

        if (minutes === -1) {
            document.getElementById("quizForm").submit();
        } else {
            $('.countdown').html(minutes + ':' + seconds);
            timer2 = minutes + ':' + seconds;
        }

    }, 1000);
</script>
