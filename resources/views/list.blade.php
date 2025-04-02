@extends('main')
@section ('title','Danh Sách User')
@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Danh Sách User</h2>
    <table class="table table-bordered  text-center">
        <thead class="table">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <a href="{{ route('user.viewUser', ['id' => $user->id]) }}" class="btn btn-primary">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-warning">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="btn btn-danger">Delete</a>
                                </th>
                            </tr>
                        @endforeach
        </tbody>
    </table>
</div>
@endsection
