<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>        
        <title>St.Josephs School Management</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="{{url('users/img/st-joseph.png')}}" type="image/x-icon" />
        <link href="{{url('~admin/css/styles.css')}}" rel="stylesheet" type="text/css" />
        <!--[if lt IE 10]><link rel="stylesheet" type="text/css" href="css/ie.css"/><![endif]-->
        
        <script type="text/javascript" src="{{url('~admin/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
                
        <script type="text/javascript" src="{{url('~admin/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

        <script type="text/javascript" src="{{url('~admin/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{url('~admin/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/actions.js')}}"></script>        
        
    </head>
    <body>
        
        <div class="page-container">
            
            <div class="page-content page-content-default">

                <div class="block-login" style="margin-top: 25px;">
                    <div class="block-login-logo">
                        <a class="logo">
                            <img src="{{url('users/img/st-joseph.png')}}"
                                 style="margin-top:-63px;margin-left: -64px;" >
                        </a>
                    </div>                    
                    <div class="block-login-content" style="margin-top: 75px;">
                        <h1>Sign in</h1>
                        <form id="signinForm" method="post" action="{{route('loginRequest')}}">
                        {!! csrf_field() !!}    
                        <div class="form-group">                        
                            <input type="text" name="username" class="form-control" placeholder="Your login/e-mail" value=""/>
                        </div>
                        <div class="form-group">                        
                            <input type="password" name="password" class="form-control" placeholder="Your password" value=""/>
                        </div>
                        <div class="pull-left">
                            <div class="checkbox">
                                <label><input type="checkbox" name="keep"/> Keep me signed in</label>
                            </div>
                        </div>                                        
                        <div class="pull-right">
                            <a href="#" style="color:#f7a62b">Forgot password?</a>
                        </div>

                        <button class="btn btn-warning btn-block" type="submit">Sign in</button>
                        
                        </form>
                        <div class="sp"></div>
                        <div class="pull-left">
                            © All Rights Reserved St.Joseph's School
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        
        <script type="text/javascript">
        $("#signinForm").validate({
		rules: {
			login: "required",
			password: "required"
		},
		messages: {
			firstname: "Please enter your login",
			lastname: "Please enter your password"			
		}
	});            
        </script>
        
    </body>

<!-- Mirrored from aqvatarius.com/themes/gemini_v1_4/html/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2016 10:39:19 GMT -->
</html>
