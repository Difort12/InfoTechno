@extends('includes.front_design')

@section('content')


        <!--Main Slider-->
        <section class="main-slider">
            <div class="auto-container">
                <div class="single-item-carousel owl-carousel owl-theme">


                    @foreach($latest_news as $news)
                    <!--Slide-->
                    <div class="slide">
                        <figure class="image">
                            <a href="{{ route('newsSingle', $news->slug) }} "><img src="{{ asset('/uploads/news/'.$news->image) }}" alt="" /></a>
                        </figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="category"><a href="{{ route('newsSingle', $news->slug) }}'">{{ $news->category->category_name }}</a></div>
                                    <h2><a href="{{ route('newsSingle', $news->slug) }}'">
                                            {{ $news->news_title }}
                                        </a></h2>
                                    <ul class="post-meta">
                                        <li><span class="icon qb-clock"></span>
                                           {{ $news->created_at->diffForHumans() }}
                                        </li>
                                        <li><span class="icon qb-eye"></span>{{ $news->view_count }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </section>
        <!--End Main Slider-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">

                        @foreach($categories as $category)
                        <!--Category Tabs Box-->
                        <div class="category-tabs-box">
                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box">

                                <!--Tab Btns-->
                                <div class="tab-btns tab-buttons clearfix">
                                    <div class="pull-left">
                                        <div class="category">{{ $category->category_name }}</div>
                                    </div>
                                </div>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-alls">
                                        <div class="content">
                                            <div class="row clearfix">
                                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                                    <div class="single-item-carousel owl-carousel owl-theme">

                                                        @php $news_category = \App\Models\News::where('category_id', $category->id)->latest()->take(5)->get(); @endphp
                                                        <!--News Block Two-->
                                                            @foreach($news_category as $cat_news)
                                                        <div class="news-block-two">
                                                            <div class="inner-box">
                                                                <div class="image">
                                                                    <a href="#"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="{{ asset('/uploads/news/'.$cat_news->image) }}" alt="" /></a>
                                                                    <div class="category"><a href="#">{{ $news->category->category_name }}</a></div>
                                                                </div>
                                                                <div class="lower-box">
                                                                    <h3><a href="#">{{ $cat_news->news_title }}</a></h3>
                                                                    <ul class="post-meta">
                                                                        <li><span class="icon fa fa-clock-o"></span>{{ $cat_news->created_at->diffForHumans() }}</li>
                                                                        <li><span class="icon fa fa-eye"></span>{{ $cat_news->view_count }}</li>
                                                                    </ul>
                                                                    <div class="text">
                                                                        {{ Str::limit(strip_tags($cat_news->news_content), 200, '...') }}

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                            @endforeach

                                                    </div>
                                                </div>
                                                <div class="column col-md-6 col-sm-6 col-xs-12">

                                                    @foreach($categories_news_views as $cat_views_news)
                                                        @if($category->id == $cat_views_news->category_id)
                                                    <!--Widget Post-->
                                                    <article class="widget-post">
                                                        <figure class="post-thumb"><a href="blog-single.html"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="{{ asset('/uploads/news/'.$cat_views_news->image) }}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                        <div class="text"><a href="blog-single.html">
                                                                {{ $cat_views_news->news_title }}
                                                            </a></div>
                                                        <div class="post-info">{{ $cat_views_news->created_at->diffForHumans() }}</div>
                                                    </article>
                                                    @endif
                                                        @endforeach

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--End Category Info Tabs-->
                            @endforeach


                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar default-sidebar right-sidebar">

                            <!--Social Widget-->
                            <div class="sidebar-widget sidebar-social-widget">
                                <div class="sidebar-title">
                                    <h2>Follow Us</h2>
                                </div>
                                <ul class="social-icon-one alternate">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="g_plus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li class="linkedin"><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                    <li class="pinteret"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li class="android"><a href="#"><span class="fa fa-android"></span></a></li>
                                    <li class="instagram"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    <li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
                                </ul>
                            </div>
                            <!--End Social Widget-->

                            <!--Adds Widget-->
                            <div class="sidebar-widget sidebar-adds-widget">
                                <div class="adds-block" style="background-image:url(assets/images/resource/add-image.jpg);">
                                    <div class="inner-box">
                                        <div class="text"> <span></span></div>
                                        <a href="#" class="theme-btn btn-style-two">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--Ends Adds Widget-->

                            <!--News Post Widget-->
                            <div class="sidebar-widget posts-widget">

                                <!--Product widget Tabs-->
                                <div class="product-widget-tabs">
                                    <!--Product Tabs-->
                                    <div class="prod-tabs tabs-box">

                                        <!--Tab Btns-->
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li data-tab="#prod-popular" class="tab-btn active-btn">Popular</li>
                                            <li data-tab="#prod-recent" class="tab-btn">Recent</li>
                                            <li data-tab="#prod-comment" class="tab-btn">Comments</li>
                                        </ul>

                                        <!--Tabs Container-->
                                        <div class="tabs-content">

                                            
                                <!--End Product Info Tabs-->

                            </div>
                            <!--End Post Widget-->

                            <!--Category Widget-->
                            <div class="sidebar-widget categories-widget">
                                <div class="sidebar-title">
                                    <h2>Categories</h2>
                                </div>
                                <ul class="cat-list">
                                    <li class="clearfix"><a href="#">Gadget <span>(30)</span></a></li>
                                    <li class="clearfix"><a href="#">PC<span>(9)</span></a></li>
                                    <li class="clearfix"><a href="#">Tips&Trick<span>(13)</span></a></li>
                                    <li class="clearfix"><a href="#">Price<span>(70)</span></a></li>
                                    <li class="clearfix"><a href="#">Tech<span>(11)</span></a></li>
                                    <li class="clearfix"><a href="#">Laptop<span>(5)</span></a></li>
                                    <li class="clearfix"><a href="#">Smartphone<span>(14)</span></a></li>
                                </ul>
                            </div>
                            <!--End Category Widget-->

                        </aside>
                    </div>

                </div>

                <!--Fullwidth Add-->
                <div class="fullwidth-add text-center">
                    <div class="image">
                        <a href="#"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/add-1.jpg" alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
        <!--End Sidebar Page Container-->

        <!--Blog Carousel Section-->
        <section class="blog-carousel-section grey-bg">
            <div class="auto-container">
                <div class="three-item-carousel owl-carousel owl-theme">

                    <!--News Block Three-->
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/news-7.jpg" alt="" />
                                <div class="overlay-box">
                                    <a href="blog-single-2.html" class="play-btn"><span class="icon qb-play-arrow"></span></a>
                                    <div class="content">
                                        <div class="tag"><a href="blog-single-2.html">Travel</a></div>
                                        <h3><a href="blog-single-2.html">Develop a new Silk Road through Russia</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon qb-clock"></span>March 03, 2016</li>
                                            <li><span class="icon fa fa-comment-o"></span>0</li>
                                            <li><span class="icon qb-eye"></span>740</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--News Block Three-->
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/news-8.jpg" alt="" />
                                <div class="overlay-box">
                                    <a href="blog-single-2.html" class="play-btn"><span class="icon qb-play-arrow"></span></a>
                                    <div class="content">
                                        <div class="tag"><a href="blog-single-2.html">Sports</a></div>
                                        <h3><a href="blog-single-2.html">Does the festival have popular Design support</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon qb-clock"></span>March 04, 2016</li>
                                            <li><span class="icon fa fa-comment-o"></span>5</li>
                                            <li><span class="icon qb-eye"></span>2640</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </section>
        <!--End Blog Carousel Section-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <h2>Latest News</h2>
                        </div>
                        <div class="content-blocks">
                            @foreach($news_latest as $data)
                            <!--News Block Four-->
                            <div class="news-block-four">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                            <div class="image">
                                                <a href="blog-single.html"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="{{ asset('uploads/news/'.$data->image) }}" alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="content-box col-md-6 col-sm-6 col-xs-12">
                                            <div class="content-inner">
                                                <div class="category"><a href="blog-single.html">
                                                        {{ $data->category->category_name }}
                                                    </a></div>
                                                <h3><a href="blog-single.html">
                                                        {{ $data->news_title }}
                                                    </a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>{{ $data->created_at->diffForHumans() }}</li>
                                                    <li><span class="icon fa fa-eye"></span>{{ $data->view_count }}</li>
                                                </ul>
                                                <div class="text">
                                                    {{ Str::limit(strip_tags($data->news_content), 200, '...') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>

                        <!-- Styled Pagination -->
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                {{ $news_latest->links() }}
                            </ul>
                        </div>

                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar default-sidebar">

                            <!-- Search -->
                            <div class="sidebar-widget search-box">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search" required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <!--Recent News Widget-->
                        
                            <div class="sidebar-widget recent-news-widget home-one">
                                <div class="sec-title">
                                    <h2>Recent Reviews</h2>
                                </div>
                                <!--News Block Five-->
                                <div class="news-block-five">
                                    <div class="inner-box">
                                        <div class="category"><a href="{{ route('newsSingle', $news->slug) }}'">{{ $news->category->category_name }}</a></div>
                                    <h2><a href="{{ route('newsSingle', $news->slug) }}'">
                                            {{ $news->news_title }}
                                        </a></h2>
                                        <div class="text">
                                        {{ Str::limit(strip_tags($cat_news->news_content), 200, '...') }}</div>
                                </div>
                            </div>

                            

                            <!--Tweet Widget-->
                            <div class="sidebar-widget tweet-widget">
                                <div class="sec-title">
                                    <h2>Recent Tweets</h2>
                                </div>
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <div class="tweet-block">
                                        <div class="inner-box">
                                            <div class="tweet-icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>
                                            <div class="text">Mediatek udah berubah banyak banget gak kayak dulu apalagi semenjak dimensity rilis, brand sebelah mulai panik nih...</div>
                                            <div class="post-time">2 Hours Ago</div>
                                        </div>
                                    </div>

                                    <div class="tweet-block">
                                        <div class="inner-box">
                                            <div class="tweet-icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>
                                            <div class="text">Harga VGA lumayan bersahabat akhir-akhir ini, rakit pc ahh..</div>
                                            <div class="post-time">9 Hours Ago</div>
                                        </div>
                                    </div>

                                    <div class="tweet-block">
                                        <div class="inner-box">
                                            <div class="tweet-icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>
                                            <div class="text">Cara ngilangin iklan di hp siomay gimana sih ?</div>
                                            <div class="post-time">3 Hours Ago</div>
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="tweet-block">
                                        <div class="inner-box">
                                            <div class="tweet-icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>
                                            <div class="text">Info mabar valorant, minat dm</div>
                                            <div class="post-time">12 Hours Ago</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </aside>
                    </div>

                </div>
            </div>
        </div>
        <!--End Sidebar Page Container-->


    @endsection
