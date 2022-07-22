@extends('admin.layout.master')
@section('title') Thêm sinh viên @endsection
@section('content')
@section('content-title')<h2>Đây là form thêm nè</h2> @endsection
<div>

    <form action="{{ route('student.store') }}" method="post" class="form-group">
        @csrf
        <label for="ma_sv">
            Mã sv:
            <input type="text" class="form-control" name="ma_sv">
        </label><br><br>
        <label for="Name">
            Tên:
            <input type="text" name="name" class="form-control">
        </label><br><br>
        <label for="class">
            Lớp:
            <input type="text" name="class" class="form-control">
        </label><br><br>
        <button type="submit" class="btn btn-success">Thêm sinh viên</button>
    </form>
</div>
@endsection
