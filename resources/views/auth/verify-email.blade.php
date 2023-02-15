@extends('app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">

  
<div class="login-box">
    @if (session('status'))
    <div class="alert alert-success">
        A fresh verification link has been sent to your email
    </div>
@endif
Before proceeding, please check your email for verification.
     Or<form action="{{ route('verification.send') }}" method="POST" class="d-inline">
        @csrf
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        {{ _('click here to request another') }}
      </button>
    </form>
  </div>
@endsection