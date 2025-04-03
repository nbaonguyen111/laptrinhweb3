@extends('main')
@section ('title','Đăng Ký')
@section('content')
<div class="container mt-3 col-md-4 border border-2">
        <h1 class="text-center">Màn Hình Chi Tiết</h1>
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" disabled value="{{$user->name}}">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" disabled value="{{$user->email}}">
        <label for="" class="form-label"><img src="{{ asset('images/'.$user->images) }}" alt="" srcset=""></label>
        <input type="" class="form-control" disabled>
        <div class="clearfix">
        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-primary mt-3 mb-3 float-end">Chỉnh sửa </a>
    </div>
    <!-- <a href="{{ route('user.updateUser',['id' => $user-> id]) }}">Edit</a> -->
    </div>
@endsection
