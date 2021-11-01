<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jadwal.index', [
            'jadwal' => Jadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create', [
            'mahasiswa' => Mahasiswa::all(),
            'dosen' => Dosen::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'dosen_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ]);
        Jadwal::create($request->all());

        return redirect()->route('jadwal.index')->with('success','Jadwal Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return view('jadwal.show',compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'dosen_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ]);

        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')->with('success','Jadwal Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success','Jadwal Berhasil di Hapus');
    }
}
