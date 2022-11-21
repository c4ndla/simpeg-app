<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';

    protected $fillable = [
        'pegawai_id',
        'jenis_jabatan',
        'unit_kerja',
        'jabatan',
        'sk_jabatan',
        'no_sk',
        'tgl_sk',
        'pak',
        'tmt',
        'tgl_pelantikan',
        'no_pelantikan',
        'sumpah',
        'penyumpah',
        'no_ba',
        'tgl_ba',
        'dokumen',
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
