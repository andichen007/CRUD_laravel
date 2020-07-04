@extends('layout.master', ['title' => 'Edit Pertanyaan'])

@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            @if (session('alert-success'))
            <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('alert-success') }}</div>
            @endif
            <form action="/pertanyaan/{{ $pertanyaan->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul') ?? $pertanyaan->judul }}">
                    @error('judul') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea rows="5" class="form-control" name="isi" id="isi">{!! $pertanyaan->isi !!}</textarea>
                    @error('isi') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/pertanyaan" class="btn btn-danger float-right">Batal</a>
                    <button class="btn btn-success float-right">Ubah <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop