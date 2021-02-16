<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
    <!-- META SECTION -->
    <title>St.Jame's Academy Management</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{url('users/img/st-james.jpg')}}" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="{{url('users/css/theme-default.css')}}"/>
    <!-- EOF CSS INCLUDE -->                                    
</head>
<body>
<div class="background">
    <div class="login-container">
        
        <div class="row">
        
        <div class="center_screen col-md-12">
        <div class="login-box animated fadeInDown">
            <div class="login-body">
            @if(Input::old('message'))
                <div class="login-title" style="color:red;"><strong>Ooho!</strong>, {{Input::old('message')}}</div>
            @else
                    <h1 class="login-title" style="text-align: center;">
                        <img src="{{url('users/img/st-james.jpg')}}">
                    </h1>
                <div class="login-title"><strong>Welcome</strong>, Please login</div>
            @endif

                <form action="{{route('loginRequest')}}" class="form-horizontal" method="post">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control" placeholder="Username" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-warning btn-block">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="pull-left">
                &copy; 2021 St.Jame's Academy
                </div>
                 <div class="pull-right">
                <a class="btn btn-danger btn-rounded" href="{{route('joboppournityschool')}}">Job Oppourtunity</a>
                </div>
                
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>






