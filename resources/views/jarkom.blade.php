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
                    <div class="col-5">
                        <form action="/insert_jarkom" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim"
                                    value="{{ Session::get('nim') }}" readonly>
                            </div>

                            <div class="mb-3">
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
                                <input type="text" name="jumlah" class="form-control" id="jumlah" value="">
                            </div>

                            <button type="submit" onclick="calculate();" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @else

            <body>
                <div class="text-center row justify-content-center">
                    <h5>Anda Sudah Input Nilai Jaringan Komputer</h5>
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

        var total = sti + jk + pjk + sd + aok + ki;
        document.getElementById("jumlah").value = total;
    }
</script>
