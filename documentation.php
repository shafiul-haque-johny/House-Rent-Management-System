
<?php
require('db.php');
session_start();
$email= $_SESSION['email'];
$query = "SELECT * FROM client WHERE email = '$email'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_fetch_array($result);
$name= $rows['c_name'];



?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Available houses</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="usersearch.php"><?php echo $name;?> </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	       
	         <li class="nav-item"><a href="documentation.php" class="nav-link">Documentation</a></li>
	          <li class="nav-item"><a href="properties.html" class="nav-link">Properties</a></li>
	          
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			    <li class="nav-item"><a href="userlogin.php" class="nav-link">log out</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
<div class="container" style="margin-top: 10%;width: 50%;margin-bottom: 5%;">
	<form action="action.php" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" placeholder="Enter name" name="name">
	  </div>

	  <div class="form-group">
	    <label for="age">Age:</label>
	    <input type="text" class="form-control" placeholder="Enter age" name="age">
	  </div>

	  <div class="form-group">
	    <label for="NID">NID:</label>
	    <input type="text" class="form-control" placeholder="Enter NID" name="NID">
	  </div>
	  <div class="form-group">
	    <label for="email">email:</label>
	    <input type="email" class="form-control" placeholder="Enter email" name="email">
	  </div>

	  <div class="form-group">
	    <label for="contact">contact:</label>
	    <input type="text" class="form-control" placeholder="Enter contact" name="contact">
	  </div>

	  <div class="form-group">
	    <label for="occupation">occupation:</label>
	    <input type="text" class="form-control" placeholder="Enter occupation" name="occupation">
	  </div>


	  <div class="form-group">
	    <label for="address">Parmanent Address:</label>
	    <input type="text" class="form-control" placeholder="Enter address" name="address">
	  </div>

	  <div class="form-group">
	    <label for="img">Image:</label>
	    <input type="file" class="form-control" name="img_file">
	  </div>
	  
	  <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
	</form>

</div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


                            <?php
							  if (isset($_POST['submit'])){
								  $search = mysqli_real_escape_string($con,$_POST['search']);
								  $_SESSION['search'] = $search;
                                    
	                              if("$search"!=null)
								  {
									  ?>
									<script type="text/javascript">
								   window.location.href = 'test.php';
									</script>
										<?php
								  }
								  
							  }
							  
							   ?>
