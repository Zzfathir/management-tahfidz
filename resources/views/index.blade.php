@extends('app')
@section('main')

<h1 class="text-white ml-2 mt-4"><b>Hai {{ Auth::user()->name }}</b>, enjoy managing our Tahfidz^^</h1>

<div class="flex flex-wrap mt-5 ml-3 align-items-center gap-3">
 @foreach ($data as $item)
<div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">{{ $item->name }}</p>
            <p>Tahfidz</p>
        </div>
        <div class="flip-card-back">
            <p class="title">{{ $item->surat }}</p>
            <p>{{ $item->status }}</p>
        </div>
    </div>
</div>
@endforeach

@endsection