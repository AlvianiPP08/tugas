<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\nilai_matkul;
// use App\Models\mk_kwc;
// use App\Models\mk_rpl;
use App\Models\pilihan_mahasiswa;

class MatkulController extends Controller
{
    // public function index()
    // {
    //     $terserah = mk_jarkom::all();
    //     $mk_kwc = mk_kwc::all();
    //     $mk_rpl = mk_rpl::all();

    //     //mengirim data keview
    //     // return view('nilai',compact('mk_jarkom', 'mk_kwc')); 

    //     return view('nilaimhs',[
    //         'terserah'=> $terserah,
    //         'mk_kwc'=> $mk_kwc,
    //         'mk_rpl'=> $mk_rpl
    //         //mengirim data menggunakaan array
    //     ]);
    // }

    // public function tambah_kwc(){
    //     $nim = Session::get('nim');
    //     $kwc = DB::table('mk_kwc')->where('nim', $nim)->exists();
      
    //     return view('kwc', compact('kwc'));
    // }

    public function nilai(){
        $nim = Session::get('nim');
        $jarkom = DB::table('nilai_matkul')->where('nim', $nim)->exists();
        // dd($hasil);
      
        return view('input', compact('jarkom'));
    }

    // public function tambah_rpl(){
    //     $nim = Session::get('nim');
    //     $rpl = DB::table('mk_rpl')->where('nim', $nim)->exists();
      
    //     return view('rpl', compact('rpl'));
    // }

    public function tambah_profesi(){
        $nim = Session::get('nim');
        $profesi = DB::table('pilihan_mahasiswa')->where('nim', $nim)->exists();
      
        return view('profesi', compact('profesi'));
    }

    // public function insert_kwc(Request $request){
    //     dd($request->all());
    //     nilai_matkul::create($request->all());
    //     // return redirect('halaman');
    // }

    public function insert_jarkom(Request $request){
        // dd($request->all());
        $data = $request->all();
        $kode = 'MK003';

        $data = [
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => 'IFS12013', "nilai" => $data["IFS12013"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => 'IFS13013', "nilai" => $data["IFS13013"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => 'INF11023', "nilai" => $data["INF11023"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => 'INF12033', "nilai" => $data["INF12033"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => 'INF12034', "nilai" => $data["INF12034"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => 'INF13033', "nilai" => $data["INF13033"]],
        ];
        nilai_matkul::insert($data);

        // return redirect('halaman');
    }

    public function insert_kwc(Request $request){
        $data = $request->all();
        $kode = 'MK002';

        $data = [
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "IFS13022", "nilai" => $data["IFS13022"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "IFS14013", "nilai" => $data["IFS14013"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "IFS14033", "nilai" => $data["IFS14033"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "IFS14041", "nilai" => $data["IFS14041"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF12011", "nilai" => $data["INF12011"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF12013", "nilai" => $data["INF12013"]]
        ];
        nilai_matkul::insert($data);
    }

    public function insert_rpl(Request $request){
        $data = $request->all();
        $kode = 'MK001';

        $data = [
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "FS14023", "nilai" => $data["FS14023"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "IFS13033", "nilai" => $data["IFS13033"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "IFS14053", "nilai" => $data["IFS14053"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF11011", "nilai" => $data["INF11011"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF11013", "nilai" => $data["INF11013"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF12021", "nilai" => $data["INF12021"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF12023", "nilai" => $data["INF12023"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF13011", "nilai" => $data["INF13011"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF13023", "nilai" => $data["INF13023"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF14013", "nilai" => $data["INF14013"]],
            ["nim" => $data["nim"], "kode_peminatan" => $kode, "kode_matkul" => "INF3013", "nilai" => $data["INF3013"]]
        ];
        nilai_matkul::insert($data);

        // return redirect('halaman');
    }

    // public function insert_rpl(Request $request){
    //     dd($request->all());
    //     nilai_matkul::create($request->all());

    //     // return redirect('halaman');
    // }

    public function insert_profesi(Request $request){
        // dd($request->all());
        pilihan_mahasiswa::create($request->all());

        return redirect('halaman');
    }
}
