@extends('app')
@section('main')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="login-box">
    <p>Login</p>
    <form action="{{ url('/tahfidz') }}" method="POST">
        @csrf
      <div class="user-box">
        <input required="" name="email" type="email" value="{{ old('email') }}">
        @error('email')
           <span class="text-danger">
              {{ $message }}
            </span>
         @enderror
        <label>Email</label>
      </div>
      <div class="user-box">
        <input required="" name="password" type="password">
        @error('password')
           <span class="text-danger">
              {{ $message }}
            </span>
         @enderror
        <label>Password</label>
      </div>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Login
      </button>
    </form>
    <p>Don't have an account? <a href="{{ route('register') }}" type="button" class="a2">Sign up!</a></p>
  </div>
@endsection