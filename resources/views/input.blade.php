@extends('layouts.app')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nilai Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    @if (!$jarkom)

        <body>
            <h1 class="text-center mb-4">Tambah Nilai Matakuliah Jaringan Komputer</h1>
            {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
            </script> --}}

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-4">
                        {{-- <form action="/insert_jarkom" method="POST" enctype="multipart/form-data"> --}}
                        <form id="form_jarkom">
                            <div class="row justify-content-center">Nilai Jaringan Komputer</div>
                            @csrf
                            <div class="mb-3" hidden>
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim"
                                    value="{{ Session::get('nim') }}" readonly>
                            </div>

                            <div class="my-3">
                                <label for="exampleInputPassword1" class="form-label">Sistem Teknologi Informasi</label>
                                <input type="text" name="sistem_tekinf" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="sti">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jaringan Komputer</label>
                                <input type="text" name="jarkom" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="jk">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Praktikum Jaringan Komputer</label>
                                <input type="text" name="prak_jarkom" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="pjk">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Sistem Digital</label>
                                <input type="text" name="sistem_digital" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="sd">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Arsitektur Organisasi Komputer</label>
                                <input type="text" name="arsitektur_organisasikom" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="aok">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Keamanan Informasi</label>
                                <input type="text" name="keamanan_informasi" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="ki">
                            </div>

                            <div class="mb-3" hidden>
                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" id="jumlah_jarkom" value="">
                            </div>

                        </form>
                    </div>

                    <div class="col-4">
                        <div class="row justify-content-center">Nilai Rekayasa Perangkat Lunak</div>
                        <form id="form_rpl">
                            @csrf
                            <div class="mb-3" hidden>
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim"
                                    value="{{ Session::get('nim') }}" readonly>
                            </div>
                            <div class="my-3">
                                <label for="exampleInputPassword1" class="form-label">Dasar-dasar Pemrograman</label>
                                <input type="text" name="ddp" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="ddp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Praktikum Dasar-dasar
                                    Pemrograman</label>
                                <input type="text" name="prak_ddp" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="pddp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Basis Data</label>
                                <input type="text" name="basdat" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="bd">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Praktikum Basis Data</label>
                                <input type="text" name="prak_basdat" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="pbd">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Basis Data Lanjut</label>
                                <input type="text" name="basdat_lanjut" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="bdl">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pemrograman Berbasis Objek</label>
                                <input type="text" name="pbo" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="pbo">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Praktikum Pemrograman Berbasis
                                    Objek</label>
                                <input type="text" name="prak_pbo" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="ppbo">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Rekayasa Perangkat Lunak</label>
                                <input type="text" name="rpl" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="rpl">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pemrograman Visual</label>
                                <input type="text" name="pem_visual" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="pv">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Analisa Perancangan Sistem</label>
                                <input type="text" name="analisa_perancangan_sis" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="aps">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Teori Bahasa & Otomata</label>
                                <input type="text" name="tbo" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="tbo">
                            </div>

                            <div class="mb-3" hidden>
                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" id="jumlah_rpl"
                                    value="">
                            </div>
                            <button type="button" onclick="calculate();" class="btn btn-primary">Submit</button>
                            {{-- <button type="submit" onclick="calculate();" class="btn btn-primary">Submit</button> --}}
                        </form>
                    </div>

                    <div class="col-4">
                        <div class="row justify-content-center">Nilai Rekayasa Perangkat Lunak</div>
                        <form id="form_kwc">
                            @csrf
                            <div class="mb-3" hidden>
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim"
                                    value="{{ Session::get('nim') }}" readonly>
                            </div>

                            <div class="my-3">
                                <label for="exampleInputPassword1" class="form-label">Data Mining</label>
                                <input type="text" name="data_mining" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="dm">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Teknologi Web</label>
                                <input type="text" name="tekweb" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="tw">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Praktikum Teknologi Web</label>
                                <input type="text" name="prak_tekweb" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="ptw">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Struktur Data dan Algoritma</label>
                                <input type="text" name="sda" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="sda">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Praktikum Struktur Data dan
                                    Algoritma</label>
                                <input type="text" name="prak_sda" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="psda">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Dasar Algoritma</label>
                                <input type="text" name="dasar_algoritma" class="form-control"
                                    onkeypress="RestrictFirstZero(event); return isNumber(event);" id="da">
                            </div>

                            <div class="mb-3" hidden>
                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" id="jumlah_kwc" value=""
                                    readonly>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        @else

            <body>
                <div class="text-center row justify-content-center">
                    <h5>Anda Sudah Input Nilai</h5>
                </div>
            </body>
    @endif
