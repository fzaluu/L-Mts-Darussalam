<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sdm extends Model
{
    protected $fillable = [ 'nama_guru', 'foto', 'mapel', 'jabatan'
    ];

    public function kelas() {
        return $this->hasOne(Kelas::class, 'id_wali_kelas');
    }
}
