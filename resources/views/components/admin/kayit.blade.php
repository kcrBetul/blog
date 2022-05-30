<!doctype html>
<html lang="en">


<!-- Mirrored from html-template.spider-themes.net/ama/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 12:29:10 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href={{asset("/assets/img/favicon.ico")}} type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("/assets/assets/bootstrap/css/bootstrap.min.css")}}>
    <!-- icon css-->
    <link rel="stylesheet" href={{asset("/assets/elagent-icon/style.css")}}>
    <link rel="stylesheet" href={{asset("/assets/assets/animation/animate.css")}}>
    <link rel="stylesheet" href={{asset("/assets/css/style-main.css")}}>
    <link rel="stylesheet" href={{asset("/assets/css/responsive.css")}}>
    <title>Ama - Kayıt Ekranı</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="/assets/img/spinner_logo.png" alt="">
                    <h4><span>Ama</span></h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area signup_area_height">
            <div class="row ms-0 me-0">
                <div class="sign_left signup_left">
                    <h2>We are design changers do what matters.</h2>
                    <img class="position-absolute top" src="/assets/img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="/assets/img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="/assets/img/signup/man_image.png" alt="bottom">
                    <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3>Ama Hesabınızı Olustur</h3>
                            <p>Zaten hesabınız var mı? <a href="{{route('admin.kayit')}}">Kayıt Olmak</a></p>
                            <a href="#" class="btn-google"><img src="/assets/assets/img/signup/gmail.png" alt=""><span
                                    class="btn-text">Google ile Kaydolun</span></a>
                        </div>
                        <div class="divider">
                            <span class="or-text">veya</span>
                        </div>
                        <form action="{{route('uyeler.store')}}" class="row login_form" method="POST">
                            @csrf
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Nmae</div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="İsim" value="{{old('name')}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Surname</div>
                                <input type="text" class="form-control" name="surname" id="surname" placeholder="Soyisim" value="{{old('surname')}}">
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="small_text">E-mail</div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="info@ama.com" value="{{old('email')}}">
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="small_text">Phone</div>
                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="0553" value="{{old('phone')}}">
                            </div>

                            <div class="col-lg-6 form-group">
                                <div class="small_text">Type</div>
                                <select id="type" class="custom-select form-control" name="type" value="{{old('type')}}">
                                    <option value="1">Seçiniz</option>
                                  <option value="Admin">Admin</option>
                                  <option value="Üye">Üye</option>
                                </select>
                            </div>

                            <div class="col-lg-6 form-group">
                                <div class="small_text">Level</div>
                                <input type="level" class="form-control" id="level" name="level" placeholder="Seviye" value="{{old('level')}}">
                            </div>

                            <div class="col-lg-6 form-group">
                                <div class="small_text">Profile</div>
                                <input type="profile" class="form-control" id="profile" name="profile" placeholder="Profil" value="{{old('profile')}}">
                            </div>

                            <div class="col-lg-6 form-group">
                                <div class="small_text">Password</div>
                                <input id="password" name="password" type="password" class="form-control"
                                    placeholder="Şifre" autocomplete="off" value="{{old('password')}}">
                            </div>

                            <div class="col-lg-12 form-group">
                                <div class="check_box">
                                    <input type="checkbox" value="None" id="squared2" name="check">
                                    <label class="l_text" for="squared2"><span>Gizlilik Politikasını</span> Kabul Ediyorum </label>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Hesap Oluştur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src={{asset("/assets/js/jquery-3.5.1.min.js")}}></script>
    <script src={{asset("assets/js/pre-loader.js")}}> </script>
    <script src={{asset("assets/assets/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("assets/js/parallaxie.js")}}></script>
    <script src={{asset("assets/wow/wow.min.js")}}></script>
    <script src={{asset("assets/../../unpkg.com/ionicons%405.4.0/dist/ionicons.js")}}></script>
    <script src={{asset("assets/js/main.js")}}></script>


</body>


<!-- Mirrored from html-template.spider-themes.net/ama/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 12:29:11 GMT -->
</html>
