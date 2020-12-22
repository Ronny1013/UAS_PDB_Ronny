<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = "penduduk";

    public function kewarganegaraans(){
        return $this->belongsTo('App\Models\Kewarganegaraan');
    }
    public function pekerjaans(){
        return $this->belongsTo('App\Models\Pekerjaan');
    }
    public function level_pendidikans(){
        return $this->belongsTo('App\Models\LevelPendidikan');
    }
    public function kartu_keluarga(){
        return $this->belongsTo('App\Models\KartuKeluarga', 'keluarga_id');
    }
}
