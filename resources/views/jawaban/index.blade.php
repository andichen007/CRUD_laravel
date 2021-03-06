@extends('layout.master', ['title' => 'Judul : ' . $pertanyaan->judul])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    @if (session('alert-success'))
                    <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('alert-success') }}</div>
                    @endif
                    <form action="/jawaban/{{ $pertanyaan->id }}" method="post" class="needs-validation">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control @error('isi') is-invalid @enderror" name="isi" id="isi" value="{{ old('isi') }}" placeholder="Masukkan Jawaban">
                            <button class="btn btn-success ml-2">Submit</button>
                            <a href="/pertanyaan" class="btn btn-danger ml-2">Kembali</a>
                        </div>
                    </form>
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
                                <th>#</th>
                                <th>Jawaban</th>
                                <th>Tanggal Buat</th>
                                <th>Tanggal Diperbaharui</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($no = 1)
                            @forelse ($jawaban as $j)
                            <tr>
                                <td>{{ $no++ }}</td>
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