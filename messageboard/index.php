<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>梁梁的留言板</title>
    <link href="js/jquery-3.3.1.min.js" rel="stylesheet" >
    <link href="css/bootstrap.min.css" rel="stylesheet" >    
    <link href="js/bootstrap.min.js" rel="stylesheet" >
</head>
<body>
<?php 
    include("MessageBoardPDO.php");
    $Messageboard = new MessageBoardPDO();
    $all=$Messageboard->queryAll();
    session_start();
    if(isset($_SESSION['role'])&&$_SESSION['role']=='admin')
    {
        $isAdmin=1;
    }else{
        $isAdmin=0;
    }
?>
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
    	<?php if($isAdmin){?>
    	<h5> <span class="badge badge-secondary">当前状态</span> 管理员</h5>
    	<?php }else{ ?>
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">登录</button>
      	<?php }?>
    </form>
  </div>
</nav>
<div class="container">
      <?php foreach ($all as $message) { ?>     
      <div class="card mb-3" style="max-width: 540px; margin-top:30px; ">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?= $message['avatar']?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $message['name']?></h5>
                <p class="card-text"><?= $message['content']?></p>
                <p class="card-text"><small class="text-muted"><?= $message['replymessage']?></small></p>
                <div class="modal-footer">
                    <?php if($isAdmin) {?>
                      <form action="/message_delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $message['id']?>" />
                        <button type="submit" class="btn btn-outline-secondary">删除</button>    
                      </form>
                      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">回复</button>
                      <!-- 模态框（Modal） -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <input type="hidden" name="id" value="<?= $message['id']?>" />
                                    <h4 class="modal-title" id="myModalLabel">回复留言</h4>
                                </div>
                                <div class="modal-body">
									<textarea class="form-control" name="replymessage" rows="3" ></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    <button type="button" class="btn btn-primary">提交回复</button>
                                </div>
                            </div>
                        </div>
                      </div>            
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>
      </div>
      <?php } ?>
</div>

<div class="card text-center" style="margin-bottom:30px; ">
  <div class="card-header">
    	期待你的留言 ｡:.ﾟヽ(｡◕‿◕｡)ﾉﾟ.:｡+ﾟ
  </div>
  <form action="/message_add.php" method="post" enctype="multipart/form-data">
      <div class="form-group row" style="margin-top:30px; ">
        <label for="staticEmail" class="col-sm-2 col-form-label">昵称：</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="name">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">留言内容：</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="content" rows="3" ></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">选择头像：</label>
        <div class="col-sm-10">
          <input type="file" class="form-control-file" name="avatar">
        </div>
      </div> 
      <button type="submit" class="btn btn-primary btn-lg btn-block">提交</button>
  </form>
</div>
</body>
</html>
