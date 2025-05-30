<?php
  require 'cek_database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Clients - ProConsulting Group</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <!-- Container -->
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Client Portfolio
                <a href="index.php" class="btn btn-danger float-end">Back to Home</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                  <th>Company Name</th>
                  <th>Industry</th>
                  <th>Project</th>
                  <th>Location</th>
                  <th>Email</th>
                  <th>Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // Query untuk menampilkan data 
                    $sql = "SELECT * FROM clients";
                    $result = $conn->query($sql);

                    // Menampilkan data ke dalam tabel
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . $row["company_name"] . "</td>";
                          echo "<td>" . $row["industry"] . "</td>";
                          echo "<td>" . $row["project"] . "</td>";
                          echo "<td>" . $row["location"] . "</td>";
                          echo "<td>" . $row["email"] . "</td>";
                          echo "<td>" . $row["contact"] . "</td>";
                          echo "</tr>";
                      }
                    } else {
                        echo "<tr><td colspan='8'>No client data found.</td></tr>";
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