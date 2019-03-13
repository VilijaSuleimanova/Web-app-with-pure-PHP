<?php require_once DIR.'/app/views/inc/header.php';?>
<?= $data['title'];?>

<div class="container py-5">
  <div class="row">
    <div class="col-md-7 mx-auto">
      <div class="card">
        <div class="card-header text-muted">
                <h4 class="d-inline-block">Account Register</h4>
                <!-- Modal trigger -->
                <a href="<?=URL?>/?url=pages/login" class="btn btn-outline-info float-right" id="loginbtn" data-toggle="modal" data-target="#loginModal"></a>
        </div>

        <div class="card-body"> 

                <!-- Form start -->
                <form action="<?=URL?>/?url=pages/register" method="post" autocomplete="off">

                <!-- Username input -->
                  <small id="un"></small>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                      </div>
                    <input class ="form-control" type="text" name="name" id="username" placeholder="Enter new username">
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
                   <small id="ps"></small>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-key"></i>
                        </span>
                      </div>
                      <input class ="form-control" type="password" name="password" id="password" placeholder="Enter new password">
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





           <!-- Modal -->
           <div class="modal" id="loginModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                      <button class="btn btn-outline-info close" data-dismiss="modal">X</button>
                        <div class="container py-5">
                          <div class="row">
                            <div class="mx-auto">
                              <div class="card">
                                <div class="card-header text-muted">
                                  <h4 class="modal-title">LogIn</h4>
                                </div>
                              <div class="modal-body">
                              <form action="<?=URL?>/?url=pages/register" method="post">

                                <!-- Username input -->
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-user"></i>
                                    </span>
                                  </div>
                                  <input class ="form-control" type="text" name="name" id="username" placeholder="Enter username">
                                </div>

                                <!-- Password input -->
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">   
                                      <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                      </span>
                                    </div>
                                    <input class ="form-control" type="password" name="password" id="password" placeholder="Enter password">
                                  </div>
                                  <!-- Login button -->
                                  <!-- <button class="btn btn-block btn-info" type="submit" name="submit">Login</button> -->

                                </form>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<?php require_once DIR.'/app/views/inc/footer.php';?>