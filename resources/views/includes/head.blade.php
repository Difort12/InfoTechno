<head>
    <meta charset="utf-8">
    <title>InfoTechno</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/adminpanel/assets/img/favicon1.png') }}">
    <!-- Stylesheets -->
    <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('/assets/css/color-themes/green-theme.css') }}" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
        
    <!-- Main Header -->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left col-md-4 col-sm-12 col-xs-12">
                        <div class="trend">Trending: </div>
                        <div class="single-item-carousel owl-carousel owl-theme">
                            <div class="slide">
                                <div class="text">Snapdragon 8.1 kejutkan ATHENA</div>
                            </div>
                            <div class="slide">
                                <div class="text">Intel hentikan produksi Pentium Silver</div>
                            </div>
                            <div class="slide">
                                <div class="text">Apple hadirkan Fitur Keren di IOS 14</div>
                            </div>
                        </div>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right col-md-8 col-sm-12 col-xs-12">
                        <ul class="top-nav">
                            <li><a href="{{ route('index') }}">About</a></li>
                            <li><a href="{{ route('index') }}">Contacts</a></li>
                        </ul>
                        <ul class="english-nav">
                            <li class="active"><a href="#">Eng</a></li>
                            <li><a href="#">Ina</a></li>
                        </ul>
                        <ul class="social-nav">
                        <li class="twitter"><a href="https://twitter.com/infotechno_sby"><span class="fa fa-twitter"></span></a></li>
                        <li class="g_plus"><a href="www.pinterest.com"><span class="fa fa-pinterest-p"></span></a></li>
                        <li class="pinteret"><a href="https://www.youtube.com/channel/UCClm4P4Ah3GGrAuexUeVTHg"><span class="fa fa-youtube-play"></span></a></li>
                        <li class="android"><a href="https://wa.me/+62812233556677?text=Selamat%20datang%20di%20InfoTechno"><span class="fa fa-whatsapp"></span></a></li>
                        <li class="dribbble"><a href="https://instagram.com/infotechno_surabaya?igshid=YmMyMTA2M2Y="><span class="fa fa-instagram"></span></a></li>
                        <li class="rss"><a href="https://www.tiktok.com/@infotechno.my.id?is_from_webapp=1&sender_device=pc"><span class="fa fa-rss"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-outer">
                        <div class="logo"a href="{{ route('index') }}"></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">
                        <div class="add-image">
                            <a href="#"><img src="images/resource/header-add.jpg" alt="" /></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="bs-example-navbar-collapse-1">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="dropdown"><a href="#">Gadget</a>
                                    <ul>
                                        <li><a href="header-1.html">Laptop</a></li>
                                        <li><a href="header-2.html">PC</a></li>
                                        <li><a href="header-3.html">Smartphone</a></li>
                                        <li><a href="header-3.html">Peripheral</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu"><a href="#">Price</a>
                                    <div class="mega-menu-bar">

                                        <!--Tab Section-->
                                        <div class="tab-section">
                                            <!--Product Tabs-->
                                            <div class="info-tabs tabs-box">
                                                <div class="row clearfix">

                                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                                        <!--Tab Btns-->
                                                        <ul class="tab-btns tab-buttons clearfix">
                                                            <li data-tab="#prod-travel" class="tab-btn active-btn">Smartphone</li>
                                                            <li data-tab="#prod-media" class="tab-btn">Laptop</li>
                                                            <li data-tab="#prod-finaces" class="tab-btn">Ipad/Tab</li>
                                                            <li data-tab="#prod-media-2" class="tab-btn">Speaker</li>
                                                            <li data-tab="#prod-finaces-2" class="tab-btn">Gaming Set</li>
                                                        </ul>
                                                        <a href="#" class="all-cat">All</a>
                                                    </div>
                                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                                        <!--Tabs Container-->
                                                        <div class="tabs-content">

                                                            <!--Tab / Active Tab-->
                                                            <div class="tab active-tab" id="prod-travel">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-40.jpg" alt="" /></a>
                                                                                    
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Rekomendasi laptop Rp 5 jutaan, ini daftar harga laptop ASUS VivoBook terbaru</a></h3>
                                                                                    <div class="post-date">Jun 9, 2022</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-41.jpg" alt="" /></a>
                                                                       
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Daftar Harga HP Samsung Terbaru dari Galaxy A Series, per Juni 2022
</a></h3>
                                                                                    <div class="post-date">Jun 9, 2022</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-42.jpg" alt="" /></a>
                                                                  
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Rekomendasi Harga Laptop HP Terbaru 2022</a></h3>
                                                                                    <div class="post-date">Jun 9, 2022</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-media">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">April 10, 2022</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">Des 20, 2021</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">Nov 19, 2021</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-finaces">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-media-2">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-finaces-2">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
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
                                </li>
                                <li class="mega-menu"><a href="gallery.html">Review</a>
                                    <div class="mega-menu-bar">

                                        <div class="mega-menu-carousel owl-carousel owl-theme">

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="images/resource/news-43.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Review Vivo TWS 2 ANC!!</a></h3>
                                                        <div class="post-date">June 9 ,2022</div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="images/resource/news-45.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Review Samsung Galaxy Tab A8 4G LTE Hanya Dengan Harga 4 Jutaan</a></h3>
                                                        <div class="post-date">June 9 ,2022</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="images/resource/news-46.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Review Huawei Watch Fit 2, Dibekali Fitur Berlimpah!</a></h3>
                                                        <div class="post-date">June 9 ,2022</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="images/resource/news-43.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Review Kamera Mirrorless Sony ZV-E10 untuk Membuat Vlog</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                <li class="dropdown"><a href="#">Tips & Trick</a>
                                    <ul>
                                        <li><a href="blog-single.html">Teknologi</a></li>
                                        <li><a href="blog-single-2.html">Support</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box">

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener"><span class="icon qb-menu1"></span></button>
                    </div>

                </div>

            </div>
        </div>
        <!--End Header Lower-->

        <!--Sticky Header-->

        <div class="sticky-header" >
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left" style="position:relative; top:4px; padding:2px 0px; width:150px; height:50px;">
                    <a href="{{ route('index') }}" class="img-responsive" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="dropdown"><a href="#">Gadget</a>
                                    <ul>
                                        <li><a href="header-1.html">PC</a></li>
                                        <li><a href="header-2.html">Smartphone</a></li>
                                        <li><a href="header-3.html">Laptop</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Price</a></li>
                                <li class="dropdown"><a href="#">Review</a>
                                    <ul>
                                        <li><a href="blog-single.html">Laptop</a></li>
                                        <li><a href="blog-single-2.html">Smartphone</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Header Style Two -->

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar left-align">

        <div class="hidden-bar-closer">
            <button><span class="qb-close-button"></span></button>
        </div>

        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <div class="logo">
                <a href="index.html"></a>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
                <!--navigation-->
                <ul class="navigation clearfix">
                    <li class="current dropdown"><a href="#">Home</a>
                        <ul>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog-single.html">blog Single One</a></li>
                            <li><a href="blog-single-2.html">Blog Single Two</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Our Shop</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- /.Side-menu -->

            <!--Options Box-->
            <div class="options-box">
                <!--Sidebar Search-->
                <div class="sidebar-search">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="search" name="text" value="" placeholder="Search ..." required="">
                            <button type="submit" class="theme-btn"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>

                <!--Mobile Cart-->
                <div class="mobile-cart">
                    <a href="shop-single.html" class="clearfix">
                        <div class="pull-left">
                            <div class="text">0 items 0.00$</div>
                        </div>
                        <div class="pull-right">
                            <span class="icon fa fa-shopping-cart"></span>
                        </div>
                    </a>
                </div>

                <!--Language Dropdown-->
                <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"> English <span class="icon fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#">English</a></li>
        
                    </ul>
                </div>

                <!--Social Links-->
                <ul class="social-links clearfix">
                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                </ul>

            </div>

        </div><!-- / Hidden Bar Wrapper -->

    </section>
    <!-- End / Hidden Bar -->
