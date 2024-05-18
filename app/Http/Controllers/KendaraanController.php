<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(){
        $datakendraan = Kendaraan::paginate(10);
        return view('admin.kendaraan.view', ['datakendaraan' => $datakendraan]);
    }

    public function add(){
        return view('admin.kendaraan.add');
    }

    public function store(Request $request){
        $datakendaraan = new Kendaraan();
        $datakendaraan->nama_kendaraan = $request->nama_kendaraan;
        $datakendaraan->jenis = $request->jenis;
        $datakendaraan->bbm = $request->bbm;
        $datakendaraan->service = $request->service;
        $datakendaraan->save();
        return redirect()->route('kendaraan.view');
    }

    public function edit($id){
        $editkendaraan = Kendaraan::find($id);
        return view('admin.kendaraan.edit', compact('editkendaraan'));
    }

    public function update(Request $request, $id){
        $datakendaraan = Kendaraan::find($id);
        $datakendaraan->nama_kendaraan = $request->nama_kendaraan;
        $datakendaraan->jenis = $request->jenis;
        $datakendaraan->bbm = $request->bbm;
        $datakendaraan->service = $request->service;
        $datakendaraan->update();
        return redirect()->route('kendaraan.view');
    }

    public function delete($id){
        $datakendaraan = Kendaraan::find($id);
        $datakendaraan->delete();
        return redirect()->route('kendaraan.view');
    }
}
