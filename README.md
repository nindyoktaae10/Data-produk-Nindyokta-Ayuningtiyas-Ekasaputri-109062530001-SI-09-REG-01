# MVC PHP Native - Data Produk

Aplikasi CRUD sederhana untuk mengelola data produk menggunakan PHP Native dengan pola Model-View-Controller (MVC).

## Kebutuhan

- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP atau Laragon
- Git

## Instalasi

1. Clone atau salin project ke folder web server.
2. Import file `database/produk.sql` melalui phpMyAdmin.
3. Sesuaikan konfigurasi koneksi database pada `config/database.php`.
4. Pastikan database `data_produk` sudah berhasil dibuat.
5. Buka aplikasi melalui alamat berikut:

   `http://localhost/Data-produk/public/index.php`

## Struktur MVC

- `app/models/Produk.php` : mengelola akses dan operasi data produk.
- `app/controllers/ProdukController.php` : mengatur alur request, validasi input, dan pemanggilan Model serta View.
- `app/views/produk/` : berisi tampilan daftar produk, formulir tambah produk, dan formulir edit produk.
- `config/` : menyimpan konfigurasi koneksi database.
- `database/produk.sql` : berisi struktur tabel dan data awal produk.
- `public/index.php` : entry point aplikasi dan pengaturan routing.

## Fitur

- Menampilkan daftar produk.
- Menambahkan data produk.
- Mengubah data produk.
- Menghapus data produk.
- Memvalidasi input produk.
- Menyimpan data produk ke database MySQL/MariaDB.

## Database

Nama database: `data_produk`

Nama tabel: `produk`

Data awal menggunakan contoh produk perawatan kulit Cetaphil, seperti Cetaphil Gentle Skin Cleanser, Cetaphil Moisturizing Cream, dan Cetaphil Daily Facial Moisturizer.

## Konsep MVC

- **Model:** menangani operasi data produk pada database.
- **View:** menampilkan daftar produk dan formulir untuk mengelola data.
- **Controller:** mengatur alur aplikasi, memproses input, dan menghubungkan Model dengan View.

## Histori Git

Gunakan perintah `git log --oneline --graph --decorate` melalui terminal untuk melihat tahapan pengembangan project.

Perubahan dokumentasi README dicatat menggunakan Git agar riwayat pengembangan project dapat ditelusuri.