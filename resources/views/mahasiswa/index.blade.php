@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/mahasiswa/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Data Mahasiswa</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class=" text-center">
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $student)
                    <tr>
                        <td class=" text-center">{{ $loop->iteration }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->alamat }}</td>
                        <td>{{ $student->tanggal_lahir }}</td>
                        <td>{{ $student->tahun_masuk }}</td>
                        <td class=" text-center">
                            <a href="/mahasiswa/{{ $student->nim }}" class="badge bg-info text-decoration-none" title="View"><span data-feather="eye"></a>
                            <a href="/mahasiswa/{{ $student->nim }}/edit" class="badge bg-warning text-decoration-none" title="Edit"><span data-feather="edit"></a>
                            <form action="/mahasiswa/{{ $student->nim }}" method="POST" class=" d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" title="Delete" onclick="return confirm('Are you sure you want to delete this data: {{ $student->nama }}? ')"><span data-feather="trash-2"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection