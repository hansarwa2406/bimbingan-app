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
                             <h5> <b> Mahasiswa: </b> {{ $jadwaldosen->mahasiswa_id }}</h5> 
                          </p> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5> <b> Dosen:</b> {{ $jadwaldosen->dosen_id }}</h5> 
                             </p>                        
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Judul: </b> {{ $jadwaldosen->judul }}</h5>
                            </p>              
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Deskripsi: </b> {{ $jadwaldosen->deskripsi }}</h5>
                            </p>              
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Awal: </b> {{ $jadwaldosen->awal }}</h5>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Akhir: </b> {{ $jadwaldosen->akhir }}</h5>
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

