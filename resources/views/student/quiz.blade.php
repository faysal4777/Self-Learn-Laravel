<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quiz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/">

    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/owl.carousel.css">
    <link rel="stylesheet" href="build/css/owl.theme.css">
    <link rel="stylesheet" href="build/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="build/css/metisMenu/metisMenu-vertical.css">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="build/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="build/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"></a>
                <strong><a href="index.html"></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="{{route('student.index')}}">
            								   <span class="educate-icon educate-home icon-wrap"></span>
            								   <span class="mini-click-non">Education</span>
            								</a>

                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Chapters</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

                              <!-- chapter name -->
                                <!-- <%
                                  for(var i=0; i< chapter.length; i++){ %>

                                    <li><a title="All Courses" href="student/chapter/<%= chapter[i].name %>"><span class="mini-sub-pro"><%= chapter[i].name %></span></a></li>

                                  <% } %> -->

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{route('student.index')}}" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="{{route('student.course')}}" class="nav-link">Courses</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        															<!-- <img src="img/product/pro4.jpg" alt="" /> -->
                        															<span class="admin-name">user name</span>
                        															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                        														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        <li><a href="{{route('student.profile')}}"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>

                                                        <li><a href=""><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="{{route('logout.index')}}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->

            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                  <h2></h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="breadcome-heading nav-item">
                                        <h6 style="text-align: center;font-weight: 300;height: 20px;font-size: 40px;">course.name</h6>

                                      </div>

                                  </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="courses-area">
            <div class="container-fluid">
                <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="blog-details-inner">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="latest-blog-single blog-single-full-view">
                                    <form class="" action="" method="post">
                                      <div class="blog-details blog-sig-details">

                                          <h1><a class="blog-ht" href="#">chapter.name</a></h1>
                                          <br>

                                          <!-- quizes -->

                                          <!-- <%
                                            for(var i=0; i< quiz.length; i++){ %> -->

                                              <label class="login2">(<%=(i+1)%>) <%=quiz[i].question%></label><br>

                                              <input type="radio" name="<%=i%>" value="<%=quiz[i].op1%>"> <%=quiz[i].op1%> <br>
                                              <input type="radio" name="<%=i%>" value="<%=quiz[i].op2%>"> <%=quiz[i].op2%> <br>
                                              <input type="radio" name="<%=i%>" value="<%=quiz[i].op3%>"> <%=quiz[i].op3%> <br>
                                              <input type="radio" name="<%=i%>" value="<%=quiz[i].op4%>"> <%=quiz[i].op4%> <br><br>

                                              <!-- <p class="answer">Answer: <span class="<%=i%>"><%=quiz[i].answer%></span></p> -->

                                            <!-- <% } %> -->

                                          <br><br>
                                      </div>
                                      <div class="product-buttons">
                                          <!-- <span id="chapter"><%=selectedchapter.chapter_id%></span> -->
                                          <p id="score"></p>
                                          <button type="button" id="submitbtn" class="button-default cart-btn">Submit</button>
                                          <button type="button" id="sharebtn" class="button-default cart-btn">Share</button>
                                      </div>
                                      </form>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>

                </div>

            </div>
        </div>
        <br><br><br><br><br>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- jquery
		============================================ -->
    <script src="build/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- <script src="../course.js"></script> -->

    <!-- bootstrap JS
		============================================ -->
    <script src="build/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="build/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="build/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="build/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="build/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="build/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="build/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="build/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="build/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="build/js/metisMenu/metisMenu.min.js"></script>
    <script src="build/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="build/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="build/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="build/js/sparkline/sparkline-active.js"></script>

    <!-- icheck JS
		============================================ -->
    <script src="build/js/icheck/icheck.min.js"></script>
    <script src="build/js/icheck/icheck-active.js"></script>


    <!-- plugins JS
		============================================ -->
    <script src="build/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="build/js/main.js"></script>


    <script>

    </script>



</body>

</html>
