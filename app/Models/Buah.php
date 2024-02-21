<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    use HasFactory;

    protected $table = 'buah';
    protected $fillable = ['nama', 'slug', 'harga', 'warna'];
}

