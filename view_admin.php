<?php
  session_start();
  require 'cek_database.php';

  // Cek apakah session telah di-set
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <title>Data</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Library Central</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="view_admin.php">Book Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">Logout</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- List Data -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Book Data
              <a href="insert_data.php" class="btn btn-success float-end">Add Book</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead class="text-left">
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
                  // Query untuk memanggil data
                  $sql = "SELECT * FROM books";
                  $result = $conn->query($sql);

                  // Tampilkan data ke dalam tabel
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
                      
                      echo "<td> <a href=update_data.php?id=".$row["id"]." class='btn btn-warning btn-sm'>Edit</a>
                      <a href=delete_data.php?id=".$row["id"]." class='btn btn-danger btn-sm'>Remove</a>";
                      echo "</tr>";         
                    }
                  } else {
                      echo "<tr><td colspan='8'>No books found.</td></tr>";
                  }
                  // Tutup koneksi ke database
                  $conn->close();
                ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                  
  <!-- Footer -->
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Library Info</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Team</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
      </ul>
      <p class="text-center text-muted">&copy; LibraryApp</p>
    </footer>
  </div>

  <!-- Panggil JS Bootstrap -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>