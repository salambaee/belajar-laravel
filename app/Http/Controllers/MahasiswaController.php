<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $nama = "Salam Rizqi Mulia";
        return view('mahasiswa', compact('nama'));
    }
}
