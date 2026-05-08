<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $table = 'tb_pasien';

    protected $primaryKey = 'id_pasien';

    protected $fillable = [
        'nama_pasien',
        'tanggal_lahir',
        'alamat',
        'pekerjaan',
        'no_whatsapp',
        'email',
        'password'
    ];
}
