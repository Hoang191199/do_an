<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{ $meta_desc }}">

    <meta name="keywords" content="{{ $meta_keywords }}" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="canonical" href="{{ $url_canonical }}" />
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="" />

    {{-- <meta property="og:image" content="{{$image_og}}" />
      <meta property="og:description" content="{{$meta_desc}}" />
      <meta property="og:title" content="{{$meta_title}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" /> --}}
    <!--//-------Seo--------->
    <title>FunStore</title>
    <link href="{{ asset('/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/lightgallery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/lightslider.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/prettify.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ '/frontend/images/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 0990880888</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> funstore.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{ URL::to('/trang-chu') }}"><img
                                    src="{{ '/frontend/images/your-logo.png' }}" alt="" width="130px" /></a>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ URL::to('/infostore') }}"><i class="fa fa-star"></i> Th??ng tin c???a h??ng</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){
                                 ?>
                                <li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-crosshairs"></i> Thanh
                                        to??n</a></li>
                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                <li><a href="{{ URL::to('/payment') }}"><i class="fa fa-crosshairs"></i> Thanh
                                        to??n</a>
                                </li>
                                <?php
                                }else{
                                ?>
                                <li><a href="{{ URL::to('/dang-nhap') }}"><i class="fa fa-crosshairs"></i> Thanh
                                        to??n</a></li>
                                <?php
                                 }
                                ?>
                                <li><a href="{{ URL::to('/gio-hang') }}"><i class="fa fa-shopping-cart"></i> Gi???
                                        h??ng</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){
                                 ?>

                                <li><a href="{{ URL::to('/logout-checkout') }}"><i class="fa fa-lock"></i> ????ng
                                        xu???t</a></li>
                                <?php
                            }else{
                                 ?>
                                <li><a href="{{ URL::to('/dang-nhap') }}"><i class="fa fa-lock"></i> ????ng nh???p</a>
                                </li>
                                <?php
                             }
                                 ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ URL::to('/trang-chu') }}" class="active">Trang ch???</a></li>
                                <li class="dropdown"><a href="#">S???n ph???m<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach ($category as $key => $danhmuc)
                                            <li><a
                                                    href="{{ URL::to('/danh-muc/' . $danhmuc->slug_category_product) }}">{{ $danhmuc->category_name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">T??m theo h??ng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach ($brand as $key => $brand1)
                                            <li><a href="{{ URL::to('/thuong-hieu/' . $brand1->brand_slug) }}"> <span
                                                        class="pull-right"></span>{{ $brand1->brand_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ URL::to('/gio-hang') }}">Gi??? h??ng</a></li>
                                {{-- <li><a href="{{ URL::to('/lien-he') }}">Li??n h???</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{ URL::to('/tim-kiem') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="T??m ki???m s???n ph???m" />
                                <input type="submit" style="margin-top:0;color:#666" name="search_items"
                                    class="btn btn-primary btn-sm" value="T??m ki???m">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                            <li data-target="#slider-carousel" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($slider as $key => $slide)
                                @php
                                    $i++;
                                @endphp
                                <div class="item {{ $i == 1 ? 'active' : '' }}">

                                    <div class="col-sm-12">
                                        <img alt="{{ $slide->slider_desc }}"
                                            src="{{ asset('uploads/slider/' . $slide->slider_image) }}"
                                            height="100px" width="95%" class="img img-responsive">
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh m???c s???n ph???m</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            @foreach ($category as $key => $cate)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                href="{{ URL::to('/danh-muc/' . $cate->slug_category_product) }}">{{ $cate->category_name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Th????ng hi???u s???n ph???m</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach ($brand as $key => $brand)
                                        <li><a href="{{ URL::to('/thuong-hieu/' . $brand->brand_slug) }}"> <span
                                                    class="pull-right"></span>{{ $brand->brand_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->



                    </div>
                </div>

                <div class="col-sm-9 padding-right">

                    @yield('content')

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <a href="trang-chu">
                                <h2><span>F</span>unStore</h2>
                            </a>
                            <p>C???a h??ng ch??ng t??i chuy??n laptop,ph??? ki???n m??y t??nh ch??nh h??ng gi?? r??? nh???t H?? N???i</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ '/frontend/images/msi.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>MSI</p>
                                <h2>24 DEC 2019</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ '/frontend/images/razes.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Razer</p>
                                <h2>20 DEC 2020</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ '/frontend/images/asus.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Asus ROG</p>
                                <h2>21 JUN 2020</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ '/frontend/images/logi.png' }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Logitech</p>
                                <h2>10 FED 2021</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.841779369728!2d105.75635891502964!3d21.03901589280382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134549555fcb085%3A0xf85b30c46ac6b391!2zMTQzIFBow7pjIERp4buFbiwgQ-G6p3UgRGnhu4VuLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1627523267191!5m2!1svi!2s"
                                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>GI???I THI???U FUNSTORE</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Gi???i thi???u c???a h??ng</a></li>
                                <li><a href="#">Th??ng tin li??n h???</a></li>
                                <li><a href="#">Th??ng tin tuy???n d???ng</a></li>
                                <li><a href="#">Tin t???c</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>H??? TR??? KH??CH H??NG</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">H?????ng d???n mua h??ng tr???c tuy???n</a></li>
                                <li><a href="#">H?????ng d???n thanh to??n</a></li>
                                <li><a href="#">G???i y??u c???u b???o h??nh</a></li>
                                <li><a href="#">In h??a ????n ??i???n t???</a></li>
                                <li><a href="#">G??p ??, Khi???u N???i</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>CH??NH S??CH CHUNG</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Ch??nh s??ch, quy ?????nh chung</a></li>
                                <li><a href="#">Ch??nh s??ch v???n chuy???n</a></li>
                                <li><a href="#">Ch??nh s??ch b???o h??nh</a></li>
                                <li><a href="#">Ch??nh s??ch ?????i tr??? v?? ho??n ti???n</a></li>
                                <li><a href="#">Ch??nh s??ch h??ng ch??nh h??ng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>TH??NG TIN KHUY???N M???I</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Th??ng tin khuy???n m???i</a></li>
                                <li><a href="#">S???n ph???m khuy???n m???i</a></li>
                                <li><a href="#">S???n ph???m b??n ch???y</a></li>
                                <li><a href="#">S???n ph???m m???i</a></li>
                                <li><img src="{{ '/frontend/images/dathongbao.png' }}" alt="" width="100%"
                                        height="70px" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>????ng k?? Email</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Shop ch??ng t??i c?? c???p nh???t g?? m???i nh???t <br />th?? ch??ng t??i s??? nh???c b???n qua email.</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? <?php echo date('Y'); ?><span><a target="_blank"
                                href="#">FunStore</a></span></p>
                </div>
                <div>
                    <h5>?????a ch???: 143 Ph??c Di???n - B???c T??? Li??m - H?? N???i</h5>
                </div>
                <div>
                    <h5>Email:funstore@gmail.com. <span>??i???n tho???i: 0990880888</span></h5>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->
    {{-- Link  JS --}}
    <script src="{{ asset('/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
    <script src="{{ asset('/frontend/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/lightslider.js') }}"></script>
    <script src="{{ asset('/frontend/js/prettily.js') }}"></script>

    <script src="{{ asset('/frontend/js/sweetalert.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- Code JS --}}
    {{-- L???c --}}
    <script type="text/javascript">
        $(document).ready(function() {

            $('#sort').on('change', function() {

                var url = $(this).val();
                // alert(url);
                if (url) {
                    window.location = url;
                }
                return false;
            });

        });
    </script>
    {{-- Danh Gia Sao --}}
    <script type="text/javascript">
        function remove_background(product_id) {
            for (var count = 1; count <= 5; count++) {
                $('#' + product_id + '-' + count).css('color', '#ccc');
            }
        }
        // ????nh gi?? sao
        $(document).on('mouseenter', '.rating', function() {
            var index = $(this).data("index");
            var product_id = $(this).data('product_id');
            remove_background(product_id);
            for (var count = 1; count <= index; count++) {
                $('#' + product_id + '-' + count).css('color', '#ffcc00');
            }
        });
        // ko ????nh gi??
        $(document).on('mouseleave', '.rating', function() {
            var index = $(this).data("index");
            var product_id = $(this).data('product_id');
            var rating = $(this).data("rating");
            remove_background(product_id);
            for (var count = 1; count <= rating; count++) {
                $('#' + product_id + '-' + count).css('color', '#ffcc00');
            }
        });

        //click ????nh gi?? sao
        $(document).on('click', '.rating', function() {
            var index = $(this).data("index");
            var product_id = $(this).data('product_id');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ url('insert-rating') }}",
                method: "POST",
                data: {
                    index: index,
                    product_id: product_id,
                    _token: _token
                },
                success: function(data) {
                    if (data == 'done') {
                        alert("B???n ???? ????nh gi?? " + index + " tr??n 5");
                    } else {
                        alert("L???i ????nh gi??");
                    }
                }
            });
        });
    </script>
    {{-- MoTaNhanh --}}
    <script type="text/javascript">
        $('.xemnhanh').click(function() {
            var product_id = $(this).data('id_product');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ url('/quickview') }}",
                method: "POST",
                dataType: "JSON",
                data: {
                    product_id: product_id,
                    _token: _token
                },
                success: function(data) {
                    $('#product_quickview_title').html(data.product_name);
                    $('#product_quickview_id').html(data.product_id);
                    $('#product_quickview_price').html(data.product_price);
                    $('#product_quickview_image').html(data.product_image);
                    $('#product_quickview_gallery').html(data.product_gallery);
                    $('#product_quickview_desc').html(data.product_desc);
                    $('#product_quickview_content').html(data.product_content);
                    $('#product_quickview_value').html(data.product_quickview_value);
                    $('#product_quickview_button').html(data.product_button);
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                thumbItem: 3,
                slideMargin: 0,
                enableDrag: false,
                currentPagerPosition: 'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                }

            });
        });
    </script>
    {{-- <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101005454926983");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=218788540120323&autoLogAppEvents=1"
        nonce="0N9Utv2S">
    </script>
    {{-- Thanh to??n --}}

    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url('/add-cart-ajax') }}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token: _token
                    },
                    success: function() {

                        swal({
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{ url('/gio-hang') }}";
                            });
                    }

                });
            });
        });
    </script>
    <!--add to cart quickview-->
    <script type="text/javascript">
        $(document).on('click', '.add-to-cart-quickview', function() {

            var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_quantity = $('.cart_product_quantity_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_qty = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();

            if (parseInt(cart_product_qty) > parseInt(cart_product_quantity)) {
                alert('L??m ??n ?????t nh??? h??n ' + cart_product_quantity);
            } else {

                $.ajax({
                    url: '{{ url('/add-cart-ajax') }}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token: _token,
                        cart_product_quantity: cart_product_quantity
                    },
                    beforeSend: function() {
                        $("#beforesend_quickview").html(
                            "<p class='text text-primary'>??ang th??m s???n ph???m v??o gi??? h??ng</p>");
                    },
                    success: function() {
                        $("#beforesend_quickview").html(
                            "<p class='text text-success'>S???n ph???m ???? th??m v??o gi??? h??ng</p>");
                    }

                });
            }
        });
        $(document).on('click', '.redirect-cart', function() {
            window.location.href = "{{ url('/gio-hang') }}";
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.choose').on('change', function() {
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';

                if (action == 'city') {
                    result = 'province';
                } else {
                    result = 'wards';
                }
                $.ajax({
                    url: '{{ url('/select-delivery-home') }}',
                    method: 'POST',
                    data: {
                        action: action,
                        ma_id: ma_id,
                        _token: _token
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.calculate_delivery').click(function() {
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if (matp == '' && maqh == '' && xaid == '') {
                    alert('L??m ??n ch???n ????? t??nh ph?? v???n chuy???n');
                } else {
                    $.ajax({
                        url: '{{ url('/calculate-fee') }}',
                        method: 'POST',
                        data: {
                            matp: matp,
                            maqh: maqh,
                            xaid: xaid,
                            _token: _token
                        },
                        success: function() {
                            location.reload();
                        }
                    });
                }
            });
        });
    </script>

    @stack('js')
</body>

</html>
