<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'id_wali_kelas', 'nama_kelas',
        'tingkat', 'jumlah_laki' , 'jumlah_perempuan'
    ];

    // kelas 1 punya walikelas (guru)
    public function waliKelas() {
        return $this->belongsTo(Guru::class, 'id_wali_kelas');
    }

    // kelas punya banyak siswa
    public function siswa() {
        return $this->hasMany(Siswa::class, 'id_kelas')
                    ->orderBy('no_absen', 'asc');
    }
}
