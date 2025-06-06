<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CheeseApp by Ade</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'login_failed'): ?>
  <div class="alert alert-danger text-center">Login failed: Invalid admin credentials.</div>
<?php endif; ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
    </nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cheese Central</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_data.php">Cheese List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Admin Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Container 1 -->
<div class="container-md">
    <div class="jumbotron jumbotron-fluid" >
        <div class="container " >
          <h1 class="display-4">Welcome to Cheese Central</h1>
          <p class="lead">Manage your cheese distribution and inventory with ease.</p>
        </div>
      </div>
      <!-- Slider-->
        <div id="carouselExampleIndicators" class="carousel slide  border-bottom pb-3 mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/01.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/02.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/03.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/04.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  
</div>   

<!--Container 2-->
<div class="border-bottom pb-3 mb-5 container text-center shadow">
    <!--Card-->
    <h1><b>Featured Cheeses</b></h1>
    <div class="card-group">
  <div class="card">
    <img src="img/01.jpg" class="card-img-top" alt="Cheddar Cheese">
    <div class="card-body">
      <h5 class="card-title">Cheddar Cheese</h5>
      <p class="card-text">A popular cheese known for its sharp taste and firm texture, perfect for sandwiches and snacks.</p>
      <p class="card-text"><small class="text-muted">In Stock</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/02.jpg" class="card-img-top" alt="Brie Cheese">
    <div class="card-body">
      <h5 class="card-title">Brie Cheese</h5>
      <p class="card-text">A soft French cheese with a creamy interior and edible rind, ideal for cheese boards and appetizers.</p>
      <p class="card-text"><small class="text-muted">In Stock</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/03.jpg" class="card-img-top" alt="Gouda Cheese">
    <div class="card-body">
      <h5 class="card-title">Gouda Cheese</h5>
      <p class="card-text">A mild, yellow cheese from the Netherlands, great for melting and snacking.</p>
      <p class="card-text"><small class="text-muted">In Stock</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/04.jpg" class="card-img-top" alt="Parmesan Cheese">
    <div class="card-body">
      <h5 class="card-title">Parmesan Cheese</h5>
      <p class="card-text">A hard, aged cheese with a rich, nutty flavor, perfect for grating over pasta and salads.</p>
      <p class="card-text"><small class="text-muted">In Stock</small></p>
    </div>
  </div>
</div>
</div>

<!--Footer-->
<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cheese Info</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Team</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
  </ul>
  <p class="text-center text-muted">&copy; CheeseApp - Ade Surya Ananda - 235100300111009</p>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>