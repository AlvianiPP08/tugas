<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hasil;
use App\Models\mk_jarkom;
use App\Models\mk_rpl;
use App\Models\mk_kwc;
use App\Models\profesi_minat;
use App\Models\User;

class HasilController extends Controller
{
	public function rekomendasi($nim)
	{
		// $nim = Session::get('nim');
		$nama_mhs = DB::table('users')->where('nim', $nim)->get('name');

		$nilai = $this->nilai_mhs($nim);
		// dd($nilai);

		$normalisasi = $this->normalisasi($nilai);

		//Array $hasil berisikan dengan hasil perhitungan ketiga Penjurusan matakuliah dan rekomendasi penjurusan
		$hasil = $this->hitung($normalisasi);


		$hasil["nim"] = $nim;
		$hasil["nama"] = $nama_mhs[0]->name;
		$hasil["total_jarkom"] = $nilai["jarkom"];
		$hasil["total_rpl"] = $nilai["rpl"];
		$hasil["total_kwc"] = $nilai["kwc"];

		$mhs = DB::table('hasil')->where('nim', $nim)->exists();
		if ($hasil['rekomendasi'] == 'rpl') {
			$rekomendasi = 'MK001';
		}
		else if ($hasil['rekomendasi'] == 'kwc') {
			$rekomendasi = 'MK002';
		}
		else if ($hasil['rekomendasi'] == 'jarkom') {
			$rekomendasi = 'MK003';
		}
		// dd($hasil);
		// dd($hasil["rekomendasi"]);

		if (!$mhs) {
			$data_mhs = array(
				'nim' => $nim,
				'nama_mhs' => ucwords($hasil["nama"]),
				'hasil_peminatan' => $rekomendasi
			);
			hasil::create($data_mhs);
		}

		return $hasil;
		// return view('hasil', compact('hitung'));
	}

	function hasil()
	{
		$nim = Session::get('nim');
		$jarkom = DB::table('mk_jarkom')->where('nim', $nim)->exists();
		$rpl = DB::table('mk_rpl')->where('nim', $nim)->exists();
		$kwc = DB::table('mk_kwc')->where('nim', $nim)->exists();
		$profesi = DB::table('pilihan_mahasiswa')->where('nim', $nim)->exists();
		if ($jarkom) {
			if ($rpl) {
				if ($kwc) {
					if ($profesi) {
						$hasil = $this->rekomendasi($nim);
						return view('hasil', compact('jarkom', 'rpl', 'kwc', 'profesi', 'hasil'));
					} else {
						return view('hasil', compact('jarkom', 'rpl', 'kwc', 'profesi'));
					}
				} else {
					return view('hasil', compact('jarkom', 'rpl', 'kwc', 'profesi'));
				}
			} else {
				return view('hasil', compact('jarkom', 'rpl', 'kwc', 'profesi'));
			}
		} else {
			return view('hasil', compact('jarkom', 'rpl', 'kwc', 'profesi'));
		}
		// return view('hasil', compact('jarkom', 'rpl', 'kwc', 'profesi'));
	}

	function hasils() {
		$hasils = hasil::all();
		return view('hasils', compact('hasils'));
	}

	// function hasil(Request $request)
	// {
	// 	// request isinya inputan profesi
	// 	$input = $request->all();
	// 	// Taro atas
	// 	// use Illuminate\Support\Facades\Session; 
	// 	// $nim = Session::get('nim'); 
	// 	$nim = '1844190036';

	// 	$nilai = $this->nilaiMatkul($nim);
	// 	dd($nim);
	// 	$nilai["profesi_kerja"] = $request->profesi_kerja;
	// 	$nilai["minta_bakat"] = $request->minat_bakat;

	// 	$normalisasi = $this->normalisasi($nilai);

	// 	//Array $hasil berisikan dengan hasil perhitungan ketiga Penjurusan matakuliah dan rekomendasi penjurusan
	// 	$hitung = $this->hitung($normalisasi);

	// 	$hasil_jarkom = $hitung["jarkom"]; // Hasil perhitungan matkul jarkom
	// 	$hasil_rpl = $hitung["rpl"]; // Hasil perhitungan matkul rpl
	// 	$hasil_kwc = $hitung["kwc"]; // Hasil perhitungan matkul kwc

	// 	// response->hasil

	// 	// ATAU 
	// 	// redirect ke hasil_page bawa 'hasil'
	// }

	public function nilai_mhs($nim)
	{
		// Mengambil nilai mahasiswa untuk melakukan perhitungan
		$jarkom = DB::table('mk_jarkom')->where('nim', $nim)->get('jumlah');
		$rpl = DB::table('mk_rpl')->where('nim', $nim)->get('jumlah');
		$kwc = DB::table('mk_kwc')->where('nim', $nim)->get('jumlah');
		$profesi_kerja = DB::select(
			'SELECT nim, pk.nilai AS nilai_profesi, mb.nilai AS nilai_minat
			FROM pilihan_mahasiswa pm 
			JOIN profesi_kerja pk ON pm.pilihan_profesi = pk.id_profesi 
			JOIN minat_bakat mb ON pm.pilihan_minat_bakat = mb.id_minat
			WHERE nim = ' . $nim
		);

		$nilai = array(
			'jarkom' => $jarkom[0]->jumlah,
			'rpl' => $rpl[0]->jumlah,
			'kwc' => $kwc[0]->jumlah,
			'profesi_kerja' => $profesi_kerja[0]->nilai_profesi,
			'minat_bakat' => $profesi_kerja[0]->nilai_minat,
		);
		// dd($nilai);

		return $nilai;
	}

