<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view ('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
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
            'no_induk',
            'nama',
            'tgl_lahir',
            'alamat'
        ]);

        Karyawan::create([
            'no_induk' => $request->no_induk,
            'nama'=> $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('karyawan.index')
            ->with('success', 'Pelanggan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::where('id', $id)->first();
        return view('karyawan.index', compact('karyawan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        
        // dd($karyawan);
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_induk' => 'required',
            'nama' => 'required', 
            'tgl_lahir' => 'required', 
            'alamat' => 'required'
         ]);
               
         $karyawan = Karyawan::find($id)->update($request->all()); 
         return redirect()->route('karyawan.index')
            ->with('success', 'Pelanggan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        // dd($karyawan);
        // $del = Karyawan::find($karyawan);
        $karyawan->delete();
        return redirect()->route('karyawan.index')
        ->with('success', 'Pelanggan Berhasil Dihapus');
    }
}
