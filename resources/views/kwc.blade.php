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

    @if (!$kwc)
    <body>
        <h1 class="text-center mb-4">Tambah Nilai Matakuliah Komputasi Web Cerdas</h1>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script> --}}

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-5">
                    <form action="/insert_kwc" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nim</label>
                            <input type="text" name="nim" class="form-control" id="nim"
                                value="{{ Session::get('nim') }}" readonly>
                        </div>

                        <div class="mb-3">
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
                            <input type="text" name="jumlah" class="form-control" id="jumlah" value=""
                                readonly>
                        </div>

                        <button type="submit" onclick="calculate();" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    @else

        <body>
            <div class="text-center row justify-content-center">
                <h5>Anda Sudah Input Nilai Komputasi Web Cerdas</h5>
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
            var dm = parseInt(document.getElementById("dm").value);
            var tw = parseInt(document.getElementById("tw").value);
            var ptw = parseInt(document.getElementById("ptw").value);
            var sda = parseInt(document.getElementById("sda").value);
            var psda = parseInt(document.getElementById("psda").value);
            var da = parseInt(document.getElementById("da").value);

            var total = dm + tw + ptw + sda + psda + da;
            document.getElementById("jumlah").value = total;
        }
    </script>
