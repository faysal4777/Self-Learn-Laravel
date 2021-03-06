<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Quiz</title>
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
                           <!--  <a class="has-arrow" href="">
          								   <span class="educate-icon educate-home icon-wrap"></span>
          								   <span class="mini-click-non">Education</span>
          								</a> -->

                        </li>

                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>

                             <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('instructor.myCourses')}}"><span class="mini-sub-pro">My Courses
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
                                                <li class="nav-item"><a href="" class="nav-link">Home</a>
                                                </li>
                                               <!--  <li class="nav-item"><a href="" class="nav-link">About</a>
                                                </li> -->
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
                        															<img src="image/{{$user->image}}" alt="" />
                        															<span class="admin-name">{{$user->name}}</span>
                        															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                        														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        <li><a href="{{route('instructor.profile')}}"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>

                                                       <!--  <li><a href=""><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li> -->
                                                        <li><a href="/logout"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
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
                                        <h6 style="text-align: center;font-weight: 300;height: 10px;font-size: 40px;">{{$course->name}}</h6>

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
                                <li class="active"><a href="#description">Add quiz</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form  method="post" action="/instructor/addQuizPost"  onsubmit="return checkInfo()" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                      {{@csrf_field()}}
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                              <input type="hidden" name="course_id" id="course_id" value="{{$course->course_id}}">
                                                              <input type="hidden" name="chapter_id" id="chapter_id" value="{{$chapters[0]->chapter_id}}">

                                                              <div class="form-group">
                                                                <label for="chapter">Chapter Name</label>
                                                                  <select class="form-control"  name="chapter" id="chapter">

                                                            <?php for($i=0; $i< count($chapters); $i++){ ?>

                                                                      <option value="{{$i}}">{{$chapters[$i]->name}}</option>

                                                              <?php } ?>


                                                                  </select>


                                                              </div>
                                                            </div>
                                                            </div>

                                                              <div class="form-group" >
                                                                <ul id="data">

                                                                  <li id="chapter1" style="">

                                                                    <label for="question">Question</label>

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                      <div class="form-group">

                                                                        <input class="form-control"  type="text" name="question" id="question" value="" placeholder="Question">
                                                                      </div>
                                                                      <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                                    </div>
                                                                    <br><br>

                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                                      <label for="op1">Option-1</label><br>
                                                                      <input name="op1" type="text" class="form-control" id="op1" placeholder="Option-1" value="">
                                                                      <h4 id="h2" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                                      <label for="op2">Option-2</label><br>
                                                                      <input name="op2" type="text" class="form-control" id="op2" placeholder="Option-2" value="">
                                                                      <h4 id="h3" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                                      <label for="op3">Option-3</label><br>
                                                                      <input name="op3" type="text" class="form-control" id="op3" placeholder="Option-3" value="">
                                                                      <h4 id="h4" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                                      <label for="op4">Option-4</label><br>
                                                                      <input name="op4" type="text" class="form-control" id="op4" placeholder="Option-4" value="">
                                                                      <h4 id="h5" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                      <div class="form-group">
                                                                        <label for="answer">Answer</label><br>
                                                                        <input name="answer" type="text" class="form-control" id="answer" placeholder="Answer" value="">
                                                                      </div>
                                                                      <h4 id="h6" style="text-align: center;color: #ff0000;font-weight: 50;height:20px;font-size: 15px;"></h4>
                                                                    </div>

                                                                  </li>


                                                                </ul>
                                                              </div>



                                                          <!-- Quiz message -->
                                                          <h4 style="text-align: center;color: #ff0000;font-weight: 200;">{{session('msg')}}</h4><br>

                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="payment-adress form-group">
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

        <script>

        $("#chapter").on('change', function (){

            console.log("Changed");

            var data = $("#chapter").val();
            console.log(data);

            var array = <?php echo json_encode($chapters);?> ;

            console.log(array[data].chapter_id);

            $("#chapter_id").val(array[data].chapter_id);

          });

        </script>

        <script src="js/addQuiz.js"></script>

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


</body>

</html>
