<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    use HasFactory;

    protected $table = 'pangkat';

    protected $fillable = [

        'pegawai_id',
        'golongan',
        'angka_kredit',
        'tmt_pangkat',
        'sk_jabatan',
        'no_sk',
        'tgl_sk',
        'status_pangkat',
        'dokumen',

        'bln_masuk',
        'jabatan',
        'status_pangkat',
        'masa_kerja',
        'sip',
        'berlaku_sip',
        'keluar_sip',
        'pangkat',
        'tmt_pangkat',
        'fungsional',
        'tmt_fungsional',

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
