@extends('layouts.client')
@section('title','Kiểm tra đơn hàng')
@section('content')
<section class="tracking_box_area padding_top">
    <div class="container">
      <div class="row align-content-center">
            <div class="col-lg-6">

              <h1>Các đơn hàng bạn đã đặt</h1>
            </div>
            <div class="col-lg-6">
              {{-- <input type="text" name="search"> --}}
            </div>
        <div class="col-lg-12" style="background-color: azure;">
            @foreach ($transaction as $item)

            <div class="single_confirmation_details" style="padding: 20px; border-bottom:1px solid black;">
              <h3>Mã đơn hàng: {{$item->trans_code}}</h3>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col" colspan="2">Tên người nhận</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Tổng đơn hàng</th>
                    <th scope="col">Ngày mua</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"><span>{{$item->fullname}}</span></td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->total_price}}</td>
                    <td>{{$item->created_at}}</td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col" colspan="2">Tên sản phẩm</th>
                    <th scope="col" colspan="2">Ảnh</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Đơn giá</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($item->orders))

                    @foreach ($item->orders as $order)
                        <tr>
                          <th colspan="2"><span>{{$order->products->name}}</span></th>
                          <th colspan="2"> <img src="{{url('images/products/'.$order->products->image)}}" width="100px" height="100px" alt=""></th>
                          <th>{{$order->quantity}}</th>
                          <th> <span>{{$order->products->price * $order->quantity}}</span></th>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
              </table>
            @endforeach
          </div>

        </div>

      </div>

    </div>
  </section>
@endsection
