@extends('admin.layout.master')
@section('title') Thêm sản phẩm @endsection
@section('content-title','Thêm sinh viên')
@section('content')
<div class="row">

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <label for="Tên sản phẩm">
            </label>
                Tên sản phẩm:
                <input type="text" class="form-control" name="name">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <label for="Giá">
        </label>
            Giá:
            <input type="text" name="price" class="form-control">
        <label for="desc">
            Chi tiết:
        </label>
            <textarea name="description" id="summernote" cols="80" rows="10" class="form-control"></textarea>

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
            <label for="image">Ảnh đại diện sản phẩm:</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
          <div class="form-group">
            <label for="image">Ảnh chi tiết sản phẩm:</label>
            <input type="file" name="image_list[]" multiple id="image" class="form-control">
          </div>
        <button type="submit" class="btn btn-success">Thêm Sản phẩm</button>
    </form>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Nhập gì đó điiiiii',
            tabsize: 2,
      height: 200,
      minHeight: 100,
      maxHeight: 300,
      focus: true,
      codemirror: {
        theme: 'monokai'
      },popover: {
  image: [
    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
    ['float', ['floatLeft', 'floatRight', 'floatNone']],
    ['remove', ['removeMedia']]
  ],
  link: [
    ['link', ['linkDialogShow', 'unlink']]
  ],
  table: [
    ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
    ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
  ],
  air: [
    ['color', ['color']],
    ['font', ['bold', 'underline', 'clear']],
    ['para', ['ul', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture']]
  ]
}

        });
    });
  </script>
@endsection
