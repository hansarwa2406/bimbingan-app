@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Jadwal Bimbingan</h1>
    </div>

    <div class="col-lg-5 mb-5">
        <form method="POST" action="/jadwal" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
                <select class="form-select" name="mahasiswa_id">
                    @foreach ($mahasiswa as $student)
                        @if (old('mahasiswa_id') == $student->id)
                            <option value="{{ $student->id}}" selected>{{ $student->nama }}</option>
                        @else
                            <option value="{{ $student->id}}">{{ $student->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="dosen_id" class="form-label">Dosen</label>
                <select class="form-select" name="dosen_id">
                    @foreach ($dosen as $lecturer)
                        @if (old('dosen_id') == $lecturer->id)
                            <option value="{{ $lecturer->id}}" selected>{{ $lecturer->nama }}</option>
                        @else
                            <option value="{{ $lecturer->id}}">{{ $lecturer->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required autofocus>
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deksripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error('deksripsi') is-invalid @enderror" id="deksripsi" name="deksripsi" value="{{ old('deksripsi') }}" required>
                @error('deksripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="awal" class="form-label">Awal</label>
                <input type="datetime-local" class="form-control @error('awal') is-invalid @enderror" id="awal" name="awal" value="{{ old('awal') }}" required>
                @error('awal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="akhir" class="form-label">Akhir</label>
                <input type="datetime-local" class="form-control @error('akhir') is-invalid @enderror" id="akhir" name="akhir" value="{{ old('akhir') }}" required>
                @error('akhir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection