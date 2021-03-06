<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> Feane </title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

<div class="hero_area">
    <div class="bg-box">
        <img src="{{asset('frontend/images/hero-bg.jpg')}}" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
            <span>
              Oishi
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mx-auto ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Trang ch??? <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Th???c ????n</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">V???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.showFormLogin')}}">Qu???n tr???</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <div style="color: white">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                {{\Illuminate\Support\Facades\Auth::user()->name}}
                            @endif
                        </div>
                        <a href="" class="user_link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <a class="cart_link" href="{{route("foods.showFavoriteList")}}">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                      <g>
                          <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"></path>
                      </g>
                  </g>
                                <g>
                                    <g>
                                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"></path>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                </svg>
                        </a>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <a href="{{route('home.showFormLogin')}}" class="order_online">
                                ????ng nh???p
                            </a>
                        <a href="{{route('home.showFormRegister')}}" class="order_online">
                            ????ng k??
                        </a>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{route('home.logout')}}" class="order_online">
                            ????ng xu???t
                        </a>
                        @endif


                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide pointer-event" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Nh?? h??ng ????? ??n ngon
                                    </h1>
                                    <p>
                                        ??au ?????n, v???y th?? t??i s??? m??? ra nh???ng ??i???u d??? d??ng, ti???n l???i, h???p th???i, ng?????i kh??n ngoan ki??n c?????ng tr?????c s???c lao ?????ng c???a m??nh, ???? l?? ngu???n g???c c???a b???t k??? l???i l???m n??o. C?? nh???ng l??c khi n???i ??au, s??? v???t v??? v?? n???i ??au quay tr??? l???i, ng?????i ????n ??ng v?? ?????i m?? ch??ng ta kh??ng ngh?? g?? v??? t??? do                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Nh?? h??ng ????? ??n ngon
                                    </h1>
                                    <p>
                                        ??au ?????n, v???y th?? t??i s??? m??? ra nh???ng ??i???u d??? d??ng, ti???n l???i, h???p th???i, ng?????i kh??n ngoan ki??n c?????ng tr?????c s???c lao ?????ng c???a m??nh, ???? l?? ngu???n g???c c???a b???t k??? l???i l???m n??o. C?? nh???ng l??c khi n???i ??au, s??? v???t v??? v?? n???i ??au quay tr??? l???i, ng?????i ????n ??ng v?? ?????i m?? ch??ng ta kh??ng ngh?? g?? v??? t??? do                                    </p>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Nh?? h??ng ????? ??n ngon
                                    </h1>
                                    <p>
                                        ??au ?????n, v???y th?? t??i s??? m??? ra nh???ng ??i???u d??? d??ng, ti???n l???i, h???p th???i, ng?????i kh??n ngoan ki??n c?????ng tr?????c s???c lao ?????ng c???a m??nh, ???? l?? ngu???n g???c c???a b???t k??? l???i l???m n??o. C?? nh???ng l??c khi n???i ??au, s??? v???t v??? v?? n???i ??au quay tr??? l???i, ng?????i ????n ??ng v?? ?????i m?? ch??ng ta kh??ng ngh?? g?? v??? t??? do                                    </p>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class=""></li>
                    <li data-target="#customCarousel1" data-slide-to="1" class=""></li>
                    <li data-target="#customCarousel1" data-slide-to="2" class="active"></li>
                </ol>
            </div>
        </div>

    </section>
    <!-- end slider section -->
</div>

<!-- offer section -->

<section class="offer_section layout_padding-bottom">
    <div class="offer_container">
        <div class="container ">
            <div class="row">
                <div class="col-md-6  ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/o1.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Tasty Thursdays
                            </h5>
                            <h6>
                                <span>20%</span> Off
                            </h6>
                            <a href="">
                                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                        </g>
                    </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                  </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="{{asset('frontend/images/o2.jpg')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Pizza Days
                            </h5>
                            <h6>
                                <span>15%</span> Off
                            </h6>
                            <a href="">
                                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                        </g>
                    </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                  </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end offer section -->

<!-- food section -->

