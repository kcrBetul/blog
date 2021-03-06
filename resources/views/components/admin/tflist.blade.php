@extends('layouts.index')
@section('title')
Konular Dosyası
@endsection
@section('css')
@endsection

@section('contetnt')
<section class="page_breadcrump">
    <div class="container-fluid pl-60 pr-60">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrump">
                    <ol class="breadcrump">
                        <li class="breadcrump-item"><a href="#">Home</a></li>
                        <li class="breadcrump-item"><a href="#">Docs</a></li>
                        <li class="breadcrump-item active" aria-current="page">Form WordPress Theme</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on Marc03, 2020</a>
            </div>
        </div>
    </div>
</section>
<section class="forum_sidebar_area" id="sticky_doc">
    <div class="container-fluid pl-60 pr-60">
        <div class="row">
            <div class="col-xl-2 d-none d-xl-block">
                <div class="left_side_forum">
                    <aside class="l_widget forum_list">
                        <h3 class="WD_TİTLE">Forms</h3>
                        <ul class="navbar_nav">
                            <li class="active nav-item">
                                <a href="#"><i class="social_tumbleupon"></i>View all</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><i class="icon_lightbulb_alt"></i>General</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><i class="icon_lightbulb_alt"></i>Ideas</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><i class="fa fa-user-o"></i>User Feedback</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="1_widget l_tags_wd">
                        <h3 class="wd_title">Tags</h3>
                        <ul class="list-unstyled w_tag_list style-light">
                            <li><a href="#">Swagger</a></li>
                            <li><a href="#">Foram</a></li>
                            <li><a href="#">WeCare</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Doc</a></li>
                            <li><a href="#">Product Board</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">DocAll</a></li>
                        </ul>
                    </aside>
                    <aside class="l_widget comment_list">
                        <h3 class="wd_title">Recent Topics</h3>
                        <ul class="navbar_nav">
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                    <div class="media-body">
                                    <a href="#">
                                        <h4>Integration 300 by</h4>
                                    </a>
                                    <a href="#">
                                        <h5><img src="/assets/img/forum/r-topic-user.png" alt=""> Jean Conner</h5>
                                    </a>
                                    <p>4 days, 3 hours ago</p>
                                </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h4>testing by</h4>
                                        </a>
                                        <a href="#">
                                            <h5><img src="/assets/img/forum/r-topic-user.png" alt=""> Dwain Cherry</h5>
                                        </a>
                                        <p>3 days, 20 hours ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                      <i class="icon_chat_alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h4>Title by</h4>
                                        </a>
                                        <a href="#">
                                            <h5><img src="/assets/img/forum/r-topic-user.png" alt=""> Kati Burch</h5>
                                        </a>
                                        <p>1 month ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <i class="icon_chat_alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h4>Green Planet by</h4>
                                        </a>
                                        <a href="#">
                                            <h5><img src="/assets/img/forum/r-topic-user.png" alt=""> Morris Ruiz</h5>
                                        </a>
                                        <p>1 week, 2 days ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8">
                <div class="forum_topic_list_inner">
                    <div class="topics-filter d-xl-none">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <ion-icon name="earth-outline"></ion-icon>View all </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <ion-icon name="swap-horizontal-outline"></ion-icon> General
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <ion-icon name="bulb-outline"></ion-icon>Ideas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-linl">
                                    <ion-icon name="bulb-outline"></ion-icon>User Feedback
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="forum_l_inner">
                        <table class="table">
                            <div class="forum;_head d-flex justify-connet-between">
                                <thead>
                                    <tr>
                                        <th><strong>Topics Id</strong></th>
                                        <th><strong>SRC</strong></th>
                                        <th><strong>İşlemler</strong></th>

                                    </tr>
                                </thead>
                            <div class="from_body">
                                <tbody>
                                    @foreach ($dosyalar as $dosya )
                                    <tr>
                                        <td>{{$dosyalar->topic_id }}</td>
                                        <td>{{$dosyalar->src}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </div>
                        </table>
                        <h5 class="card-title mt-2"><a href="#" class="btn btn-sm btn-danger">Dosya Ekle</a></h5>
                    </div>
                    <div class="row pagination_inner">
                        <div class="col-lg-2">
                            <h6>Total: <span>225</span></h6>
                        </div>
                        <div class="col-lg-8">
                            <nav aria-label="Page navigation example">
                                <ul class="Pagination justify-content-center">
                                    <li class="page-item"><a href="#" class="page-link"><i class="arrow_carrot_left"></i>Previous</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">...</a></li>
                                    <li class="page-item"><a href="#" class="page-link">21</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Next <i class="arrow_carrot-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group go_btn">
                                <input type="number" class="form-control" aria-label="Recipient' s usurname">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"> Go </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="right_side_forum">
                    <aside class="r_widget question_wd">
                        <button class="btn" type="button"><img src="/assets/img/forum/helpful-user/question-1.png"
                            alt="">Ask Question <i class="arrow_carrot-right"></i></button>
                    </aside>
                    <aside class="r_widget user_list_wd">
                        <div class="r_heading d-flex justify-content-between">
                            <h3>Most Helpful</h3>
                            <h5>Last 30 days</h5>
                        </div>
                        <ul class="navbar-nav">
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                src="/assets/img/forum/helpful-user/h-user-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>cleo-parra</h4>
                                        </div>
                                        <div class="media-right">
                                            <div class="count">
                                                10
                                            </div>
                                            <i class="icon_check_alt"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                src="/assets/img/forum/helpful-user/h-user-2.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>roy_marin</h4>
                                        </div>
                                        <div class="media-right">
                                            <div class="count">
                                                08
                                            </div>
                                            <i class="icon_check_alt"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                src="/assets/img/forum/helpful-user/h-user-3.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>hellen.austin</h4>
                                        </div>
                                        <div class="media-right">
                                            <div class="count">
                                                05
                                            </div>
                                            <i class="icon_check_alt"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                src="/assets/img/forum/helpful-user/h-user-4.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>erna.may</h4>
                                        </div>
                                        <div class="media-right">
                                            <div class="count">
                                                03
                                            </div>
                                            <i class="icon_check_alt"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                src="/assets/img/forum/helpful-user/h-user-5.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>jacobson</h4>
                                        </div>
                                        <div class="media-right">
                                            <div class="count">
                                                02
                                            </div>
                                            <i class="icon_check_alt"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                src="/assets/img/forum/helpful-user/h-user-6.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>van.mays</h4>
                                        </div>
                                        <div class="media-right">
                                            <div class="count">
                                                01
                                            </div>
                                            <i class="icon_check_alt"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                src="/assets/img/forum/helpful-user/h-user-7.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>steve_barr</h4>
                                        </div>
                                        <div class="media-right">
                                            <div class="count">
                                                01
                                            </div>
                                            <i class="icon_check_alt"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="r_widget question_list_wd">
                        <div class="r_heading d-flex justify-content-between">
                            <h3>Top</h3>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">7 days</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">30 days</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <ul class="navbar-nav">
                                    <li><a href="#"><span>01</span>Example of NearBy Place Search - SITE KIT</a>
                                    </li>
                                    <li><a href="#"><span>02</span>Example of Direction Steps - MAP KIT</a></li>
                                    <li><a href="#"><span>03</span>Introduction to AppGallery Connect Crash
                                            Service</a>
                                    </li>
                                    <li><a href="#"><span>04</span>Bank Card Recognition and Payment Screen - ML
                                            KIT</a>
                                    </li>
                                    <li><a href="#"><span>05</span>Example of Direction Steps - MAP KIT</a></li>
                                    <li><a href="#"><span>06</span>Example of NearBy Place Search - SITE KIT</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <ul class="navbar-nav">
                                    <li><a href="#"><span>01</span>Example of NearBy Place Search - SITE KIT</a>
                                    </li>
                                    <li><a href="#"><span>02</span>Example of Direction Steps - MAP KIT</a></li>
                                    <li><a href="#"><span>03</span>Introduction to AppGallery Connect Crash
                                            Service</a>
                                    </li>
                                    <li><a href="#"><span>04</span>Bank Card Recognition and Payment Screen - ML
                                            KIT</a>
                                    </li>
                                    <li><a href="#"><span>05</span>Example of Direction Steps - MAP KIT</a></li>
                                    <li><a href="#"><span>06</span>Example of NearBy Place Search - SITE KIT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
