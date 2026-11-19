<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    protected $dataMahasiswa = [
        ['id' => 1, 'nama' => 'Dedi', 'nim' => '220104', 'ipk' => 3.29, 'penghasilan_ortu' => 1200000, 'prestasi' => 2, 'semester' => 4],
        ['id' => 2, 'nama' => 'Eka', 'nim' => '220105', 'ipk' => 3.60, 'penghasilan_ortu' => 900000, 'prestasi' => 3, 'semester' => 4],
        ['id' => 3, 'nama' => 'Fajar', 'nim' => '220106', 'ipk' => 3.40, 'penghasilan_ortu' => 1500000, 'prestasi' => 1, 'semester' => 4],
        ['id' => 4, 'nama' => 'Gita', 'nim' => '220107', 'ipk' => 3.85, 'penghasilan_ortu' => 800000, 'prestasi' => 4, 'semester' => 4],
        ['id' => 5, 'nama' => 'Hadi', 'nim' => '220108', 'ipk' => 3.95, 'penghasilan_ortu' => 700000, 'prestasi' => 5, 'semester' => 4],
        ['id' => 6, 'nama' => 'Ika', 'nim' => '220109', 'ipk' => 3.75, 'penghasilan_ortu' => 1000000, 'prestasi' => 3, 'semester' => 4],
        ['id' => 7, 'nama' => 'Jaka', 'nim' => '220110', 'ipk' => 3.50, 'penghasilan_ortu' => 1300000, 'prestasi' => 2, 'semester' => 4],
        ['id' => 8, 'nama' => 'Kiki', 'nim' => '220111', 'ipk' => 3.60, 'penghasilan_ortu' => 1100000, 'prestasi' => 3, 'semester' => 4],
        ['id' => 9, 'nama' => 'Lina', 'nim' => '220112', 'ipk' => 3.90, 'penghasilan_ortu' => 600000, 'prestasi' => 4, 'semester' => 4],
        ['id' => 10, 'nama' => 'Mita', 'nim' => '220113', 'ipk' => 3.20, 'penghasilan_ortu' => 1400000, 'prestasi' => 1, 'semester' => 4],
        ['id' => 11, 'nama' => 'Nina', 'nim' => '220114', 'ipk' => 3.70, 'penghasilan_ortu' => 950000, 'prestasi' => 3, 'semester' => 4],
        ['id' => 12, 'nama' => 'Oka', 'nim' => '220115', 'ipk' => 3.45, 'penghasilan_ortu' => 1250000, 'prestasi' => 2, 'semester' => 4]
    ];

    public function index()
    {
        return view('mahasiswa.index', ['dataMahasiswa' => $this->dataMahasiswa]);
    }

    public function show($id)
    {
        $mahasiswa = collect($this->dataMahasiswa)->firstWhere('id', $id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }
}
