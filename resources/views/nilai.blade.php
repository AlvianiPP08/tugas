@extends("layouts.app")

@section('content')

	<table class="table table-dark table-hover">
  <thead>
    <h2>Peminatan Jaringan Komputer</h2>
    <tr>
      <th scope="col">Nim</th>
      <th scope="col">Sistem Teknologi Informasi</th>
      <th scope="col">Jaringan Komputer</th>
      <th scope="col">Praktikum Jaringan Komputer</th>
      <th scope="col">Sistem Digital</th>
      <th scope="col">Arsitektur Organisasi Komputer</th>
      <th scope="col">Keamanan Informasi</th>
      <th scope="col">Jumlah</th>
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
    </tr>
  @empty
  <tr>
      <th scope="row">Data belum ada</th>
  </tr>
  @endforelse
  </tbody>
</table>

<table class="table table-dark table-striped mt-2">
<h2 class="mt-5">Peminatan Komputasi Web Cerdas</h2>
	<thead>
	<tr>
      <th scope="col">Nim</th>
      <th scope="col">Data Mining</th>
      <th scope="col">Teknologi Web</th>
      <th scope="col">Praktikum Teknologi Web</th>
      <th scope="col">Sistem Data dan Algoritma</th>
      <th scope="col">Praktikum Sistem Data dan Algoritma</th>
      <th scope="col">Dasar-dasar Algoritma</th>
      <th scope="col">Jumlah</th>
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
  </tr>
  @empty
  <tr>
      <th scope="row">Data belum ada</th>
  </tr>
  @endforelse
  <tr>
  </tbody>
</table>

<div class="scroll">
<table class="table table-dark table-striped mt-2">
<h2 class="mt-5">Peminatan Rekayasa Perangkat Lunak</h2>
	<thead>
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
@endsection