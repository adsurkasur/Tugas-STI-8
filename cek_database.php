<?php
    // Informasi koneksi database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cheese_db";

    // Membuat koneksi ke database
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Memeriksa apakah koneksi berhasil
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    //echo "Koneksi berhasil";
?>