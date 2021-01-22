<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<form name="registration" action="userreg.php" method="post">
<div class="container">
            <form class="form-horizontal" role="form">
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Fullname" name="full_name" class="form-control" autofocus required/>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" name= "email" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required/>
                    </div>
					
					 <div class="form-group">
							<label for="textarea" class="col-sm-3 control-label">Address</label>
							<div class="col-sm-9">
							<textarea placeholder="Enter Address Here.." rows="3" name="address"  class="form-control"></textarea>
							</div>
					</div>
               
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" name="dob"id="birthDate" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="mobile" id="phoneNumber" placeholder="Phone number" class="form-control" required/>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
		</form>
		
		
		
		
		
		
		
		
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
	
     
	  
	  $FULLNAME = mysqli_real_escape_string($con,$_POST['full_name']);
	  $Birthday = mysqli_real_escape_string($con,$_POST['dob']);
	  
	  $email = mysqli_real_escape_string($con,$_POST['email']);
	  $Mobile_Number = mysqli_real_escape_string($con,$_POST['mobile']);
	  $Address= mysqli_real_escape_string($con,$_POST['address']);
	 
	  $password = mysqli_real_escape_string($con,$_POST['password']);
	  
	  
	  
	   $query = "INSERT into client (c_name,c_address,email,DOB,password,phone)
VALUES ('$FULLNAME','$Address','$email','$Birthday','$password','$Mobile_Number')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='userlogin.php'>Login</a></div>";
        }
		
		else
		{
		 echo '<script language="javascript">';
         echo 'alert("something went wrong,please try again")';
         echo '</script>';
		}
		
    }
	 
	  
	  
    
?>