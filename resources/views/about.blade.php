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
    <title>St.Joseph's School - About Us</title>

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
                    <a class="navbar-brand" href="{{route('/')}}"><!-- WpF <span>Degree</span> -->
                        <img src="{{url('frontend/img/logo.png')}}"></a>
                    <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="{{url('frontend/img/logo.png')}}" alt="logo"></a>  -->

                </div>
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li class="active"><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('facility')}}">Facilities</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
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
    <h2>About</h2>
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
                                <div class="vis-mis-wr">
                                    <div class="col-md-12">
                                        <div class="mis-vis-img-wr col-md-4">
                                            <img src="{{url('frontend/img/mis.png')}}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="well mis-well">
                                                <h3 class="blog_title"><a href="">MISSION</a></h3>
                                                <ul>
                                                    <li></li>
                                                </ul>
                                                <p>
                                                    • Be Committed to education as a life long process <br>
                                                    • To ensure  ‘Changes’ every day and excel as the Best school.<br>
                                                    • To become one of the Top schools in India.<br>
                                                    • Building an Empire with Education and remain as the KING.<br>
                                                    •  Not do different things but do everything differently.<br>

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mis-vis-img-wr col-md-4">
                                            <img src="{{url('frontend/img/vis.png')}}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="well vis-well">
                                                <h3 class="blog_title"><a href="">VISION</a></h3>
                                                <ul>
                                                    <li></li>
                                                </ul>
                                                <p>
                                                    • To create a noticeable impact in the overall education field / industry and be recognized as a POWER SCHOOL / institute.<br>
                                                    • To contribute for a positive change in the attitude of students, teachers and entire staff within the school.<br>
                                                    • To provide continuous training to a highly motivated &commited staff to achieve their highest potential<br>
                                                    • To have a broad sense of understanding & communication with the parents.<br>
                                                    • To teach the students for their future, not the past<br>
                                                    • To love each student and treat them kindly<br>
                                                    • To make the entire students SELF-LEARNERS<br>
                                                    • To focus on every student’s creativity and encourage on their innovation<br>
                                                    • To make sure the students are developed holistic and not purely in academics<br>

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mis-vis-img-wr col-md-4">
                                            <img src="{{url('frontend/img/poli.png')}}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="well poli-well">
                                                <h3 class="blog_title"><a href="">QUALITY POLICY</a></h3>
                                                <ul>
                                                    <li></li>
                                                </ul>
                                                <p>
                                                    The school / institute shall<br>
                                                    • Remain committed to creating an environment that is conducive to different styles of learning and motivates the students as well as the teachers to excel.<br>
                                                    • Adopt to new learning tools and 21st century skills teaching methodology.<br>
                                                    • Develop skills & infrastructure appropriate to the technological advances.<br>
                                                    • Make efficient use of all available resources to meet the requirements of the parents and people.<br>
                                                    • Recognize total quality students as it’s product and not just the curriculum.<br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <h2 class="blog_title"><a href="">ABOUT MANAGEMENT</a></h2>

                                <div class="flt-center">
                                    <div class="col-md-6">
                                        <table class="table table-bordered about-table">
                                            <thead>
                                            <tr>
                                                <th>POSITION</th>
                                                <th>NAME</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Chairman  </td>
                                                <td>Mr.Capt.S.Prasath Kumar, M.B.A.,</td>

                                            </tr>
                                            <tr>
                                                <td>Advisor</td>
                                                <td>Mrs.S.Ranganayagi(Rtd.Teacher)</td>

                                            </tr>
                                            <tr>
                                                <td>Correspondent</td>
                                                <td>Mrs.P.Lilly Shobana M.Sc.,M.Ed.,</td>

                                            </tr>
                                            <tr>
                                                <td>Director</td>
                                                <td>Mr.S.Narendirakumar M.Sc.,B.Ed.,<br>
                                                    Mrs.N.PunithaIlayarani M.C.A.,M.Phil.,
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p>Good education is the KEY to success in everyone’s life. </p>
                                <p>True education is simply the process of developing the ability to learn, apply, unlearn, and relearn. Learning is the act or process of acquiring knowledge or skill.</p>
                                <p>A good and true education develops a critical thought process in addition to learning accepted facts. It also encourages intellectual curiosity, which will lead to lifelong learning.</p>
                                <p>
                                    Keeping the above fact in mind we provide quality and skill based education. Hence our school is the best place to inculcate discipline, good habits and life skills in children which will last with them throughout their life.
                                    Knowing the advantages of 21st century skill based education, we strictly discourage rote memorization as it will lead to cramming and forgetting rather than life long learning.</p>
                                <p>We also focus on studying smart instead of studying hard to score high in all competitive exams and board exams.</p>
                                <p>We motivate the students and give lots of study tips such as MEMORY PALACE and SPACED REPITITION TECHNIQUES and tailored a proven system of learning cum understanding based on each student’s LEARNING STYLE.</p>
                                <blockquote>
                                    <span class="fa fa-quote-left"></span>
                                    Every student is my own child and hence my NATURE is aiming their bright FUTURE
                                </blockquote>
                                <blockquote>
                                    <span class="fa fa-quote-left"></span>
                                    Send your CHILD here, we keep you SMILED for ever
                                </blockquote>
                                <blockquote>
                                    <span class="fa fa-quote-left"></span>
                                    We make our students to THINK BIG
                                </blockquote>

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
<hr>
<section class="abt-fac-wr">
    <div class="container">
        <div class="col-md-12">
            <h2 class="blog_title"><a href="">ABOUT FACULTIES</a></h2>
            <br>
            <br>
            <h3>HAND PICKED TEAM</h3>
            <p>Our greatest treasure is our dedicated team of experts. Staffs in St.Paul’s are trained with trainers from around the state. Team spirit is highly motivated among our staffs. While recruiting, we look for knowledgable, creative, passionate individuals who have an interest to effectively update themselves in the teaching -learning front.</p>
            <br>
            <h3>RESEARCH AND DEVELOPMENT TEAM</h3>
            <br>
            <h3>MARKETING TEAM</h3>
            <br>
            <h3>HUMAN RESOURCE TEAM</h3>
            <br>
            <h3>QUALITY MANAGEMENT TEAM</h3>
            <br>
            <h3>WELL TRAINED FACULTY</h3>
            <p>St. Paul’s sets great goals by the quality of its human resources. Around 120 permanent full-time teaching staffs are all graduates with teaching qualifications and experiences. Apart from what they offer in their various curricular capacities, they embody a huge range of interests and skills which support the school's extra-curricular activities, and also contribute enthusiastically to the life of the students beyond the class room</p>
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