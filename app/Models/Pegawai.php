<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';

    protected $fillable = [
        'nip',
        'nama',
        'gelar_depan',
        'gelar_belakang',
        'kelamin',
        'agama',
        'tempat',
        'tgl_lahir',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'rt',
        'rw',
        'kode_pos',
        'no_telp',
        'no_hp',
        'status_nikah',
        'status_pegawai',
        'jabatan_pegawai',
        'status_keahlian',
        'tingkat_keahlian',
        'jabatan_struktural',
        'no_npwp',
        'no_pegawai',
        'no_bpjs',
        'no_ktp',
        'darah',
        'foto',
        'ktp',
        'npwp',
        'status',
        'created_by'
    ];


    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id', 'id');
    }

    public function keluarga()
    {
        return $this->hasMany(Keluarga::class, 'pegawai_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
