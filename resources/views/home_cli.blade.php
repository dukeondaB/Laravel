@extends('layouts.client')
@section('title','Trang chủ')
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
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('client/img/feature/feature_1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('client/img/feature/feature_2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('client/img/feature/feature_3.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('client/img/feature/feature_4.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-12 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('client/img/feature/feature_4.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- product_list start-->
<section class="product_list section_padding">
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
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            @foreach ($product_new as $item)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{url('images/products/'.$item->image)}}" alt="">
                                    <div class="single_product_text">
                                        <h4>{{$item->name}}</h4>
                                        <h3>{{ number_format($item->price)}} VNĐ</h3>
                                        <a href="{{ route('add.to.cart', $item->id) }}" class="add_cart">+ Thêm vào giỏ<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_1.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_2.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_3.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_4.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_5.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_6.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_7.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_8.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_1.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_2.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_3.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_4.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_5.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_6.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_7.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('client/img/product/product_8.png')}}" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part start-->



<!-- product_list part start-->
<section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <img src="{{asset('client/img/product/product_1.png')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('client/img/product/product_2.png')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('client/img/product/product_3.png')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('client/img/product/product_4.png')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('client/img/product/product_5.png')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
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
                    <form action="{{route('contact.email')}}" method="POST">
                        @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="nhập email tại đây"
                            a name="email">
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
