<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\Hash;

class PasienController extends Controller
{
    // =========================
    // TAMPIL DATA PASIEN
    // =========================
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    // =========================
    // CREATE PASIEN
    // =========================
    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'no_whatsapp' => 'required|numeric|digits_between:11,13'
        ], [
            'no_whatsapp.digits_between' => 'Nomor WhatsApp harus 11 sampai 13 digit.',
            'no_whatsapp.numeric' => 'Nomor WhatsApp harus berupa angka.',
            'no_whatsapp.required' => 'Nomor WhatsApp wajib diisi.'
        ]);

        Pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'no_whatsapp' => $request->no_whatsapp
        ]);

        return redirect('/pasien');
    }

    // =========================
    // EDIT PASIEN
    // =========================
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'no_whatsapp' => 'required|numeric|digits_between:11,13'
        ]);

        $pasien = Pasien::find($id);

        $pasien->update([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'no_whatsapp' => $request->no_whatsapp
        ]);

        return redirect('/pasien');
    }

    // =========================
    // DELETE PASIEN
    // =========================
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('/pasien');
    }

    // =========================
    // REGISTER
    // =========================
    public function register()
    {
        return view('pasien.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'email' => 'required|email|unique:tb_pasien,email',
            'password' => 'required|min:6'
        ]);

        Pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login')->with('success', 'Register berhasil');
    }

    // =========================
    // LOGIN
    // =========================
    public function ceklogin(Request $request)
    {
        $pasien = Pasien::where('email', $request->email)->first();

        if ($pasien && Hash::check($request->password, $pasien->password)) {

            session(['pasien_id' => $pasien->id]);

            return redirect('/pasien');
        }

        return redirect('/login')->with('error', 'Login gagal');
    }

    // =========================
    // LOGOUT
    // =========================
    public function logout()
    {
        session()->forget('pasien_id');
        return redirect('/login');
    }
}