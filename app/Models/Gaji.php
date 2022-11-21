<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $table = 'gaji';

    protected $fillable = [
        'pegawai_id',
        'no_sk',
        'tgl_sk',
        'tmt_gaji',
        'pejabat',
        'masa_thn',
        'masa_bln',
        'gaji_pokok',
        'gaji_berkala',
        'dokumen',
        'pajak',
        'pot_bpjs',
        'status',
        'created_by'

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
