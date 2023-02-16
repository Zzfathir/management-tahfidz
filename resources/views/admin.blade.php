@extends('app')
@section('main')

<h1 class="text-white ml-2 mt-4"><b>Hai {{ Auth::user()->name }}</b>, enjoy managing our Tahfidz^^</h1>

<div class="flex justify-content-center mt-20">
<table class="styled-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Surat</th>
            <th>Ayat</th>
            <th class="text-center" colspan="2">Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr class="active-row">
            <td>{{ $item->name }}</td>
            <td>{{ $item->surat }}</td>
            <td>{{ $item->status }}</td>
            <form action="{{ url("/tahfidz/$item->id") }}" method="POST">
                @csrf
                @method('DELETE')
            <td><a href="{{ url("/tahfidz/$item->id/edit") }}" type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-3 py-2.5 text-center mb-2 fw-bold">Edit</a></td>
            <td><button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 
                dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg 
                text-sm px-3 fw-bold py-2.5 text-center mb-2">Delete</button></td>
            </form>
        </tr>
        @endforeach
        <br>

    </tbody>
</table>
<a href="{{ url('tahfidz/create') }}" class="mt-4 ml-4 buttong fs-3">
    +
  </a>
  
</div>
<div class="flex justify-content-center mr-20">
    <div>{{ $data->links('pagination::bootstrap-4') }}</div>
</div>

@endsection