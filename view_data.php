<?php
  require 'cek_database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cheese Product List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <!-- Container -->
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Cheese List
                <a href="index.php" class="btn btn-danger float-end">Back to Home</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Producer</th>
                  <th>Batch Number</th>
                  <th>Production Date</th>
                  <th>Type</th>
                  <th>Stock</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // Query untuk menampilkan data 
                    $sql = "SELECT * FROM cheeses";
                    $result = $conn->query($sql);

                    // Menampilkan data ke dalam tabel
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . $row["name"] . "</td>";
                          echo "<td>" . $row["producer"] . "</td>";
                          echo "<td>" . $row["batch_number"] . "</td>";
                          echo "<td>" . $row["production_date"] . "</td>";
                          echo "<td>" . $row["type"] . "</td>";
                          echo "<td>" . $row["stock"] . "</td>";
                          echo "</tr>";
                      }
                    } else {
                        echo "<tr><td colspan='8'>No cheeses found.</td></tr>";
                    }
                    // Tutup koneksi ke database
                    $conn->close();
                  ?>
                </tbody></table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  <!-- End Container  -->

    <footer>
      <p class="text-center text-muted">&copy; CheeseApp - Ade Surya Ananda - 235100300111009</p>
    </footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>