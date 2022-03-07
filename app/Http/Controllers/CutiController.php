<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Karyawan;
use DateTime;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuti = Cuti::all();
        return view('cuti.index', compact('cuti'));
    }

    public function index2()
    {
        // $cuti = Cuti::;
        $idKaryawan = Cuti::groupby('karyawan_id')
        ->selectRaw('count(karyawan_id) as total, karyawan_id, sum(lama_cuti) as lama_cuti')->get();
        $total = $idKaryawan->filter(function ($value, $key) {
            // dd($value);
            return $value->total > 1;
        });

        // dd($idKaryawan, $total[2]->karyawan, $total[2]->karyawan->cuti, $total);
        return view('cuti.index2', compact('total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        // dd($karyawan);
        return view('cuti.create', compact('karyawan'));
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
            'karyawan_id',
            'tgl_cuti',
            'akhir_cuti',
            'keterangan'
        ]);
        
        $total = Cuti::where('karyawan_id', $request->karyawan_id)->whereYear('tgl_cuti',now()->year)->get();
        // dd($total); 

        $fdate = $request->tgl_cuti;
        $ldate = $request->akhir_cuti;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($ldate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');//now do whatever you like with $days

        // dd($total->sum('lama_cuti')); 

        $akhir = (int)$total->sum('lama_cuti') + (int)$days;
        if ($akhir < 13){  //ada variabel lagi yg nambah $days + $total
            Cuti::create([
                'karyawan_id' => $request->karyawan_id,
                'tgl_cuti' => $request->tgl_cuti,
                'akhir_cuti' => $request->akhir_cuti,
                'lama_cuti' => $days,
                'keterangan' => $request->keterangan
            ]);
            $message = 'Reservasi Berhasil Ditambahkan';
            return redirect()->route('cuti.index')
            ->with('success', $message);
        }
        else{
            $message = 'Kuota Reservasi Sudah Penuh!!';
            return redirect()->route('cuti.index')
            ->with('error', $message);
        } 
        // return redirect()->route('cuti.index')
        //     ->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuti = Cuti::where('id', $id)->first;
        return view('cuti.index', compact('cuti'));
    }

    public function getKaryawan(Request $request)
    {
        $data = Karyawan::find($request->id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuti = Cuti::find($id);
        $karyawan = Karyawan::all();
        // dd($cuti);
        return view('cuti.edit', compact('cuti', 'karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'tgl_cuti' => 'required', 
            'akhir_cuti' => 'required', 
            'lama_cuti' => 'required', 
            'keterangan' => 'required', 
         ]);
               
         $cuti = Cuti::find($id)->update($request->all()); 
         return redirect()->route('cuti.index')
            ->with('success', 'Reservasi Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuti $cuti)
    {
        $cuti->delete();
        return redirect()->route('cuti.index')
        ->with('success', 'Reservasi Berhasil Dihapus');
    }

    public function destroy2(Cuti $cuti)
    {
        // dd($karyawan);
        // $del = Karyawan::find($karyawan);
        $cuti->delete();
        return redirect()->route('karyawan.index')
        ->with('success', 'Pelanggan Berhasil Dihapus');
    }
}
