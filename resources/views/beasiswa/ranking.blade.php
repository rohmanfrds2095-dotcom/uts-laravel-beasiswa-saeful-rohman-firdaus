@extends('layouts.app')
@section('content')
<h2>Ranking Mahasiswa Berdasarkan Skor Beasiswa</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Rank</th>
        <th>Nama</th>
        <th>Skor Total</th>
    </tr>
    @foreach($mahasiswa as $index => $mhs)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $mhs['nama'] }}</td>
        <td>{{ number_format($mhs['skor_total'], 2) }}</td>
    </tr>
    @endforeach
</table>
<a href="{{ route('beasiswa.filter') }}">Filter Mahasiswa Layak →</a>
@endsection