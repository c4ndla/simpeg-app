<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluarga';

    protected $fillable = [

        'pegawai_id',
        'no_bpjs',
        'hubungan',
        'nama',
        'nik',
        'jenis_kelamin',
        'agama',
        'tempat',
        'tgl_lahir',
        'pendidikan',
        'pekerjaan',
        'alamat',
        'dokumen',
        'kk',
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
