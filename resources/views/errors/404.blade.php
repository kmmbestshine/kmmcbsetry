@extends('layouts.default')
@section('title', 'Ohhhh')
@section('content')
    <!--404 error-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-right u-MarginTop100 u-xs-MarginTop0">
                <img class="img-fit-responsive " src="assets/imgs/404-icon.png" alt=""/>
            </div>
            <div class="col-md-6 col-sm-6 u-MarginTop100 u-xs-MarginTop30 u-xs-MarginBottom30">
                <div class="u-MarginTop100 u-xs-MarginTop0 u-PaddingLeft50 u-xs-PaddingLeft0">
                    <img class="img-responsive" src="assets/imgs/404-t.png" alt=""/>
                    <h1 class="u-weight300">Page Not Found</h1>
                    <a href="index.html" class="btn btn-default">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!--404 error-->

@endsection