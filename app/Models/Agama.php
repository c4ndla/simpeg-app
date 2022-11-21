<?php

namespace App\Models;

use App\Models\Personal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agama extends Model
{
    use HasFactory;

    protected $table = 'agama';

    protected $fillable = [
        'nama',
        'deskripsi',
        'status',
    ];

    public function personal()
    {
        return $this->hasMany(Personal::class, 'agama_id', 'id');
    }
}
