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
        $jawaban = Jawaban::where('coment_id', $id)->first();

        return view('jawaban.index', compact('pertanyaan','jawaban'));
    }

    public function store(JawabanRequest $request, $id)
    {
        $jawaban = Jawaban::where('coment_id', $id)->first();

        $attr = $request->all();
        $attr['tgl_buat'] = date('Y-m-d');
        $attr['tgl_diperbaharui'] = date('Y-m-d');
        $attr['coment_id'] = $id;

        if (is_null($jawaban)) {
            Jawaban::create($attr);
        } else {
            $jawaban->isi = $attr['isi'];
            $jawaban->tgl_diperbaharui = date('Y-m-d');
            $jawaban->update();
        }

        return back()->with('alert-success', 'Berhasil menyimpan jawaban.');
    }
}
