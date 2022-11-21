<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $table = 'seminar';

    protected $fillable = [

        'pegawai_id',
        'nama',
        'tempat',
        'kedudukan',
        'tgl_seminar',
        'penyelenggara',
        'dokumen',
        'sertifikat',
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
