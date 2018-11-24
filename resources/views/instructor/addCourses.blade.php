<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Course</title>
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

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">

            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="{{route('instructor.index')}}">
          								   <span class="educate-icon educate-home icon-wrap"></span>
          								   <span class="mini-click-non">Education</span>
          								</a>

                        </li>

                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>

                             <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('instructor.myCourses')}}"><span class="mini-sub-pro"> My Courses
                                </span></a></li>

                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('instructor.create')}}"><span class="mini-sub-pro">Add Courses</span></a></li>

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
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                    													<i class="educate-icon educate-nav"></i>
                    												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{route('instructor.index')}}" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="{{route('instructor.myCourses')}}" class="nav-link">Courses</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link"></a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        															<img src="img/product/pro4.jpg" alt="" />
                        															<span class="admin-name">user name</span>
                        															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                        														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        <li><a href="{{route('instructor.profile')}}"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
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
        </div>

        <div class="breadcome-area">
                <div class="container-fluid">
                  <h2></h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="breadcome-heading nav-item">
                                        <h6 style="text-align: center;font-weight: 300;height: 10px;font-size: 40px;">Add New Course</h6>

                                      </div>

                                  </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



      <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Courses Details</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form  method="post"  onsubmit="return checkInfo()" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                              <div class="form-group">
                                                                <label for="coursename">Name</label>
                                                                  <input name="coursename" type="text" class="form-control" id="coursename" placeholder="Course Name" value="">
                                                                  <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                              </div>

                                                              <div class="form-group">
                                                                <label for="chapter">Chapters</label>
                                                                  <select class="form-control"  name="chapter" id="chapter">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="12">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>


                                                                  </select>
                                                                  <!-- <input name="chapter" id="chapter" type="text" class="form-control" placeholder="Chapter" value=""> -->
                                                                  <h4 id="h2" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                              </div>
                                                            </div>
                                                            </div>

                                                              <div class="form-group" >
                                                                <ul id="data">

                                                                  <li id="chapter1" style="">
                                                                    <label for="chapter1">Chapter-1</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter1Name" type="text" class="form-control" id="chapter1Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter1Content" type="text" class="form-control" id="chapter1Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter2" style="display:none;">
                                                                    <label for="chapter2">Chapter-2</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter2Name" type="text" class="form-control" id="chapter2Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter2Content" type="text" class="form-control" id="chapter2Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter3" style="display:none;">
                                                                    <label for="chapter3">Chapter-3</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter3Name" type="text" class="form-control" id="chapter3Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter3Content" type="text" class="form-control" id="chapter3Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter4" style="display:none;">
                                                                    <label for="chapter4">Chapter-4</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter4Name" type="text" class="form-control" id="chapter4Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter4Content" type="text" class="form-control" id="chapter4Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter5" style="display:none;">
                                                                    <label for="chapter5">Chapter-5</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter5Name" type="text" class="form-control" id="chapter5Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter5Content" type="text" class="form-control" id="chapter5Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter6" style="display:none;">
                                                                    <label for="chapter6">Chapter-6</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter6Name" type="text" class="form-control" id="chapter6Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter6Content" type="text" class="form-control" id="chapter6Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter7" style="display:none;">
                                                                    <label for="chapter7">Chapter-7</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter7Name" type="text" class="form-control" id="chapter7Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter7Content" type="text" class="form-control" id="chapter7Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter8" style="display:none;">
                                                                    <label for="chapter8">Chapter-8</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter8Name" type="text" class="form-control" id="chapter8Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter8Content" type="text" class="form-control" id="chapter8Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter9" style="display:none;">
                                                                    <label for="chapter9">Chapter-9</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter9Name" type="text" class="form-control" id="chapter9Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter9Content" type="text" class="form-control" id="chapter9Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter10" style="display:none;">
                                                                    <label for="chapter10">Chapter-10</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter10Name" type="text" class="form-control" id="chapter10Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter10Content" type="text" class="form-control" id="chapter10Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter11" style="display:none;">
                                                                    <label for="chapter11">Chapter-11</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter11Name" type="text" class="form-control" id="chapter11Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter11Content" type="text" class="form-control" id="chapter11Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter12" style="display:none;">
                                                                    <label for="chapter12">Chapter-12</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter12Name" type="text" class="form-control" id="chapter12Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter12Content" type="text" class="form-control" id="chapter12Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter13" style="display:none;">
                                                                    <label for="chapter13">Chapter-13</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter13Name" type="text" class="form-control" id="chapter13Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter13Content" type="text" class="form-control" id="chapter13Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter14" style="display:none;">
                                                                    <label for="chapter14">Chapter-14</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter14Name" type="text" class="form-control" id="chapter14Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter14Content" type="text" class="form-control" id="chapter14Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter15" style="display:none;">
                                                                    <label for="chapter15">Chapter-15</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter15Name" type="text" class="form-control" id="chapter15Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter15Content" type="text" class="form-control" id="chapter15Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter16" style="display:none;">
                                                                    <label for="chapter16">Chapter-16</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter16Name" type="text" class="form-control" id="chapter16Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter16Content" type="text" class="form-control" id="chapter16Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter17" style="display:none;">
                                                                    <label for="chapter17">Chapter-17</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter17Name" type="text" class="form-control" id="chapter17Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter17Content" type="text" class="form-control" id="chapter17Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter18" style="display:none;">
                                                                    <label for="chapter18">Chapter-18</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter18Name" type="text" class="form-control" id="chapter18Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter18Content" type="text" class="form-control" id="chapter18Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter19" style="display:none;">
                                                                    <label for="chapter19">Chapter-19</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter19Name" type="text" class="form-control" id="chapter19Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter9Content" type="text" class="form-control" id="chapter9Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                  <li id="chapter20" style="display:none;">
                                                                    <label for="chapter20">Chapter-20</label><br>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter20Name" type="text" class="form-control" id="chapter20Name" placeholder="Name" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="form-group">
                                                                          <input name="chapter20Content" type="text" class="form-control" id="chapter20Content" placeholder="Content" value="">
                                                                          <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4> -->
                                                                      </div>
                                                                    </div>
                                                                  </li>

                                                                </ul>
                                                              </div>





                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
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
                    </div>
                </div>
            </div>

        </div>

      <!-- jquery
      ============================================ -->
      <script src="build/js/jquery-1.12.4.js"></script>

      <!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.js"></script> -->

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

      <script src="build/js/addCourse.js"></script>

</body>

</html>