<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;

    protected $table = 'tb_laporan';

    protected $primaryKey = 'id_laporan';

    protected $fillable = [
        'id_reservasi',
        'tanggal_laporan',
        'keterangan'
    ];
}
