<?php
// cheese_queries.php
// All database queries for CheeseApp

function get_cheese_by_id($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
    $query = "SELECT * FROM cheeses WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function update_cheese($conn, $id, $name, $producer, $batch_number, $production_date, $type, $stock) {
    $id = mysqli_real_escape_string($conn, $id);
    $name = mysqli_real_escape_string($conn, $name);
    $producer = mysqli_real_escape_string($conn, $producer);
    $batch_number = mysqli_real_escape_string($conn, $batch_number);
    $production_date = mysqli_real_escape_string($conn, $production_date);
    $type = mysqli_real_escape_string($conn, $type);
    $stock = mysqli_real_escape_string($conn, $stock);

    $query = "UPDATE cheeses SET 
        name = '$name', 
        producer = '$producer', 
        batch_number = '$batch_number', 
        production_date = '$production_date', 
        type = '$type', 
        stock = '$stock' 
        WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function insert_cheese($conn, $name, $producer, $batch_number, $production_date, $type, $stock) {
    $name = mysqli_real_escape_string($conn, $name);
    $producer = mysqli_real_escape_string($conn, $producer);
    $batch_number = mysqli_real_escape_string($conn, $batch_number);
    $production_date = mysqli_real_escape_string($conn, $production_date);
    $type = mysqli_real_escape_string($conn, $type);
    $stock = mysqli_real_escape_string($conn, $stock);

    $query = "INSERT INTO cheeses (name, producer, batch_number, production_date, type, stock) 
        VALUES ('$name', '$producer', '$batch_number', '$production_date', '$type', '$stock')";
    return mysqli_query($conn, $query);
}

function delete_cheese($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
    $query = "DELETE FROM cheeses WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function get_all_cheeses($conn) {
    $query = "SELECT * FROM cheeses";
    return mysqli_query($conn, $query);
}
?>
