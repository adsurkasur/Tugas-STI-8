<?php
    session_start();
    require 'cek_database.php';
    $id = $_GET['id'];

    $query = "DELETE FROM mahasiswa WHERE id='$id'";
    //echo ($query);

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data berhasil dihapus"; header("Location: view_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data tidak jadi dihapus"; header("Location: index.php");
        exit(0);
    }
?>