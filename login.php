﻿<?php 
/* check are there any erros or arent */
require "./messageErrors.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">
  <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <link rel="shortcut icon" href="img/favicon.html">

  <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-reset.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

  <div class="container">

    <form class="form-signin" id="loginFrom" action="./authorize.php" method="POST">
      <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
      <div class="login-wrap">
        <div class="" style="margin-bottom: 20px; margin-top: 0;">
        <input type="text" class="form-control" name="username" placeholder="نام کاربری" autofocus>
        <?php if(!empty($_GET)) {?>
        <span style="color: red; font-size: 14px;"><?= $errorUsername?></span>
        <?php }?>
        </div>
        <div  style="margin-bottom: 10px;">
        <input type="password" name="userpassword" class="form-control" placeholder="کلمه عبور">
        <?php if(!empty($_GET)) {?>
        <span style="color: red; font-size: 14px;"><?= $errorUserpassword?></span>
        <?php }?>
        </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> مرا به خاطر بسپار
          <span class="pull-right"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">ورود</button>
        <p>یا توسط یکی از حسابهای شبکه اجتماعی خود وارد شوید</p>
        <div class="login-social-link">
          <a href="index.html" class="facebook">
            <i class="icon-facebook"></i>
            Facebook
          </a>
          <a href="index.html" class="twitter">
            <i class="icon-twitter"></i>
            Twitter
          </a>
        </div>

      </div>

    </form>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/loginValidation.js"></script>  
</body>

</html>