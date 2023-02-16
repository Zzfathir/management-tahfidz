@extends('app')
@section('main')

<div class="flex justify-content-center mt-40 gap-6">
    @if (Auth::user()->role !== 'admin')
    <div class="cardss">
        <img src="https://cdn-icons-png.flaticon.com/512/180/180689.png" class="img" alt="">
        <div class="textBox">
          <p class="text head">User</p>
          <a href="{{ url('tahfidz') }}" class="text price linkee">See our tahfidz</a>
        </div>
      </div>
    @else
    <div class="cardss">
        <img src="https://cdn-icons-png.flaticon.com/512/1237/1237367.png" class="img" alt="">
        <div class="textBox">
          <p class="text head">Admin</p>
          <a href="{{ url('admin') }}" class="text price linkee">Manage our tahfidz</a>
        </div>
      </div>
      <div class="cardss">
        <img src="https://cdn-icons-png.flaticon.com/512/180/180689.png" class="img" alt="">
        <div class="textBox">
          <p class="text head">User</p>
          <a href="{{ url('tahfidz') }}" class="text price linkee">See our tahfidz</a>
        </div>
      </div>
    @endif
      
@endsection