@extends('layouts.app')
@section('content')
<h2>✅ Filter Mahasiswa Layak Beasiswa (Skor ≥ 70)</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Nama Mahasiswa</th>
        <th>Skor Total</th>
    </tr>

    @if($mahasiswa->isEmpty())
    <tr>
        <td colspan="2">Tidak ada mahasiswa yang memenuhi syarat beasiswa</td>
    </tr>
    @else
    @foreach($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs['nama'] }}</td>
        <td>{{ number_format($mhs['skor_total'], 2) }}</td>
    </tr>
    @endforeach
    @endif
</table>
<a href="{{ route('beasiswa.ranking') }}">← Kembali ke Ranking</a>
@endsection