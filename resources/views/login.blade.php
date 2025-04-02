@extends('main')
@section('title', 'Đăng Nhập')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
        <div class="col-md-6 col-lg-4 p-5 border rounded shadow-lg bg-white">
            <h3 class="text-center mb-4 text-primary">Đăng Nhập</h3>
            <form method="POST" action="{{ route('user.authUser') }}">
                @csrf

                <!-- Email Input -->
                <div class="form-group mb-4">
                    <input type="email" placeholder="Email" id="email" class="form-control form-control-lg rounded-pill" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- Password Input -->
                <div class="form-group mb-4">
                    <input type="password" placeholder="Password" id="password" class="form-control form-control-lg rounded-pill" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-check mb-4">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Nhớ Mật Khẩu</label>
                </div>

                <!-- Submit Button -->
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill">Đăng Nhập</button>
                </div>

                <!-- Additional Links -->
                <div class="text-center">
                    <a href="{{ route('user.createUser') }}" class="text-decoration-none text-secondary">Đăng Ký</a> |
                    <a href="#" class="text-decoration-none text-secondary">Quên Mật Khẩu?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
