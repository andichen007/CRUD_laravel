@extends('layout.master', ['title' => 'Pertanyaan'])

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="card-title">All Data</h3>
            <a href="/pertanyaan/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Buat</th>
                    <th>Tanggal Diperbaharui</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($no = 1)
                @foreach ($pertanyaan as $p)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $p->judul }}</td>
                    <td>{{ Str::limit($p->isi, '35', '...') }}</td>
                    <td>{{ $p->tgl_buat }}</td>
                    <td>{{ $p->tgl_diperbaharui }}</td>
                    <td>
                        <a href="/jawaban/{{ $p->id }}" class="btn btn-info btn-sm">Jawaban</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@stop