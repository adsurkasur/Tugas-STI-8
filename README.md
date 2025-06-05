# CheeseApp

Sistem Distribusi Keju (CheeseApp)

## Deskripsi
CheeseApp adalah sistem web berbasis PHP dan MySQL yang dikembangkan untuk memenuhi tugas Praktikum Sistem dan Teknologi Informasi bersama asisten praktikum Bagus Rijalul Malik. Sistem ini merupakan hasil modifikasi dari template latihan menjadi sistem distribusi keju, sesuai instruksi tugas.

## Fitur Utama
- **Manajemen Data Keju**: Tambah, lihat, edit, dan hapus data keju (CRUD)
- **Manajemen Admin**: Login admin untuk mengelola data keju
- **Pencarian Data**: Fitur pencarian keju
- **Tampilan Modern**: Menggunakan Bootstrap untuk tampilan responsif dan modern

## Struktur Database
- **Tabel admin**: Menyimpan data admin (username, password)
- **Tabel cheeses**: Menyimpan data keju (name, producer, batch_number, production_date, type, stock)

## Cara Instalasi & Menjalankan
1. **Clone atau salin folder ke XAMPP/htdocs**
2. **Import database**
   - Jalankan query pada file `cheese_queries.txt` secara berurutan di phpMyAdmin/MySQL Console
3. **Konfigurasi**
   - Pastikan file `cek_database.php` sudah sesuai dengan konfigurasi MySQL lokal Anda
4. **Jalankan aplikasi**
   - Buka browser dan akses `http://localhost/Tugas-STI-8`

## Akun Admin Default
- Username: `admin`
- Password: `admin`

## File Penting
- `index.php` : Halaman utama CheeseApp
- `login.php` : Halaman login admin
- `view_admin.php` : Daftar data keju (admin)
- `view_data.php` : Daftar data keju (publik)
- `insert_data.php` : Form tambah data keju
- `update_data.php` : Form edit data keju
- `cheese_queries.php` : Fungsi query database (PHP)
- `cheese_queries.txt` : Kumpulan query SQL (untuk setup database)

## Pengembang
- **Ade Surya Ananda** (235100300111009)
- Praktikum Sistem dan Teknologi Informasi
- Asisten Senior: Bagus Rijalul Malik

---

Sistem ini dapat dikembangkan lebih lanjut sesuai kebutuhan distribusi keju atau bisnis serupa. Untuk pertanyaan atau pengembangan lebih lanjut, silakan hubungi pengembang.
