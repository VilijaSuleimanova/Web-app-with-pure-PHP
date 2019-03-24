<?php require_once DIR.'/app/views/inc/header.php';?>

<?php require_once DIR.'/app/views/inc/dashboard_left.php';?>


<form action="" method="post">

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php $_POST['title']?>" placeholder="Post title">
    <small id="titleFIeld" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content" name="content" value="<?php $_POST['content']?>" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-info">Create</button>

</form>

<?php require_once DIR.'/app/views/inc/dashboard_right.php';?>

<?php require_once DIR.'/app/views/inc/footer.php';?>