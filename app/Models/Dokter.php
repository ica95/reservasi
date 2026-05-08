<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

     protected $table = 'tb_dokter';

    protected $primaryKey = 'id_dokter';

    protected $fillable = [
        'nama_dokter',
        'jadwal_praktek',
        'foto'
    ];
}
