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
    <p>Ubah Hafalan Tahfidz</p>
    <form action="{{ url("/tahfidz/$tahfidz->id") }}" method="POST">
        @csrf
        @method('PATCH')
      <div class="user-box">
        <input required="" name="name" type="text" value="{{ $tahfidz->name }}">
        @error('name')
           <span class="text-danger">
              {{ $message }}
            </span>
         @enderror
        <label>Nama</label>
      </div>
      <div class="user-box">
        <input required="" name="surat" type="text" value="{{ $tahfidz->surat }}">
        @error('surat')
           <span class="text-danger">
              {{ $message }}
            </span>
         @enderror
        <label>Surat</label>
      </div>
      <div class="user-box">
        <input required="" name="status" type="text" value="{{ $tahfidz->status }}">
        @error('status')
           <span class="text-danger">
              {{ $message }}
            </span>
         @enderror
        <label>Ayat</label>
      </div>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Edit
      </button>
    </form>
  </div>
@endsection