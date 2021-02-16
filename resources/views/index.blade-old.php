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
    <title>St.Josheps School - Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
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
<a class="scrollToTop" href="#">

</a>
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
                        <li class="active"><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('facility')}}">Facilities</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a class="login-btn" href="{{route('manage')}}">LOG IN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- END MENU -->
    <div class="admis-en-wr">
        <a  id="admission-wr">Enquire About Admission</a>
        <div id="panel"> 
            Phone: 04171-230 900<br>
            Email: stpaulsschoolpbt@gmail.com
        </div>
    </div>
</header>

<!--=========== END HEADER SECTION ================-->

<!--=========== BEGIN SLIDER SECTION ================-->

<section class="slider">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{url('frontend/img/slider/2.jpg')}}" alt="img" style="width: 100%">
                <center>
                    <div class="slider_caption">
                        <h2>In the kingdom of education, we are the KINGS</h2>
                        <div class="col-md-12 col-sm-12 col-xs-126 banner-points">
                            <h3>Our special focus</h3>
                            <p>We ensure our students<br>
                                • are taught creationism<br>
                                • are taught life skills<br>
                                • are monitored at all the times<br>
                                • super score<br>
                                • study the most<br>
                                • are happiest<br>
                                • are hot and smart<br>
                                • areaiming high<br>
                                • aredreaming big<br>
                                • are digital champions<br>
                                • flourish<br>
                                • are always safe<br>
                                • succeed in future<br>
                            </p>
                        </div>
                    </div>
                </center>
            </div>

            <div class="item">
                <img src="{{url('frontend/img/slider/3.jpg')}}" alt="img" style="width: 100%">
                <div class="slider_caption slider_right_caption">
                    <h2>HONEST EDUCATION is our MODEST DEDICATION</h2>
                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p> -->
                    <!--  <a class="slider_btn" href="#">Know More</a> -->
                </div>
            </div>

            <div class="item">
                <img src="{{url('frontend/img/slider/4.jpg')}}" alt="img" style="width: 100%">
                <div class="slider_caption">
                    <h2>We don’t TEACH but COACH</h2>


                    <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                    <a class="slider_btn" href="#">Know More</a> -->
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</section>
<!--=========== END SLIDER SECTION ================-->

<!--=========== BEGIN ABOUT US SECTION ================-->
<section id="aboutUs">
    <div class="container">
        <div class="row">
            <!-- Start about us area -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="aboutus_area wow fadeInLeft">
                    <h2 class="titile">About Us</h2>
                    <p>St.Joseph’s School was established in 1981 and is a Co-Educational school. It is a
                        rural school situated in pallalakuppam, vellore District. The school is currently
                        run, by the Devanayagi Educational Trust, headed by Capt.Dr.S.Prasath Kumar
                        MBA. Our aim is to impart sound education and to enable the children to blossom
                        into personalities under well organized and healthy environment and to make
                        them confident, self reliant and well disciplined citizens.
                        We are providing SKILL BASED TEACHING and we are conducting OMR exams
                        from LKG onwards by World’s best South Korean Software. To improve
                        communication skill we give special Coaching by Communicative English Team.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END ABOUT US SECTION ================-->

