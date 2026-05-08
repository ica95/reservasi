<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    use HasFactory;

    protected $table = 'tb_reservasi';

    protected $primaryKey = 'id_reservasi';

    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal_reservasi',
        'jam_reservasi',
        'keluhan',
        'status_reservasi'
    ];
}
