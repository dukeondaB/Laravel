@extends('admin.layout.master')
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
<div class="form-group">
    <input type="text" class="form-control" id="name" name="name">
</div>
    <a href="{{ route('products.create') }}" class="btn btn-primary float-end">Thêm</a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Chi tiết</th>
                <th>Danh mục</th>
                <th>Kích cỡ</th>
                <th>Trạng thái</th>
                <th>Ảnh</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($product)

            @foreach ($product as $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>{{ $item->price }}</td>
                    <td id="summernote">{!! $item->description !!}</td>
                    <td>{{ $item->category->name}}</td>
                    <td>{{ $item->size_id }}</td>

                    <td>{{ $item->status == 1 ? 'hiện' : 'ẩn' }}</td>
                    <td><img id="product-img" src="{{ url('images/products/'.$item->image) }}" width="200px" alt=""></td>
                    <td>
                        <form action="{{route('products.destroy', $item->id)}}" method="Post">
                            <a class="btn btn-primary" href="{{ route('products.edit', $item->id) }}">Sửa</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="btn-delete" class="btn btn-danger">Xóa</button>
                        </form>
                        {{-- <form id="deleteForm{{ $item->id }}" action="{{ route('products.destroy', $item->id) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button data-form="deleteForm{{ $item->id }}" class="btn btn-delete btn-danger">Delete</button> --}}
                    </td>
                </tr>
            @endforeach
            @endif

        </tbody>

    </table>
    {{ $product->links() }}
    <script type="text/javascript">
        $('#name').on('keyup',function(){
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ route('product-search') }}',
                data: {
                    'name': $value
                },
                success:function(data){
                    $('tbody').html(data);
                }
            });
            console.log($value);
        })

        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
    <script>
        // $(function() {
        //     $(document).on('click', '.btn-delete', function() {
        //         let formId = $(this).data('form')
        //         Swal.fire({
        //             title: 'Bạn có chắc muốn xóa bản ghi này?',
        //             text: "Điều này sẽ khiến bản ghi biến mất hoàn toàn khỏi database!",
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonColor: '#3085d6',
        //             cancelButtonColor: '#d33',
        //             confirmButtonText: 'Đồng ý!',
        //             cancelButtonText: 'Hủy',
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 $(`#${formId}`).submit();
        //             }
        //         })

        //     })
        // })
    </script>

@endsection
