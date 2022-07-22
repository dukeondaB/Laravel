@extends('admin.layout.master')
@section('title')
    Danh sách sinh viên
@endsection
@section('content')
<div class="form-group">
    <input type="text" class="form-control" id="student" name="student" placeholder="Tìm kiếm nè ...">
</div>
    <a href="{{ route('student.create') }}" class="btn btn-success float-end">Thêm</a>
    <table class="table" style="text-align: center">
        <thead>
        <tr>
            <th>Số thứ tự</th>
            <th>Mã sv</th>
            <th>Tên</th>
            <th>Lớp</th>
            <th>Action</th>
        </tr>
    </thead>
        <tbody>
            @if ($students)
            @foreach ($students as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->ma_sv }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->class }}</td>
                    <td>
                        <form action="{{ route('student.destroy', $user->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('student.edit', $user->id) }}">Sửa</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                    {{-- nếu không dùng form để xóa có thể dùng   <a href="{{url('admin/student/'.$user->id.'/delete')}}" class="btn btn-danger">Xóa</a> trong trường hợp tự đặt thêm route --}}
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="float-end" style="margin-top: 20px">
        {{ $students->links() }}

    </div>
    <script type="text/javascript">
        $('#student').on('keyup',function(){
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ route('student-search') }}',
                data: {
                    'ma_sv': $value
                },
                success:function(data){
                    $('tbody').html(data);
                }
            });
            console.log($value);
        })

        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
@endsection
