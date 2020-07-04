@extends('layout.master', ['title' => 'Jawaban'])

@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            @if (session('alert-success'))
            <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('alert-success') }}</div>
            @endif
            <form action="/jawaban/{{ $pertanyaan->id }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Judul :</label>
                    <span class="text-muted">{{ $pertanyaan->judul }}</span>
                </div>
                <div class="form-group">
                    <label for="isi">Jawaban</label>
                    <textarea rows="5" class="form-control" name="isi" id="isi">{{ is_null($jawaban) ? old('isi') : $jawaban->isi }}</textarea>
                    @error('isi') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/pertanyaan" class="btn btn-danger float-right">Batal</a>
                    <button class="btn btn-success float-right">Submit <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop