<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    use HasFactory;

    protected $table = 'coba';

    protected $fillable = [
        'nama',
        'foto',
    ];

    public function sub()
    {
        return $this->hasMany(Sub::class, 'coba_id', 'id');
    }
}
