<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khach_san extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten',
        'logo',
        'so_dien_thoai',
        'email',
        'dia_chi',
    ];
}