<!--=========== BEGIN WHY US SECTION ================-->
<section id="whyUs">
    <!-- Start why us top -->
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="whyus_top">
                <div class="container">
                    <!-- Why us top titile -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="title_area">
                                <h2 class="title_two">Why Us</h2>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Why us top titile -->
                    <!-- Start Why us top content  -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_whyus_top wow fadeInUp">
                                <div class="whyus_icon">
                                    <span class="fa fa-desktop"></span>
                                </div>
                                <h3>Technology</h3>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_whyus_top wow fadeInUp">
                                <div class="whyus_icon">
                                    <span class="fa fa-users"></span>
                                </div>
                                <h3>Best Teaching</h3>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book make a type specimen book</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_whyus_top wow fadeInUp">
                                <div class="whyus_icon">
                                    <span class="fa fa-flask"></span>
                                </div>
                                <h3>Practical Training</h3>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_whyus_top wow fadeInUp">
                                <div class="whyus_icon">
                                    <span class="fa fa-support"></span>
                                </div>
                                <h3>Certified Courses</h3>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                        </div>
                    </div>
                    <div class="features-wr">
                        <div class="features-lable-wr">
                            <h3>FEATURES</h3>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>•  Super school comprising of 3000 students</li>
                                <li>•  Sprawling 6 acres of green campus</li>
                                <li>• State-of-the-art infrastructure</li>
                                <li>•  Dedicated and sincere faculties of 117</li>
                                <li>• Only school in the entire Vellore district conducting OMR exams from LKG onwards</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>• The curriculum of our school is similar to that of CBSE schools</li>
                                <li>• NEET/IIT-JEE coaching classes from VI std onwards</li>
                                <li>• 21ST Century skills based XSEED methodology teaching</li>
                                <li>•  Special coaching for Communicative English</li>

                            </ul>
                        </div>

                    </div>
                    <!-- End Why us top content  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End why us top -->

    <!-- Start why us bottom -->
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="whyus_bottom">
                <div class="slider_overlay"></div>
                <div class="container">
                    <div class="skills facility-wr">
                        <h2 class="text-center white">FACILITIES</h2>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!--  <div id="myStat" data-dimension="150" data-text="35%" data-info="" data-width="10" data-fontsize="25" data-percent="35" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Library</h4></a>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!-- <div id="myStathalf2" data-dimension="150" data-text="90%" data-info="" data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Sports</h4></a>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!-- <div id="myStat2" data-dimension="150" data-text="100%" data-info="" data-width="10" data-fontsize="25" data-percent="100" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Lab</h4></a>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!--  <div id="myStat3" data-dimension="150" data-text="65%" data-info="" data-width="10" data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Digital Classroom</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!--  <div id="myStat" data-dimension="150" data-text="35%" data-info="" data-width="10" data-fontsize="25" data-percent="35" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Food</h4></a>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!-- <div id="myStathalf2" data-dimension="150" data-text="90%" data-info="" data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Medical facilities</h4></a>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!-- <div id="myStat2" data-dimension="150" data-text="100%" data-info="" data-width="10" data-fontsize="25" data-percent="100" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Bus Route</h4></a>

                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <!--  <div id="myStat3" data-dimension="150" data-text="65%" data-info="" data-width="10" data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div> -->
                                <a href="{{route('facility')}}"><h4>Hostel</h4></a>
                            </div>
                        </div>
                    </div>
                </div> <div class="text-center">
                    <a class="more-facility-btn" href="{{route('facility')}}">More About Facilities</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End why us bottom -->
</section>
<!--=========== END WHY US SECTION ================-->

<!--=========== BEGIN OUR COURSES SECTION ================-->
<section id="ourCourses">
    <div class="container">
        <!-- Our courses titile -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title_area">
                    <h2 class="title_two">attendance</h2>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
       <!--  <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="ourCourse_content">
                    <ul class="course_nav">
                        <li>
                            <div class="single_course">
                                <div class="singCourse_imgarea">
                                    <img src="{{url('frontend/img/course-1.jpg')}}" />
                                    <div class="mask">
                                        <a href="#" class="course_more">View Course</a>
                                    </div>
                                </div>
                                <div class="singCourse_content">
                                    <h3 class="singCourse_title"><a href="#">Mathematics</a></h3>

                                    <p>Physics/Chemistry/Statistics/Mathematics</p>
                                </div>
                                <div class="singCourse_author">
                                    
                                    <p>Richard Remus, Teacher</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single_course">
                                <div class="singCourse_imgarea">
                                    <img src="{{url('frontend/img/course-2.jpg')}}" />
                                    <div class="mask">
                                        <a href="#" class="course_more">View Course</a>
                                    </div>
                                </div>
                                <div class="singCourse_content">
                                    <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>

                                    <p>Statistics/Economics/Commerce/Accountancy</p>
                                </div>
                                <div class="singCourse_author">
                                 
                                    <p>Richard Remus, Teacher</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single_course">
                                <div class="singCourse_imgarea">
                                    <img src="{{url('frontend/img/course-1.jpg')}}" />
                                    <div class="mask">
                                        <a href="#" class="course_more">View Course</a>
                                    </div>
                                </div>
                                <div class="singCourse_content">
                                    <h3 class="singCourse_title"><a href="#">Economics</a></h3>

                                    <p>when an unknown printer took a galley of type </p>
                                </div>
                                <div class="singCourse_author">
                                  
                                    <p>Richard Remus, Teacher</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single_course">
                                <div class="singCourse_imgarea">
                                    <img src="{{url('frontend/img/course-2.jpg')}}" />
                                    <div class="mask">
                                        <a href="#" class="course_more">View Course</a>
                                    </div>
                                </div>
                                <div class="singCourse_content">
                                    <h3 class="singCourse_title"><a href="#">Commerce</a></h3>

                                    <p>when an unknown printer took a galley of type</p>
                                </div>
                                <div class="singCourse_author">
                                   
                                    <p>Richard Remus, Teacher</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single_course">
                                <div class="singCourse_imgarea">
                                    <img src="{{url('frontend/img/course-1.jpg')}}" />
                                    <div class="mask">
                                        <a href="#" class="course_more">View Course</a>
                                    </div>
                                </div>
                                <div class="singCourse_content">
                                    <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>

                                    <p>when an unknown printer took a galley of type</p>
                                </div>
                                <div class="singCourse_author">
                                  
                                    <p>Richard Remus, Teacher</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single_course">
                                <div class="singCourse_imgarea">
                                    <img src="{{url('frontend/img/course-2.jpg')}}" />
                                    <div class="mask">
                                        <a href="#" class="course_more">View Course</a>
                                    </div>
                                </div>
                                <div class="singCourse_content">
                                    <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>

                                    <p>when an unknown printer took a galley of type</p>
                                </div>
                                <div class="singCourse_author">
                                    
                                    <p>Richard Remus, Teacher</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <P>1. The pupils must be in the school premises ten minutes before time.<br>
