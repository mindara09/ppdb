<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataDiris;

class DataDiri extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan data diri dari tabel data_diri per users_id
        $dataDiri = DataDiris::all()->where('users_id',1);
        // Data diri
        return view('users.data_diri',['dataDiri' => $dataDiri]);
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
        // Proses input Data Diri

        // 1. Validasi pada Input Form
        $validasi = $request->validate([
            'nama_lengkap' => 'required|min:4',
            'nis' => 'required|numeric|min:10',
            'nisn' => 'required|numeric|min:8',
            'tanggal_lahir' => 'required|min:8|max:12',
            'tempat_lahir' => 'required|min:3|max:20',
            'no_kk' => 'required|numeric|min:16',
            'nik' => 'required|numeric|min:16',
            'agama' => 'required|min:4|max:15',
            'alamat' => 'required',
            'kelurahan' => 'required|min:4|max:19',
            'kecamatan' => 'required|min:4|max:19',
            'kodepos' => 'required|min:5|numeric',
            'no_register_akte' => 'required|min:8|max:18',
            'jenis_tinggal' => 'required|max:18',
            'transportasi' => 'required|min:4|max:20',
            'no_telprumah' => 'required|numeric|min:6',
            'no_hp' => 'required|min:10|numeric',
            'email' => 'required|min:8'
        ]);

        // 2. Jika validasi sudah, maka akan masuk input ke database
        if ($validasi) {
            
            // Masukan ke tabel data_diri
            DataDiris::create([
                'users_id' => '1',
                'nama_lengkap' => $request->nama_lengkap,
                'nis' => $request->nis,
                'nisn' => $request->nisn,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kodepos' => $request->kodepos,
                'no_register_akte' => $request->no_register_akte,
                'jenis_tinggal' => $request->jenis_tinggal,
                'transportasi' => $request->transportasi,
                'no_telprumah' => $request->no_telprumah,
                'no_hp' => $request->no_hp,
                'email' => $request->email  
            ]);

            // Setelah berhasil input, maka akan pindah ke halaman awal
            return redirect ('/users/data-diri');
        }
        else {
            // Jika Gagal, maka akan pindah ke halaman awal
            return redirect ('/users/data-diri')
            ->withErrors($validasi)
            ->withInput();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
