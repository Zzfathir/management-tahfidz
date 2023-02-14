@extends('app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">

  
<div class="login-box">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <form action="{{ route('password.email') }}" method="POST">
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
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Send Request
      </button>
    </form>
  </div>
@endsection