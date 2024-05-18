<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Driver;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pemesanan = Pemesanan::count();
        $driver = Driver::count();
        $kendaraan = Kendaraan::count();
        if($user = Auth::user()){
            if($user->level == 'admin'){
                return view('admin.index', compact('pemesanan', 'driver', 'kendaraan'));
            }elseif ($user->level == 'manager'){
                return view('manager.index', compact('pemesanan', 'driver', 'kendaraan'));
            }elseif ($user->level == 'director'){
                return view('director.index', compact('pemesanan', 'driver', 'kendaraan'));
            }
        }return view('auth/login');
    }
}