	function normalisasi($nilai)
	{
		//MENGAMBIL NILAI KRITERIA DARI TABLE MASTER BIBIT
		$jarkom = DB::table('bobot')->where('perhitungan', 'jarkom')->get('kriteria');
		$rpl = DB::table('bobot')->where('perhitungan', 'rpl')->get('kriteria');
		$kwc = DB::table('bobot')->where('perhitungan', 'kwc')->get('kriteria');
		$profesikerja = DB::table('bobot')->where('perhitungan', 'profesikerja')->get('kriteria');
		$minatbakat = DB::table('bobot')->where('perhitungan', 'minatbakat')->get('kriteria');

		$pembagi_jarkom = $jarkom[0]->kriteria;
		$pembagi_rpl = $rpl[0]->kriteria;
		$pembagi_kwc = $kwc[0]->kriteria;
		$pembagi_profesi_kerja = $profesikerja[0]->kriteria;
		$pembagi_minat_bakat = $minatbakat[0]->kriteria;

		// Perhitungan Normalisasi
		$normalisasi_jarkom = number_format(($pembagi_jarkom / $nilai["jarkom"]), 9, '.', '');
		$normalisasi_rpl = number_format(($pembagi_rpl / $nilai["rpl"]), 9, '.', '');
		$normalisasi_kwc = number_format(($pembagi_kwc / $nilai["kwc"]), 9, '.', '');

		$normalisasi_profesi_kerja = number_format(($pembagi_profesi_kerja / $nilai["profesi_kerja"]), 9, '.', '');
		$normalisasi_minat_bakat = number_format(($pembagi_minat_bakat / $nilai["minat_bakat"]), 9, '.', '');


		$normalisasi = array(
			'jarkom' => $normalisasi_jarkom,
			'rpl' => $normalisasi_rpl,
			'kwc' => $normalisasi_kwc,
			'profesi_kerja' => $normalisasi_profesi_kerja,
			'minat_bakat' => $normalisasi_minat_bakat
		);
		// dd($normalisasi);

		return $normalisasi;
	}

	function hitung($normalisasi)
	{
		// Nilai diambil dari excel
		$kepentingan_jarkom = 0.157894737;
		$kepentingan_rpl = 0.157894737;
		$kepentingan_kwc = 0.157894737;
		$kepentingan_profesi_kerja = 0.263157895;
		$kepentingan_minat_bakat = 0.263157895;

		// Perhitungan nilai (Kepentingan x Normalisasi)
		$hasil_matkul_jarkom = number_format(($kepentingan_jarkom * $normalisasi["jarkom"]), 9, '.', '');
		$hasil_matkul_rpl = number_format(($kepentingan_rpl * $normalisasi["rpl"]), 9, '.', '');
		$hasil_matkul_kwc = number_format(($kepentingan_kwc * $normalisasi["kwc"]), 9, '.', '');
		$hasil_profesi_kerja = number_format(($kepentingan_profesi_kerja * $normalisasi["profesi_kerja"]), 9, '.', '');
		$hasil_minat_bakat = number_format(($kepentingan_minat_bakat * $normalisasi["minat_bakat"]), 9, '.', '');

		// Hasil dari perhitungan (Hasil Matkul + Hasil Profesi Kerja + Hasil Minat Bakat)
		$hasil_jarkom = $hasil_matkul_jarkom + $hasil_profesi_kerja + $hasil_minat_bakat;
		$hasil_rpl = $hasil_matkul_rpl + $hasil_profesi_kerja + $hasil_minat_bakat;
		$hasil_kwc = $hasil_matkul_kwc + $hasil_profesi_kerja + $hasil_minat_bakat;

		// Prhitungan Jika tidak dipisah ((Kepentingan Matkul * Normalisasi Matkul) + (Kepentingan Profesi Kerja * Normalisasi Profesi Kerja) + (Kepentingan Minat Bakat * Normalisasi Minat Bakat))
		// $hasil_jarkom = ($kepentingan_jarkom * $normalisasi["jarkom"]) + ($kepentingan_profesi_kerja * $normalisasi["profesi_kerja"]) + ($kepentingan_minat_bakat * $normalisasi["minat_bakat"]);
		// $hasil_rpl = ($kepentingan_rpl * $normalisasi["jarkom"]) + ($kepentingan_profesi_kerja * $normalisasi["profesi_kerja"]) + ($kepentingan_minat_bakat * $normalisasi["minat_bakat"]);
		// $hasil_kwc = ($kepentingan_kwc * $normalisasi["jarkom"]) + ($kepentingan_profesi_kerja * $normalisasi["profesi_kerja"]) + ($kepentingan_minat_bakat * $normalisasi["minat_bakat"]);

		// Array berisi dengan nilai hasil hitung perhitungan
		$hitung = array(
			'jarkom' => $hasil_jarkom,
			'rpl' => $hasil_rpl,
			'kwc' => $hasil_kwc,
			'profesi_kerja' => $hasil_profesi_kerja,
			'minat_bakat' => $hasil_minat_bakat,
		);

		// Menentukan nilai tertingi dari ketiga nilai perhitungan matakuliah
		$tertinggi = array_keys($hitung, max($hitung));

		// Menghasilkan jawaban rekomendasi peminatan. Contoh : "rpl"
		$hitung["rekomendasi"] = $tertinggi[0];

		return $hitung;
	}
}
