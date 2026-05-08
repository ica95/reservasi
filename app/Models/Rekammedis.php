<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekammedis extends Model
{
    use HasFactory;


    protected $table = 'tb_rekammedis';

    protected $primaryKey = 'id_rekammedis';

    protected $fillable = [
        'id_pasien',
        'diagnosa',
        'tindakan',
        'tanggal_pemeriksaan'
    ];
}
