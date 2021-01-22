<!DOCTYPE html>
<html lang="en">
<head>
	<title>User login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/userlogin.css">
	<link rel="stylesheet" type="text/css" href="css/usermain.css">
<!--===============================================================================================-->
</head>

<form name="login" action="userlogin.php" method="post">

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "enter your email" required/>
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required/>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name ="submit">
							Login
						</button>
					</div>
					
					
					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="userreg.php" class="txt2 hov1">
							Sign up
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="js/main.js"></script>
</div>
</body>
</form>

</html>










<?php
require('db.php');

session_start();
if (isset($_POST['submit'])){
     
	  
	 
	  
	  $email = mysqli_real_escape_string($con,$_POST['email']);
	 
	  $password = mysqli_real_escape_string($con,$_POST['password']);
	  echo $email, $password;
	  
     $query = "SELECT * FROM client WHERE email='$email'
      and password= '$password'";
	  
	  $result = mysqli_query($con,$query) or die(mysql_error());
	  
	  $rows = mysqli_num_rows($result);
	  
	  
	  if($rows==1){
	    $_SESSION['email'] = $email;
            
	    header("Location:usersearch.php");
         }else{
		 
	     echo '<script language="javascript">';
         echo 'alert("email or password is incorrect")';
         echo '</script>';
		
	}
	 
        }
    
	 
	  
	  
    
?>