@extends("layouts.app")

@section('content')

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Nim</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Hasil Peminatan</th>
	</tr>
  </thead>
  <tbody>
  @forelse($hasil as $row)
  <tr>
      <th scope="row">{{$row->nim}}</th>
      <td>{{ $row->nama_mhs }}</td>
      <td>{{ $row->hasil_peminatan }}</td>
    </tr>
  @empty
  <tr>
      <th scope="row">Data belum ada</th>
    </tr>
  @endforelse
  </tbody>
</table>
@endsection