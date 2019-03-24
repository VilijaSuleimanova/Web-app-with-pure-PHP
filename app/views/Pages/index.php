
<?php require_once DIR.'/app/views/inc/header.php';?>
<h1><?= $data['title'];?></h1>

<div class="container">
<?php foreach($data['posts'] as $post) : ?>


<div class="border border-light my-2 p-2">
  <h3><?=$post['Title'];?></h3>
  <hr>
  <p><?= $post['Text'];?></p>
  <p class="small">Created by: <strong><?=substr($post['Username'], 0, 5);?></strong> at: <?=$post['Created_at'];?></p>
</div>
<?php endforeach; ?>
</div>



<?php require_once DIR.'/app/views/inc/footer.php';?>