2. Pupils must be regular and punctual to school and they must be present for the morning assembly.<br>
3. Latecomers will not be permitted to enter the class without permission from the principal.<br>
4. Pupils must help to keep the premises clean and pleasant. Waste paper, peels of fruits etc must be thrown in the bin provided for the same.<br>
5. The pupils are forbidden to run or shout in the classroom or corridor. They must never sit on the teacher's chair in the classroom or on the top of the desks and tables.<br>
6. The uniform is not be used at home and must be clean and tidy. Torn clothes and shoes be mended in time and the shoes should be properly polished. A pupil coming to class without a uniform is liable to be fined or sent back home.<br>
7. Pupils are expected to be respectful in all places and at all times. They should be respectful in all their behavior not only within the school premises but also at home and wherever they are, especially in public.<br> </P>
        <!-- End Our courses content -->
    </div>
</section>
<!--=========== END OUR COURSES SECTION ================-->
<section id="counter_threeup" class="counter_threeup lightbg counter-sections">
    <div class="container">
        <div class="row">
            <div class="counter_threeup-wrapper">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_threeup">
                        <div class="counter_threeup-photo">
                            <img src="{{url('frontend/img/man.png')}}" alt="teaching-staf" />
                        </div>
                        <div class="counter_threeup-content text-center">
                            <h5 class="count-number">90</h5>
                            <h6>Total No.of Teaching staffs</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_threeup">
                        <div class="counter_threeup-photo">
                            <img src="{{url('frontend/img/man2.png')}}" alt="Non-Teaching-staf" />
                        </div>
                        <div class="counter_threeup-content text-center">
                            <h5 class="count-number">30</h5>
                            <h6>Total No.of Non-Teaching Staffs</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_threeup">
                        <div class="counter_threeup-photo">
                            <img src="{{url('frontend/img/section.png')}}" alt="section" />
                        </div>
                        <div class="counter_threeup-content text-center">
                            <h5 class="count-number">77</h5>
                            <h6>Total No.of Sections</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter_threeup">
                        <div class="counter_threeup-photo">
                            <img src="{{url('frontend/img/student.png')}}" alt="student" />
                        </div>
                        <div class="counter_threeup-content text-center">
                            <h5 class="count-number">2761</h5>
                            <h6 class="total-class">Total No.Of Students</h6>
                        </div>
                    </div>
                </div>

            </div>
            <center class="center"><div class=""> <h5 class="count-number"><b>PRE KG-X th std</b></h5><h6>Total No.Of Class</h6></div></center>
        </div>
    </div>
