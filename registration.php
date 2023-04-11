<?php
session_start();
require_once 'common.php';

$reg_user = new USER();
if($reg_user->is_logged_in()!="")
{
	$reg_user->redirect('dashboard.php');
}

if(isset($_POST['signUp']))
{
	$fullName = trim($_POST['fullName']);
	$email = trim($_POST['email']);
	$contactNo = trim($_POST['contactNo']);
	$password = trim($_POST['password']);
	
	$stmt = $reg_user->runQuery("SELECT * FROM userregister WHERE userEmail=:emailID");
	$stmt->execute(array(":emailID"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($stmt->rowCount() > 0)
	{
		$msg = "<div class='alert alert-error'>
					<strong>Sorry !</strong> User already exists..
			    </div>";
	}
	else
	{
		if($reg_user->register($fullName,$email,$contactNo,$password))
		{			
			$uID = $reg_user->lasdID();				
			$message = "					
						Hi $fullName,
						<br /><br />
						Welcome to HTML CSS3 Tutorials!<br/>
						Thank you for registration...
						<br /><br />
						Thanks,";
						
			$subject = "Registration Confirmation Mail";		
			$reg_user->send_mail($fullName,$message,$subject);	
			$msg = "<div class='alert message'>
			Your Registration Has been completed successfully...
			</div>";
		}
		else
		{
			echo "sorry , Query could no execute...";
		}		
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
    <a href="index.php"><b>Registration </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign up to create your account</p>

      <form class="form-signin" method="post">
		 <div><?php if(isset($msg)) echo $msg;  ?></div> 
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fullName" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		  <div class="input-group mb-3">
          <input type="text" class="form-control" name="contactNo" placeholder="Contact Number" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required onkeyup="check();" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
       </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="cpassword" placeholder="Retype password" required onkeyup="check();"/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		 <div class="input-group mb-3">
			 <span id="message"></span>
         </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label for="agreeTerms">
                <a href="index.php" class="text-center">I already have a membership</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="signUp">Register</button>
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
<script>
		var check = function () {
			if ( document.getElementById( 'password' ).value ==
				document.getElementById( 'cpassword' ).value ) {
				document.getElementById( 'message' ).style.color = 'green';
				document.getElementById( 'message' ).innerHTML = 'Password matching';
			} else {
				document.getElementById( 'message' ).style.color = 'red';
				document.getElementById( 'message' ).innerHTML = 'Password not matching';
			}
		}
	</script>	

</body>
</html>
