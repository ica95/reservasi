<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekammedis;

class RekammedisController extends Controller
{
    public function index()
    {
        $rekammedis = Rekammedis::all();
        return view('rekammedis.index', compact('rekammedis'));
    }
}
