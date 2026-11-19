# UTS Pemrograman Internet – Sistem Seleksi Beasiswa

## 📋 Identitas
- **Nama Mahasiswa**: Saeful Rohman Firdaus
- **NIM**: C2483207015
- **Kelas**: PTI5
- **Dosen Pengampu Mata Kuliah**: Taofik Muhammad, M.Kom

## 📖 Deskripsi Project
Aplikasi Laravel berbasis MVC untuk menghitung skor kelayakan beasiswa mahasiswa
Kriteria penilaian:
1. IPK = 25 %
2. Prestasi = 15 %
3. Penghasilan Orang Tua = 35 %
4. Semester = 5 %

## ✨ Fitur Aplikasi
✅ Menampilkan kriteria penilaian beasiswa
✅ Menghitung skor total tiap mahasiswa
✅ Menampilkan ranking mahasiswa berdasarkan skor tertinggi
✅ Filter mahasiswa skor ≥ 70 (layak beasiswa)

## 🛠️ Teknologi
- Laravel PHP Framework
- PHP
- Blade Template Engine

## 📸 Screenshot Hasil Running Aplikasi
### 1. Halaman Beranda
![Screenshot Beranda](<img width="1920" height="1080" alt="Halaman Beranda" src="https://github.com/user-attachments/assets/5b17dc27-8948-40cc-898d-e2ab47c490ab" />
)

### 2. Halaman Kriteria
![Screenshot Kriteria](<img width="1920" height="1080" alt="Halaman Kriteria" src="https://github.com/user-attachments/assets/fcb1d29e-fc8b-41e3-8922-2858db70f67d" />
)

### 3. Halaman Hitung Skor
![Screenshot Hitung](<img width="1920" height="1080" alt="Halaman Hitung" src="https://github.com/user-attachments/assets/aedf74b6-7257-4f4d-9051-208911ac1ee2" />
)

### 4. Halaman Ranking
![Screenshot Ranking](<img width="1920" height="1080" alt="Halaman Ranking" src="https://github.com/user-attachments/assets/f9cba820-3c8f-451e-85b8-54b438a76a5e" />
)

### 5. Halaman Filter Layak Beasiswa
![Screenshot Filter‑Layak](<img width="1920" height="1080" alt="Halaman Filter-Layak" src="https://github.com/user-attachments/assets/e8b6fb5e-ccd8-49f0-9749-b7f7d27518c3" />
)

## ▶️ Cara Menjalankan Aplikasi
1. Clone repository ini
2. Salin `.env.example` menjadi `.env`
3. Buka terminal pada folder project
4. Jalankan perintah
```bash
composer install
php artisan serve
