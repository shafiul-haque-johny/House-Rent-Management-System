<?php
require('db.php');
session_start();
$email= $_SESSION['email'];
$query = "SELECT owner_name, email,owner_id FROM owner WHERE email = '$email'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_fetch_array($result);
$ownerid= $rows['owner_id'];









?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Rent your room </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/ownerpost.css" rel="stylesheet" media="all">
	
</head>
<form method="POST" action="ownerpost.php" enctype="multipart/form-data">
<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Rent your room</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            
                        </div>
						
						  <div class="form-row">
                            <div class="name">room id</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="roomid" placeholder="id" required/ >
                                </div>
                            </div>
                        </div>
						 
						 
						<div class="form-row">
                            <div class="name">room price</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="price" placeholder="price" required/ >
                                </div>
                            </div>
                        </div>
						
						  <div class="form-row">
                            <div class="name">city</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="city" placeholder="city" required/ >
                                </div>
                            </div>
                        </div>
						
						  <div class="form-row">
                            <div class="name">Area</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="area" placeholder="area" required/>
                                </div>
                            </div>
                        </div>
							
                      
                        <div class="form-row">
                            <div class="name">room details</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="details" placeholder="write room details here.." required/ ></textarea>
                                </div>
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name">address details</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="address" placeholder="write details address here.." required/ ></textarea>
                                </div>
                            </div>
                        </div>
						
                       <div> 
					   <h3>upload pictures</h3>
						<input type="file" name="image" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" />
                       </div>
					   
					    <div>
						<input type="file" name="image1" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="100px" />
                       </div>
					   
					    <div>
						<input type="file" name="image2" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="100px" />
                       </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" name= "submit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
	</form>


    <script src="vendor/jquery/jquery.min.js"></script>


   
    <script src="js/global.js"></script>

</body><

</html>











<?php 
    if(isset($_POST['submit']))
    {
        $price = $_POST['price'];
        $id = $_POST['roomid'];
		$details = $_POST['details'];
		$details = $_POST['details'];
		$city = $_POST['city'];
		$area = $_POST['area'];
		$address = $_POST['address'];
		
		
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
	    move_uploaded_file($image_tmp,"upload/$image");
		
		$image1 = $_FILES['image1']['name'];
        $image_tmp1 = $_FILES['image1']['tmp_name'];
	    move_uploaded_file($image_tmp1,"upload/$image1");
		
		$image2 = $_FILES['image2']['name'];
        $image_tmp2 = $_FILES['image2']['tmp_name'];
        move_uploaded_file($image_tmp2,"upload/$image2");
		
		
	
        $con = mysqli_connect("localhost","root","","project");
		
        $query = "insert into room(room_id,room_price,address,images,images1,images2,room_discription,city,area,owner_id) values ('$id','$price','$address','$image','$image1','$image2','$details','$city','$area','$ownerid')";
		
        $result = mysqli_query($con, $query);
        if($result==1)
        {       
        echo "Inserted successfully";
        
        }
        else {       
        echo "Insertion Failed";
             }
    }
?>