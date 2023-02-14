@extends('app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">

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
    <p>Reset your password</p>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
      <div class="user-box">
        <input required="" name="email" type="text" value="{{ old('email', $request->email) }}">
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
        <label>New Password</label>
      </div>
      <div class="user-box">
        <input required="" name="password_confirmation" type="password">
        <label>Confirm Password</label>
      </div>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Reset
      </button>
    </form>
  </div>
@endsection