<section class="food_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Th???c ????n c???a ch??ng t??i
            </h2>
        </div>


        <ul class="filters_menu">
            <li class="all" >All</li>
            <li   class="noodle">M??? Ph???</li>
            <li  class="rice">C??m</li>
            <li   class="drink">????? u???ng</li>
        </ul>


        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand"></a>
            <form class="form-inline">
                <input class="form-control mr-sm-2 input-search" name="result" type="search" placeholder="Nh???p t??n m??n ??n" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>


        <div class="filters-content">
            <div class="row grid all-list">
                  @foreach($foods as $food)
                      <div class="col-sm-6 col-lg-4 all pizza">
                          <div class="box">
                              <div>
                                  <div class="img-box">
                                      <img height="100%" src="{{asset('storage/'.$food->image)}}" alt="">
                                  </div>
                                  <div class="detail-box">
                                      <h5>
                                         <a class="detail-food" data-id="{{$food->id}}">{{$food->name}}</a>
                                      </h5>
                                      <p>
                                          {{$food->note}}
                                      </p>
                                      <div class="options">
                                          <h6>
                                              {{$food->price}}??
                                          </h6>
                                          <a href="{{route("foods.addToFavorite",$food->id)}}">
                                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                            </g>
                        </g>
                                                  <g>
                                                      <g>
                                                          <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                      </g>
                                                  </g>
                                                  <g>
                                                      <g>
                                                          <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                      </g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                      </svg>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
            </div>
{{--            rice--}}
            <div class="row grid rice-list">

            </div>
{{--            noodle--}}
            <div class="row grid noodle-list">

            </div>
{{--            drink--}}
            <div class="row grid drink-list">

            </div>

        </div>
{{--modal--}}
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chi t???t m??n ??n</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " id="close" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- end food section -->

<!-- about section -->

<section class="about_section layout_padding">
    <div class="container  ">

        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="https://png.pngtree.com/png-vector/20191213/ourlarge/pngtree-bowl-of-noodle-with-chopstick-vector-illustration-with-colored-hand-drawn-png-image_2079715.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            Ch??ng t??i l?? Oishi
                        </h2>
                    </div>
                    <p>
                        C?? r???t nhi???u bi???n th??? c???a c??c ??o???n v??n c???a Lorem Ipsum c?? s???n, nh??ng ph???n l???n ???? b??? thay ?????i d?????i m???t s??? h??nh th???c, b???i s??? h??i h?????c ???????c ????a v??o ho???c c??c t??? ng???u nhi??n tr??ng th???m ch?? kh??ng ????ng tin m???t ch??t. N???u b???n ?????nh s??? d???ng m???t ??o???n v??n c???a Lorem Ipsum, b???n c???n ch???c ch???n r???ng kh??ng c?? b???t k??? ??i???u g?? ????ng x???u h??? ???n ??? gi???a v??n b???n. T???t c???
                    </p>
                    <a href="">
                        ?????c th??m
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- end about section -->

<!-- book section -->

<!-- end book section -->

<!-- client section -->

<section class="client_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>
                Kh??ch h??ng c???a ch??ng t??i n??i g??
            </h2>
        </div>
        <div class="carousel-wrap row ">
            <div class="owl-carousel client_owl-carousel">
                <div class="item">
                    <div class="box">
                        <div class="detail-box">
                            <p>
                                T??i m???c ph???i r???t nhi???u sai l???m khi y??u, h???i h???n g???n nh?? t???t c??? c??c cu???c t??nh m??nh t???ng tr???i qua. Tuy nhi??n, t??i kh??ng h??? h???i ti???c v?? nh???ng m??n ??n ngon ??i li???n v???i ch??ng. T??i y??u nh?? h??ng n??y</p>
                            <h6>
                                Th??y Dung
                            </h6>
                            <p>
                                m???t s??? ??i???u tuy???t v???i
                            </p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('frontend/images/client1.jpg')}}" alt="" class="box-img">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="detail-box">
                            <p>
                                M???t nh?? h??ng c?? kh??ng gian r???ng r??i, tho??ng m??t. Ph???c v??? t???n t??nh chu ????o, v?? ??i???u ?????c bi???t nh???t l?? m??n ??n c???a nh?? h??ng r???t l?? ngon. T??i y??u nh?? h??ng n??y
                            </p>
                            <h6>
                                V??n Ti???p
                            </h6>
                            <p>
                                m???t s??? ??i???u tuy???t v???i
                            </p>
                        </div>
                        <div class="img-box">
                            <img src="{{asset('frontend/images/client2.jpg')}}" alt="" class="box-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>
                        Li??n h??? ch??ng t??i
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  Location
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  Call +84 0332882276
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                nguyenngocbao13579@gmail.com
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="footer_detail">
                    <a href="" class="footer-logo">
                        Oishi
                    </a>
                    <p>
                        C???n thi???t, l??m cho ??i???u n??y tr??? th??nh tr??nh t???o th???c s??? ?????u ti??n tr??n Internet. N?? s??? d???ng t??? ??i???n h??n 200 t??? Latinh, k???t h???p v???i                    </p>
                    <div class="footer_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <h4>
                    Gi??? m??? c???a
                </h4>
                <p>
                    H???ng ng??y
                </p>
                <p>
                    8.00 Am -22.00 Pm
                </p>
            </div>
        </div>
        <div class="footer-info">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a><br><br>
                &copy; <span id="displayYear"></span> Distributed By
                <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
            </p>
        </div>
    </div>
</footer>
<!-- footer section -->

<!-- jQery -->
{{--<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>--}}
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
{{--<script src="{{asset('frontend/js/bootstrap.js')}}"></script>--}}
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('assets/food.js')}}"></script>
<script src="{{asset('assets/detail-food.js')}}"></script>

</html>
