<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;
use App\Models\Provinsi;

class Kota extends Model
{
    public function Provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi','id_provinsi');
    }
    public function Kecamatan()
    {
        return $this->hasMany('App\Models\Kecamatan','id_kota');
    }
    use HasFactory;
}
