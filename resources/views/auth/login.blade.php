@extends('common.layouts.base')

@section("title", "Login")

@section("content")
<h2>Login</h2>
<hr>
<form action="{{ route('login') }}" method="post">
    @csrf
    {{-- Email --}}
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input id="email" class="form-control" name="email" type="email" required>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    {{-- Password --}}
    <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input id="password" class="form-control" name="password" type="password" required>
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">login</button>
</form>
@endsection