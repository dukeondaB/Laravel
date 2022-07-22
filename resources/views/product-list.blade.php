@extends('layouts.client')
@section('title','Danh sách sản phẩm')
@section('content')
<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Danh mục sản phẩm</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="#">Sofa</a>
                                    <span>(250)</span>
                                </li>
                                <li>
                                    <a href="#">Bàn ăn</a>
                                    <span>(250)</span>
                                </li>
                                <li>
                                    <a href="#">Tủ quần áo</a>
                                    <span>(250)</span>
                                </li>
                                <li>
                                    <a href="#">Tủ giày</a>
                                    <span>(250)</span>
                                </li>
                                <li>
                                    <a href="#">Thảm</a>
                                    <span>(250)</span>
                                </li>
                                <li>
                                    <a href="#">Đồ decor</a>
                                    <span>(250)</span>
                                </li>

                            </ul>
                        </div>
                    </aside>

                    {{-- <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Product filters</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="#">Apple</a>
                                </li>
                                <li>
                                    <a href="#">Asus</a>
                                </li>
                                <li class="active">
                                    <a href="#">Gionee</a>
                                </li>
                                <li>
                                    <a href="#">Micromax</a>
                                </li>
                                <li>
                                    <a href="#">Samsung</a>
                                </li>
                            </ul>
                            <ul class="list">
                                <li>
                                    <a href="#">Apple</a>
                                </li>
                                <li>
                                    <a href="#">Asus</a>
                                </li>
                                <li class="active">
                                    <a href="#">Gionee</a>
                                </li>
                                <li>
                                    <a href="#">Micromax</a>
                                </li>
                                <li>
                                    <a href="#">Samsung</a>
                                </li>
                            </ul>
                        </div>
                    </aside> --}}

                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Kích thước</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="#">Lớn</a>
                                </li>
                                <li>
                                    <a href="#">Vừa</a>
                                </li>
                                <li class="active">
                                    <a href="#">Nhỏ</a>
                                </li>

                            </ul>
                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets price_rangs_aside">
                        <div class="l_w_title">
                            <h3>Price Filter</h3>
                        </div>
                        <div class="widgets_inner">
                            <div class="range_item">
                                <!-- <div id="slider-range"></div> -->
                                <input type="text" class="js-range-slider" value="" />
                                <div class="d-flex">
                                    <div class="price_text">
                                        <p>Price :</p>
                                    </div>
                                    <div class="price_value d-flex justify-content-center">
                                        <input type="text" class="js-input-from" id="amount" readonly />
                                        <span>to</span>
                                        <input type="text" class="js-input-to" id="amount" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu">
                                <p><span>10000 </span> Prodict Found</p>
                            </div>
                            <div class="single_product_menu d-flex">
                                <h5>short by : </h5>
                                <select>
                                    <option data-display="Select">name</option>
                                    <option value="1">price</option>
                                    <option value="2">product</option>
                                </select>
                            </div>
                            <div class="single_product_menu d-flex">
                                <h5>show :</h5>
                                <div class="top_pageniation">
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single_product_menu d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="search"
                                        aria-describedby="inputGroupPrepend">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center latest_product_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_1.png')}}" alt="">
                            <a href="product-detail">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_2.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_3.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_4.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_5.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_6.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_7.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">
                            <img src="{{asset('client/img/product/product_8.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="product-detail">
                        <div class="single_product_item">

                            <img src="{{asset('client/img/product/product_2.png')}}" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                                <a href="" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-12">
                        <div class="pageination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="ti-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="ti-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->

<!-- product_list part start-->
<section class="product_list best_seller">
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
@endsection
