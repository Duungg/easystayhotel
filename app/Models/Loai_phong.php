<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Loai_phong extends Model
{

    use HasFactory,
        SoftDeletes;

    const CON_PHONG = 1;
    const HET_PHONG = 0;
    protected $fillable = [
        'ten',
        'anh',
        'gia',
        'gia_km',
        'gioi_han_nguoi',
        'so_lg',
        'mo_ta',
        'trang_thai',
    ];
}
