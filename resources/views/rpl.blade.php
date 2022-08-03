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

    @if (!$rpl)

        <body>
            <h1 class="text-center mb-4">Tambah Nilai Matakuliah Rekayasa Perangkat Lunak</h1>
            {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
            </script> --}}

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-5">
                        <form action="/insert_rpl" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim"
                                    value="{{ Session::get('nim') }}" readonly>
                            </div>
                            <div class="mb-3">
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
                                <input type="text" name="jumlah" class="form-control" id="jumlah"
                                    value="">
                            </div>

                            <button type="submit" onclick="calculate();" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @else

            <body>
                <div class="text-center row justify-content-center">
                    <h5>Anda Sudah Input Nilai Rekayasa Perangkat Lunak</h5>
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

        var total = ddp + pddp + bd + pbd + bdl + pbo + ppbo + rpl + pv + aps + tbo;
        document.getElementById("jumlah").value = total;
    }
</script>
