<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="form">
<form name="registration" action="ownerreg.php" method="post">
<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Fullname</label>
								<input type="text" placeholder="Enter your full Name Here.." name="FULLNAME"  class="form-control" required/>
							</div>
							<div class="col-sm-6 form-group">
								
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" name="address"  class="form-control"></textarea>
						</div>	
						<div class="row">
							
							<div class="col-sm-4 form-group">
								
							</div>	
							<div class="col-sm-4 form-group">
								
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>date of birth</label>
								<input type="text" placeholder="enter your date of birth here.." name="dob"  class="form-control"required/>
							</div>		
							<div class="col-sm-6 form-group">
								
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.."name="mobile" class="form-control"required/>
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" placeholder="Enter Email Address Here.." name="email"class="form-control"required/>
					</div>	
					<div class="form-group">
						<label>password</label>
						<input type="text" placeholder="Enter your password.." name="password"class="form-control" required/>
					</div>
					<input type="submit" name="submit" value="Submit">					
					</div>
				</form> 
				</div>
				
				
	</div>
	</div>
	
	</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
     
	  
	  $FULLNAME = mysqli_real_escape_string($con,$_POST['FULLNAME']);
	  $Birthday = mysqli_real_escape_string($con,$_POST['dob']);
	  
	  $email = mysqli_real_escape_string($con,$_POST['email']);
	  $Mobile_Number = mysqli_real_escape_string($con,$_POST['mobile']);
	  $Address= mysqli_real_escape_string($con,$_POST['address']);
	 
	  $password = mysqli_real_escape_string($con,$_POST['password']);
	  
	  
	   $query = "INSERT into owner (owner_name,address,email,DOB,Password,phone)
VALUES ('$FULLNAME','$Address','$email','$Birthday', '$password',' $Mobile_Number')";
        $result = mysqli_query($con,$query);
        if($result){
              echo '<script language="javascript">';
         echo 'alert("your are registerd succesfully")';
         echo '</script>';
        }
    }
	 
	  
	  
    
?>