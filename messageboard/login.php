<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>登录</title>

    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="js/jquery-3.3.1.min.js" rel="stylesheet" >
    <link href="js/bootstrap.min.js" rel="stylesheet" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      html,
        body {
          height: 100%;
        }
        
        body {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }
        
        .form-signin {
          width: 100%;
          max-width: 330px;
          padding: 15px;
          margin: auto;
        }
        .form-signin .checkbox {
          font-weight: 400;
        }
        .form-signin .form-control {
          position: relative;
          box-sizing: border-box;
          height: auto;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
    </style>
</head>
<body class="text-center" >
    <form class="form-signin" action="/do_login.php" method="post">
      <img class="mb-4" src="/images/tx.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">登 录</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <input class="btn btn-primary" type="submit" value="Submit">
	</form>
</body>
</html>
