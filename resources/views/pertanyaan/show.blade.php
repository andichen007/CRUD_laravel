@extends('layout.master', ['title' => 'Lihat Data'])

@section('content')
<div class="container-fluid">
    <a href="/pertanyaan" class="btn btn-danger mb-3">Kembali</a>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="mb-0">Judul : <span class="text-primary">{{ $pertanyaan->judul }}</span></h3>
                    <h3 class="mb-0">Tanggal buat : <span class="text-primary">{{ $pertanyaan->tgl_buat }}</span></h3>
                    <h3 class="mb-0">Tanggal diperbaharui : <span class="text-primary">{{ $pertanyaan->tgl_diperbaharui }}</span></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-0">Soal :</h3>
                    <p>{!! nl2br($pertanyaan->isi) !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Jawaban</th>
                                <th>Tanggal Buat</th>
                                <th>Tanggal Diperbaharui</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jawaban as $j)
                            <tr>
                                <td>{{ Str::limit($j->isi, '50', '...') }}</td>
                                <td>{{ $j->tgl_buat }}</td>
                                <td>{{ $j->tgl_diperbaharui }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@stop