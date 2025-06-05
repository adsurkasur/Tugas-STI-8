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
        <title>Add Cheese</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cheese Central</a>
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
                        <a class="nav-link disabled" href="view_admin.php">Cheese Data</a>
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

<!-- Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Cheese
                        <a href="view_admin.php" class="btn btn-danger float-end">Cancel</a>
                    </h4>
                </div>
            <div class="card-body">
                <form action="cek_insert.php" method="POST">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Producer</label>
                        <input type="text" name="producer" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Batch Number</label>
                        <input type="text" name="batch_number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Production Date</label>
                        <input type="text" name="production_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Stock</label>
                        <input type="text" name="stock" class="form-control">
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
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cheese Info</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Team</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">&copy; CheeseApp - Ade Surya Ananda - 235100300111009</p>
    </footer>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</home>