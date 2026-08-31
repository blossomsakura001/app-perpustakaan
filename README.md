Sistem Perpustakaan Digital Kampus
Deskripsi

Aplikasi web untuk mengelola operasional perpustakaan kampus, digunakan oleh petugas/admin untuk mengelola data buku, anggota, dan transaksi peminjaman. Dibangun menggunakan framework Laravel 12.

Tujuan

Membantu petugas perpustakaan mencatat dan mengelola koleksi buku, data anggota, serta proses peminjaman dan pengembalian buku secara digital, menggantikan pencatatan manual yang rawan kesalahan dan sulit ditelusuri.

Cara Menjalankan Project Secara Lokal
Clone repository ini:
bash
   git clone https://github.com/blossomsakura001/app-perpustakaan.git
   cd app-perpustakaan
   git checkout dev
Install dependency PHP:
bash
   composer install
Salin file environment dan sesuaikan konfigurasi database:
bash
   cp .env.example .env

Lalu buka .env dan sesuaikan bagian berikut:

env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_perpustakaan
   DB_USERNAME=root
   DB_PASSWORD=
Generate application key:
bash
   php artisan key:generate
Pastikan database db_perpustakaan sudah dibuat di MySQL (lewat phpMyAdmin atau sejenisnya).
Jalankan development server:
bash
   php artisan serve
Buka http://127.0.0.1:8000 di browser.
Perbedaan Model, View, dan Controller

Menurut pemahaman saya, Model adalah bagian yang mengurus data dan aturan bisnis terkait data tersebut — misalnya bagaimana data buku atau anggota disimpan dan diambil dari database. View adalah bagian yang murni menampilkan antarmuka ke pengguna (HTML), tanpa berisi logika rumit di dalamnya. Sedangkan Controller adalah penghubung antara keduanya: ia menerima permintaan dari pengguna, memanggil Model untuk mengambil atau mengubah data, lalu mengirim data itu ke View supaya bisa ditampilkan.