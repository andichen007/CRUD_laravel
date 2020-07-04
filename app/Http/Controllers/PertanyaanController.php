<?php

namespace App\Http\Controllers;

use App\Http\Requests\PertanyaanRequest;
use App\Jawaban;
use App\Pertanyaan;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::all();

        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $jawaban = Jawaban::where('coment_id', $id)->get();

        return view('pertanyaan.show', compact('pertanyaan','jawaban'));
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
        $attr['quest_id'] = 0;

        Pertanyaan::create($attr);

        return back()->with('alert-success', 'Data baru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);

        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(PertanyaanRequest $request, $id)
    {
        $attr = $request->all();
        $attr['tgl_diperbaharui'] = date('Y-m-d');

        Pertanyaan::find($id)->update($attr);

        return back()->with('alert-success', 'Data baru berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        foreach (Jawaban::where('coment_id', $id)->get() as $j) {
            $j->delete();
        }
        $pertanyaan->delete();

        return redirect('/pertanyaan')->with('alert-success', 'Data berhasil dihapus.');
    }
}
