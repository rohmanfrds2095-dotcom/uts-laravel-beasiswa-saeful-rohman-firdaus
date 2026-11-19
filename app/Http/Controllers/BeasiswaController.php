<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class BeasiswaController extends Controller
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

    public function kriteria()
    {
        return view('beasiswa.kriteria');
    }

    public function hitung()
    {
        $mahasiswa = collect($this->dataMahasiswa)->map(function ($mhs) {
            $skorIpk = $mhs['ipk'] * 25;
            $skorPrestasi = $mhs['prestasi'] * 15;
            $skorEkonomi = (1500000 - $mhs['penghasilan_ortu']) / 1500000 * 35;
            $skorSemester = $mhs['semester'] * 5;
            $mhs['skor_total'] = $skorIpk + $skorPrestasi + $skorEkonomi + $skorSemester;
            return $mhs;
        });

        return view('beasiswa.hitung', compact('mahasiswa'));
    }

    public function ranking()
    {
        $mahasiswa = collect($this->dataMahasiswa)->map(function ($mhs) {
            $skorIpk = $mhs['ipk'] * 25;
            $skorPrestasi = $mhs['prestasi'] * 15;
            $skorEkonomi = (1500000 - $mhs['penghasilan_ortu']) / 1500000 * 35;
            $skorSemester = $mhs['semester'] * 5;
            $mhs['skor_total'] = $skorIpk + $skorPrestasi + $skorEkonomi + $skorSemester;
            return $mhs;
        })->sortByDesc('skor_total')->values();

        return view('beasiswa.ranking', compact('mahasiswa'));
    }

    public function filterLayak()
    {
        $mahasiswa = collect($this->dataMahasiswa)->map(function ($mhs) {
            $skorIpk = $mhs['ipk'] * 25;
            $skorPrestasi = $mhs['prestasi'] * 15;
            $skorEkonomi = (1500000 - $mhs['penghasilan_ortu']) / 1500000 * 35;
            $skorSemester = $mhs['semester'] * 5;
            $mhs['skor_total'] = $skorIpk + $skorPrestasi + $skorEkonomi + $skorSemester;
            return $mhs;
        })->where('skor_total', '>=', 70);

        return view('beasiswa.filter-layak', compact('mahasiswa'));
    }
}
