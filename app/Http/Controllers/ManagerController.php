<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        return view('manager.index');
    }

    public function pemesanan(){
        $datapemesanan = Pemesanan::all()->sortByDesc('created_at');
        return view('manager.pemesanan.view', ['datapemesanan' => $datapemesanan]);
    }

    public function editpesanan($id){
        $editpemesanan = Pemesanan::find($id);
        $datadriver = Driver::all();
        $datakendaraan = Kendaraan::all();
        return view('manager.pemesanan.edit', compact('editpemesanan', 'datadriver', 'datakendaraan'));
    }

    public function updatepesanan(Request $request, $id){
        $datapemesanan = Pemesanan::find($id);
        $datapemesanan->status = $request->status;
        $datapemesanan->update();
        return redirect()->route('managerpemesanan.view');
    }
}
