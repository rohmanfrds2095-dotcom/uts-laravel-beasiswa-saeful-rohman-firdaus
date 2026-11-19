@extends('layouts.app')
@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4>Detail Mahasiswa {{ $mahasiswa['nama'] }}</h4>
    </div>
    <div class="card-body">
        <p><strong>NIM :</strong> {{ $mahasiswa['nim'] }}</p>
        <p><strong>IPK :</strong> {{ $mahasiswa['ipk'] }}</p>
        <p><strong>Penghasilan Orang Tua :</strong> Rp{{ number_format($mahasiswa['penghasilan_ortu']) }}</p>
        <p><strong>Prestasi :</strong> {{ $mahasiswa['prestasi'] }}</p>
        <p><strong>Semester :</strong> {{ $mahasiswa['semester'] }}</p>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection