<?php
session_start();
require 'cek_database.php';

// Cek apakah session telah di-set
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    <title>wiwiwi</title>
</head>

<body>
    <?php
        if (isset($_POST['submit'])) {
            // Ambil data dari form
            $id = $_POST['id']; 
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $no_telepon = $_POST['no_telepon'];

            //Query untuk update data 
            $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', email = '$email', no_telepon = '$no_telepon' WHERE id = '$id'";
            $hasil = mysqli_query($conn, $query);

            //Jika query berhasil dijalankan, maka akan dilakukan redirect kembali ke halaman detail 
            if ($hasil) {
                header('Location: view_admin.php');
                exit();
            } else {
                echo "Update data gagal: ". mysqli_error($conn);
            }
        } else {
        // Ambil data dari database berdasarkan id 
        $id = $_GET['id'];
        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
        $hasil = mysqli_query($conn, $query);
    }
        
        if (!$hasil) {
            echo "Ambil data gagal: " . mysqli_error($conn);
            exit();
            }
        $data = mysqli_fetch_assoc($hasil);
    ?>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">lab ksa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ne-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="view_admin.php">data mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">log out</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header">update data
                <a href="view_admin.php" class="btn btn-danger float-end">cancel</a>
            </h5>
            <div class="card-body">
                <form method="post">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <div class="mb-3">
                        <label>nama:</label>
                        <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>nim:</label>
                        <input type="text" name="nim" class="form-control" value="<?= $data['nim'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>tanggal_lahir:</label>
                        <input type="text" name="tanggal_lahir" class="form-control" value="<?= $data['tanggal_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>alamat:</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>email:</label>
                        <input type="text" name="email" class="form-control" value="<?= $data['email'] ?>">
                    <div class="mb-3">
                        <label>no_telepon:</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?= $data['no_telepon'] ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php

// Tutup koneksi ke database
mysqli_close($conn);
?>