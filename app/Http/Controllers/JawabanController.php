<?php

namespace App\Http\Controllers;

use App\{Jawaban, Pertanyaan};
use Illuminate\Http\Request;
use App\Http\Requests\JawabanRequest;

class JawabanController extends Controller
{
    public function index($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $jawaban = Jawaban::where('coment_id', $id)->get();

        return view('jawaban.index', compact('pertanyaan', 'jawaban'));
    }

    public function store(JawabanRequest $request, $id)
    {
        $jawaban = Jawaban::where('coment_id', $id)->first();

        $attr = $request->all();
        $attr['isi'] = nl2br($attr['isi']);
        $attr['tgl_buat'] = date('Y-m-d');
        $attr['tgl_diperbaharui'] = date('Y-m-d');
        $attr['coment_id'] = $id;

        Jawaban::create($attr);

        return back()->with('alert-success', 'Berhasil menyimpan jawaban.');
    }
}
