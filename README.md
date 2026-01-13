# 📚 PrepareAlya - Sistem Manajemen Data Mahasiswa

Aplikasi web sederhana untuk mengelola data mahasiswa menggunakan Laravel. Project ini dibuat sebagai pembelajaran Web Tabular dan Database CRUD (Create, Read, Update, Delete).

![Laravel](https://img.shields.io/badge/Laravel-11.x-red)
![PHP](https://img.shields.io/badge/PHP-8.1+-blue)
![MySQL](https://img.shields.io/badge/MySQL-8.0-orange)

## ✨ Fitur

- ✅ **Tampilkan Data Mahasiswa** (Web Tabular)
- ✅ **Tambah Data Mahasiswa** (Create)
- ✅ **Edit Data Mahasiswa** (Update)
- ✅ **Hapus Data Mahasiswa** (Delete)
- ✅ **Validasi Form Input**
- ✅ **Notifikasi Sukses/Error**
- ✅ **Konfirmasi Hapus Data**
- ✅ **Responsive Design**

## 🛠 Teknologi yang Digunakan

- **Framework:** Laravel 11.x
- **Backend:** PHP 8.1+
- **Database:** MySQL 8.0
- **Frontend:** HTML, CSS (Inline), Blade Template
- **Server:** Laragon/XAMPP
- **Tools:** Composer, Git

## 📋 Prasyarat

Pastikan sistem Anda sudah terinstall:

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Laragon/XAMPP (recommended)
- Git

## 🚀 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/preparealya.git
cd preparealya
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Konfigurasi Environment

Copy file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 4. Setup Database

Buat database baru di MySQL (via phpMyAdmin/SQLyog):

```sql
CREATE DATABASE preparealya;
```

Edit file `.env` sesuai konfigurasi database Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=preparealya
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan Migration

```bash
php artisan migrate
```

### 6. (Opsional) Isi Data Dummy

```bash
php artisan db:seed --class=MahasiswaSeeder
```

### 7. Jalankan Server

```bash
php artisan serve
```

Aplikasi akan berjalan di: **http://127.0.0.1:8000/mahasiswa**

## 📖 Cara Penggunaan

### 1. Tampil Data Mahasiswa

Buka browser: `http://127.0.0.1:8000/mahasiswa`

### 2. Tambah Data Mahasiswa

- Klik tombol **"➕ Tambah Baru"**
- Isi form (Nama, NIM, Jurusan)
- Klik **"💾 Simpan"**

### 3. Edit Data Mahasiswa

- Klik tombol **"✏️ Edit"** pada baris data
- Ubah data yang diinginkan
- Klik **"💾 Update"**

### 4. Hapus Data Mahasiswa

- Klik tombol **"🗑️ Hapus"** pada baris data
- Konfirmasi penghapusan
- Data akan terhapus

## 📁 Struktur Folder Penting

```
preparealya/
├── app/
│   ├── Http/Controllers/
│   │   └── MahasiswaController.php    # Controller CRUD
│   └── Models/
│       └── Mahasiswa.php               # Model Eloquent
├── database/
│   ├── migrations/
│   │   └── 2026_01_13_*_create_mahasiswa_table.php
│   └── seeders/
│       └── MahasiswaSeeder.php
├── resources/views/mahasiswa/
│   ├── index.blade.php                 # Tabel (READ)
│   ├── create.blade.php                # Form Tambah (CREATE)
│   └── edit.blade.php                  # Form Edit (UPDATE)
└── routes/
    └── web.php                         # Routing
```

## 🗄 Struktur Database

### Tabel: `mahasiswa`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id | BIGINT | Primary Key |
| nama | VARCHAR(255) | Nama mahasiswa |
| nim | VARCHAR(255) | Nomor Induk |
| jurusan | VARCHAR(255) | Jurusan |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu update |

## 🎯 Konsep yang Dipelajari

1. **MVC Pattern** - Model, View, Controller
2. **CRUD Operations** - Create, Read, Update, Delete
3. **Database Migration** - Schema management
4. **Eloquent ORM** - Active Record pattern
5. **Blade Templating** - Template engine Laravel
6. **RESTful Routing** - Standard web routes
7. **Form Validation** - Input validation
8. **Session Flash** - Feedback messages

## 🔧 Route List

| Method | URI | Controller Method | Fungsi |
|--------|-----|-------------------|--------|
| GET | `/mahasiswa` | index() | Tampil tabel |
| GET | `/mahasiswa/create` | create() | Form tambah |
| POST | `/mahasiswa` | store() | Simpan data |
| GET | `/mahasiswa/{id}/edit` | edit() | Form edit |
| PUT | `/mahasiswa/{id}` | update() | Update data |
| DELETE | `/mahasiswa/{id}` | destroy() | Hapus data |

## 🧪 Testing

Jalankan test manual:

```bash
# 1. Test CREATE
- Tambah data mahasiswa baru
- Cek di database

# 2. Test READ
- Buka /mahasiswa
- Pastikan data tampil

# 3. Test UPDATE
- Edit salah satu data
- Cek perubahan tersimpan

# 4. Test DELETE
- Hapus salah satu data
- Cek data hilang dari database
```

## 💡 Tips

- Gunakan `php artisan route:list` untuk melihat semua routes
- Gunakan `php artisan migrate:fresh --seed` untuk reset database
- Cek logs error di `storage/logs/laravel.log`

## 🤝 Kontribusi

Contributions, issues, dan feature requests sangat diterima!

## 📄 Lisensi

Project pembelajaran - Free to use

## 👨‍💻 Author

**Alya Triswani**

## 🙏 Acknowledgments

- Laravel Documentation
- Tutorial Web Tabular & Database
- Community support


