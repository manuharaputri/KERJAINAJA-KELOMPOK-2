# Aplikasi Pencarian Mitra

## Deskripsi
Aplikasi yang saya buat adalah aplikasi pencarian mitra berbasis web menggunakan Laravel.  
Tujuan dari aplikasi ini adalah untuk membantu pengguna menemukan mitra berdasarkan keahlian atau profesi, seperti teknisi AC, admin media sosial, fotografer, dan lain-lain.

## Fitur Utama

### 1. Menampilkan Data Mitra (READ)
Sistem menampilkan seluruh data mitra yang diambil dari database, seperti:
- Nama lengkap
- Nomor WhatsApp
- Kota
- Keahlian
- Foto KTP
- Foto selfie
- Tanggal daftar
- Layanan

### 2. Pencarian Berdasarkan Keahlian
Pengguna dapat mencari mitra dengan memasukkan kata kunci keahlian.  
Sistem menggunakan query **LIKE**, sehingga pencarian fleksibel dan tetap dapat menampilkan hasil yang relevan.

## Tampilan Web

Pada halaman utama terdapat:
- Form input pencarian di bagian atas  
- Tabel data mitra di bagian bawah  

Ketika pengguna memasukkan kata kunci, misalnya **“Teknisi AC”**, maka tabel akan menampilkan data yang sesuai.  
Jika data tidak ditemukan, sistem akan menampilkan pesan **“Data tidak ditemukan”**.

## Tech Stack

Aplikasi ini dibangun menggunakan:
- **Laravel** (Framework)
- **PHP** (Bahasa Pemrograman)
- **MySQL** (Database)
- **Blade Template (HTML & CSS)** (Tampilan)
