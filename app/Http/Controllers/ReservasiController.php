<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{

    public function index()
    {
        $reservasi = Reservasi::all();
        return view('reservasi.index', compact('reservasi'));
    }

}
