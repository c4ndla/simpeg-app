<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;

    protected $table = 'sub';

    protected $fillable = [
        'coba_id',
        'nama',
        'foto',
        'ktp',
    ];

    public function coba()
    {
        return $this->belongsTo(Coba::class, 'coba_id', 'id');
    }

    // public function sub()
    // {
    //     return $this->belongsToMany(Coba::class);
    // }
}
