@extends('layouts.app')

@section('content')
    {{-- @php
    var_dump($hitung);
    die();
    @endphp --}}

    @if (!empty($hasil))
        @php
            if ($hasil['rekomendasi'] == 'jarkom') {
                $hasil['rekomendasi'] = 'Jaringan Komputer';
            } elseif ($hasil['rekomendasi'] == 'rpl') {
                $hasil['rekomendasi'] = 'Rekayasa Perangkat Lunak';
            } elseif ($hasil['rekomendasi'] == 'kwc') {
                $hasil['rekomendasi'] = 'Komputasi Web Cerdas';
            }
        @endphp
        <div class="card shadow-sm mb-4">
            <div class="card-header">Informasi Peminatan</div>
            <div class="card mx-3 my-3">
                <h5 class="mt-2 mx-2">Rekayasa Perangkat Lunak (RPL)</h5>
                <p class="text-justify mt-2 mx-2">Rekayasa Perangkat lunak atau bisa disebut dengan RPL adalah salah satu
                    pemintan mata kuliah yang ada di program studi Informatika UPI Y.A.I yang menyediakan mata kuliah untuk
                    membantu mahasiswa mendalami bakat mereka seperti : pemograman framework, teknik kompilator, animasi
                    komputer, pengembangan dan management kebutuhan perangkat lunak, management proyek perangkat lunak,
                    pemograman perangkat bergerak, management kualitas perangkat lunak, pemograman game dan pengolahan citra
                </p>
            </div>
            <div class="card mx-3 my-3">
                <h5 class="mt-2 mx-2">Komputasi dan Web Cerdas (KWC)</h5>
                <p class="text-justify mt-2 mx-2">Komputasi dan Web Cerdas atau bisa disebut juga dengan KWC adalah salah
                    satu
                    pemintan mata kuliah yang ada di program studi Informatika UPI Y.A.I yang menyediakan mata kuliah
                    untuk
                    membantu mahasiswa mendalami bakat mereka seperti : web information retrieval, soft computing, web
                    mining,
                    management pengetahuan, pemrosesan bahasa alami, pemodelan dan simulasi, web agents, sistem pakar,
                    dan
                    sistem pendukung pengambilan keputusan</p>
            </div>
            <div class="card mx-3 my-3">
                <h5 class="mt-2 mx-2">Jaringan Komputer (Jarkom)</h5>
                <p class="text-justify mt-2 mx-2">Jaringan Komputer atau bisa disebut juga dengan Jarkom adalah
                    salah satu
                    pemintan mata kuliah yang ada di program studi Informatika UPI Y.A.I yang menyediakan mata
                    kuliah untuk
                    membantu mahasiswa mendalami bakat mereka seperti : sistem terdistribusi, teknik komperesi, ..
                </p>
            </div>
        </div>
        <div class="card shadow-sm mb-4">
            <div class="card-header">Informasi Mahasiswa</div>
            <table class="my-4 table">
                <thead>
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Rekomendasi Peminatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-4">{{ $hasil['nim'] }}</td>
                        <td class="col-4">{{ ucwords($hasil['nama']) }}</td>
                        <td class="col-4">{{ ucwords($hasil['rekomendasi']) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- <h5 class="text-center">Total Nilai Mata Kuliah</h5> --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header">Total Nilai Mata Kuliah</div>
            <table class="my-4 table">
                <thead>
                    <tr>
                        <th scope="col">Total Nilai Jaringan Komputer</th>
                        <th scope="col">Total Nilai Komputasi Web Cerdas</th>
                        <th scope="col">Total Nilai Rekayasa Perangkat Lunak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-4">{{ $hasil['total_jarkom'] }}</td>
                        <td class="col-4">{{ $hasil['total_kwc'] }}</td>
                        <td class="col-4">{{ $hasil['total_rpl'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- <h5 class="text-center">Hasil Perhitungan</h5> --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header">Hasil Perhitungan</div>
            <table class="my-4 table">
                <thead>
                    <tr>
                        <th scope="col" <?php
                        if ($hasil['rekomendasi'] == 'Jaringan Komputer') {
                            echo ' class="text-success font-weight-bold" ';
                        } ?>>Nilai Jaringan Komputer</th>
                        <th scope="col" <?php
                        if ($hasil['rekomendasi'] == 'Komputasi Web Cerdas') {
                            echo ' class="text-success font-weight-bold" ';
                        } ?>>Nilai Komputasi Web Cerdas</th>
                        <th scope="col" <?php
                        if ($hasil['rekomendasi'] == 'Rekayasa Perangkat Lunak') {
                            echo ' class="text-success font-weight-bold" ';
                        } ?>>Nilai Rekayasa Perangkat Lunak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-4 <?php
                        if ($hasil['rekomendasi'] == 'Jaringan Komputer') {
                            echo ' text-success font-weight-bold ';
                        } ?>"> {{ $hasil['jarkom'] }} </td>
                        <td class="col-4 font-weight-bold <?php
                        if ($hasil['rekomendasi'] == 'Komputasi Web Cerdas') {
                            echo ' text-success font-weight-bold';
                        } ?>"> {{ $hasil['kwc'] }} </td>
                        <td class="col-4 <?php
                        if ($hasil['rekomendasi'] == 'Rekayasa Perangkat Lunak') {
                            echo ' text-success font-weight-bold';
                        } ?>"> {{ $hasil['rpl'] }} </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        <div class="row text-center">
            @php
                // echo '<button type="button" class="my-3 btn btn-danger btn-lg" disabled>Anda Belum Input Nilai</button>';
                if (!$nilai) {
                    echo '<button type="button" class="my-3 btn btn-danger btn-lg" disabled>Anda Belum Input Nilai</button>';
                }
                
                if (!$profesi_minat) {
                    echo '<button type="button" class="my-3 btn btn-danger btn-lg" disabled>Anda Belum Pilih Profesi Kerja & Minat Bakat</button>';
                }
            @endphp
        </div>
    @endif
@endsection
