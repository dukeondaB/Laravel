@extends('layouts.client')
@section('title', 'Trang chủ')
@section('content')
    {{-- =========== --}}
    {{-- <section class="breadcrumb breadcrumb_bg">
                        <div class="container">
                          <div class="row justify-content-center">
                            <div class="col-lg-8">
                              <div class="breadcrumb_iner">
                                <div class="breadcrumb_iner_item">
                                  <h2>@section('')</h2>
                                  <p>Home <span>-</span> contact us</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section> --}}
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Các danh mục chính</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Tủ giày chất lượng cao siêu xịn xò đỉnh cao vũ trụ</p>
                        <h3>Tủ Giày</h3>
                        <a href="{{route('sortByCate',4)}}" class="feature_btn">Xem ngay <i class="fas fa-play"></i></a>
                        <img src="{{ asset('client/img/feature/feature_1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Tủ quần áo chất lượng cao</p>
                        <h3>Tủ Quần Áo</h3>
                        <a href="{{route('sortByCate',3)}}" class="feature_btn">Xem ngay <i class="fas fa-play"></i></a>
                        <img src="{{ asset('client/img/feature/feature_2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{ asset('client/img/feature/feature_3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{ asset('client/img/feature/feature_4.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{ asset('client/img/feature/feature_4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_list">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Sản phẩm mới nhất<span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-12">
                            <div class="best_product_slider owl-carousel">
                                @foreach ($product_new as $item)
                                    <div class="single_product_item">
                                        <img src="{{ url('images/products/' . $item->image) }}" alt="">
                                        <div class="single_product_text">
                                            <h4>{{ $item->name }}</h4>
                                            <h3>{{ number_format($item->price) }} VNĐ</h3>
                                            <a href="{{ route('add.to.cart', $item->id) }}" class="add_cart"
                                                style="font-size: 12px">Thêm nhanh vào giỏ</a>
                                            <a href="{{ route('product', $item->id) }}">Xem chi tiết</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_list best_seller ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Sản phẩm được quan tâm nhất <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($product_view as $item)
                        <div class="single_product_item">
                            <img src="{{ url('images/products/' . $item->image) }}" alt="">
                            <div class="single_product_text">
                                <h4>{{ $item->name }}</h4>
                                <h3>{{ number_format($item->price) }} VNĐ</h3>
                                <a href="{{ route('add.to.cart', $item->id) }}" class="add_cart"
                                    style="font-size: 12px">Thêm nhanh vào giỏ</a>
                                <a href="{{ route('product', $item->id) }}">Xem chi tiết</a>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Tham gia đăng ký tin tức</h5>
                        <h2>Đăng ký để nhận những tin tức mới nhất</h2>
                        <form action="{{ route('contact.email') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="nhập email tại đây" a
                                    name="email">
                                <div class="input-group-append">
                                    <button class="input-group-text btn_2" id="basic-addon2">Đăng ký ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('script')

@endsection
