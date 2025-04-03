@extends('main')
@section ('title','Đăng Nhập')
@section('content')
<div class="container col-md-5 d-flex justify-content-center border border-3">
            <form action="{{ route('user.updateUser') }}" method="POST">
                <h1>Màn Hình Cập Nhật</h1>
                @csrf
                <input name="id" type="hidden" value="{{$user->id}}">
                <div class="col-md-10">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" value="{{$user->name}}" name="name">
                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                </div>
                <div class="col-md-10">
                    <label for="like" class="form-label">Like</label>
                    <input type="text" class="form-control" value="{{$user->like}}" name="like">
                    @if ($errors->has('like'))
                                        <span class="text-danger">{{ $errors->first('like') }}</span>
                                    @endif
                </div>
                <div class="col-md-10">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control" value="{{$user->facebook}}" name="facebook">
                    @if ($errors->has('facebook'))
                                        <span class="text-danger">{{ $errors->first('facebook') }}</span>
                                    @endif
                </div>
        
                <div class="col-md-10">
                    <label for="password" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" value="{{$user->password}}" name="password">
                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                </div>
        
                <div class="col-md-10">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" value="{{$user->email}}" name="email">
                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                </div>
               
                
                <button class="mb-3 btn btn-primary mt-3" type="submit">Lưu</button>
            </form>
        </div>
        
    </div>
@endsection
