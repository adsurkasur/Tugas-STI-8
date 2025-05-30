<?php
    session_start();
    require 'cek_database.php';
    
    $title = $_POST['nama'];
    $author = $_POST['nim'];
    $isbn = $_POST['tanggal_lahir'];
    $published_date = $_POST['alamat'];
    $genre = $_POST['email']; 
    $availability = $_POST['no_telepon'];

    $query = "INSERT INTO books (title, author, isbn, published_date, genre, availability) VALUES ('$title', '$author', '$isbn', '$published_date', '$genre', '$availability')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Book added successfully";
        header("Location: view_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Failed to add book";
        header("Location: insert_data.php");
        exit(0);
    }
?>