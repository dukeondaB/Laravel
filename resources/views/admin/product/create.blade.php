@extends('admin.layout.master')
@section('title') Thêm sinh viên @endsection
@section('content')
<h2>Đây là form thêm nè</h2>
<div class="row">

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="Tên sản phẩm">
            Tên sản phẩm:
            <input type="text" class="form-control" name="name">
        </label><br><br>
        <label for="Giá">
            Giá:
            <input type="text" name="price" class="form-control">
        </label><br><br>
        <label for="desc">
            Chi tiết:
            <textarea name="description" id="summernote" cols="30" rows="10" class="form-control"></textarea>

        </label><br><br>
        <label for="">Kích thước</label>
        <select name="size_id" id="" class="form-control">
            @foreach ($size as $item)
            <option value="{{$item->id}}" >{{$item->size_name}}
            </option>

            @endforeach
        </select>
        <label for="">Danh mục</label>
        <select name="cate_id" id="" class="form-control">
            @foreach ($category as $item)
            <option value="{{$item->id}}" >{{$item->name}}
            </option>

            @endforeach
        </select>
        <label for="">
            Trạng thái
            <input type="checkbox" class="" name="status">
        </label>
        <div class="form-group">
            <label for="image">Ảnh sản phẩm:</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
        <button type="submit" class="btn btn-success">Thêm Sản phẩm</button>
    </form>
</div>
@endsection
