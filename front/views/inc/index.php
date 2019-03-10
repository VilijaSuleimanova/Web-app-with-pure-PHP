<?php
// define('DIR', dirname(__DIR__));
// require_once(DIR.'/app/bootstrap.php');
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

  <title></title>
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
  <section>
    <h1>Here All Posts are to be visible</h1>
  </section>

<footer class="bg-info fixed-bottom text-white-50 text-center pt-3">
  <p>Copyright &copy <?=date('Y');?></p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script src="<?=URL?>/../front/js/js.js"></script> -->
</body>
</html>