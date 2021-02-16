<!DOCTYPE html>
<html class="html">

<!-- Mirrored from alien.lab.themebucket.net/mp-corporate1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 06:55:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="imgs/favicon.png" />

    <title><?php echo $__env->yieldContent('title'); ?> - Shine School</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:100%7COpen+Sans:300,400,400i,600,700,800">
    <!-- inject:css -->
    
    <link rel="stylesheet" href="<?php echo e(url('assets/css/plugins.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/alien.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/style.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bs-slider.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/animate.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/owl.carousel.css')); ?>">
    <!-- endinject -->

</head>
<body>

    <!--header start-->
    <header>
        <!-- Start Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo e(url('assets/imgs/logo.png')); ?>" class="logo logo-scrolled" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="" data-out="">
                        <li>
                            <a href="<?php echo e(route('/')); ?>" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                            
                        </li>
                        <li>
                            <a href="<?php echo e(route('about')); ?>" >About</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('value')); ?>" >Value Proposition</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Principal</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Student Management</a></li>
                                                    <li><a href="#">Employee Management</a></li>
                                                    <li><a href="#">Transport Management</a></li>
                                                    <li><a href="#">Fee Management</a></li>
                                                    <li><a href="#">Attendance Management</a></li>
                                                    <li><a href="#">Library Management</a></li>
                                                    <li><a href="#">Notification</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Teachers</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">e-Homework</a></li>
                                                    <li><a href="#">Attendance Management</a></li>
                                                    <li><a href="#">Leave Management</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Parents</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Leave Request</a></li>
                                                    <li><a href="#">Attendance Report</a></li>
                                                    <li><a href="#">Bus Tracking</a></li>
                                                    <li><a href="#">Result Report</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Students</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Leave Request</a></li>
                                                    <li><a href="#">Attendance Report</a></li>
                                                    <li><a href="#">Bus Tracking</a></li>
                                                    <li><a href="#">Result Report</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        
                      
                     
                        <li>
                            <a href="<?php echo e(route('pricing')); ?>">Pricing</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manage')); ?>">Login</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h5 class="title">Navigation</h5>
                    <ul class="link">
                        <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                        <li><a href="<?php echo e(route('value')); ?>">Value Proposition</a></li>
                        <li><a href="<?php echo e(route('bcpRegistration')); ?>">Become a Channel Partner</a></li>
                        <li><a href="<?php echo e(route('pricing')); ?>">Pricing</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="title">About Us</h5>
                    <p class="light-txt">Shine Track is an interactive web solution which automates school’s diverse functional areas and can be quickly customized for any schools to suit their specific mode of operations. Our vision enhances the productivity and increases the opportunities for everyone in the educational ecosystem.</p>
                </div>
                <div class="widget">
                    <h5 class="title">Social Links</h5>
                    <div class="social-links sl-default border-link round-link colored-link">
                        <a href="https://www.facebook.com/shinetrackindia/" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://plus.google.com/u/2/103069641058782913809" class="g-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCvkSFiSBM91FKrouKGYsOwA" class="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="#" class="dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#" class="linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->


        <?php echo $__env->yieldContent('content'); ?>
        
    
    <!--footer start-->
    <!--<footer class="u-PaddingTop100 u-xs-PaddingTop30">
        <div class="container text-center text-sm">
            <img class="retina" src="<?php echo e(url('assets/imgs/logo-colored.png')); ?>" alt="">
            <div class="social-links sl-default border-link round-link colored-link u-MarginTop30">
                <a href="https://www.facebook.com/shinetrackindia/" class="facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://plus.google.com/u/2/103069641058782913809" class="g-plus">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="#" class="youtube">
                    <i class="fa fa-youtube"></i>
                </a>
                <a href="#" class="dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
                <a href="#" class="linkedin" style="background:#0077b5;border:none;">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>

        <section class="bg-lighter u-MarginTop100 u-xs-MarginTop30 u-PaddingTop45 u-PaddingBottom45">
            <div class="container">
                <div class="row text-sm u-MarginTop20--">
                    <div class="col-md-6 text-left text-center--sm">
                        <p class="u-LineHeight2">Copyright © 2014–2017 Shine Track (P) Limited. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-right text-center--sm">
                        <ul class="list-inline text-paragraph u-LineHeight2 u-MarginBottom0">
                            <li><a class="" href="#">Privacy</a></li>
                            <li>-</li>
                            <li><a href="#">Terms</a></li>
                            <li>-</li>
                            <li><a href="#">Help Center</a></li>
                            <li>-</li>
                            <li><a href="https://shineschoolapp.com/app">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </footer>-->
    <div class="clearfix"></div>
