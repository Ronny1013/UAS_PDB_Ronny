<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jorong extends Model
{
    use HasFactory;

    protected $table = "jorong";

    public function nagaris(){
        return $this->belongsTo('App\Models\Nagari');
    }
    public function kartu_keluargas(){
        return $this->hasMany('App\Models\KartuKeluarga');
    }
}
