<!DOCTYPE html>
<html lang="en">

<?php
session_start();
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
                    <!-- <div class="col-sm-4 col-md-3">
                        <div class="top_header_menu_wrap">
                            <ul class="top-header-menu">
                                <li><a href="login%26registration.html">REGISTER</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="login-inner">
                                                <input type="text" class="form-control" id="name_email" name="name_email" placeholder="username or emaile">
                                                <hr>
                                                <input type="password" class="form-control" id="pass" name="pass" placeholder="*******">
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
                    </div> -->
                    <!--breaking news-->
                    <div class="col-sm-8 col-md-7">
                        <div class="newsticker-inner">
                            <ul class="newsticker">
                                <li><span class="color-1">Welcome</span><a href="#">
                                        <?php echo $_SESSION['username']; ?>
                                    </a></li>

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
    <!-- header news Area
        ============================================ -->
    <section class="headding-news">
        <div class="container">
            <div class="row row-margin">
                <div class="hidden-xs col-sm-3 col-padding">
                    <div class="post-wrapper post-grid-1 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb">
                            <a href="#">
                                <img class="entry-thumb" src="images/slider/slide-06.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-3">SPORTS </span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark"> The generated Lorem Ipsum
                                    is therefore always free from . </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="playvideo pull-right" href="details-style-three.html"><i
                                        class="fa fa-play-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-wrapper post-grid-2 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb">
                            <a href="#">
                                <img class="entry-thumb" src="images/slider/slide-07.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-5">BUSINESS</span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">Contrary to popular
                                    belief, Lorem Ipsum is not simply random text. </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="playvideo pull-right" href="details-style-three.html"><i
                                        class="fa fa-play-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-padding">
                    <div class="post-wrapper post-grid-3 effects">
                        <div class="post-thumb">
                            <a href="#">
                                <div class="videoWrapper-1">
                                    <iframe width="560" height="349" src="https://www.youtube.com/embed/fxS-leXA-Iw"
                                        frameborder="0" allowfullscreen id="yt"></iframe>
                                </div>
                                <div class="overlay" id="player">
                                    <a href="#" class="expand" id="player-button"><i class="fa fa-play"></i></a>
                                    <a class="close-overlay hidden">x</a>
                                </div>
                            </a>
                        </div>
                        <div class="post-info hidden-xs" id="post-info">
                            <span class="color-4">FASHION</span>
                            <h3 class="post-title"><a href="#" rel="bookmark">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs col-sm-3 col-padding">
                    <div class="post-wrapper post-grid-4 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb">
                            <a href="#">
                                <img class="entry-thumb" src="images/slider/slide-09.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-1">TRAVEL</span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">The standard chunk of
                                    Lorem Ipsum used since the 1500s is reproduced</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="playvideo pull-right" href="details-style-three.html"><i
                                        class="fa fa-play-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-wrapper post-grid-5 wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb">
                            <a href="#">
                                <img class="entry-thumb" src="images/slider/slide-10.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-2">TECHNOLOGY</span>
                            <h3 class="post-title post-title-size"><a href="#" rel="bookmark">The 20 free things in
                                    Sydney with your girlfriend </a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                <!-- read more -->
                                <a class="playvideo pull-right" href="details-style-three.html"><i
                                        class="fa fa-play-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">TOP STORIES</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item home2-post effects">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="images/recent_news_01.jpg" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            </div>
                            <!-- item-2 -->
                            <div class="item home2-post effects">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="images/recent_news_02.jpg" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            </div>
                            <!-- item-3 -->
                            <div class="item home2-post effects">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="images/recent_news_03.jpg" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row rn_block">
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="images/recent_news_04.jpg" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s"
                                    data-wow-delay="0.2s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="images/recent_news_05.jpg" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s"
                                    data-wow-delay="0.3s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="images/recent_news_06.jpg" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Politics Area
                    ============================================ -->
                <section class="politics_wrapper">
                    <h3 class="category-headding ">POLITICS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide-2" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row">
                                    <!-- main post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="post-wrapper wow fadeIn effects" data-wow-duration="2s">
                                            <!-- post title -->
                                            <h3><a href="#">The standard chunk of Lorem Ipsum used since the 1500s is
                                                    .</a></h3>
                                            <!-- post image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img src="images/politics_01.jpg" class="img-responsive" alt="">
                                                    <div class="overlay">
                                                        <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                        <a class="close-overlay hidden">x</a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- right side post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="row rn_block">
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="images/politics_02.jpg" class="img-responsive"
                                                                alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="images/politics_03.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                        <div class="overlay">
                                                            <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                            <a class="close-overlay hidden">x</a>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="images/politics_04.jpg" class="img-responsive"
                                                                alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.5s">
                                                        <a href="#">
                                                            <img src="images/politics_05.jpg" class="img-responsive"
                                                                alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <!-- post image -->
                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item-2 -->
                            <div class="item">
                                <div class="row">
                                    <!-- main post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="post-wrapper wow fadeIn effects" data-wow-duration="2s">
                                            <!-- post title -->
                                            <h3><a href="#">The standard chunk of Lorem Ipsum used since the 1500s is
                                                    .</a></h3>
                                            <!-- post image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img src="images/politics_01.jpg" class="img-responsive" alt="">
                                                    <div class="overlay">
                                                        <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                        <a class="close-overlay hidden">x</a>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- right side post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="row rn_block">
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="images/politics_02.jpg" class="img-responsive"
                                                                alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="images/politics_03.jpg" class="img-responsive"
                                                                alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="images/politics_04.jpg" class="img-responsive"
                                                                alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="images/politics_05.jpg" class="img-responsive"
                                                                alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                        <div class="date">
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
                    <!-- /.row -->
                </section>
                <!-- /.Politics -->
                <div class="ads">
                    <a href="#"><img src="images/top-bannner2.jpg" class="img-responsive center-block" alt=""></a>
                </div>
            </div>
            <!-- /.left content inner -->
            <div class="col-md-4 col-sm-4 left-padding">
                <!-- right content wrapper -->
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
                <!-- social icon -->
                <h3 class="category-headding ">SOCIAL PIXEL</h3>
                <div class="headding-border"></div>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                        <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                        <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                    </ul>
                </div>
                <!-- /.social icon -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                </div>
                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="#">POPULAR</a></li>
                        <li><a href="#">MOST VIEWED</a></li>
                    </ul>
                    <hr>
                    <!-- tabs -->
                    <div class="tab_content">
                        <div class="tab-item-inner">
                            <div class="box-item wow fadeIn effects" data-wow-duration="1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_01.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                        <a href="#">SPORTS</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that a reader
                                            will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn effects" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_02.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                        <a href="#">TECHNOLOGY </a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a>
                                    </h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn effects" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_03.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                        <a href="#">HEALTH</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used
                                            since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn effects" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_04.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a>
                                    </h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                        <div class="tab-item-inner">
                            <div class="box-item effects">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_01.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-5">
                                        <a href="#">BUSINESS</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that a reader
                                            will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item effects">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_02.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                        <a href="#">TECHNOLOGY </a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a>
                                    </h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item effects">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_03.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                        <a href="#">HEALTH</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used
                                            since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item effects">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_04.jpg"
                                            alt="" height="80" width="90">
                                        <div class="overlay">
                                            <a href="#" class="expand-1" id="player-button"><i
                                                    class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a>
                                    </h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                    </div>
                    <!-- / tab_content -->
                </div>
                <!-- / tab -->
            </div>
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
    <!-- Video News Area
        ============================================ -->
    <section class="video-post-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="category-headding ">ENTERTAINMENT</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="video-slide" class="owl-carousel">
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="post-style1">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- post image -->
                                            <a href="#" class="video-img-icon">
                                                <i class="fa fa-play"></i>
                                                <img src="images/video-02.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of.</a></h3>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li><img src="images/comment-02.jpg" class="img-responsive" alt="">
                                                    </li>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="post-style1">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0.2s">
                                            <!-- post image -->
                                            <a href="#" class="video-img-icon">
                                                <i class="fa fa-play"></i>
                                                <img src="images/video-03.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of.</a></h3>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li><img src="images/comment-01.jpg" class="img-responsive" alt="">
                                                    </li>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="post-style1">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0.4s">
                                            <!-- post image -->
                                            <a href="#" class="video-img-icon">
                                                <i class="fa fa-play"></i>
                                                <img src="images/video-04.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of.</a></h3>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li><img src="images/comment-02.jpg" class="img-responsive" alt="">
                                                    </li>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="post-style1">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- post image -->
                                            <a href="#" class="video-img-icon">
                                                <i class="fa fa-play"></i>
                                                <img src="images/video-02.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of.</a></h3>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li><img src="images/comment-02.jpg" class="img-responsive" alt="">
                                                    </li>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="post-style1">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0.2s">
                                            <!-- post image -->
                                            <a href="#" class="video-img-icon">
                                                <i class="fa fa-play"></i>
                                                <img src="images/video-03.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of.</a></h3>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li><img src="images/comment-01.jpg" class="img-responsive" alt="">
                                                    </li>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="post-style1">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0.4s">
                                            <!-- post image -->
                                            <a href="#" class="video-img-icon">
                                                <i class="fa fa-play"></i>
                                                <img src="images/video-04.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of.</a></h3>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li><img src="images/comment-02.jpg" class="img-responsive" alt="">
                                                    </li>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
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
        </div>
    </section>
    <!-- Article Post
        ============================================ -->
    <section class="article-post-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <!-- business Area
                            ============================================ -->
                        <div class="col-sm-6 col-md-6">
                            <div class="buisness">
                                <h3 class="category-headding ">BUSINESS</h3>
                                <div class="headding-border bg-color-5"></div>
                                <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a>
                                    </h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/business-01.jpg" class="img-responsive" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn effects" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark">
                                            <img class="entry-thumb" src="images/business-02.jpg" alt="" height="70"
                                                width="100">
                                            <div class="overlay">
                                                <a href="#" class="expand-1"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from
                                                repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn effects" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="images/business-03.jpg"
                                                alt="" height="70" width="100">
                                            <div class="overlay">
                                                <a href="#" class="expand-1"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from
                                                repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- international Area
                            ============================================ -->
                        <div class="col-sm-6 col-md-6">
                            <div class="international">
                                <h3 class="category-headding ">SPORTS</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a>
                                    </h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/international.jpg" class="img-responsive" alt="">
                                            <div class="overlay">
                                                <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn effects" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="images/international-2.jpg" alt="" height="70" width="100">
                                            <div class="overlay">
                                                <a href="#" class="expand-1"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from
                                                repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn effects" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="images/international-3.jpg" alt="" height="70" width="100">
                                            <div class="overlay">
                                                <a href="#" class="expand-1"><i class="fa fa-play"></i></a>
                                                <a class="close-overlay hidden">x</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from
                                                repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.international -->
                        </div>
                    </div>
                    <!-- technology Area
                        ============================================ -->
                    <section class="politics_wrapper">
                        <h3 class="category-headding ">TECHNOLOGY</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-3" class="owl-carousel">
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of Lorem Ipsum
                                                        available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="images/technology/tecnology-01.jpg"
                                                            class="img-responsive" alt="">
                                                        <div class="overlay">
                                                            <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                            <a class="close-overlay hidden">x</a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-02.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-03.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-04.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.5s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-05.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-2 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of Lorem Ipsum
                                                        available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="images/technology/tecnology-01.jpg"
                                                            class="img-responsive" alt="">
                                                        <div class="overlay">
                                                            <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                                            <a class="close-overlay hidden">x</a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-02.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-03.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-04.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding effects">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="images/technology/tecnology-05.jpg"
                                                                class="img-responsive" alt="">
                                                            <div class="overlay">
                                                                <a href="#" class="expand"><i
                                                                        class="fa fa-play"></i></a>
                                                                <a class="close-overlay hidden">x</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </section>
                </div>
                <div class="col-sm-4 left-padding">
                    <!-- slider widget -->
                    <div class="widget-slider-inner">
                        <h3 class="category-headding ">Slider Widget</h3>
                        <div class="headding-border"></div>
                        <div id="widget-slider" class="owl-carousel owl-theme">
                            <!-- widget item -->
                            <div class="item effects">
                                <a href="#">
                                    <div class="post-thumb">
                                        <img src="images/slider-widget-1.jpg" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                            </div>
                            <!-- widget item -->
                            <div class="item effects">
                                <a href="#">
                                    <div class="post-thumb">
                                        <img src="images/slider-widget-2.jpg" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                            </div>
                            <!-- widget item -->
                            <div class="item effects">
                                <a href="#">
                                    <div class="post-thumb">
                                        <img src="images/slider-widget-3.jpg" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- video -->
                    <div class="video-headding">Streaming Videos</div>
                    <div id="rypp-demo-4" class="RYPP r16-9" data-playlist="PLw8TejMbmHM6IegrJ4iECWNoFuG7RiCV_">
                        <div class="RYPP-video">
                            <div class="RYPP-video-player">
                                <!-- Will be replaced -->
                            </div>
                        </div>
                        <div class="RYPP-playlist">
                            <header>
                                <h2 class="_h1 RYPP-title">Playlist title</h2>
                                <p class="RYPP-desc">Playlist subtitle <a href="#" target="_blank">#hashtag</a></p>
                            </header>
                            <div class="RYPP-items"></div>
                        </div>
                    </div>
                    <!-- /.video -->
                </div>
            </div>
        </div>
    </section>
    <!-- pagination
        ============================================ -->

</body>
<!-- footer Area
        ============================================ -->
<?php
include_once ("includes/footer.php");
?>
<?php
include_once ("includes/script.php");
?>
<script>



</html >