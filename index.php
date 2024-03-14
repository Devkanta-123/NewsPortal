<html lang="en">

<?php
include_once ("includes/header.php");
?>


<body>
    <div class="se-pre-con"></div>
    <header>
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
            <nav class="mobile-menu" id="mobile-menu">
                <div class="sidebar-nav">
                    <ul class="nav side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn mobile-menu-btn" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#">All pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Home <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="home-style-one.html">Home style one</a> </li>
                                        <li><a href="home-style-two.html">Home style two</a></li>
                                        <li><a href="home-style-three.html">Home style three</a></li>
                                        <li><a href="home-style-four.html">Home style four</a></li>
                                        <li><a href="home-style-five.html">Home style five</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Categories <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="category-style-one.html">Category style one</a> </li>
                                        <li><a href="category-style-two.html">Category style two</a></li>
                                        <li><a href="category-style-three.html">Category style three</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Archive <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="archive-one.html">Archive style one</a> </li>
                                        <li><a href="archive-two.html">Archive style two</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">News <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="details-style-one.html">News post one</a> </li>
                                        <li><a href="details-style-two.html">News post two</a></li>
                                        <li><a href="details-style-three.html">News post three</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Contact <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="contact-style-one.html">Contact style one</a> </li>
                                        <li><a href="contact-style-two.html">Contact style two</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li><a href="login%26registration.html">Login & Registration</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li><a href="#">International</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li>
                            <a href="#">Contact<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="contact-style-one.html">Contact style one</a> </li>
                                <li><a href="contact-style-two.html">Contact style two</a></li>
                            </ul>
                        </li>
                        <!-- social icon -->
                        <li>
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                                    <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="top_header_icon">
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                    </span>
                </div>
                <div id="showLeft" class="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->
        <!-- top header -->
        <div class="top_header hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="top_header_menu_wrap">
                            <ul class="top-header-menu">
                                <li><a href="login%26registration.html">REGISTER</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="login-inner">
                                                <input type="text" class="form-control" id="name_email"
                                                    name="name_email" placeholder="username or email">
                                                <hr>
                                                <input type="password" class="form-control" id="pass" name="pass"
                                                    placeholder="*******">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="">Remember me</label>
                                                <button type="button" class="btn btn-lr btn-active">LOGIN</button>
                                                <button type="button" class="btn btn-lr">REGISTR</button>
                                                <div class="foeget"><a href="#">Forget username/password?</a></div>
                                                <div class="social_icon">
                                                    <div class="social_icon_box social_icon_box_1">
                                                        <div class="icon facebook-icon"></div>
                                                        <span class="social_info">Login with facebook</span>
                                                    </div>
                                                </div>
                                                <div class="social_icon">
                                                    <div class="social_icon_box social_icon_box_2">
                                                        <div class="icon twitter-icon"></div>
                                                        <span class="social_info">Login with twitter</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-style-two.html">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--breaking news-->
                    <div class="col-sm-8 col-md-7">
                        <div class="newsticker-inner">
                            <ul class="newsticker">
                                <li><span class="color-1">Fashion</span><a href="#">Etiam imperdiet volutpat libero eu
                                        tristique.imperdiet volutpat libero eu tristique.</a></li>
                                <li><span class="color-2">International</span><a href="#">Curabitur porttitor ante eget
                                        hendrerit adipiscing.</a></li>
                                <li><span class="color-3">Health</span><a href="#">Praesent ornare nisl lorem, ut
                                        condimentum lectus gravida ut.</a></li>
                                <li><span class="color-4">technology</span><a href="#">Nunc ultrices tortor eu massa
                                        placerat posuere.</a></li>
                                <li><span class="color-1">Travel</span><a href="#">Etiam imperdiet volutpat libero eu
                                        tristique.imperdiet volutpat libero eu tristique.</a></li>
                            </ul>
                            <div class="next-prev-inner">
                                <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                                <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="top_header_icon">
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_banner_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-4">
                        <div class="header-logo">
                            <!-- logo -->
                            <a href="home-style-one.html">
                                <img class="td-retina-data img-responsive" src="images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                        <div class="header-banner">
                            <a href="#"><img class="td-retina img-responsive" src="images/top-bannner.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- navber -->
        <div class="container hidden-xs">
            <nav class="navbar">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home-style-one.html" class="category01">HOME</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle category02" data-toggle="dropdown">ALL PAGES <span
                                    class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu menu-slide">
                                <li class="dropdown-submenu"><a href="#">Home</a>
                                    <ul class="dropdown-menu zoomIn">
                                        <li><a href="home-style-one.html">Home style one</a></li>
                                        <li><a href="home-style-two.html">Home style two</a></li>
                                        <li><a href="home-style-three.html">Home style three</a></li>
                                        <li><a href="home-style-four.html">Home style four</a></li>
                                        <li><a href="home-style-five.html">Home style five</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="#">Categories</a>
                                    <ul class="dropdown-menu zoomIn">
                                        <li><a href="category-style-one.html">Category style one</a></li>
                                        <li><a href="category-style-two.html">Category style two</a></li>
                                        <li><a href="category-style-three.html">Category style three</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="#">Archive</a>
                                    <ul class="dropdown-menu zoomIn">
                                        <li><a href="archive-one.html">Archive style one</a></li>
                                        <li><a href="archive-two.html">Archive style two</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="#">News</a>
                                    <ul class="dropdown-menu zoomIn">
                                        <li><a href="details-style-one.html">News post one</a></li>
                                        <li><a href="details-style-two.html">News post two</a></li>
                                        <li><a href="details-style-three.html">News post three</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="#">Contact</a>
                                    <ul class="dropdown-menu zoomIn">
                                        <li><a href="contact-style-one.html">Contact style one</a> </li>
                                        <li><a href="contact-style-two.html">Contact style two</a></li>
                                    </ul>
                                </li>
                                <li><a href="login%26registration.html">Login & Registration</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle category03" data-toggle="dropdown">INTERNATIONAL <span
                                    class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu menu-slide">
                                <li><a href="#">Another</a></li>
                                <li class="dropdown-submenu"><a href="#">Something</a>
                                    <ul class="dropdown-menu zoomIn">
                                        <li><a href="#">Style one</a></li>
                                        <li><a href="#">Style two</a></li>
                                        <li><a href="#">Style three</a></li>
                                        <li><a href="#">Style four</a></li>
                                        <li><a href="#">Style five</a></li>
                                        <li><a href="#">Style six</a></li>
                                        <li><a href="#">Style seven</a></li>
                                    </ul>
                                </li>
                                <!--<li class="divider"></li>-->
                                <li><a href="#">Separated</a></li>
                                <li><a href="#">One more</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Separated</a></li>
                                <li><a href="#">One more</a></li>
                                <li><a href="#">Separated</a></li>
                            </ul>
                        </li>
                        <li><a href="category-style-two.html" class="category04">FASHION</a></li>
                        <li><a href="category-style-one.html" class="category05">TRAVEL</a></li>
                        <li><a href="#" class="category06">FOOD</a></li>
                        <li><a href="#" class="category07">TECHNOLOGY</a></li>
                        <li><a href="#" class="category08">LIFESTYLE</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle category09" data-toggle="dropdown">CONTACT <span
                                    class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu menu-slide">
                                <li><a href="contact-style-one.html">Contact style one</a> </li>
                                <li><a href="contact-style-two.html">Contact style two</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- navbar-collapse -->
            </nav>
        </div>
    </header>
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Login & Registration</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="home-style-one.html" title="">Home</a></li>
                            <li><a href="#" title="">Login & Registration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login-reg-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="login-form-inner">
                        <h3 class="category-headding ">LOGIN TO YOUR ACCOUNT</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form id="loginForm">
                            <label>Username Or Email <sup>*</sup></label>
                            <input type="text" class="form-control" id="loginusername" name="loginusername"
                                placeholder="Username">
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="loginpassword" name="loginpassword">
                            <label class="checkbox-inline">
                                <!-- <input type="checkbox" value="">Remember me</label> -->
                                <!-- <button type="button" class="btn btn-style">Login</button> -->
                                <input type="submit" class="btn btn-style" value="Login">
                                <!-- <div class="foeget"><a href="#">Forget username/password?</a></div> -->
                                <!-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_1">
                                            <div class="icon facebook-icon"></div>
                                            <span class="social_info">Login with facebook</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_2">
                                            <div class="icon twitter-icon"></div>
                                            <span class="social_info">Login with twitter</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="register-form-inner">
                        <h3 class="category-headding ">REGISTER NOW!</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form id="registrationForm">
                            <label>Username <sup>*</sup></label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username or Email">
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Write Your Password Here ...">
                            <label>Email <sup>*</sup></label>
                            <input type="password" class="form-control" id="email" name="email">
                            <button type="button" id="registerButton" class="btn btn-style">Register Now</button>
                        </form>
                        <!-- //<div id="registrationMessage"></div> -->

                    </div>
                </div>
            </div>
    </section>
    <!-- footer Area
        ============================================ -->
    <?php
    include_once ("includes/footer.php");
    ?>
    <?php
    include_once ("includes/script.php");
    ?>
    <script>

        $(document).ready(function () {
            $('#registerButton').click(function () {
                var username = $('#username').val();
                var password = $('#password').val();
                var email = $('#email').val();

                // Sending data to PHP script using AJAX
                $.ajax({
                    url: 'registerbackend.php',
                    type: 'POST',
                    data: {
                        username: username,
                        password: password,
                        email: email
                    },
                    success: function (response) {
                        debugger;
                        alert(response);
                        location.reload();
                    }
                });
            });
        });


        $(document).ready(function () {
            $('#loginForm').submit(function (e) {
                debugger;
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "loginbackend.php",
                    data: $(this).serialize(),
                    success: function (response) {
                        if (response.trim() === 'success') {
                            window.location.href = 'home';
                        } else {
                            // $('#message').html(response);
                            alert(response);
                            location.reload();
                        }
                    }
                });
            });
        });

    </script>




</body>


<!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/login&registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 11:14:27 GMT -->

</html>