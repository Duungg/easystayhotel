<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DanhGia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected function user(){
        return $this->belongsTo(User::class);
    }
    protected function phong(){
        return $this->belongsTo(Phong::class);
    }
}
