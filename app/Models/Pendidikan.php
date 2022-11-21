<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan';

    protected $fillable = [

        'pegawai_id',
        'tingkat',
        'no_transkrip',
        'no_ijazah',
        'tingkat',
        'nama_sekolah',
        'tempat',
        'nama_kepala',
        'no_sttb',
        'tgl_sttb',
        'th_lulus',
        'biaya',
        'ijazah',
        'transkrip',
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
