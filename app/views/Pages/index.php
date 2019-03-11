
<?php require_once DIR.'/app/views/inc/header.php';?>
<?php require_once DIR.'/app/views/inc/navbar.php';?>
<h1><?= $data['title'];?></h1>
<ul>
<?php foreach($data['posts'] as $post) : ?>
  <li><?= $post['Title'];?></li>
<?php endforeach; ?>
</ul>
<?php require_once DIR.'/app/views/inc/footer.php';?>