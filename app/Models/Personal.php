<?php

namespace App\Models;

use App\Models\Agama;
use App\Models\Keluarga;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';

    protected $fillable = [
        'agama_id',
        'NIP',
        'nama_depan',
        'nama_belakang',
        'gelar_depan',
        'gelar_belakang',
        'jenis_kelamin',
        // 'agama',
        'tempat',
        'tgl_lahir',
        'status_nikah',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'rt',
        'rw',
        'kode_pos',
        'no_telp',
        'no_hp',
        'status_pegawai',
        'status_jabatan',
        'status_keahlian',
        'tingkat_keahlian',
        'jabatan_struktural',
        'foto',
        'ktp',
        'status',
    ];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'agama_id', 'id');
    }

    public function keluarga()
    {
        return $this->hasMany(Keluarga::class, 'personal_id', 'id');
    }
}
