<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'id_kelas', 'nis_nisn', 'nama',
        'jenis_kelamin', 'no_absen', 'foto'
    ];

    public function Kelas() {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
