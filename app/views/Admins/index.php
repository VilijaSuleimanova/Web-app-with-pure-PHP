<?php require_once DIR.'/app/views/inc/header.php';?>

<?php require_once DIR.'/app/views/inc/dashboard_left.php';?>


<?php if(empty($data['posts'])) : ?>

  <p>You haven't got posts yet</p>

<?php else : ?>

  <?php foreach($data['posts'] as $post) : ?>

  <div class="card">

    <div class="card-title">

      <h5><?= $post['Title'];?></h5>

    </div>

    <div class="card-text">

      <p><?= $post['Text'];?> </p>

    </div>

  </div>  

  <?php endforeach; ?>

<?php endif; ?>


<?php require_once DIR.'/app/views/inc/dashboard_right.php';?>

<?php require_once DIR.'/app/views/inc/footer.php';?>
