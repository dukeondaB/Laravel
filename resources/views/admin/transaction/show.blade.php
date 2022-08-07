@extends('admin.layout.master')
@section('title') <h3>Đơn hàng : {{$transaction->trans_code}}</h3> @endsection
@section('content')
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
        <td colspan="2"><span>{{$transaction->fullname}}</span></td>
        <td>{{$transaction->email}}</td>
        <td>{{$transaction->phone}}</td>
        <td>{{$transaction->address}}</td>
        <td>{{$transaction->total_price}}</td>
        <td>{{$transaction->created_at}}</td>
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
        @if (count($transaction->orders))

        @foreach ($transaction->orders as $order)
            <tr>
              <th colspan="2"><span>{{$order->products->name}}</span></th>
              <th colspan="2"> <img src="{{url('images/products/'.$order->products->image)}}" width="100px" height="100px" alt=""></th>
              <th>{{$order->quantity}}</th>
              <th> <span>{{number_format($order->products->price * $order->quantity)}}</span></th>
            </tr>
        @endforeach
        @endif
    </tbody>
  </table>
  <h3>Trạng thái đơn hàng</h3>
@endsection
