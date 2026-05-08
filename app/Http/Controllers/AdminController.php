<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('admin.index', compact('admin'));
    }
}
