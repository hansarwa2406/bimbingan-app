@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $dosen->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $dosen->nidn }}</h6>
                <p class="card-text">Alamat: {{ $dosen->alamat }}</p>
                <p class="card-text">Kontak: {{ $dosen->kontak }}</p>
                <a href="/dosen" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
@endsection