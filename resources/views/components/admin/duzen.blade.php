@extends("layouts.index")

@section('title')
Etiket Güncelleme
@endsection

@section('css')
@endsection

@section('content')
   <!--================Banner Area =================-->

  <section class="page_breadcrumb bg-transparent">
    <div class="container custom_container">
      <div class="row">
        <div class="col-sm-7">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Docs</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Ama WordPress Theme
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-sm-5">
          <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
        </div>
      </div>
    </div>
  </section>
  <!--================End Banner Area =================-->

  <!--================Add Question Area =================-->
  <section class="all-question-area bg-disable pt-100 pb-120 d-flex justify-content-center">
    <div class="container custom-container">
      <div class="row">
        <div class="col-xl-2 d-xl-block d-none pe-0">
          <div class="forum-left-sidebar-widget">
            <ul class="list-unstyled nav-sidebar">
              <li class="nav-item">
                <a href="index-2.html" class="nav-link"><img src="/assets/img/side-nav/home.png" alt="">Home</a>
              </li>
              <li class="nav-item active">
                <a href="forum-topics.html" class="nav-link"><img src="/assets/img/side-nav/question.png"
                    alt="briefcase">Questions</a>
                <span class="icon"><i class="arrow_carrot-down"></i></span>
                <ul class="list-unstyled dropdown_nav">
                  <li><a href="#">New Questions</a></li>
                  <li><a href="#" class="active">Trending Questions</a></li>
                  <li><a href="#">Must read Questions</a></li>
                  <li><a href="#">Hot Questions</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><img src="/assets/img/side-nav/link.png" alt="">Communities</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><img src="/assets/img/side-nav/megaphone.png" alt="">Polls</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><img src="/assets/img/side-nav/mortarboard.png" alt="">Education</a>
                <span class="icon"><i class="arrow_carrot-down"></i></span>
                <ul class="list-unstyled dropdown_nav">
                  <li><a href="#">Typography</a></li>
                  <li><a href="#">Code</a></li>
                  <li><a href="#">Image</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Keyboard Shortcuts</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><img src="/assets/img/side-nav/robot.png" alt="">Technology</a>
              </li>
              <li class="nav-item">
                <a href="badges.html" class="nav-link"><img src="/assets/img/side-nav/badge.png" alt="">Badges</a>
              </li>
              <li class="nav-item">
                <a href="add-question.html" class="nav-link"><img src="/assets/img/side-nav/add.png" alt="">Add group</a>
              </li>
              <li class="nav-item">
                <a href="user-list.html" class="nav-link"><img src="/assets/img/side-nav/chat.png" alt="">User</a>
                <span class="icon"><i class="arrow_carrot-down"></i></span>
                <ul class="list-unstyled dropdown_nav">
                  <li><a href="forum-profile.html">User Profile</a></li>
                  <li><a href="user-list.html">User List</a></li>
                  <li><a href="user-details.html">User Details</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><img src="/assets/img/side-nav/lifeguard.png" alt="">Help</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><img src="/assets/img/side-nav/bag.png" alt="">Buy Theme</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-7 pe-xl--0 ps-xxl-4">
            <div class="add-qustion-widget">
                <h4 class="widget-title">Etiket Güncelleme</h4>
                <form action="{{route('etiketler.update',$uye->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mt-30">
                        <label for="inp-nam" class="label">Name<span>*</span></label>
                        <div class="icon-input-group">
                            <input type="text" class="form-control" id="inp_nam" name="name" value="{{$uye->name}}">
                            <i class="icon_chat_alt"></i>
                        </div>
                        <div class="instruction">
                            Plase choose an appropriate title for the equation so it can be answered easily.
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-60">
                        <button class="btn btn-success btn-lg btn-block" type="submit">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-3">
          <div class="forum-right-sidebar-widget question-sidebar">
            <a href="#" class="action_btn custom-sidebar-btn w-100">Ask Question</a>
            <div class="single-widget-box stat-widget-2 mt-40">
              <div class="widget-header">
                <img src="/assets/img/statistics-icon.png" alt="icon" />
                <h5>Ama Statistics</h5>
              </div>
              <div class="widget-content">
                <p>Q&A for serious players and enthusiasts of Ama</p>
                <div class="row gx-0">
                  <div class="col-4">
                    <h4 class="counter">50</h4>
                    <span>Questions</span>
                  </div>
                  <div class="col-4">
                    <h4 class="counter">70</h4>
                    <span>Answers</span>
                  </div>
                  <div class="col-4">
                    <h4>
                      <span class="counter d-inline-block">99</span>%
                    </h4>
                    <span>Answersed</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="single-widget-box top-user mt-40">
              <div class="widget-header">
                <img src="/assets/img/user-icon.png" alt="icon" />
                <h5>Ama User</h5>
              </div>
              <div class="widget-content">
                <div class="mb-4">
                  <select class="custom-select nav nav-tabs" id="nav-tab">
                    <option id="nav-daily-tab" data-bs-toggle="tab" data-bs-target="#nav-daily"
                      aria-controls="nav-daily" aria-selected="true" value="daily ranking">
                      daily ranking
                    </option>
                    <option id="nav-weekly-tab" data-bs-toggle="tab" data-bs-target="#nav-weekly"
                      aria-controls="nav-weekly" aria-selected="false" value="weekly ranking">
                      weekly ranking
                    </option>
                    <option id="nav-monthly-tab" data-bs-toggle="tab" data-bs-target="#nav-month"
                      aria-controls="nav-month" aria-selected="false" value="monthly ranking">
                      monthly ranking
                    </option>
                  </select>
                </div>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-daily" role="tabpanel"
                    aria-labelledby="nav-daily-tab">
                    <ul class="list-unstyled user-list">
                      <li>
                        1
                        <img src="/assets/img/forum/top-user/user-1.png" alt="" /><a href="#">Craig
                          Levin</a><span>750
                          pts</span>
                      </li>
                      <li>
                        2
                        <img src="/assets/img/forum/top-user/user-2.png" alt="" /><a href="#">Kadin
                          George</a><span>690
                          pts</span>
                      </li>
                      <li>
                        3
                        <img src="/assets/img/forum/top-user/user-3.png" alt="" /><a href="#">Hanna
                          Rosser</a><span>650
                          pts</span>
                      </li>
                      <li>
                        4
                        <img src="/assets/img/forum/top-user/user-4.png" alt="" /><a href="#">Phillip Carder</a><span>500
                          pts</span>
                      </li>
                      <li>
                        5
                        <img src="/assets/img/forum/top-user/user-5.png" alt="" /><a href="#">Jaxson
                          Rhiel</a><span>425
                          pts</span>
                      </li>
                      <li>
                        6
                        <img src="/assets/img/forum/top-user/user-6.png" alt="" /><a href="#">Marley
                          Rhiel</a><span>399
                          pts</span>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="nav-weekly" role="tabpanel" aria-labelledby="nav-weekly-tab">
                    <ul class="/assets/list-unstyled user-list">
                      <li>
                        1
                        <img src="/assets/img/forum/top-user/user-6.png" alt="" /><a href="#">Marley
                          Rhiel</a><span>399
                          pts</span>
                      </li>
                      <li>
                        2
                        <img src="/assets/img/forum/top-user/user-4.png" alt="" /><a href="#">Martin
                          Garrix</a><span>500
                          pts</span>
                      </li>
                      <li>
                        3
                        <img src="/assets/img/forum/top-user/user-2.png" alt="" /><a href="#">Avicii</a><span>690 pts</span>
                      </li>
                      <li>
                        4
                        <img src="/assets/img/forum/top-user/user-3.png" alt="" /><a href="#">Hanna
                          Rosser</a><span>650
                          pts</span>
                      </li>
                      <li>
                        5
                        <img src="/assets/img/forum/top-user/user-5.png" alt="" /><a href="#">Jaxson
                          Rhiel</a><span>425
                          pts</span>
                      </li>
                      <li>
                        6
                        <img src="/assets/img/forum/top-user/user-1.png" alt="" /><a href="#">Craig
                          Levin</a><span>750
                          pts</span>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="nav-month" role="tabpanel" aria-labelledby="nav-monthly-tab">
                    <ul class="list-unstyled user-list">
                      <li>
                        1
                        <img src="/assets/img/forum/top-user/user-4.png" alt="" /><a href="#">Phillip Kappa</a><span>500
                          pts</span>
                      </li>
                      <li>
                        2
                        <img src="/assets/img/forum/top-user/user-6.png" alt="" /><a href="#">Marley
                          Rhiel</a><span>399
                          pts</span>
                      </li>
                      <li>
                        3
                        <img src="/assets/img/forum/top-user/user-3.png" alt="" /><a href="#">Tylor
                          Swift</a><span>650
                          pts</span>
                      </li>
                      <li>
                        4
                        <img src="/assets/img/forum/top-user/user-1.png" alt="" /><a href="#">Tony
                          Stark</a><span>750
                          pts</span>
                      </li>
                      <li>
                        5
                        <img src="/assets/img/forum/top-user/user-5.png" alt="" /><a href="#">Jaxson
                          Rhiel</a><span>425
                          pts</span>
                      </li>
                      <li>
                        6
                        <img src="/assets/img/forum/top-user/user-2.png" alt="" /><a href="#">Steve
                          Aoki</a><span>690
                          pts</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="single-widget-box related-topic mt-40">
              <div class="widget-header">
                <img src="/assets/img/chain.png" alt="icon" />
                <h5>Related</h5>
              </div>
              <div class="widget-content">
                <ul class="list-unstyled">
                  <li>
                    <span class="ans-count">78</span><a href="#">Loop inside React JSX</a>
                  </li>
                  <li>
                    <span class="ans-count">76</span><a href="#">Show or hide element in
                      React</a>
                  </li>
                  <li>
                    <span class="ans-count">69</span><a href="#">Hide keyboard in
                      react-native</a>
                  </li>
                  <li>
                    <span class="ans-count">56</span><a href="#">React Native version
                      mismatch</a>
                  </li>
                  <li>
                    <span class="ans-count">37</span><a href="#">Hide keyboard in
                      react-native</a>
                  </li>
                  <li>
                    <span class="ans-count">20</span><a href="#">Show or hide element in
                      React</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="single-widget-box tag-widget mt-40">
              <div class="widget-header">
                <img src="/assets/img/tags-icon.png" alt="icon" />
                <h5>Tags</h5>
              </div>
              <div class="widget-content">
                <ul class="widget-tag-list-2 list-unstyled tag-light">
                  <li><a href="#">jQuery</a></li>
                  <li><a href="#">PHP</a></li>
                  <li><a href="#">WordPress</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Foram</a></li>
                  <li><a href="#">help desk</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li><a href="#">support</a></li>
                  <li><a href="#">ecommerce</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Add Question Area =================-->
@endsection