</section>
<!--=========== BEGIN OUR TUTORS SECTION ================-->
<section id="ourTutors">
    <div class="container">
        <!-- Our courses titile -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title_area">
                    <h2 class="title_two">TOP RANK STUDENTS</h2>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="ourTutors_content">
                    <!-- Start Tutors nav -->
                    <ul class="tutors_nav">
                        <li>
                            <div class="single_tutors">
                                <div class="tutors_thumb">
                                    <img src="{{url('frontend/img/author.jpg')}}" />
                                </div>
                                <div class="singTutors_content">
                                    <h3 class="tutors_name">Jame Burns</h3>
                                    <span>Technology Teacher</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="single_tutors">
                                <div class="tutors_thumb">
                                    <img src="{{url('frontend/img/course-1.jpg')}}" />
                                </div>
                                <div class="singTutors_content">
                                    <h3 class="tutors_name">Jame Burns</h3>
                                    <span>Technology Teacher</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="single_tutors">
                                <div class="tutors_thumb">
                                    <img src="{{url('frontend/img/author.jpg')}}" />
                                </div>
                                <div class="singTutors_content">
                                    <h3 class="tutors_name">Jame Burns</h3>
                                    <span>Technology Teacher</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="single_tutors">
                                <div class="tutors_thumb">
                                    <img src="{{url('frontend/img/course-1.jpg')}}" />
                                </div>
                                <div class="singTutors_content">
                                    <h3 class="tutors_name">Jame Burns</h3>
                                    <span>Technology Teacher</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="single_tutors">
                                <div class="tutors_thumb">
                                    <img src="{{url('frontend/img/author.jpg')}}" />
                                </div>
                                <div class="singTutors_content">
                                    <h3 class="tutors_name">Jame Burns</h3>
                                    <span>Technology Teacher</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="single_tutors">
                                <div class="tutors_thumb">
                                    <img src="{{url('frontend/img/course-1.jpg')}}" />
                                </div>
                                <div class="singTutors_content">
                                    <h3 class="tutors_name">Jame Burns</h3>
                                    <span>Technology Teacher</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                                <
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Our courses content -->
    </div>
</section>
<!--=========== END OUR TUTORS SECTION ================-->

<!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
<section id="studentsTestimonial">
    <div class="container">
        <!-- Our courses titile -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="title_area">
                    <h2 class="title_two">What our Student says</h2>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="studentsTestimonial_content">
                    <div class="row">
                        <!-- start single student testimonial -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_stsTestimonial wow fadeInUp">
                                <div class="stsTestimonial_msgbox">
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                                <img class="stsTesti_img" src="{{url('frontend/img/author.jpg')}}" alt="img">
                                <div class="stsTestimonial_content">
                                    <h3>Johnathan Doe</h3>
                                    <span>Ex. Student</span>
                                    <!--  <p>Software Department</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- End single student testimonial -->
                        <!-- start single student testimonial -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_stsTestimonial wow fadeInUp">
                                <div class="stsTestimonial_msgbox">
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.scrambled it to make a type specimen book</p>
                                </div>
                                <img class="stsTesti_img" src="{{url('frontend/img/author.jpg')}}" alt="img">
                                <div class="stsTestimonial_content">
                                    <h3>Johnathan Doe</h3>
                                    <span>Ex. Student</span>
                                    <!--  <p>Software Department</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- End single student testimonial -->
                        <!-- start single student testimonial -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_stsTestimonial wow fadeInUp">
                                <div class="stsTestimonial_msgbox">
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                                <img class="stsTesti_img" src="{{url('frontend/img/author.jpg')}}" alt="img">
                                <div class="stsTestimonial_content">
                                    <h3>Johnathan Doe</h3>
                                    <span>Ex. Student</span>
                                    <!--    <p>Software Department</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- End single student testimonial -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our courses content -->
    </div>
</section>
<!--=========== END STUDENTS TESTIMONIAL SECTION ================-->

<!--=========== BEGIN FOOTER SECTION ================-->
<footer id="footer">
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
<script src="{{url('frontend/js/genral-js.js')}}"></script>
<script src="{{url('frontend/js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('frontend/js/jquery.animate-enhanced.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.superslides.min.js')}}" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="{{url('frontend/js/jquery.tosrus.min.all.js')}}"></script>

<!-- Custom js-->
<script src="{{url('frontend/js/custom.js')}}"></script>
<!--=============================================== 
Template Design By WpFreeware Team.
Author URI : http://www.wpfreeware.com/
====================================================-->


</body>
</html>