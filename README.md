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

## Query SQL Penting
```sql
-- 1. Membuat database baru untuk CheeseApp
CREATE DATABASE cheese_db;

-- 2. Menggunakan database cheese_db
USE cheese_db;

-- 3. Membuat tabel admin untuk login administrator
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Primary key, auto increment
    username VARCHAR(50) NOT NULL UNIQUE, -- Username admin, harus unik
    password VARCHAR(255) NOT NULL -- Password admin
);

-- 4. Menambahkan user admin (ganti username/password sesuai kebutuhan)
INSERT INTO admin (username, password) VALUES ('admin', 'admin');

-- 5. Membuat tabel cheeses untuk data keju
CREATE TABLE cheeses (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Primary key, auto increment
    name VARCHAR(100) NOT NULL, -- Nama keju
    producer VARCHAR(100) NOT NULL, -- Produsen keju
    batch_number VARCHAR(50) NOT NULL, -- Nomor batch produksi
    production_date DATE NOT NULL, -- Tanggal produksi
    type VARCHAR(50) NOT NULL, -- Jenis keju
    stock INT NOT NULL -- Stok keju
);

-- 6. Menampilkan seluruh data keju
SELECT * FROM cheeses;

-- 7. Menampilkan data keju berdasarkan ID
SELECT * FROM cheeses WHERE id = ?;

-- 8. Menambah data keju baru
INSERT INTO cheeses (name, producer, batch_number, production_date, type, stock)
VALUES (?, ?, ?, ?, ?, ?);

-- 9. Mengubah data keju berdasarkan ID
UPDATE cheeses SET
    name = ?,
    producer = ?,
    batch_number = ?,
    production_date = ?,
    type = ?,
    stock = ?
WHERE id = ?;

-- 10. Menghapus data keju berdasarkan ID
DELETE FROM cheeses WHERE id = ?;
```

## Cara Instalasi & Menjalankan
1. **Clone atau salin folder ke XAMPP/htdocs**
2. **Import database**
   - Jalankan query pada bagian "Query SQL Penting" di atas secara berurutan di phpMyAdmin/MySQL Console
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
- Asisten Praktikum: Bagus Rijalul Malik
