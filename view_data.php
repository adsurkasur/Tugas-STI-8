<?php
  require 'cek_database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Book List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <!-- Container -->
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Book List
                <a href="index.php" class="btn btn-danger float-end">Back to Home</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>ISBN</th>
                  <th>Published Date</th>
                  <th>Genre</th>
                  <th>Availability</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // Query untuk menampilkan data 
                    $sql = "SELECT * FROM books";
                    $result = $conn->query($sql);

                    // Menampilkan data ke dalam tabel
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . $row["title"] . "</td>";
                          echo "<td>" . $row["author"] . "</td>";
                          echo "<td>" . $row["isbn"] . "</td>";
                          echo "<td>" . $row["published_date"] . "</td>";
                          echo "<td>" . $row["genre"] . "</td>";
                          echo "<td>" . $row["availability"] . "</td>";
                          echo "</tr>";
                      }
                    } else {
                        echo "<tr><td colspan='8'>No books found.</td></tr>";
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

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>