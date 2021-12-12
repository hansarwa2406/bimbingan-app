@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Jadwal Bimbingan</h1>
  </div>
  <div class="tools p-2 rounded-3">
    <a href="{{ route('jadwal.index') }}" class="btn btn-secondary mb-3"><span data-feather="arrow-left"></span> Kembali</a>
  </div>
  <div class="col-lg-8">
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
          <input type="text" class="form-control @error('mahasiswa_id') is-invalid @enderror" id="mahasiswa_id" name="mahasiswa_id" value="{{ old('mahasiswa_id') }}" placeholder="Mahasiswa ID" required autofocus>
          @error('mahasiswa_id')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="dosen_id" class="form-label">Dosen</label>
          <input type="text" class="form-control @error('dosen_id') is-invalid @enderror" id="dosen_id" name="dosen_id" value="{{ old('dosen_id') }}" placeholder="Dosen ID" required autofocus>
          @error('dosen_id')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Judul" required autofocus>
        @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control @error('deskripsi') is-invalid @enderror" style="height:150px" name="deskripsi" placeholder="Deskripsi Bimbingan" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required autofocus></textarea>
        @error('deskripsi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
        <div class="mb-3">
          <label for="awal" class="form-label">Awal</label>
          <input type="datetime-local" class="form-control @error('awal') is-invalid @enderror" id="awal" name="awal" value="{{ old('awal') }}" placeholder="Awal" required autofocus>
          @error('awal')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="akhir" class="form-label">Akhir</label>
          <input type="datetime-local" class="form-control @error('akhir') is-invalid @enderror" id="akhir" name="akhir" value="{{ old('akhir') }}" placeholder="Akhir" required autofocus>
          @error('akhir')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
     
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
 

@endsection