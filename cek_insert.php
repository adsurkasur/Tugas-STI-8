<?php
    session_start();
    require 'cek_database.php';
    
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email']; 
    $no_telepon = $_POST['no_telepon'];

    $query = "INSERT INTO mahasiswa (nama,nim,tanggal_lahir,alamat,email,no_telepon) VALUES ('$nama','$nim', '$tanggal_lahir', '$alamat','$email', '$no_telepon')";
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