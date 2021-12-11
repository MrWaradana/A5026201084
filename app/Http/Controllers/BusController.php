<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    public function index()
    {
    	// mengambil data dari table bus
    	// $bus = DB::table('bus')->get();

        $bus = DB::table('bus')->paginate(5);
    	// mengirim data bus ke view index
    	return view('bus.index',['bus' => $bus],["active" => "bus_aktif"]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bus sesuai pencarian data
		$bus = DB::table('bus')
		->where('merkbus','like',"%".$cari."%")
		->paginate();

    		// mengirim data bus ke view index
		return view('bus.index',['bus' => $bus],["active" => "bus_aktif"]);

	}

    // method untuk menampilkan view form tambah bus
    public function tambah()
    {

        // memanggil view tambah
        return view('bus.tambah', ["active" => "bus_aktif"]);

    }

    // method untuk insert data ke table bus
    public function store(Request $request)
    {
        // insert data ke table bus
        DB::table('bus')->insert([
            'merkbus' => $request->merkbus,
            'jumlahbus' => $request->jumlahbus,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bus
        return redirect('/bus');

    }

    // method untuk edit data bus
    public function edit($id)
    {
        // mengambil data bus berdasarkan id yang dipilih
        $bus = DB::table('bus')->where('kodebus',$id)->get();
        // passing data bus yang didapat ke view edit.blade.php
        return view('bus.edit',['bus' => $bus],["active" => "bus_aktif"]);

    }

    //method untuk detail data bus
    public function detail($id)
    {
        // mengambil data bus berdasarkan id yang dipilih
        $bus = DB::table('bus')->where('kodebus',$id)->get();
        // passing data bus yang didapat ke view edit.blade.php
        return view('bus.detail',['bus' => $bus],["active" => "bus_aktif"]);

    }

    // update data bus
    public function update(Request $request)
    {
        // update data bus
        DB::table('bus')->where('kodebus',$request->id)->update([
            'merkbus' => $request->merkbus,
            'jumlahbus' => $request->jumlahbus,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }

    // method untuk hapus data bus
    public function hapus($id)
    {
        // menghapus data bus berdasarkan id yang dipilih
        DB::table('bus')->where('kodebus',$id)->delete();

        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }
}
