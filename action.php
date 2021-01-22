<?php
	
	require('db.php');
	if(isset($_POST['btn-submit']))
	{
		$name = $_POST['name'];
		$NID = $_POST['NID'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$occupation = $_POST['occupation'];


		$uploadOk=1;

		if(!empty($_FILES['img_file']['name']))
		{
			$file_name = $_FILES['img_file']['name'];
			$file_type = $_FILES['img_file']['type'];
			$file_size = $_FILES['img_file']['size'];
			$file_tem_Loc = $_FILES['img_file']['tmp_name'];

			$target_dir= "img/documentation/";
			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES['img_file']['name']);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: documentation.php");
				  die();
			}


			if($uploadOk==1)
			{
				move_uploaded_file($file_tem_Loc, "../".$target_file);
				
				$sql = "INSERT INTO documentation (name, email, age, contact, NID, image, address, occupation)
						VALUES ('$name', '$email', '$age', '$contact', '$NID', '$target_file', '$address', '$occupation')";

						if ($con->query($sql) === TRUE) {
						  header("Location: documentation.php");
						} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
						}

			}
		}

		
	}

?>