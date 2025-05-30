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
            $title = $_POST['nama'];
            $author = $_POST['nim'];
            $isbn = $_POST['tanggal_lahir'];
            $published_date = $_POST['alamat'];
            $genre = $_POST['email'];
            $availability = $_POST['no_telepon'];

            //Query untuk update data 
            $query = "UPDATE books SET title = '$title', author = '$author', isbn = '$isbn', published_date = '$published_date', genre = '$genre', availability = '$availability' WHERE id = '$id'";
            $hasil = mysqli_query($conn, $query);

            //Jika query berhasil dijalankan, maka akan dilakukan redirect kembali ke halaman detail 
            if ($hasil) {
                header('Location: view_admin.php');
                exit();
            } else {
                echo "Failed to update book: ". mysqli_error($conn);
            }
        } else {
        // Ambil data dari database berdasarkan id 
        $id = $_GET['id'];
        $query = "SELECT * FROM books WHERE id = '$id'";
        $hasil = mysqli_query($conn, $query);
    }
        
        if (!$hasil) {
            echo "Failed to retrieve book data: " . mysqli_error($conn);
            exit();
            }
        $data = mysqli_fetch_assoc($hasil);
    ?>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library Central</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ne-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="view_admin.php">Book Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Logout</a>
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
            <h5 class="card-header">Edit Book
                <a href="view_admin.php" class="btn btn-danger float-end">Cancel</a>
            </h5>
            <div class="card-body">
                <form method="post">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <div class="mb-3">
                        <label>Title:</label>
                        <input type="text" name="nama" class="form-control" value="<?= $data['title'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Author:</label>
                        <input type="text" name="nim" class="form-control" value="<?= $data['author'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>ISBN:</label>
                        <input type="text" name="tanggal_lahir" class="form-control" value="<?= $data['isbn'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Published Date:</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $data['published_date'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Genre:</label>
                        <input type="text" name="email" class="form-control" value="<?= $data['genre'] ?>">
                    <div class="mb-3">
                        <label>Availability:</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?= $data['availability'] ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
    <?php

// Tutup koneksi ke database
mysqli_close($conn);
?>