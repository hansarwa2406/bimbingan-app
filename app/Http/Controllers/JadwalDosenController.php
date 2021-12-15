<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class JadwalDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::latest()->paginate(5);
        return view ('jadwaldosen.index',compact('jadwal'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'status' => 'required'
        ]);
        Jadwal::create($request->all());

        return redirect()->route('jadwaldosen.index')->with('success','Jadwal Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return view('jadwaldosen.show',compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        // return view('jadwaldosen.edit', compact('jadwal'));
        return view('jadwaldosen.edit', [
            'jadwal' => $jadwal
        ]);
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
            'status' => 'required'
        ]);

        $jadwal->update($request->all());
        

        return redirect()->route('jadwaldosen.index')->with('success','Jadwal Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
