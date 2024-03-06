<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;

    const CON_PHONG = 1;
    const HET_PHONG = 0;

    protected $fillable = [
        'ten_phong',
        'loai_phong_id',
        'gioi_han_nguoi',
        'mo_ta',
        'trang_thai',
    ];

    public function loai_phong(){
        return $this->belongsTo(Loai_phong::class);
    }
}
