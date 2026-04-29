<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra';

    public $timestamps = false;

    protected $fillable = [
    'nama_lengkap',
    'no_wa',
    'kota',
    'keahlian',
    'foto_ktp',
    'foto_selfie',
    'tanggal_daftar',
    'layanan'
];
}