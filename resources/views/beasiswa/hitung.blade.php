@extends('layouts.app')
@section('content')
<h2>Hitung Skor Kelayakan Beasiswa</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>IPK</th>
        <th>Prestasi</th>
        <th>Penghasilan Orang Tua</th>
        <th>Semester</th>
        <th>Skor Total</th>
    </tr>
    @foreach($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs['nama'] }}</td>
        <td>{{ $mhs['ipk'] }}</td>
        <td>{{ $mhs['prestasi'] }}</td>
        <td>Rp{{ number_format($mhs['penghasilan_ortu']) }}</td>
        <td>{{ $mhs['semester'] }}</td>
        <td>{{ number_format($mhs['skor_total'], 2) }}</td>
    </tr>
    @endforeach
</table>
<a href="{{ route('beasiswa.ranking') }}">Lihat Ranking →</a>
@endsection