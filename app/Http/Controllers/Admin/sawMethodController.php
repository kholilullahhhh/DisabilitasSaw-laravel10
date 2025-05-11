<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_disabilitas;
use App\Models\tb_guru_honorer;
use App\Models\tb_obser_disabilitas;

class sawMethodController extends Controller
{
    //
    public function index()
    {
        $data = tb_disabilitas::orderBy('poin', 'DESC')->get();
        $warga = tb_guru_honorer::orderBy('nama', 'ASC')->get();
        //$obser = tb_obser_disabilitas::where()->orderBy('nama', 'ASC')->get();
        $wr[0] = $data;
        $wr[1] = $warga;
        // foreach ($wr[0] as $i => $item)
        // {

        // }
        return view('pages.uji.index', ['menu' => 'uji'], compact('wr'));
    }
}