@endsection


<script>
    // FUNCTION AGAR TEXTBOX HANYA DIISI DENGAN ANGKA
    function isNumber(event) {
        event = (event) ? event : window.event;
        var charCode = (event.which) ? event.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    // TEXTBOX TIDAK BOLEH DIAWALI DENGAN ANGA 0
    function RestrictFirstZero(event) {
        if (event.srcElement.value.length == 0 && event.which == 48) {
            event.preventDefault();
            return false;
        }
    }

    //MENGHITUNG JUMLAH SEBELUM DATA NILAI DI SUBMIT
    function calculate() {
        var sti = parseInt(document.getElementById("sti").value);
        var jk = parseInt(document.getElementById("jk").value);
        var pjk = parseInt(document.getElementById("pjk").value);
        var sd = parseInt(document.getElementById("sd").value);
        var aok = parseInt(document.getElementById("aok").value);
        var ki = parseInt(document.getElementById("ki").value);

        var total_jarkom = sti + jk + pjk + sd + aok + ki;
        document.getElementById("jumlah_jarkom").value = total_jarkom;

        var ddp = parseInt(document.getElementById("ddp").value);
        var pddp = parseInt(document.getElementById("pddp").value);
        var bd = parseInt(document.getElementById("bd").value);
        var pbd = parseInt(document.getElementById("pbd").value);
        var bdl = parseInt(document.getElementById("bdl").value);
        var pbo = parseInt(document.getElementById("pbo").value);
        var ppbo = parseInt(document.getElementById("ppbo").value);
        var rpl = parseInt(document.getElementById("rpl").value);
        var pv = parseInt(document.getElementById("pv").value);
        var aps = parseInt(document.getElementById("aps").value);
        var tbo = parseInt(document.getElementById("tbo").value);

        var total_rpl = ddp + pddp + bd + pbd + bdl + pbo + ppbo + rpl + pv + aps + tbo;
        document.getElementById("jumlah_rpl").value = total_rpl;

        var dm = parseInt(document.getElementById("dm").value);
        var tw = parseInt(document.getElementById("tw").value);
        var ptw = parseInt(document.getElementById("ptw").value);
        var sda = parseInt(document.getElementById("sda").value);
        var psda = parseInt(document.getElementById("psda").value);
        var da = parseInt(document.getElementById("da").value);

        var total_kwc = dm + tw + ptw + sda + psda + da;
        document.getElementById("jumlah_kwc").value = total_kwc;

        var form_jarkom = document.getElementById('form_jarkom');
        var jarkom = new FormData(form_jarkom);
        var form_rpl = document.getElementById('form_rpl');
        var rpl = new FormData(form_rpl);
        var form_kwc = document.getElementById('form_kwc');
        var kwc = new FormData(form_kwc);

        $.ajax({
            url: "{{ route('insert_jarkom') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: jarkom,
            processData: false,
            contentType: false,
        });

        $.ajax({
            url: "{{ route('insert_rpl') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: rpl,
            processData: false,
            contentType: false,
        });

        $.ajax({
            url: "{{ route('insert_kwc') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: kwc,
            processData: false,
            contentType: false,
        }).done(function(response) {
            window.location = "<?php echo url(''); ?>/halaman";
        });
        // .done(function(response) {
            
        // });
    }
</script>
