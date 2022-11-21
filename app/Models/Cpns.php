<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpns extends Model
{
    use HasFactory;

    protected $table = 'cpns';

    protected $fillable = [
        'pegawai_id',
        'no_sk',
        'tgl_sk',
        'unit_kerja',
        'tamat_cpns',
        'dokumen',
        'status',
        'created_by',

        'no_kpe',
        'kpe',
        'no_kk',
        'kk',
        'no_taspen',
        'taspen',

    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
