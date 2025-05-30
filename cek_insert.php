<?php
    session_start();
    require 'cek_database.php';
    
    $company_name = $_POST['company_name'];
    $industry = $_POST['industry'];
    $project = $_POST['project'];
    $location = $_POST['location'];
    $email = $_POST['email']; 
    $contact = $_POST['contact'];

    $query = "INSERT INTO clients (company_name,industry,project,location,email,contact) VALUES ('$company_name','$industry', '$project', '$location','$email', '$contact')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Data Berhasil Ditambahkan";
        header("Location: view_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Gagal Ditambahkan";
        header("Location: insert_data.php");
        exit(0);
    }
?>