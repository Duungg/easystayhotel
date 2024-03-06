<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Anh_phong extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'anh',
        'loai_phong_id',
    ];

    protected function loai_phong(){
        return $this->belongsTo(Loai_phong::class);
    }

}