<footer>
  <div class="footer-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-5 animated wow fadeIn" data-wow-delay="0.6s">
          <h2 class="text-center line1"> Follow Us </h2>
          <center>
            <ul class="social-network social-circle">
              <li><a href="#" class="icon1" title="Facebook"><i class="fa fa-facebook"></i> </a></li>
              <li><a href="#" class="icon2" title="twitter"> <i class="fa fa-skype" aria-hidden="true"></i> </a></li>
              <li><a href="#" class="icon3" title="instagram "><i class="fa fa fa-instagram"></i></a></li>
              <li><a href="#" class="icon4" title="Pinterest"> <i class="fa fa-android"></i></a></li>
              <li><a href="#" class="icon5" title="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#" class="icon4" title="youtube"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a></li>
            </ul>
          </center>
        </div>
        <div class="col-md-7 animated wow fadeIn" data-wow-delay="0.6s">
          <h2 class="text-center line2"> Subscribe to our newsletter </h2>
          <form action="#">
            <div class="input-group">
              <input class="btn btn-lg" name="email" id="email" type="email" placeholder="E-mail" required>
              <button class="btn  btn-primary btn-lg" type="submit"> Subscribe </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 animated wow fadeIn" data-wow-delay="0.6s"> <span class="pull-left"> Copyright © 2014–2017 Shine School App. All rights reserved. </span> </div>
        <div class="col-md-6 animated wow fadeIn" data-wow-delay="0.6s"> <span class="pull-right">
          <ul class="list-unstyled list-inline">
            <li> <a href="#"> Privacy </a> </li>
            <li> - </li>
            <li> <a href="#"> Terms </a> </li>
            <li> - </li>
            <li> <a href="#"> Help Center </a> </li>
            <li> - </li>
            <li> <a href="#"> Download </a> </li>
          </ul>
          <a href="#"> </a></span> </div>
      </div>
    </div>
  </div>
</footer>
    <!--footer end-->


    <!-- inject:js -->
    <script src="<?php echo e(url('assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/alien.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('assets/js/bs-slider.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('assets/js/owl.carousel.min.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(url('assets/js/wow.min.js')); ?>"></script>
    <!-- endinject -->
    
    
       <!--google map-->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCVkU7YnGfown4_i_sm6X36HP2jWTv54&amp;callback=initMap"></script>

    <script>

    $(function() {
        initSlidingMap();
    });

    function initSlidingMap() {
        var $mapToggle = $(".js-toggle-map"),
        $cancelBtn = $(".js-cancel-btn"),
        $map = $("#map");

        $mapToggle.on("click", function (e) {
            e.preventDefault();
            $(this).next().slideDown();
            $('html, body').animate({
                scrollTop: $map.offset().top
            }, 300);

            google.maps.event.trigger(map, 'resize');

            $(this).hide();
        });


        $cancelBtn.on("click", function (e) {
            e.preventDefault();
            var prnt = $(this).parents(".map-row");
            prnt.slideUp(400, function() {
                $(prnt).prev().show();
            })

        });
    }

    function initMap() {
        var uluru = {lat: 23.810332, lng: 90.41251809999994};
        var map = new google.maps.Map(document.getElementById('map'), {
            center: uluru,
            zoom: 10,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
    
     function changeAmPM(){
		var selected = $('#chooseAmPm :selected').val();
		if(selected == 'am'){
			$('#pm_table_head').hide();
			$('#tableRow td:nth-child(4)').hide();
			$('#am_table_head').show();
			$('#tableRow td:nth-child(3)').show();
		}else{
			$('#am_table_head').hide();
			$('#tableRow td:nth-child(3)').hide();
			$('#pm_table_head').show();
			$('#tableRow td:nth-child(4)').show();
		}
	}
    </script>
    <script>
     $(".slider-3").owlCarousel({
	     autoPlay: 4000,
        items:5,
 
		dotData: false,
         dots: false,
        navigation:false,
		
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });
</script> 
<script type="text/javascript">
    new WOW().init();
</script>

    <script>

    (function($){$.fn.extend({leanModal:function(options){var defaults={top:100,overlay:0.5,closeButton:null};var overlay=$("<div id='lean_overlay'></div>");$("body").append(overlay);options=$.extend(defaults,options);return this.each(function(){var o=options;$(this).click(function(e){var modal_id=$(this).attr("href");$("#lean_overlay").click(function(){close_modal(modal_id)});$(o.closeButton).click(function(){close_modal(modal_id)});var modal_height=$(modal_id).outerHeight();var modal_width=$(modal_id).outerWidth();
$("#lean_overlay").css({"display":"block",opacity:0});$("#lean_overlay").fadeTo(200,o.overlay);$(modal_id).css({"display":"block","position":"fixed","opacity":0,"z-index":11000,"left":50+"%","margin-left":-(modal_width/2)+"px","top":o.top+"px"});$(modal_id).fadeTo(200,1);e.preventDefault()})});function close_modal(modal_id){$("#lean_overlay").fadeOut(200);$(modal_id).css({"display":"none"})}}})})(jQuery);
$(function() { $('a[rel*=popup]').leanModal({ top : 200, closeButton: ".popup-close" });	});

//Everything above this line isn't really that important. Just the popup javascript

function rewrite(id, text) {
    $('#new-text').val(text);
}
$(document).ready(function(){
    $(".clsbtn").on("click",function(){
    $(".popup, #lean_overlay").css("display","none");
    });
});
</script>

<script>
$(document).ready(function(){
      $("#but-less").hide();

    $("#but-more").click(function(){
        $("#but-more").hide();
          $("#but-less").show();
    });
    $("#but-less").click(function(){
        $("#but-less").hide();
         $("#but-more").show();
        
    });
});
</script>

 
</body>

<!-- Mirrored from alien.lab.themebucket.net/mp-corporate1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 06:58:45 GMT -->
</html>

