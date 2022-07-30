@extends('layouts.client')
@section('title','Xác nhận đặt hàng')
@section('content')
<section class="checkout_area padding_top">
    <div class="container">
      <div class="cupon_area">
        <div class="check_title">
          <h2>
            Bạn có mã giảm giấ?
            <a href="#">Nhập mã giảm giá tại đây</a>
          </h2>
        </div>
        <input type="text" placeholder="Enter coupon code" />
        <a class="tp_btn" href="#">Áp dụng mã giảm giá</a>
      </div>
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-6">
            <h3>Chi tiết đơn hàng</h3>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" />
                <span class="placeholder" data-placeholder="Tên"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="name" />
                <span class="placeholder" data-placeholder="Họ"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" />
                <span class="placeholder" data-placeholder="Số điện thoại"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" />
                <span class="placeholder" data-placeholder="Địa chỉ Email"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">Country</option>
                  <option value="2">Country</option>
                  <option value="4">Country</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="add1" />
                <span class="placeholder" data-placeholder="Address line 01"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add2" name="add2" />
                <span class="placeholder" data-placeholder="Address line 02"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" name="city" />
                <span class="placeholder" data-placeholder="Town/City"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">District</option>
                  <option value="2">District</option>
                  <option value="4">District</option>
                </select>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <input type="checkbox" id="f-option2" name="selector" />
                  <label for="f-option2">Create an account?</label>
                </div>
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <h3>Shipping Details</h3>
                  <input type="checkbox" id="f-option3" name="selector" />
                  <label for="f-option3">Ship to a different address?</label>
                </div>
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
              </div>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="order_box">
              <h2>Sản phẩm bạn đã đặt</h2>
              <ul class="list">
                <li>
                  <a>Sản phẩm

                    <span class="">Giá</span>

                  </a>
                </li>
                @php
                    $total = 0
                @endphp
                @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <li>
                  <a> {!!Str::limit($details['name'],25)!!}
                    <span class="middle">x {{$details['quantity']}}</span>
                    <span class="last">{{ number_format($details['price'] * $details['quantity']) }}VNĐ</span>
                  </a>
                </li>

                @endforeach
                @endif
                <ul class="list list_2">
                    <li>
                        <a href="#">Tổng giá sản phẩm
                            <span>{{ number_format($total) }}  <span class="text-danger"> VNĐ</span></span>
                  </a>
                </li>
                <li>
                  <a href="#">Phí ship
                    <span>Flat rate: $50.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Tổng
                    <span>$2210.00</span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector" />
                  <label for="f-option5">Check payments</label>
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector" />
                  <label for="f-option6">Paypal </label>
                  <img src="img/product/single-product/card.jpg" alt="" />
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>
              <a class="btn_3" href="{{route('confirm')}}">Xác nhận đặt hàng</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
