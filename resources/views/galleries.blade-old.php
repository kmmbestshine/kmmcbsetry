<!DOCTYPE html>
<html lang="en">
<head>
    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>St.Josheps School - Gallery</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    ================================================== -->
    <link rel="shortcut icon" type="image/icon" href="{{url('frontend/img/fav-ico.png')}}"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{url('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{url('frontend/css/superslides.css')}}">
    <!-- Slick slider css file -->
    <link href="{{url('frontend/css/slick.css')}}" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{url('frontend/css/animate.css')}}">
    <!-- preloader -->
    <link rel="stylesheet" href="{{url('frontend/css/queryLoader.css')}}" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{url('frontend/css/jquery.tosrus.all.css')}}" />
    <!-- Default Theme css file -->
    <link id="switcher" href="{{url('frontend/css/themes/default-theme.css')}}" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{url('frontend/style.css')}}" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<header id="header" class="large-header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container-fluid">
                <div class="navbar-header text-center">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="{{route('/')}}"><!-- WpF <span>Degree</span> --><img src="{{url('frontend/img/logo.png')}}"></a>
                    <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="{{url('frontend/img/logo.png')}}" alt="logo"></a>  -->

                </div>
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li ><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('facility')}}">Facilities</a></li>
                        <li class="active"><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a class="login-btn" href="{{route('manage')}}">LOG IN</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>
<!--=========== END HEADER SECTION ================-->

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="imgBanner">
    <h2>Gallery</h2>
</section>
<!--=========== END COURSE BANNER SECTION ================-->

<!--=========== BEGIN GALLERY SECTION ================-->
<section id="">
    <!-- gallery -->

<div class="container">
    <div class="gal_tab">
         <ul class="nav nav-pills text-center">
          <li class="active"><a data-toggle="pill" href="#management-photo">management</a></li>
          <li><a data-toggle="pill" href="#teachers">teachers</a></li>
          <li><a data-toggle="pill" href="#Atmosphere">School Atmosphere</a></li>
        </ul>

        <div class="tab-content">
          <div id="management-photo" class="tab-pane fade in active">
            <h3 class="text-center">MANAGEMENT PHOTOS</h3>
                     <div class="container gallery-wr">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="gallerySLide" class="gallery_area">

                                <a href="{{url('frontend/img/gallery/mngmt_pht/OWNER OF TRUST.jpg')}}" title="OWNER OF TRUST">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/mngmt_pht/OWNER OF TRUST.jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/mngmt_pht/CHAIRMAN.JPG')}}" title="CHAIRMAN">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/mngmt_pht/CHAIRMAN.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/mngmt_pht/DIRECTOR.JPG')}}" title="DIRECTOR">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/mngmt_pht/DIRECTOR.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/mngmt_pht/PRINCIPAL.JPG')}}" title="PRINCIPAL">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/mngmt_pht/PRINCIPAL.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                
                                
                            </div>
                        </div>
                    </div>
                     </div>
          </div>
          <div id="teachers" class="tab-pane fade">
                 <h3>TEACHERS PHOTOS</h3>
                    <div class="container gallery-wr">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="gallerySLide" class="gallery_area">

                                <a href="{{url('frontend/img/gallery/Staff/DSC_0483.jpg')}}" title="SCHOOL STAFFS">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Staff/DSC_0483.jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                 <a href="{{url('frontend/img/gallery/Staff/LKG.JPG')}}" title="LKG-STAFF">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Staff/LKG.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/Staff/I.JPG')}}" title="I-st std-STAFF">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Staff/I.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/Staff/II.JPG')}}" title="II-nd std-STAFF">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Staff/II.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/Staff/III.JPG')}}" title="III-rd std-STAFF">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Staff/III.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                 <a href="{{url('frontend/img/gallery/Staff/IV.JPG')}}" title="IV-th std-STAFF">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Staff/IV.JPG')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>

                                
                                
                            </div>
                        </div>
                    </div>
                     </div>
                 <!--  -->
                     
          </div>
          <div id="Atmosphere" class="tab-pane fade">
            <h3>Schools Atmosphere</h3>
            <div class="container gallery-wr">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="gallerySLide" class="gallery_area">

                                <a href="{{url('frontend/img/gallery/Atmosphere/ATMO- (1).jpg')}}" title="">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Atmosphere/ATMO- (1).jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                 <a href="{{url('frontend/img/gallery/Atmosphere/ATMO- (2).jpg')}}" title="">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Atmosphere/ATMO- (2).jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/Atmosphere/ATMO- (3).jpg')}}" title="">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Atmosphere/ATMO- (3).jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/Atmosphere/ATMO- (4).jpg')}}" title="">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Atmosphere/ATMO- (4).jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                <a href="{{url('frontend/img/gallery/Atmosphere/ATMO- (5).jpg')}}" title="">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Atmosphere/ATMO- (5).jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>
                                 <a href="{{url('frontend/img/gallery/Atmosphere/ATMO- (6).jpg')}}" title="">
                                    <img class="gallery_img" src="{{url('frontend/img/gallery/Atmosphere/ATMO- (6).jpg')}}" alt="img" />
                                    <span class="view_btn">View</span>
                                </a>

                                
                                
                            </div>
                        </div>
                    </div>
                     </div>
          </div>
        </div>
    </div>
    
    
</div>
<!-- gallery -->
  
</section>
<!--=========== END GALLERY SECTION ================-->

<!--=========== BEGIN FOOTER SECTION ================-->
<footer id="footer">
    <!-- Start footer top area -->

    <!-- End footer top area -->

    <!-- Start footer bottom area -->
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_bootomLeft">
                        <p> Copyright &copy; All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_bootomRight">
                        <p>Designed by <a href="http://bestshineeduapp.com/" target="blank" rel="nofollow">bestshineeduapp.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer bottom area -->
</footer>
<!--=========== END FOOTER SECTION ================-->



<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Preloader js file -->
<script src="{{url('frontend/js/queryloader2.min.js')}}" type="text/javascript"></script>
<!-- For smooth animatin  -->
<script src="{{url('frontend/js/wow.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{url('frontend/js/slick.min.js')}}"></script>
<!-- superslides slider -->
<script src="{{url('frontend/js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('frontend/js/jquery.animate-enhanced.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.superslides.min.js')}}" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="{{url('frontend/js/jquery.tosrus.min.all.js')}}"></script>

<!-- Custom js-->
<script src="{{url('frontend/js/custom.js')}}"></script>
<script src="{{url('frontend/js/genral-js.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
  $("img").click(function(){
  var t = $(this).attr("src");
  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
  $("#myModal").modal();
});

$("video").click(function(){
  var v = $("video > source");
  var t = v.attr("src");
  $(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
  $("#myModal").modal();  
});
});//EOF Document.ready

</script>
<!--===============================================
  Template Design By WpFreeware Team.
  Author URI : http://www.wpfreeware.com/
====================================================-->

</body>
</html>