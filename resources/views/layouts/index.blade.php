<!DOCTYPE html>
<html lang="en">
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
                        <img src="img/spinner_logo.png" alt="" />
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
