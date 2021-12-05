<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$tugas = DB::table('tugas')->get();

    	// mengirim data pegawai ke view index
    	return view('tugas.index',['tugas' => $tugas], ["active" => "tugas_aktif"] );

    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
        // memanggil view tambah
        return view('tugas.tambah', ['pegawai' => $pegawai],  ["active" => "tugas_aktif"] );

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tugas')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
        // mengambil data pegawai berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.edit',['tugas' => $tugas, 'pegawai' => $pegawai],  ["active" => "tugas_aktif"]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tugas')->where('ID',$request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tugas')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
}
