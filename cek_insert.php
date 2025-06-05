<?php
    session_start();
    require 'cek_database.php';
    
    $name = $_POST['name'];
    $producer = $_POST['producer'];
    $batch_number = $_POST['batch_number'];
    $production_date = $_POST['production_date'];
    $type = $_POST['type'];
    $stock = $_POST['stock'];

    $query = "INSERT INTO cheeses (name, producer, batch_number, production_date, type, stock) VALUES ('$name', '$producer', '$batch_number', '$production_date', '$type', '$stock')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Cheese added successfully";
        header("Location: view_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Failed to add cheese";
        header("Location: insert_data.php");
        exit(0);
    }
?>