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
            $company_name = $_POST['company_name'];
            $industry = $_POST['industry'];
            $project = $_POST['project'];
            $location = $_POST['location'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];

            //Query untuk update data 
            $query = "UPDATE clients SET company_name = '$company_name', industry = '$industry', project = '$project', location = '$location', email = '$email', contact = '$contact' WHERE id = '$id'";
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
        $query = "SELECT * FROM clients WHERE id = '$id'";
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
            <a class="navbar-brand" href="#">ProConsulting Group</a>
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
                        <a class="nav-link disabled" href="view_admin.php">Client Portfolio</a>
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
            <h5 class="card-header">Update Client
                <a href="view_admin.php" class="btn btn-danger float-end">Cancel</a>
            </h5>
            <div class="card-body">
                <form method="post">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <div class="mb-3">
                        <label>Company Name:</label>
                        <input type="text" name="company_name" class="form-control" value="<?= $data['company_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Industry:</label>
                        <input type="text" name="industry" class="form-control" value="<?= $data['industry'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Project:</label>
                        <input type="text" name="project" class="form-control" value="<?= $data['project'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Location:</label>
                        <input type="text" name="location" class="form-control" value="<?= $data['location'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="<?= $data['email'] ?>">
                    <div class="mb-3">
                        <label>Contact:</label>
                        <input type="text" name="contact" class="form-control" value="<?= $data['contact'] ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#services" class="nav-link px-2 text-muted">Services</a></li>
            <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link px-2 text-muted">Contact</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2025 ProConsulting Group</p>
    </footer>
    <?php

// Tutup koneksi ke database
mysqli_close($conn);
?>