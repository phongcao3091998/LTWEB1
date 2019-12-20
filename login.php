<?php 
  require_once 'init.php';
?>
<?php if(isset($_POST['email']) && isset($_POST['password'])): ?>
<?php 

    $email=$_POST['email'];
    $password=$_POST['password'];
    $success=false;

    $user=findUserByEmail($email);
    if($user && password_verify($password,$user['password'])){
        $success=true;
        $_SESSION['userId']= $user['id'];
    }
?>
<?php if($success):?>
<!-- <div class="alert alert-success mt-2 text-center" role="alert">
    Đăng nhập thành công!
</div> -->
  <?php
  header('Location: index.php');
  ?>
<?php else: ?>
<div class="alert alert-danger mt-2 text-center" role="alert">
    Đăng nhập thất bại!
</div>
<?php endif; ?>
<?php else: ?>
<hr>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">

    <!-- Bootstrap CSS -->
    <link href="/docs/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    </style>
    <!-- Custom styles for this template -->
    <link href="/docs/css/signing.css" rel="stylesheet">
  </head>
<body class="text-center"  style= 'background-image: url(/docs/css/background2.jpg); background-size: cover; float: top'>
    <h1 class="h3 mb-3 font-weight-normal" style ='float: left'>Hệ thống mạng xã hội<br>   lớn nhất VN</h1>
    <form  class="form-signin" action="login.php"
        method="POST">
            <img class="mb-4" src="bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Đăng Nhập</h1>
            <label for="inputEmail" class="sr-only">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>        
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required> 
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_submit">Đăng Nhập</button>
            <label>Chưa có tài khoản ?</label>
            <a href="register.php" target="_blank" class="btn btn-secondary my-2" style="background: violet" name="btn_signup">Đăng Ký</a>
            <a href="index.php" target="_blank" class="btn btn-secondary my-2" name="btn_signup">Trang Chủ</a>
            <p class="mt-5 mb-3 text-muted">&copy; KHTN 2016-2019</p>
    </form>
    
</body>
<?php endif; ?>
<?php include 'footer.php'; ?>