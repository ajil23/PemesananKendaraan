<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Kendaraan;
use App\Models\Pemesanan;

class DirectorController extends Controller
{
    public function index(){
        return view('director.index');
    }

    public function pemesanan(){
        $datapemesanan = Pemesanan::all()->sortByDesc('created_at');
        return view('director.pemesanan.view', ['datapemesanan' => $datapemesanan]);
    }

    public function editpesanan($id){
        $editpemesanan = Pemesanan::find($id);
        $datadriver = Driver::all();
        $datakendaraan = Kendaraan::all();
        return view('director.pemesanan.edit', compact('editpemesanan', 'datadriver', 'datakendaraan'));
    }

    public function updatepesanan(Request $request, $id){
        $datapemesanan = Pemesanan::find($id);
        $datapemesanan->status = $request->status;
        $datapemesanan->update();
        return redirect()->route('directorpemesanan.view');
    }
}
