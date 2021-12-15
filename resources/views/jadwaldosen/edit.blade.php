@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jadwal Bimbingan</h1>
  </div>
  <div class="tools p-2 rounded-3">
    <a href="{{ route('jadwaldosen.index') }}" class="btn btn-secondary mb-3"><span data-feather="arrow-left"></span> Kembali</a>
  </div>
 
  <div class="col-lg-8">
    <form action="{{route('jadwaldosen.update', $jadwal)}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
          <input type="text" class="form-control  @error('mahasiswa_id') is-invalid @enderror" id="mahasiswa_id" name="mahasiswa_id" value="{{ old('mahasiswa_id', $jadwal->mahasiswa_id) }}"  readonly>
          @error('mahasiswa_id')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="dosen_id" class="form-label">Dosen</label>
          <input type="text" class="form-control @error('dosen_id') is-invalid @enderror" id="dosen_id" name="dosen_id" value="{{ old('dosen_id', $jadwal->dosen_id) }}" readonly>
          @error('dosen_id')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $jadwal->judul) }}" readonly>
          @error('judul')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control @error('deskripsi') is-invalid @enderror" style="height:150px" name="deskripsi" readonly >{{ old('deskripsi', $jadwal->deskripsi) }}</textarea>

          @error('deskripsi')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="awal" class="form-label">Awal</label>
          <input type="text" class="form-control @error('awal') is-invalid @enderror" id="awal" name="awal" value="{{ old('awal', $jadwal->awal) }}" readonly>
          @error('awal')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="akhir" class="form-label">Akhir</label>
          <input type="text" class="form-control @error('akhir') is-invalid @enderror" id="akhir" name="akhir" value="{{ old('akhir', $jadwal->akhir) }}" readonly>
          @error('akhir')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
    
    <div class="mb-3">
        <label for="status" class="form-label">Persetujuan</label>
        <select class="form-select" name="status">
            <option value="Ditolak" selected>Ditolak</option>
            <option value="Disetuju">Disetujui</option>
        </select>
    </div>


      <button type="submit" class="btn btn-primary">Apply</button>
      
  </form>
  </div>
 

@endsection
