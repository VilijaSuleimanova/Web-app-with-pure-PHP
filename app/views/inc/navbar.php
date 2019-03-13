  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="<?=URL?>"><?=TITLE?></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navlists"><i class="fas fa-bars"></i></button>
      <!-- Left side menu -->
      <div class="collapse navbar-collapse justify-content-start" id="navlists">
        <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link" href="<?=URL?>">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?=URL?>/?url=pages/about">About</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Contact Us</a>
         </li>
        </ul>
        <!-- Right side menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navlists">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <section>