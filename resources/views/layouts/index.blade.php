<!DOCTYPE html>
<html lang="tr">
    <!-- Mirrored from html-template.spider-themes.net/ama/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 12:26:01 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset("assets/assets/bootstrap/css/bootstrap.min.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/assets/slick/slick.css") }}" />
        <link rel="stylesheet" href="{{asset("assets/assets/slick/slick-theme.css")}}" />
        <!-- icon css-->
        <link rel="stylesheet" href="{{asset("assets/elagent-icon/style.css")}}" />
        <link rel="stylesheet" href="{{asset("assets/assets/niceselectpicker/nice-select.css")}}" />
        <link rel="stylesheet" href="{{asset("assets/animation/animate.css") }}"/>
        <link rel="stylesheet" href="{{asset('css/app.css') }}" type="text/css">
        <script src="https://kit.fontawesome.com/747cb2fb37.js" crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            href="{{ asset("assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css") }}"
        />
        <link rel="stylesheet" href="{{asset("assets/css/style-main.css")}}" />
        <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}" />

        <title>@yield("title")</title>
        @yield("css")
    </head>

    <body data-scroll-animation="true">
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="round_spinner">
                    <div class="spinner"></div>
                    <div class="text">
                        <img src="/assets/img/spinner_logo.png" alt=""/>
                        <h4><span>Ama</span></h4>
                    </div>
                </div>
                <h2 class="head">Did You Know?</h2>
                <p></p>
            </div>
        </div>
        <div class="body_wrapper">
            <div class="click_capture"></div>

            <!--================Navbar Area =================-->
           @include("layouts.menu")

        <section class="banner-area-4 pt-lg-120 pt-55 pb-120 has_search">
            <div class="banner-shapes">
                <div class="shape">
                    <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/assets/img/home_three/banner-shape-1.png"
                        alt="shape">
                </div>
                <div class="shape">
                    <img data-parallax='{"x":50 , "y": 0, "rotateZ":0}' src="/assets/img/home_three/banner-shape-2.png"
                        alt="shape">
                </div>
                <div class="shape">
                    <img data-parallax='{"x": 250, "y": 0, "rotateZ":0}' src="/assets/img/home_three/banner-shape-3.png"
                        alt="shape">
                </div>
            </div>
            <div class="container">
                <div class="row pt-120 pb-30">
                    <div class="col-lg-9 doc_banner_content search-banner-light text-center mx-auto pt-20">
                        <h1 class="banner-title-h1 mb-4">Need some help with Ama?</h1>
                        <form action="#" class="header_search_form-2 mx-auto">
                            <div class="header_search_form_info">
                                <div class="form-group">

                                    <select class="search-expand-types custom-select" name="post_type"
                                        id="search_post_type">
                                        <option value="">All Docs </option>
                                        <option value="manual_kb">Knowledge Base</option>
                                        <option value="manual_documentation">Documentation</option>
                                        <option value="manual_faq">FAQs</option>
                                        <option value="ama">Ama</option>
                                        <option value="manual_portfolio">Portfolio</option>
                                        <option value="product">Products</option>
                                    </select>
                                    <div class="input-wrapper">
                                        <i class="icon_search"></i>
                                        <input type='search' id="searchbox" autocomplete="off" name="search"
                                            placeholder="Search the Doc" />

                                        <div class="header_search_form_panel">
                                            <ul class="list-unstyled">
                                                <li>Help Desk
                                                    <ul class="list-unstyled search_item">
                                                        <li><span>Configuration</span><a href="#">How to edit host and
                                                                port?</a></li>
                                                        <li><span>Configuration</span><a href="#">The dev Property</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Support
                                                    <ul class="list-unstyled search_item">
                                                        <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                                    </ul>
                                                </li>
                                                <li>Documentation
                                                    <ul class="list-unstyled search_item">
                                                        <li><span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                        <li><span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                        <li><span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="header_search_keyword search-white mt-3">
                                <span class="header-search-form__keywords-label">Popular topics:</span>
                                <ul class="list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Forums</a>,
                                    <li>
                                    <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Getting stated</a>,</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Introduction</a>,</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">Payment</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
            @yield("content")
            <!--================Footer Area =================-->
           @include('layouts.footer')
            <!--================End Footer Area =================-->
        </div>

        <!-- Back to top button -->
        <a id="back-to-top" title="Back to Top"></a>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src={{asset("assets/js/jquery-3.5.1.min.js")}}></script>
        <script src={{asset("assets/assets/bootstrap/js/bootstrap.bundle.min.js")}}></script>
        <script src={{asset("assets/js/pre-loader.js")}}></script>
        <script src={{asset("assets/assets/slick/slick.min.js")}}></script>
        <script src={{asset("assets/js/jquery.parallax-scroll.js")}}></script>
        <script src={{asset("assets/assets/niceselectpicker/jquery.nice-select.min.js")}}></script>
        <script src={{asset("assets/assets/wow/wow.min.js")}}></script>
        <script src={{asset("assets/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js")}}></script>
        <script src={{asset("assets/assets/counterup/jquery.waypoints.min.js")}}></script>
        <script src={{asset("assets/assets/counterup/jquery.counterup.min.js")}}></script>
        <script src={{asset("assets/js/plugins.js")}}></script>
        <script src={{asset("../../unpkg.com/ionicons%405.4.0/dist/ionicons.js")}}></script>
        <script src={{asset("assets/js/main.js")}}></script>
        @yield('js')
    </body>

    <!-- Mirrored from html-template.spider-themes.net/ama/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 12:26:39 GMT -->
</html>
