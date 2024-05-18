<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
        $datadriver = Driver::paginate(10);
        return view('admin.driver.view', ['datadriver' => $datadriver]);
    }

    public function add(){
        return view('admin.driver.add');
    }

    public function store(Request $request){
        $datadriver = new Driver();
        $datadriver->no = $request->no;
        $datadriver->nama_driver = $request->nama_driver;
        $datadriver->usia = $request->usia;
        $datadriver->save();
        return redirect()->route('driver.view');
    }

    public function edit($id){
        $editdriver = Driver::find($id);
        return view('admin.driver.edit', compact('editdriver'));
    }

    public function update(Request $request, $id){
        $datadriver = Driver::find($id);
        $datadriver->no = $request->no;
        $datadriver->nama_driver = $request->nama_driver;
        $datadriver->usia = $request->usia;
        $datadriver->update();
        return redirect()->route('driver.view');
    }

    public function delete($id){
        $datadriver = Driver::find($id);
        $datadriver->delete();
        return redirect()->route('driver.view');
    }
}
