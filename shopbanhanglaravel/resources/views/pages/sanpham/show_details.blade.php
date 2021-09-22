@extends('layout')
@section('content')
    @foreach ($product_details as $key => $value)
        <div class="product-details">
            <!--product-details-->
            <div class="col-sm-5">
                <ul id="imageGallery">
                    @foreach ($gallery as $key => $gal)
                        <li data-thumb="{{ asset('uploads/gallery/' . $gal->gallery_image) }}"
                            data-src="{{ asset('uploads/gallery/' . $gal->gallery_image) }}">
                            <img width="100%" alt="{{ $gal->gallery_name }}"
                                src="{{ asset('uploads/gallery/' . $gal->gallery_image) }}" />
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-7">
                <div class="product-information">
                    <!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{ $value->product_name }}</h2>
                    <p>Mã ID: {{ $value->product_id }}</p>
                    <img src="images/product-details/rating.png" alt="" />
                    <form action="{{ URL::to('/save-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $value->product_id }}"
                            class="cart_product_id_{{ $value->product_id }}">
                        <input type="hidden" value="{{ $value->product_name }}"
                            class="cart_product_name_{{ $value->product_id }}">
                        <input type="hidden" value="{{ $value->product_image }}"
                            class="cart_product_image_{{ $value->product_id }}">
                        <input type="hidden" value="{{ $value->product_price }}"
                            class="cart_product_price_{{ $value->product_id }}">
                        <span>
                            <span>{{ number_format($value->product_price, 0, ',', '.') . 'VNĐ' }}</span>

                            <label>Số lượng:</label>
                            <input name="qty" type="number" min="1" class="cart_product_qty_{{ $value->product_id }}"
                                value="1" />
                            <input name="productid_hidden" type="hidden" value="{{ $value->product_id }}" />
                        </span>
                        <input type="button" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart"
                            data-id_product="{{ $value->product_id }}" name="add-to-cart">
                    </form>
                    <p><b>Tình trạng:</b> Còn hàng</p>
                    <p><b>Điều kiện:</b> Mơi 100%</p>
                    <p><b>Thương hiệu:</b> {{ $value->brand_name }}</p>
                    <p><b>Danh mục:</b> {{ $value->category_name }}</p>
                    {{-- <div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
                                <div class="fb-share-button" data-href="http://127.0.0.1:8000/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div> --}}
                </div>
                <!--/product-information-->
            </div>
        </div>
        <!--/product-details-->
        <div class="category-tab shop-details-tab">
            <!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
                    <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
                    <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
                    <li><a href="#binhluan" data-toggle="tab">Bình luận</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details">
                    <p>{!! $value->product_desc !!}</p>
                </div>
                <div class="tab-pane fade" id="companyprofile">
                    <p>{!! $value->product_content !!}</p>
                </div>
                <div class="tab-pane fade" id="reviews">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>Admin</a></li>

                            <li><a href=""><i class="fa fa-clock-o"></i><?php $timestamp = time();
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                echo(date("h:i:s", $timestamp));?></a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i><?php echo date("d/m/Y")?></a></li>
                        </ul>

                        <p><b>Viết đánh giá của bạn</b></p>
                        <!------Rating here---------->
                        <ul class="list-inline rating"  title="Average Rating">
                            @for($count=1; $count<=5; $count++)
                                @php
                                    if($count<=$rating){
                                        $color = 'color:#ffcc00;';
                                    }
                                    else {
                                        $color = 'color:#ccc;';
                                    }

                                @endphp
                            <li title="star_rating" id="{{$value->product_id}}-{{$count}}"
                                data-index="{{$count}}"
                                data-product_id="{{$value->product_id}}"
                                data-rating="{{$rating}}" class="rating"
                                style="cursor:pointer; {{$color}} font-size:30px;">&#9733;</li>
                            @endfor

                        </ul>
                        <form action="#">
                            <span>
                                <input type="text" placeholder="Tên bình luận" />
                                <input type="email" placeholder="Địa chỉ email" />
                            </span>
                            <textarea name=""></textarea>
                            <img src="images/product-details/rating.png" alt="" />
                            <button type="button" class="btn btn-default pull-right">
                                Gửi bình luận
                            </button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade " id="binhluan">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=218788540120323&autoLogAppEvents=1"
                                        nonce="uyJeQNl0"></script>
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                        data-width="" data-numposts="5"></div>
                </div>
            </div>
        </div>
        <!--/category-tab-->
    @endforeach
    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">Sản phẩm liên quan</h2>
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    @foreach ($relate as $key => $lienquan)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{ URL::to('/chi-tiet/' . $lienquan->product_slug) }}">
                                            <img src="{{ URL::to('uploads/product/' . $lienquan->product_image) }}" alt="" />
                                            <h2>{{ number_format($lienquan->product_price) . ' ' . 'VNĐ' }}</h2>
                                            <p>{{ $lienquan->product_name }}</p>
                                        </a>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
    <!--/recommended_items-->
    <ul class="pagination pagination-sm m-t-none m-b-none">
        {!! $relate->links() !!}
    </ul>

@endsection
