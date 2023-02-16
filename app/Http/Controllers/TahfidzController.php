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

    public function admin(Request $request) {
        if($request->search) {
            $tahfidz = Tahfidz::where('name', 'LIKE', "%$request->search")->get();
            return $tahfidz;
    }

    $tahfidz = Tahfidz::paginate(5);
    return view('admin', [
        'data'=> $tahfidz
    ]);
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function index(Request $request) {
        if($request->search) {
            $tahfidz = Tahfidz::where('name', 'LIKE', "%$request->search")->get();
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
        'name'=> $request->name,
        'surat'=>$request->surat,
        'status'=>$request->status
    ]);
    return redirect('/admin');
}

public function delete($id) {
    Tahfidz::find($id)->delete();
    return redirect('/admin');
}

public function edit($id) {
    $tahfidz = Tahfidz::find($id);
    return view('edit', compact('tahfidz'));
}

public function update(TafidzRequest $request, $id) {
    Tahfidz::find($id)->update([
        'name'=> $request->name,
        'surat'=> $request->surat,
        'status'=> $request->status
    ]);
    return redirect('/admin');
}

}
