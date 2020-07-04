<?php

namespace App\Http\Controllers;

use App\Http\Requests\PertanyaanRequest;
use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::all();

        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(PertanyaanRequest $request)
    {
        $attr = $request->all();
        $attr['tgl_buat'] = date('Y-m-d');
        $attr['tgl_diperbaharui'] = date('Y-m-d');
        
        Pertanyaan::create($attr);

        return back()->with('alert-success', 'Data baru berhasil ditambahkan.');
    }
}
