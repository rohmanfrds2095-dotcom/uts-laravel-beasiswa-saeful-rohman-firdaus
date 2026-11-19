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
![Screenshot Beranda](<img width="1920" height="1080" alt="Halaman Beranda" src="https://github.com/user-attachments/assets/06e497c0-a635-4908-857e-964551d5c795" />
)

### 2. Halaman Kriteria
![Screenshot Kriteria](<img width="1920" height="1080" alt="Halaman Kriteria" src="https://github.com/user-attachments/assets/960333c3-c1a4-4130-ad95-6fed1e0fcdaa" />)

### 3. Halaman Hitung Skor
![Screenshot Hitung](<img width="1920" height="1080" alt="Halaman Hitung" src="https://github.com/user-attachments/assets/9d9ab585-7978-41b3-93c7-912d9c760157" />)

### 4. Halaman Ranking
![Screenshot Ranking](<img width="1920" height="1080" alt="Halaman Ranking" src="https://github.com/user-attachments/assets/a153bc8f-3b10-4d9b-8b4b-efb68d4b18e3" />)

### 5. Halaman Filter Layak Beasiswa
![Screenshot Filter‑Layak](<img width="1920" height="1080" alt="Halaman Filter-Layak" src="https://github.com/user-attachments/assets/ae9995cc-c0e6-4eef-a0f7-80ddde108607" />)

## ▶️ Cara Menjalankan Aplikasi
1. Clone repository ini
2. Salin `.env.example` menjadi `.env`
3. Buka terminal pada folder project
4. Jalankan perintah
```bash
composer install
php artisan serve
