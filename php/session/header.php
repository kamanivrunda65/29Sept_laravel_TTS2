<?php
session_start();
if (isset($_POST['login'])) {
     echo "<pre>";
     print_r($_REQUEST);
     print_r($_POST);
    if ($_POST['username'] == "ABC" && $_POST['password'] == "123" ) { 
            $_SESSION['UserData'] = array("username"=>"ABC","Location"=>"PQR");
            
        ?>
            <script>
                alert('Login success')
                window.location.href = "dashboard.php";
            </script>
    <?php
    }else{
        echo "<script>alert('Invalid user')</script>";
    }
    # code...
}
 
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main>
    <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-4 text-white">Home</a></li>
          <li><a href="feature.php" class="nav-link px-4 text-white">Features</a></li>
          <li><a href="contact.php" class="nav-link px-4 text-white">Contact</a></li>
          <li><a href="product.php" class="nav-link px-4 text-white">Products</a></li>
          <li><a href="about.php" class="nav-link px-4 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
            <?php if (isset($_SESSION['UserData'])) { ?>
          <a href="logout.php"><button type="button" class="btn btn-outline-light me-2">Logout</button></a>
          

          <?php } else { ?>
          <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
        <a href="singup.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
          <?php } ?>
          <a href="dashboard.php"><button type="button" class="btn btn-outline-light me-2">Cart</button></a>                  
        </div>
      </div>
    </div>
  </header>


    </main>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.jss" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <style>
      tr,th,td{
        border: 1px solid ;
        padding: 8px;
      }
    </style>
   

