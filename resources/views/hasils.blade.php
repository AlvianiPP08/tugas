@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">

        <table class="table table-success table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Hasil Peminatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasils as $hasil)
                    <tr>
                        <th scope="row">{{ $hasil->nim }}</th>
                        <td>{{ $hasil->nama_mhs }}</td>
                        <td>{{ $hasil->hasil_peminatan }}</td>
                    </tr>
                @endforeach
            </tbody>
            @if (empty($hasils))
                <tr>
                    <th scope="row">Data belum ada</th>
                </tr>
                </tbody>
            @endif
        </table>
    </div>
@endsection
