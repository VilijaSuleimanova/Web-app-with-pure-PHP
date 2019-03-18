<?php require_once DIR.'/app/views/inc/header.php';?>
<?= $data['title'];?>

<div class="container py-5">
  <div class="row">
    <div class="col-md-7 mx-auto">
      <div class="card">
        <div class="card-header text-muted">
                <h4 class="d-inline-block">Account Register</h4>
                <!-- Modal trigger -->
                <a href="<?=URL?>/?url=pages/login" class="btn btn-outline-info float-right" id="loginbtn"></a>
        </div>

        <div class="card-body">
        
                <!-- Form start -->
                <form action="<?=URL?>/?url=pages/register" method="post" autocomplete="off">

                <!-- Username input -->
                  <small id="un"></small>
                  <?= $data['name_err'];?>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                      </div>
                    <input class ="form-control" type="text" name="name" id="username" value="<?=$_POST['name'];?>" placeholder="Enter new username">
                    </div>
                    

                  <!-- Email input -->
                    <?= $data['email_err'];?>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-at"></i>
                        </span>
                      </div>
                      <input class ="form-control" type="email" name="email" value="<?=$_POST['email'];?>" placeholder="Enter your email">
                    </div>
                    

                <!-- Password input -->
                   <small id="ps"></small>
                   <?= $data['password_err'];?>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-key"></i>
                        </span>
                      </div>
                      <input class ="form-control" type="password" name="password" id="password" value="<?=$_POST['password'];?>" placeholder="Enter new password">
                    </div>
                    

                  <!-- Confirm password input -->
                    <?= $data['confirm_password_err'];?>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </span>
                      </div>
                      <input class ="form-control" type="password" name="confirm_password" value="<?=$_POST['confirm_password'];?>" placeholder="Confirm password">  
                    </div>
                    

                  <!-- Submit -->
                  <input class="btn btn-block btn-info" type="submit" value="Register">
                </form>
                <!-- Form end -->

        <!-- Card body div -->
        </div>
      <!-- Card div -->
      </div>
    <!-- Col div -->
    </div>
  <!-- Row div -->
  </div>
<!-- Container div -->
</div>

<?php require_once DIR.'/app/views/inc/footer.php';?>