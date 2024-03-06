<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietDonDat extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected function phong(){
        return $this->belongsTo(Phong::class);
    }
    protected function don_dat_phong(){
        return $this->belongsTo(DonDatPhong::class);
    }
}
