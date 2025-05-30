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
        <title>insert</title>
</head>

<body>
    <!-- Navbar -->
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

<!-- Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Client
                        <a href="view_admin.php" class="btn btn-danger float-end">Cancel</a>
                    </h4>
                </div>
            <div class="card-body">
                <form action="cek_insert.php" method="POST">
                    <div class="mb-3">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Industry</label>
                        <input type="text" name="industry" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Project</label>
                        <input type="text" name="project" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="simpan_data" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#services" class="nav-link px-2 text-muted">Services</a></li>
            <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link px-2 text-muted">Contact</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2025 ProConsulting Group</p>
    </footer>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</home>