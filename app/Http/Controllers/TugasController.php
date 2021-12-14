<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $tugas = DB::table('tugas')
            ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('tugas.*', 'pegawai.pegawai_nama')
            ->paginate(5);

        // mengirim data pegawai ke view index
        return view('tugas.index', ['tugas' => $tugas], ["active" => "tugas_aktif"]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bus sesuai pencarian data
		$tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data bus ke view index
		return view('tugas.index',['tugas' => $tugas],["active" => "tugas_aktif"]);

	}

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        // memanggil view tambah
        return view('tugas.tambah', ['pegawai' => $pegawai],  ["active" => "tugas_aktif"]);
    }

    // method untuk insert data ke table tugas
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tugas')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    // method untuk edit data tugas
    public function edit($id)
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
        // mengambil data tugas berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.edit', ['tugas' => $tugas, 'pegawai' => $pegawai],  ["active" => "tugas_aktif"]);
    }

    //method untuk detail data tugas
    public function detail($id)
    {
        // mengambil data bus berdasarkan id yang dipilih
        $tugas = DB::table('tugas')
            ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('tugas.*', 'pegawai.pegawai_nama')
            ->where('ID', $id)
            ->get();

        // passing data bus yang didapat ke view edit.blade.php
        return view('tugas.detail', ['tugas' => $tugas], ["active" => "tugas_aktif"]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tugas')->where('ID', $request->id)->update([
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
        DB::table('tugas')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
}
