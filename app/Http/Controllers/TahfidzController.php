<?php

namespace App\Http\Controllers;

use App\Http\Requests\TafidzRequest;
use App\Models\Tahfidz;
use Illuminate\Http\Request;

class TahfidzController extends Controller
{

    public function __construct() {
        $this-> middleware('auth');
        $this-> middleware('verified');
    }

    public function index(Request $request) {
        if($request->search) {
            $tahfidz = Tahfidz::where('nama', 'LIKE', "%$request->search")->get();
            return $tahfidz;
    }

    $tahfidz = Tahfidz::all();
    return view('index', [
        'data'=> $tahfidz
    ]);

}

public function show($id) {
    $tahfidz = Tahfidz::find($id);
        return $tahfidz;
}

public function create() {
    return view('create');
}

public function store(TafidzRequest $request) {
    Tahfidz::create([
        'nama'=> $request->nama,
        'surat'=>$request->surat,
        'status'=>$request->status
    ]);
    return redirect('/tahfidz');
}

public function delete($id) {
    Tahfidz::find($id)->delete();
    return redirect('/tahfidz');
}

public function edit($id) {
    $tahfidz = Tahfidz::find($id);
    return view('edit', compact('tahfidz'));
}

public function update(TafidzRequest $request, $id) {
    Tahfidz::find($id)->update([
        'nama'=> $request->nama,
        'surat'=> $request->surat,
        'status'=> $request->status
    ]);
    return redirect('/tahfidz');
}

}
