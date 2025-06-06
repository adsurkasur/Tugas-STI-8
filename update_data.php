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
    
    <title>Edit Cheese</title>
</head>

<body>
<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-info text-center"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
<?php endif; ?>
<?php
    if (isset($_POST['submit'])) {
        // Ambil data dari form
        $id = $_POST['id']; 
        $name = $_POST['name'];
        $producer = $_POST['producer'];
        $batch_number = $_POST['batch_number'];
        $production_date = $_POST['production_date'];
        $type = $_POST['type'];
        $stock = $_POST['stock'];

        //Query untuk update data 
        $query = "UPDATE cheeses SET name = '$name', producer = '$producer', batch_number = '$batch_number', production_date = '$production_date', type = '$type', stock = '$stock' WHERE id = '$id'";
        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            $_SESSION['message'] = "Cheese updated successfully";
            header('Location: view_admin.php');
            exit();
        } else {
            $_SESSION['message'] = "Failed to update cheese: ". mysqli_error($conn);
            header('Location: view_admin.php');
            exit();
        }
    } else {
        // Ambil data dari database berdasarkan id 
        $id = $_GET['id'];
        $query = "SELECT * FROM cheeses WHERE id = '$id'";
        $hasil = mysqli_query($conn, $query);
    }
        
        if (!$hasil) {
            echo "Failed to retrieve cheese data: " . mysqli_error($conn);
            exit();
            }
        $data = mysqli_fetch_assoc($hasil);
    ?>
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
    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header">Edit Cheese
                <a href="view_admin.php" class="btn btn-danger float-end">Cancel</a>
            </h5>
            <div class="card-body">
                <form method="post">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <div class="mb-3">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Producer:</label>
                        <input type="text" name="producer" class="form-control" value="<?= $data['producer'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Batch Number:</label>
                        <input type="text" name="batch_number" class="form-control" value="<?= $data['batch_number'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Production Date:</label>
                        <input type="text" name="production_date" class="form-control" value="<?= $data['production_date'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Type:</label>
                        <input type="text" name="type" class="form-control" value="<?= $data['type'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Stock:</label>
                        <input type="text" name="stock" class="form-control" value="<?= $data['stock'] ?>">
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