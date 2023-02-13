<?php

namespace App\Http\Controllers;

use App\Models\Tahfidz;
use Illuminate\Http\Request;

class TahfidzController extends Controller
{

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
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

public function store(Request $request) {
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

}
