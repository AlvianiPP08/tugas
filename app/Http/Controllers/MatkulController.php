<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\mk_jarkom;
use App\Models\mk_kwc;
use App\Models\mk_rpl;
use App\Models\pilihan_mahasiswa;

class MatkulController extends Controller
{
    public function index()
    {
        $terserah = mk_jarkom::all();
        $mk_kwc = mk_kwc::all();
        $mk_rpl = mk_rpl::all();

        //mengirim data keview
        // return view('nilai',compact('mk_jarkom', 'mk_kwc')); 

        return view('nilaimhs',[
            'terserah'=> $terserah,
            'mk_kwc'=> $mk_kwc,
            'mk_rpl'=> $mk_rpl
            //mengirim data menggunakaan array
        ]);
    }

    public function tambah_kwc(){
        $nim = Session::get('nim');
        $kwc = DB::table('mk_kwc')->where('nim', $nim)->exists();
      
        return view('kwc', compact('kwc'));
    }

    public function nilai(){
        $nim = Session::get('nim');
        $jarkom = DB::table('mk_jarkom')->where('nim', $nim)->exists();
        // dd($hasil);
      
        return view('input', compact('jarkom'));
    }

    public function tambah_rpl(){
        $nim = Session::get('nim');
        $rpl = DB::table('mk_rpl')->where('nim', $nim)->exists();
      
        return view('rpl', compact('rpl'));
    }

    public function tambah_profesi(){
        $nim = Session::get('nim');
        $profesi = DB::table('pilihan_mahasiswa')->where('nim', $nim)->exists();
      
        return view('profesi', compact('profesi'));
    }

    public function insert_kwc(Request $request){
        mk_kwc::create($request->all());
        
        // return redirect('halaman');
    }

    public function insert_jarkom(Request $request){
        // dd($request->all());
        mk_jarkom::create($request->all());

        // return redirect('halaman');
    }

    public function insert_rpl(Request $request){
        mk_rpl::create($request->all());

        // return redirect('halaman');
    }

    public function insert_profesi(Request $request){
        // dd($request->all());
        pilihan_mahasiswa::create($request->all());

        return redirect('halaman');
    }
}
