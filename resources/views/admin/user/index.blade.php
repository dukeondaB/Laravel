@extends('admin.layout.master')
@section('title') Quản lí người dùng @endsection
@section('content-title') <h2>List users</h2> @endsection
@section('content')

<a href="{{ route('user.create') }}" class="btn btn-success float-end">Thêm</a>
    <table class="table table">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection
