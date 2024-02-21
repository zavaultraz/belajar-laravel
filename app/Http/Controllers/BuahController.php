<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    public function index()
    {
        $buahs = Buah::all();
        return view('buah.index', compact('buahs'));
    }

    public function create()
    {
        return view('buah.create');
    }
    public function store(Request $request)
    {
        // Lakukan validasi
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'numeric',
            'warna' => 'string'
        ]);
        
        // Simpan data ke database
        Buah::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'harga' => $request->harga,
            'warna' => $request->warna // Tambahkan warna ke dalam data yang disimpan
        ]);
        
        // Jika sudah, kembali ke halaman buah.index
        return redirect()->route('buah.index');
    }
    

}

