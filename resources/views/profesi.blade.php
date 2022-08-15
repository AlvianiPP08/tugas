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

    @if (!$profesi)

        <body>
            <h1 class="text-center mb-4">Tambah Profesi Kerja dan Minat Bakat</h1>
            {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
            </script> --}}

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-5">
                        <form action="/insert_profesi" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim"
                                    value="{{ Session::get('nim') }}" readonly>
                            </div>

                            <tr class="my-4">
                                <label for="exampleInputEmail1" class="form-label">Profesi Kerja dan Karir</label>
                                <td>
                                    <select name="profesi_kerja" class="form-control">
                                        <option value="null">Pemilihan Profesi Kerja dan Karir</option>
                                        <option value="P001">Computer Network/Data Engineer</option>
                                        <option value="P002">Database Engineer / Database Administrator</option>
                                        <option value="P003">Designer Grafis</option>
                                        <option value="P004">Developer IT</option>
                                        <option value="P005">Software Engineer</option>
                                        <option value="P006">System Analyst dan System Inte</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="my-4">
                                <label for="exampleInputEmail1" class="form-label">Profesi Minat dan Bakat</label>
                                <td>
                                    <select name="minat_bakat" class="form-control">
                                        <option value="null">Pemilihan Minat dan Bakat</option>
                                        <option value="M001">Administrasi Sistem Jaringan</option>
                                        <option value="M002">Analisis Database Server</option>
                                        <option value="M003">Merakit, Merancang dan Memperbaiki Komputer</option>
                                        <option value="M004">Mobile Developer</option>
                                        <option value="M005">Problem Soloving</option>
                                        <option value="M006">Software Engineer</option>
                                    </select>
                                </td>
                            </tr>

                            <button type="submit" class="btn btn-primary my-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            @php
                echo '<body>
                    <div class="text-center row justify-content-center">
                        <button type="button" class="my-3 btn btn-success btn-lg" disabled>Anda Sudah Input Profesi Kerja & Minat Bakat</button>
                    </div>
                </body>';
            @endphp
    @endif
@endsection
