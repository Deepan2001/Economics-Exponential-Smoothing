<?php
session_start();
require_once 'common.php';
$user_login = new USER();
if(isset($_POST['btn-login']))
{
	$userEmail = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	if($user_login->login($userEmail,$upass))
	{
		$user_login->redirect("./Main/index.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/admin.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Login </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
	   <form class="form-signin" method="post">
		  <?php 
		if(isset($_GET['notAvail']))
		{
			?>
            <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
			</div>
            <?php
		}
		?>

        <?php
        if(isset($_GET['error']))
		{
			?>
            <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Make sure you are enter correct credentials..</strong> 
			</div>
            <?php
		}
		?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="txtemail" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txtupass" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
      <p class="mb-0">
        <a href="registration.php" class="text-center">Register a new membership</a>
      </p>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="btn-login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>
</html>
