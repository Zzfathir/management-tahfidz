@extends('app')
@section('main')

<div class="login-box">
    <p>Register</p>
    <form action="{{ route('login') }}" method="POST">
        @csrf
      <div class="user-box">
        <input required="" name="name" type="text" value="{{ old('name') }}">
        @error('name')
        <span class="text-danger">
            {{ $message }}
        </span>
        @enderror
        <label>Username</label>
      </div>
      <div class="user-box">
        <input required="" name="email" type="text" value="{{ old('email') }}">
        @error('email')
        <span class="text-danger">
            {{ $message }}
        </span>
        @enderror
        <label>Email</label>
      </div>
      <div class="user-box">
        <input required="" name="password" type="password" value="{{ old('password') }}">
        @error('password')
        <span class="text-danger">
            {{ $message }}
        </span>
        @enderror
        <label>Password</label>
      </div>
      <div class="user-box">
        <input name="password_confirmation" type="password">
        <label>Confirm Password</label>
      </div>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Register
      </button>
    </form>
  </div>
@endsection