<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = "pemesanan";
    protected $primaryKey = 'id';
    protected $fillable = ['driver_id', 'kendaraan_id', 'validator', 'mulai', 'selesai', 'status'];

    public function driver(){
        return $this->belongsTo(Driver::class,'driver_id','id');
    }

    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class,'kendaraan_id','id');
    }
}
