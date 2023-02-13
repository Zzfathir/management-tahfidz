@extends('app')
@section('main')


<div class="flex mt-5 ml-3 align-items-center gap-3">
 @foreach ($data as $item)
<div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">Tahfidz</p>
            <p>{{ $item->nama }}</p>
        </div>
        <div class="flip-card-back">
            <div class="flex justify-content-center">
                <form action="{{ url("/tahfidz/$item->id") }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 
                dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg 
                text-sm px-3 fw-bold py-2.5 text-center mb-2">Delete</button>
                </form>
            </div>
            <p class="title">{{ $item->surat }}</p>
            <p>{{ $item->status }}</p>
        </div>
    </div>
</div>
@endforeach
<a href="{{ url('tahfidz/create') }}" class="buttong fs-3">
    +
  </a>
</div>

@endsection