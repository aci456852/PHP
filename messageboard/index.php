<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>梁梁的留言板</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="js/jquery-3.3.1.min.js" rel="stylesheet" >
    <link href="js/bootstrap.min.js" rel="stylesheet" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">梁梁的留言板</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">首页<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">联系我</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/login.php" method="post">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">登录</button>
    </form>
  </div>
</nav>
<div class="container">
    <div class="card-group">
      <?php foreach ($all as $message) { ?>
      <div class="card">
        <img src="<?= $message['avatar']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $message['name']?></h5>
          <p class="card-text"><?= $message['content']?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><?= $message['replymessage']?></small>
          <?php if($isAdmin) {?>
          <from action="/message_delete.php" method="post">
            <input type="hidden" name="id" value="<?= $message['id']?>" />
            <button type="submit" class="btn btn-outline-secondary">删除</button>
          </from>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
</div>
<div>
  <form action="/message_add.php" method="post">
      <div class="form-group">
        <label>昵称:</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label>留言内容</label>
        <textarea class="form-control" id="content" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label>选择头像</label>
        <input type="file" class="form-control-file" id="avatar">
      </div>
      <button type="submit" class="btn btn-primary">提交</button>
  </form>
</div>
</body>
</html>
