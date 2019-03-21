<?php require_once DIR.'/app/views/inc/header.php';?>

<div class="container py-5">
<?= $data['registered']; ?>
  <div class="row">
    <div class="col-md-7 mx-auto">
      <div class="card">
        <div class="card-header text-muted">
          <h4 class="d-inline-block">Login</h4>
        </div>
        <div class="card-body"> 
      
        <!-- Form start -->
          <form action="<?=URL?>/?url=pages/login" method="post" autocomplete="off">

          <!-- Username input -->
            <?= $data['login_name_err'];?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
                </div>
              <input class ="form-control" type="text" name="loginName" value="<?=$_POST['loginName'];?>" placeholder="Enter username">
            </div>

          <!-- Password input -->
              <?= $data['login_password_err'];?>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>
                </div>
                <input class ="form-control" type="password" name="loginPassword" value="<?=$_POST['loginPassword'];?>" placeholder="Enter password">
              </div>

            <!-- Submit -->
            <button class="btn btn-block btn-info" type="submit" name="submit">Login</button>
          </form>
          <!-- Form end -->

        <!-- Card body div -->
        </div>
      <!-- Card div -->
      </div>
    <!-- Col div  -->
    </div>
  <!-- Row div  -->
  </div>
<!-- Container div -->
</div> 




<?php require_once DIR.'/app/views/inc/footer.php';?>