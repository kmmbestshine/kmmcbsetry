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
    <title>St.Joseph's School - Contact Us</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{url('frontend/img/logo.png')}}"/>

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
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
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
                    <a class="navbar-brand" href="{{route('/')}}"><!-- WpF <span>Degree</span> -->
                        <img src="{{url('frontend/img/logo.png')}}"></a>
                    <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="{{url('frontend/img/logo.png')}}" alt="logo"></a>  -->

                </div>
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li class="active"><a href="{{route('facility')}}">Facilities</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li ><a href="{{route('contact')}}">Contact</a></li>
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
    <h2>Facility</h2>
</section>
<!--=========== END COURSE BANNER SECTION ================-->

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="courseArchive">
    <div class="container">
        <div class="row">
            <!-- start course content -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="courseArchive_content">
                    <!-- start blog archive  -->
                    <div class="row">
                        <!-- start single blog -->
                        <div class="col-lg-12 col-12 col-sm-12">
                            <div class="single_blog">
                                <div class="blogimg_container">
                                    <a href="#" class="blog_img">
                                        <img alt="img" src="{{url('frontend/img/blog.jpg')}}">
                                    </a>
                                </div>
                                <h2 class="blog_title"><a href=""> LIST OF SCHOOL FACILITY</a></h2>

                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <div class="col-md-12 facility-wr">

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/library.png')}}"></div>
                                        <div class="col-md-6"><h3>Library</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/sport.png')}}"></div>
                                        <div class="col-md-6"><h3>Sports</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/lab.png')}}"></div>
                                        <div class="col-md-6"><h3>Lab</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/digital-cls.png')}}"></div>
                                        <div class="col-md-6"><h3>Digital Classroom</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/food.png')}}"></div>
                                        <div class="col-md-6"><h3>Food</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/medical.png')}}"></div>
                                        <div class="col-md-6"><h3>Medical facilities</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/hostel.png')}}"></div>
                                        <div class="col-md-6"><h3>Hostel</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 facility-wr-list wow animated fadeInUp">
                                        <div class="col-md-6"><img src="{{url('frontend/img/bus-root.png')}}"></div>
                                        <div class="col-md-6"><h3>Bus Route</h3>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>




                                </div>

                                <div class="col-md-12">
                                    <h2>BUS ROUTE DETAILS</h2>
                                    <div class="admi-tb-wr">
                                        <table class="table table-bordered about-table">
                                            <thead>
                                            <tr>
                                                <th>ROUTE</th>
                                                <th>STOPING</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>PARAVAKAL </td>
                                                <td>• Kollapuram,<br>• Morasapalli,<br>• Paravakal,<br>• Chinnarajakuppam,<br>• Rajakuppam,<br>• Cettikuppam,<br>• PeriyaChettikuppam,<br>• Mealaalanguppam,<br>• Kealaalanguppam,<br>• Kidanguramapuram,<br>• Vaniyambadi</td>

                                            </tr>
                                            <tr>
                                                <td>UDAYARAJAPALAYAM</td>

                                                <td>• U.R.Plalayam,<br>• Devigapuram,<br>• Madanur,<br>• Arimuthupatti,<br>• Chinnathotalam,<br>• Rasampatti,<br>• Shanthinagara,<br>•  Keelpatti,<br>• L.A.Puram,<br>• Mailpatti,<br>• Mailpatii Shop,<br>• Chendathur.<br></td>

                                            </tr>
                                            <tr>
                                                <td>KOKALLORE</td>
                                                <td>• Eriguthi,<br>• Lalapet,<br>• Kallipettai,<br>• Sathgar,<br>• Kottaicolony,<br>• Anandhagiri,<br>• Sivanagiri,<br>• Gundalapalli,<br>• Bandalathodi,<br>• Kokallor,<br>• Rangampettai.<br></td>

                                            </tr>
                                            <tr>
                                                <td>AMBUR</td>
                                                <td>• Kumaramangalam,<br>• Ambur,<br>• Nariyambut,<br>• Sankarapuram,<br>• Kothakuppam,<br>• Melkothakuppam,<br>• Alinjikuppam,<br>• Pudumanai,<br>• Rajkal,<br>• Vasanthapuram,<br>• Reddymanguppam.</td>

                                            </tr>
                                           <!--  <tr>
                                                <td>MACHAMBUT</td>
                                                <td>• Kumaramangalam,<br>• Ambur,<br>• Nariyambut,<br>• Sankarapuram,<br>• Kothakuppam,<br>• Melkothakuppam,<br>• Alinjikuppam,<br>• Pudumanai,<br>• Rajkal,<br>• Vasanthapuram,<br>• Reddymanguppam.u</td>

                                            </tr> -->
                                            <tr>
                                                <td>VENGILI</td>

                                                <td>• Vengili,<br>• Kilmurungai,<br>• Sugarmill,<br>• Vadapudhupet,<br>• Pachakuppam,<br>• Alinjikuppam.</td>

                                            </tr>
                                            <tr>
                                                <td>T.V.K NAGAR</td>

                                                <td>• Pernambut<br>,• Onguppam,<br>• Ricemill,<br>• Cycle Shop</td>

                                            </tr>
                                            <tr>
                                                <td>AZHINGIKUPPAM</td>

                                                <td>• M.V.Kuppam,<br>• Kovilmedu,<br>• Puthur,<br>• C.R.Kuppam,<br>• S.R.kuppam,<br>• Alinjikuppam.</td>

                                            </tr>
                                            <tr>
                                                <td>AGARAMCHERI</td>
                                                <td>• Melnondikuppam,<br>• Vadakathipatti,<br>• Agaramcheri,<br>• Koothampakkam,<br>• Seethapuram,<br>• M.C.Colony,Madanur,<br>• Saminadhapuram,<br>• Ulli,<br>• Kammarampatti,<br>• Sembedu,<br>• P.R.Kuppam,<br>• MGRNagar,<br>• Pogalur,<br>• Thurinjithalaipatti,<br>• Thulukankuttai.<br></td>
                                            </tr>
                                            <tr>
                                                <td>MASIGAM</td>

                                                <td>
                                                • Machambut,<br>• Kothur,<br>• Balur,<br>• Oonanguttai,<br>• Mittapalli,<br>• Masigam,<br>• Periyadhamalcheru,<br>• Bakkalapalli,<br>• Mathur,<br>• Salapet,<br>• Pernambut,<br>• Puthukovil,<br>• Eriguthi,<br>• Kothapalli,<br>• Pallalakuppam.<br></td>
                                            </tr>

                                            <tr>
                                                <td>NANANGANALLORE</td>
                                               
                                                <td>
                                                 • Nananganallore,<br>• Poongulam,<br>• Aripattari,<br>• Agravaram,<br>• Erthangal,<br>• Kuttaimedu,<br>• Oosuranpatti,<br>• London patti,<br>• Morasapalli,<br>• T.T.Mottur,<br>• Kamalapuram,<br>• Chinthakanava.<br></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                    <!-- end blog archive  -->
                </div>
            </div>
            <!-- End course content -->


        </div>
    </div>
</section>
<!--=========== END COURSE BANNER SECTION ================-->

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
<script src="{{url('frontend/js/queryloader.min.js')}}" type="text/javascript"></script>
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
<!--===============================================
  Template Design By WpFreeware Team.
  Author URI : http://www.wpfreeware.com/
====================================================-->

</body>
</html>