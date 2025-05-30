<?php
  require 'cek_database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REPLACETHISTEXT</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <!-- Container -->
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>REPLACETHISTEXT
                <a href="index.php" class="btn btn-danger float-end">REPLACETHISTEXT</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>id</th>
                  <th>nama</th>
                  <th>nim</th>
                  <th>tanggal_lahir</th>
                  <th>alamat</th>
                  <th>email</th>
                  <th>no_telepon</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // Query untuk menampilkan data 
                    $sql = "SELECT * FROM mahasiswa";
                    $result = $conn->query($sql);

                    // Menampilkan data ke dalam tabel
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . $row["nama"] . "</td>";
                          echo "<td>" . $row["nim"] . "</td>";
                          echo "<td>" . $row["tanggal_lahir"] . "</td>";
                          echo "<td>" . $row["alamat"] . "</td>";
                          echo "<td>" . $row["email"] . "</td>";
                          echo "<td>" . $row["no_telepon"] . "</td>";
                          echo "</tr>";
                      }
                    } else {
                        echo "<tr><td colspan='8'>Data tidak ditemukan.</td></tr>";
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