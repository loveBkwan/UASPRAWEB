study kasus:
Saya ingin membuat mvp aplikasi web CRUD menggunakan Laravel dengan judul Manajemen Dosen dan Staff. Waktu pembuatan aplikasi yaitu 2 minggu. Jumlah actor yaitu 1. Buatkan daftar alur kerja dan fitur yang harus saya buat beserta deskripsinya.

nama database :
manajemen_dosen_staff

tabel admin :
CREATE TABLE admins (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

tabel dosen :
CREATE TABLE dosens (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nidn VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    telepon VARCHAR(20),
    jabatan VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

tabel staff :
CREATE TABLE staff (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nip VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    telepon VARCHAR(20),
    posisi VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);



susunan folder dan file : 
manajemen-dosen-staff/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── DosenController.php
│   │   │   ├── StaffController.php
│   │   │   └── DashboardController.php (opsional)
│   │   └── Middleware/
│   ├── Models/
│   │   ├── Dosen.php
│   │   └── Staff.php
│
├── database/
│   ├── migrations/
│   │   ├── xxxx_xx_xx_create_dosens_table.php
│   │   └── xxxx_xx_xx_create_staff_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php         ← Layout utama
│   │   │   └── sidebar.blade.php     ← Navigasi samping
│   │   ├── dashboard.blade.php       ← Halaman dashboard
│   │   ├── dosens/
│   │   │   ├── index.blade.php       ← List dosen
│   │   │   ├── create.blade.php      ← Tambah dosen
│   │   │   └── edit.blade.php        ← Edit dosen
│   │   └── staff/
│   │       ├── index.blade.php       ← List staff
│   │       ├── create.blade.php      ← Tambah staff
│   │       └── edit.blade.php        ← Edit staff
│
├── routes/
│   └── web.php                       ← Semua route aplikasi
│
├── public/
│   ├── css/
│   ├── js/
│   └── assets/                       ← Logo atau gambar tambahan
│
├── .env                              ← Konfigurasi database & lainnya
├── composer.json
└── package.json



Fitur Minimum yang Wajib Ada:
Desain antarmuka responsif menggunakan framework CSS (Bootstrap atau Tailwind CSS)
Implementasi fungsi CRUD secara lengkap menggunakan Laravel
Fitur pencarian data
Validasi input pada form

Teknologi yang Digunakan:
Laravel (framework PHP)
Bootstrap atau Tailwind CSS (pilih salah satu)
MySQL (sebagai basis data)
Livewire atau Alpine.js (opsional, sesuai kebutuhan pengembangan)