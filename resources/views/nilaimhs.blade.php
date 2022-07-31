<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Nilai Mahasiswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <div class="container">
    <button type="button" class="btn btn-outline-info mt-4">Tambah Mahasiswa</button>
        <div class="row">
        <table class="table">
  <thead>
    <h2 class="mt-3">Peminatan Jaringan Komputer</h2>
    <tr>
        <th scope="col">Nim</th>
        <th scope="col">Sistem Teknologi Informasi</th>
        <th scope="col">Jaringan Komputer</th>
        <th scope="col">Praktikum Jaringan Komputer</th>
        <th scope="col">Sistem Digital</th>
        <th scope="col">Arsitektur Organisasi Komputer</th>
        <th scope="col">Keamanan Informasi</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @forelse($terserah as $row)
        <tr>
        <th scope="row">{{$row->nim}}</th>
        <td>{{ $row->sistem_tekinf }}</td>
        <td>{{ $row->jarkom }}</td>
        <td>{{ $row->prak_jarkom }}</td>
        <td>{{ $row->sistem_digital }}</td>
        <td>{{ $row->arsitektur_organisasikom }}</td>
        <td>{{ $row->keamanan_informasi }}</td>
        <td>{{ $row->jumlah }}</td>
        <td>
            <button type="button" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-secondary">Edit</button>
      </td>
        </tr>
    @empty
    <tr>
        <th scope="row">Data belum ada</th>
    </tr>
    @endforelse
  </tbody>
</table>
    </div>
        </div>

    <div class="container">
    <button type="button" class="btn btn-outline-info mt-4">Tambah Mahasiswa</button>
        <div class="row">
<table class="table">
  <thead>
    <h2 class="mt-3">Peminatan Komputasi Web Cerdas</h2>
    <tr>
        <th scope="col">Nim</th>
        <th scope="col">Data Mining</th>
        <th scope="col">Teknologi Web</th>
        <th scope="col">Praktikum Teknologi Web</th>
        <th scope="col">Sistem Data dan Algoritma</th>
        <th scope="col">Praktikum Sistem Data dan Algoritma</th>
        <th scope="col">Dasar-dasar Algoritma</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
        @forelse($mk_kwc as $row)
        <tr>
            <th scope="row">{{$row->nim}}</th>
            <td>{{ $row->data_mining }}</td>
            <td>{{ $row->tek_web }}</td>
            <td>{{ $row->prak_tekweb }}</td>
            <td>{{ $row->sda }}</td>
            <td>{{ $row->prak_sda }}</td>
            <td>{{ $row->dasar_algoritma }}</td>
            <td>{{ $row->jumlah }}</td>
            <td>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-secondary">Edit</button>
            </td>
        </tr>
        @empty
        <tr>
            <th scope="row">Data belum ada</th>
        </tr>
        @endforelse
        <tr>
  </tbody>
</table>
    </div>
        </div>

    <div class="container">
    <button type="button" class="btn btn-outline-info mt-4">Tambah Mahasiswa</button>
        <div class="row">
<table class="table">
  <thead>
    <h2 class="mt-3">Peminatan Rekayasa Perangkat Lunak</h2>
    <tr>
            <th scope="col">Nim</th>
            <th scope="col">Dasar-dasar Pemograman</th>
            <th scope="col">Praktikum Dasar-dasar Pemograman</th>
            <th scope="col">Praktikum Basis Data</th>
            <th scope="col">Basis Data</th>
            <th scope="col">Pemograman Berorientasi Objek</th>
            <th scope="col">Praktikum Pemograman Berorientasi Objek</th>
            <th scope="col">Rekayasa Perangkat Lunak</th>
            <th scope="col">Basis Data Lanjutan</th>
            <th scope="col">Pemograman Visual</th>
            <th scope="col">Analisa Perancangan Sistem</th>
            <th scope="col">Teori Bahasa dan Automata</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Edit</th>
    </tr>
  </thead>
<tbody>
    @forelse($mk_rpl as $row)
        <tr>
        <th scope="row">{{$row->nim}}</th>
        <td>{{ $row->ddp }}</td>
        <td>{{ $row->prak_ddp }}</td>
        <td>{{ $row->prak_basdat }}</td>
        <td>{{ $row->basdat }}</td>
        <td>{{ $row->pbo }}</td>
        <td>{{ $row->prak_pbo }}</td>
        <td>{{ $row->rpl }}</td>
        <td>{{ $row->basdat_lanjut }}</td>
        <td>{{ $row->pem_visual }}</td>
        <td>{{ $row->analisa_perancangan_sis }}</td>
        <td>{{ $row->tbo }}</td>
        <td>{{ $row->jumlah }}</td>
        <td>
            <button type="button" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-secondary">Edit</button>
        </td>
        </tr>
    @empty
    <tr>
        <th scope="row">Data belum ada</th>
        </tr>
    @endforelse
    <tr>
</tbody>
</table>
    </div>
        </div>
  </body>
</html>