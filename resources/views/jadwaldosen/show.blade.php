@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">Show Jadwal Bimbingan</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <p>
                             <h5> <b> Mahasiswa: </b> {{ $datajadwal->mahasiswa_id }}</h5> 
                          </p> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5> <b> Dosen:</b> {{ $datajadwal->dosen_id }}</h5> 
                             </p>                        
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Judul: </b> {{ $datajadwal->judul }}</h5>
                            </p>              
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Deskripsi: </b> {{ $datajadwal->deskripsi }}</h5>
                            </p>              
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Awal: </b> {{ $datajadwal->awal }}</h5>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Akhir: </b> {{ $datajadwal->akhir }}</h5>
                            </p>
                        </div>
                    </div>
                    <div class="tools p-2 rounded-3">
                        <a href="{{ route('jadwaldosen.index') }}" class="btn btn-secondary mb-3"><span data-feather="arrow-left"></span> Kembali</a>
                      </div>
                </div>
        </div>
    </div>
</div>
@endsection

