<!DOCTYPE html>
<html lang="en">
<head>
	<title>owner login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<form action="" method="post" name="login">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="submit" >
							Sign in
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="ownerreg.php" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</form>
	

	


</body>
</html>




<?php
require('db.php');
// If form submitted, insert values into the database.
session_start();
if (isset($_POST['submit'])){
     
	  
	 
	  
	  $email = mysqli_real_escape_string($con,$_POST['email']);
	 
	  $password = mysqli_real_escape_string($con,$_POST['pass']);
	  echo $email, $password;
	  
     $query = "SELECT * FROM owner WHERE email='$email'
      and password= '$password'";
	  
	  $result = mysqli_query($con,$query) or die(mysql_error());
	  
	  $rows = mysqli_num_rows($result);
	  
	  
	  if($rows==1){
	    $_SESSION['email'] = $email;
            
	    header("Location: afterloginowner.php");
         }else{
		 
	     echo '<script language="javascript">';
         echo 'alert("email or password is incorrect")';
         echo '</script>';
		
	}
	 
        }
    
	 
	  
	  
    
?>
















