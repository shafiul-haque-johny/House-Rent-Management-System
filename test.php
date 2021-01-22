<?php
require('db.php');
session_start();
$email= $_SESSION['email'];
$search=$_SESSION['search'];
$query = "SELECT * FROM client WHERE email = '$email'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_fetch_array($result);
$name= $rows['c_name'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
	
			try{				
				$conn = new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			}
			catch(PDOException $ex){
				?>
					<script>
						window.alert("Database not connected");
					</script>
				<?php
			}		
			$userquery =  "SELECT * FROM room WHERE city = '$search' OR area= '$search'";
			$returnvalue = $conn->query($userquery);
			$table = $returnvalue->fetchAll();		
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Available houses</title>
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 
  <link href="css2/bootstrap.min.css" rel="stylesheet">
 
  <link href="css2/mdb.min.css" rel="stylesheet">
 
  <link href="css2/style.min.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
     

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
        </ul>

        <!-- Right -->
    <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>

      </div>

    </div>
  </nav>
  

  
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <?php


      if(isset($_GET['msg']))
      {

        ?>

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Room Booking Successful!</strong> 
        </div>

        <?php 
      }

      elseif(isset($_GET['error']))
      {
      ?>
       <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Room Already Booked!</strong> 
        </div>

      <?php 
      }
      ?>

      
      <div class="row wow fadeIn">

      


<?php
for($i=0; $i<count($table); $i++){
	$row=$table[$i];
	$owner=$row['owner_id'];
	
	$ownerquery =  "SELECT * FROM owner WHERE owner_id='$owner'";
			$value = $conn->query($ownerquery);
			$ownertable = $value->fetchAll();
    $ownerrow=$ownertable[0];
	
	
	
	$o_name=$ownerrow['owner_name'];
	$o_email=$ownerrow['email'];
	$o_phone=$ownerrow['phone'];
	
	$address=$row['address'];
	$price=$row['room_price'];
	$room_details=$row['room_discription'];
    $image1=$row['images'];
	$image2=$row['images1'];
	$image3=$row['images2'];
	
	
	
	
	?> 
	  
        <div class="col-md-5 mb-4">

          <img src= upload/<?php echo $image1; ?> class="img-fluid" alt="">

        </div>
       
        <div class="col-md-6 mb-4">

       
          <div class="p-4">

           
            <p class="lead">
              
              <span><?php echo $o_name; ?></span>
            </p>
        
		   
            <p class="lead font-weight-bold">House details</p>

            <p><?php echo $room_details;?> </p>
			
			 <p class="lead font-weight-bold">details address</p>

            <p><?php echo $address;?> </p>
			
			
			
             <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail"><?php echo $o_email;?></a></li>
			 
			 <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call"><?php echo $o_phone;?></a></li>
			 <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">Per month price:--<?php echo $price;?></a></li>
			 
			 </div>
			  <div class="p-4">
             <a href="code_edit.php?id=<?= $row['room_id'] ?>"> <button class="btn btn-primary btn-md my-0 p" type="submit">Book now
               
              </button></a>
              
             

            

          </div>

        </div>
      
	  
	  <?php	  
}
	  
?>  

      </div>
    <hr>
  </div>
  </main>
 <footer class="page-footer text-center font-small mt-4 wow fadeIn">

 

    <hr class="my-4">

  
    <div class="pb-4">
     
    </div>
  
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> House Rent Management System.com </a>
    </div>
   

  </footer>
  
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

  <script type="text/javascript" src="js/popper.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript">
   
    new WOW().init();

  </script>
</body>

</html>
