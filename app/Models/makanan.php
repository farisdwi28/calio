<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'description',
        'harga',
        'stok',
        'status',
        'kategori',
    ];
}
