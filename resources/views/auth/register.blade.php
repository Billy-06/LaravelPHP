@extends('common.layouts.base')

@section("title", "Register")

@section("content")
<h2>Register</h2>
<hr>
<form action="{{ route('register') }}" method="post">
    @csrf
    {{-- Name --}}
    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input id="name" class="form-control" name="name" type="text" required>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
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

    <button class="btn btn-primary" type="submit">Register</button>
</form>
@endsection