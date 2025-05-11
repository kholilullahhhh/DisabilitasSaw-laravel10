<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_guru_honorer;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index()
    {
        $data = tb_guru_honorer::get();
        return view('pages.guru.index', ['menu' => 'guru'], compact('data'));
    }
    public function store(Request $request)
    {
        $req = $request->all();
        tb_guru_honorer::create($req);
        return redirect()->route('guru.index')->with('message', 'store');
    }

    /**
     * Display the specified resource.
     */
    public function viewBaru()
    {
        return view('pages.guru.create', ['menu' => 'guru']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = tb_guru_honorer::find($id);
        return view('pages.guru.edit', ['menu' => 'guru'], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $req = $request->all();
        $data = tb_guru_honorer::find($req['id']);
        $data->update($req);
        return redirect()->route('guru.index')->with('message', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus(string $id)
    {
        $data = tb_guru_honorer::find($id);
        $data->delete();
        return response()->json($data);
    }
    
}
