<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	// $karyawan = DB::table('karyawan')->get();

        $karyawan = DB::table('karyawan1')->paginate(2);
    	// mengirim data karyawan ke view index
    	return view('karyawan.index',['karyawan' => $karyawan],["active" => "karyawan_aktif"]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan1')
		->where('Nama','like',"%".$cari."%")
		->orWhere('Pangkat','like',"%".$cari."%")
		->paginate(2);

    		// mengirim data karyawan ke view index
		return view('karyawan.index',['karyawan' => $karyawan],["active" => "karyawan_aktif"]);

	}

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan.tambah', ["active" => "karyawan_aktif"]);

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');

    }

    // method untuk edit data karyawan
    public function edit($id)
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan1')->where('NIP',$id)->get();
        // passing data karyawan yang didapat ke view edit.blade.php
        return view('karyawan.edit',['karyawan' => $karyawan],["active" => "karyawan_aktif"]);

    }

    public function detail($id)
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan1')->where('NIP',$id)->get();
        // passing data karyawan yang didapat ke view edit.blade.php
        return view('karyawan.detail',['karyawan' => $karyawan],["active" => "karyawan_aktif"]);

    }

    // update data karyawan
    public function update(Request $request)
    {
        // update data karyawan
        DB::table('karyawan1')->where('NIP',$request->id)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP',$id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }
}
