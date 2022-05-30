<!doctype html>
<html lang="tr">
<!-- Mirrored from html-template.spider-themes.net/ama/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 12:29:07 GMT -->
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
    <title>Ama - Giriş Ekranı</title>
</head>
<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="/assets/assets/img/spinner_logo.png" alt="">
                    <h4><span>Ama</span></h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ms-0 me-0">
                <div class="sign_left signin_left">
                    <h2>We are design changers do what matters.</h2>
                    <img class="position-absolute top" src="/assets/img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="/assets/img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle" src="/assets/img/signup/door.png" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3>Ama da Oturum Açın</h3>
                            <p>Bir hesabınız yok mu? <a href="{{route('admin.uyeol')}}">Kayıt ol</a></p>
                            <a href="#" class="btn-google"><img src="/assets/img/signup/gmail.png" alt=""><span
                                    class="btn-text">Gmail ile Oturum Açın</span></a>
                        </div>
                        <div class="divider">
                            <span class="or-text">veya</span>
                        </div>
                        <form action="{{route('admin.login.submit')}}" class="row login_form" method="POST">
                            @csrf
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Your email</div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="info@Ama.com" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="tex-danger"><strong>{{$errors->first('email')}}</strong></span>
                            @endif
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Confirm password</div>
                                <div class="confirm_password">
                      <input id="confirm-password" type="password" name="password" class="form-control" placeholder="Şifre" autocomplete="off" required>
                                    <a href="#" class="forget_btn">Forgotten password?</a>
                                </div>
                            </div>

                            <div class="">
                                <input type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}} id="rememberme" class="filled-in chk-col-pink">
                           <label for="rememberme">Beni Hatırla</label>
                            </div>


                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Giriş Yap</button>
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
    <script src={{asset("/assets/js/pre-loader.js")}}> </script>
    <script src={{asset("/assets/assets/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("/assets/js/parallaxie.js")}}></script>
    <script src={{asset("/assets/wow/wow.min.js")}}></script>
    <script src={{asset("/assets/../../unpkg.com/ionicons%405.4.0/dist/ionicons.js")}}></script>
    <script src={{asset("/assets/js/main.js")}}></script>



</body>
<!-- Mirrored from html-template.spider-themes.net/ama/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 12:29:08 GMT -->
</html>
