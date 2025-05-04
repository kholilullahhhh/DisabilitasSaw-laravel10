<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_obser_disabilitas;
use Illuminate\Support\Facades\DB;

class obserController extends Controller
{
    //
    public function index()
    {
        //$data = tb_obser_disabilitas::orderBy('kecamatan', 'DESC')->get();
        $data = DB::table('tb_obser_disabilitas')
        ->select('tb_obser_disabilitas.id','tb_wargas.nama', 'tb_disabilitas.kriteria', 'tb_disabilitas.ket','tb_obser_disabilitas.skor')
        ->leftJoin('tb_wargas','tb_obser_disabilitas.id_warga','=','tb_wargas.id')
        ->leftJoin('tb_disabilitas','tb_obser_disabilitas.id_disabilitas','=','tb_disabilitas.id')
        ->orderBy('tb_wargas.nama','asc')
        ->get();
        return view('pages.obser.index', ['menu' => 'obser'], compact('data'));
    }
    public function store(Request $request)
    {
        $req = $request->all();
        tb_obser_disabilitas::create($req);
        return redirect()->route('obser.index')->with('message', 'store');
    }
    /**
     * Display the specified resource.
     */
    public function viewBaru()
    {
        return view('pages.obser.create', ['menu' => 'obser']);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = tb_obser_disabilitas::find($id);
        return view('pages.obser.edit', ['menu' => 'obser'], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $req = $request->all();
        $data = tb_obser_disabilitas::find($req['id']);
        $data->update($req);
        return redirect()->route('obser.index')->with('message', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus(string $id)
    {
        $data = tb_obser_disabilitas::find($id);
        $data->delete();
        return response()->json($data);
    }
}
