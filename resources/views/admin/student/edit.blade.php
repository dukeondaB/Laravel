@extends('admin.layout.master')
@section('title')
    Sửa sinh viên
@endsection
@section('content')
    <h2>Đây là form Sửa nè</h2>
    <div class="row">

        <form action="{{ route('student.update', $student->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="ma_sv">
                Mã sv:
                <input type="text" class="form-control" name="ma_sv" value="{{ $student->ma_sv }}">
            </label><br><br>
            <label for="Name">
                Tên:
                <input type="text" name="name" class="form-control" value="{{ $student->name }}">
            </label><br><br>
            <label for="class">
                Lớp:
                <input type="text" name="class" class="form-control" value="{{ $student->class }}">
            </label><br><br>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
