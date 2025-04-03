@extends('main')
@section('title', 'Đăng Ký')

@section('content')
    <div class="container d-flex justify-content-center align-items-center mt-5" style="height: 50vh;">
        <div class="col-md-6 col-lg-4 p-5 border rounded shadow-lg bg-light">
            <h3 class="text-center mb-4 text-primary">Đăng Ký</h3>
            <form action="{{ route('user.postUser') }}" method="POST">
                @csrf

                <!-- Name Input -->
                <div class="form-group mb-4">
                    <input type="text" placeholder="Name" id="name" class="form-control form-control-lg rounded-pill" name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <input type="text" placeholder="Like" id="like" class="form-control form-control-lg rounded-pill" name="like" required autofocus>
                    @if ($errors->has('like'))
                        <span class="text-danger">{{ $errors->first('like') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <input type="text" placeholder="Facebook" id="facebook" class="form-control form-control-lg rounded-pill" name="facebook" required autofocus>
                    @if ($errors->has('facebook'))
                        <span class="text-danger">{{ $errors->first('facebook') }}</span>
                    @endif
                </div>

                <!-- Email Input -->
                <div class="form-group mb-4">
                    <input type="text" placeholder="Email" id="email_address" class="form-control form-control-lg rounded-pill" name="email" required>
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
                <div class="form-group mb-4">
                    <input type="file" placeholder="Upload Images" id="images" class="form-control form-control-lg rounded-pill" name="images" required>
                    @if ($errors->has('images'))
                        <span class="text-danger">{{ $errors->first('images') }}</span>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill">Đăng Ký</button>
                </div>

            </form>
        </div>
    </div>
@endsection
