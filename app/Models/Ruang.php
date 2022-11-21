<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruang';

    protected $fillable = [
        'nama',
        'deskripsi',
        'status',
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'ruang_id', 'id');
    }
}
