<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $datapemesanan = Pemesanan::all()->sortByDesc('created_at');
        return view('admin.pemesanan.view', ['datapemesanan' => $datapemesanan]);
    }

    public function add(){
        $datadriver = Driver::all();
        $datakendaraan = Kendaraan::all();
        return view('admin.pemesanan.add', compact('datadriver', 'datakendaraan'));
    }

    public function store(Request $request){
        $datapemesanan = new Pemesanan();
        $datapemesanan->driver_id = $request->driver_id;
        $datapemesanan->validator = $request->validator;
        $datapemesanan->kendaraan_id = $request->kendaraan_id;
        $datapemesanan->mulai = $request->mulai;
        $datapemesanan->selesai = $request->selesai;
        $datapemesanan->save();
        return redirect()->route('pemesanan.view');
    }

    public function edit($id){
        $editpemesanan = Pemesanan::find($id);
        $datadriver = Driver::all();
        $datakendaraan = Kendaraan::all();
        return view('admin.pemesanan.edit', compact('editpemesanan', 'datadriver', 'datakendaraan'));
    }

    public function update(Request $request, $id){
        $datapemesanan = Pemesanan::find($id);
        $datapemesanan->driver_id = $request->driver_id;
        $datapemesanan->validator = $request->validator;
        $datapemesanan->kendaraan_id = $request->kendaraan_id;
        $datapemesanan->mulai = $request->mulai;
        $datapemesanan->selesai = $request->selesai;
        $datapemesanan->update();
        return redirect()->route('pemesanan.view');
    }

    public function delete($id){
        $datapemesanan = Pemesanan::find($id);
        $datapemesanan->delete();
        return redirect()->route('pemesanan.view');
    }
}
