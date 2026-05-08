<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;


class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        return view('laporan.index', compact('laporan'));
    }
}
