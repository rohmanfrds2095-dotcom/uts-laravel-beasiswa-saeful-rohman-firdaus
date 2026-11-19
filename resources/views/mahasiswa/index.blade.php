@extends('layouts.app')
@section('content')
<h3 class="mb‑3">Daftar 15 Mahasiswa</h3>
<table class="table table‑striped table‑bordered">
    <thead class="table‑primary">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>IPK</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataMahasiswa as $mhs)
        <tr>
            <td>{{ $mhs['id'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['ipk'] }}</td>
            <td><a href="{{ route('mahasiswa.show',$mhs['id']) }}" class="btn btn‑info btn‑sm">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection