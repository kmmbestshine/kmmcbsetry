<!DOCTYPE html>
<html lang="en">
<head>        
    <!-- META SECTION -->
    <title>@yield('title') - St.Jame's Academy</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{url('users/img/st-james.jpg')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{url('users/css/theme-white.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('users/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('users/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <!-- tinymce -->
    <script src="{{ url('assets/tinymce/tinymce.min.js') }}"></script>
    <!-- EOF CSS INCLUDE -->                                    
</head>
