<?php
define('DIR', dirname(__DIR__));
require_once(DIR.'/app/bootstrap.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Simple web app">
  <meta name="author" content="Vilija Suleimanova">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=URL?>/../front/css/styles.css">

  <title><?=TITLE?></title>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">Brand</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navlists"><i class="fas fa-bars"></i></button>
      <div class="collapse navbar-collapse justify-content-end" id="navlists">
        <ul class="navbar-nav ">
         <li class="nav-item">
           <a class="nav-link" href="#">aaa</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">bbb</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">ccc</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">ddd</a>
         </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="bg-light">
      <!-- <div class="bg-light">
      <h1>Some text</h1>
      <p>Some text</p>
      </div> -->
     <div class="container py-5">
       <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card">
              <div class="card-header">
                <h4 class="text-muted">Account Register</h4>
              </div>
              <div class="card-body"> 

                <!-- Form start -->
                <form action="" method="post" autocomplete="off">

                <!-- Username input -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                      </div>
                    <input class ="form-control" type="text" name="name" id="username" placeholder="Enter new username">
                    <small id="un"></small>
                    </div>

                  <!-- Email input -->
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-at"></i>
                        </span>
                      </div>
                      <input class ="form-control" type="email" name="email" placeholder="Enter your email">
                    </div>

                <!-- Password input -->
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-key"></i>
                        </span>
                      </div>
                      <input class ="form-control" type="password" name="password" placeholder="Enter new password">
                      <!-- <small class="form-text text-muted">Choose password using at least 7 of alphanumeric characters (letters and numbers) and symbols</small> -->
                    </div>

                  <!-- Confirm password input -->
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </span>
                      </div>
                      <input class ="form-control" type="password_confirm" name="password_confirm" placeholder="Confirm password">
                    </div>

                  <!-- Submit -->
                  <button class="btn btn-block btn-info" type="submit">Register</button>
                </form>
                <!-- Form end -->

              </div>
            </div>
          </div>
        </div>
</section>
<footer class="bg-info fixed-bottom text-white-50 text-center pt-3">
  <p>Copyright &copy <?=date('Y');?></p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?=URL?>/../front/js/js.js"></script>
</body>
</html>