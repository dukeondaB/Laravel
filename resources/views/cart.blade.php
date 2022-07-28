@extends('layouts.client')
@section('title','Giỏ hàng')
@section('content')
<section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đơn giá</th>
              </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr data-id="{{ $id }}">
                        <td data-th="Product">
                            <div class="media">
                                <div class="d-flex">
                                  <img src="{{url('images/products/'.$details['image'])}}" width="200px" alt="" />
                                </div>
                                <div class="media-body" style="width: 250px">
                                  <p>{{ $details['name'] }}</p>
                                </div>
                              </div>
                        </td>
                        <td data-th="Price">{{ number_format($details['price']) }}
                        <span class="text-danger">VNĐ</span></td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" style="width: 60px;" />
                              {{-- <input class="input-number" type="text" value="{{ $details['quantity'] }}" min="0" max="10"> --}}
                        </td>



                        <td data-th="Subtotal" class="text-right">{{ number_format($details['price'] * $details['quantity']) }} <span class="text-danger">VNĐ</span></td>
                        <td class="actions" data-th="">
                            <button class="btn btn-sm remove-from-cart">x</button>
                        </td>
                    </tr>
                @endforeach
            @endif
              <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="#">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Tổng hóa đơn:</h5>
                </td>
                <td class="text-right">
                  <h5>{{ number_format($total) }} <span class="text-danger">VNĐ</span></h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                      <li>
                        <a href="#">Flat Rate: $5.00</a>
                      </li>
                      <li>
                        <a href="#">Free Shipping</a>
                      </li>
                      <li>
                        <a href="#">Flat Rate: $10.00</a>
                      </li>
                      <li class="active">
                        <a href="#">Local Delivery: $2.00</a>
                      </li>
                    </ul>
                    <h6>
                      Calculate Shipping
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select">
                      <option value="1">Bangladesh</option>
                      <option value="2">India</option>
                      <option value="4">Pakistan</option>
                    </select>
                    <select class="shipping_select section_bg">
                      <option value="1">Select a State</option>
                      <option value="2">Select a State</option>
                      <option value="4">Select a State</option>
                    </select>
                    <input type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1" href="#">Update Details</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="#">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="{{route('checkout')}}">Xác nhận đơn hàng</a>
          </div>
        </div>
      </div>
  </section>
@endsection
@section('script')
  <script>
      $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Bỏ sản phẩm này ra khỏi giỏ hàng?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

  </script>
@endsection
