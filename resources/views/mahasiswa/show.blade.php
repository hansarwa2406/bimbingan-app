@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $mahasiswa->nim }}</h6>
                <p class="card-text">Alamat: {{ $mahasiswa->alamat }}</p>
                <p class="card-text">Tanggal Lahir: {{ $mahasiswa->tanggal_lahir }}</p>
                <p class="card-text">Tahun Masuk: {{ $mahasiswa->tahun_masuk }}</p>
                <a href="/mahasiswa" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
@endsection