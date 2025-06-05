<?php 
  require 'cek_database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cheese Central Admin Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <main class="form-signin w-100 m-auto ">
      <div class="container text-center">
        <div class="row justify-content-md-center"> 
        </div>

        <h1 class="h3 mb-3 fw-normal">Admin Login</h1>
        <form method="post" action="cek_login.php">
          <div class="form-floating">
            <input type="username" name="username" class="form-control" id="floatingInput" placeholder="admin username">
            <label for="floatingInput">Admin Username</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="admin password">
            <label for="floatingPassword">Admin Password</label>
          </div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          <p class="mt-5 mb-3 text-muted">&copy; CheeseApp - Ade Surya Ananda - 235100300111009</p>
        </form>
      <a href="index.php">Home</a>
    </main>

</body>
</html>