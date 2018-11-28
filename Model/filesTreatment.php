<?php
  // Create database connection
  $db = mysqli_connect("localhost", "phpmyadmin", "adepsimplon05", "portfolio");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

		if(isset($_FILES['image_update'])){
  	// Get image name
  	$image = $_FILES['image_update'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['text']);

  	// image file directory
  	$target = "../img/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

			if (move_uploaded_file($_FILES['image_update'], $target)) {
				header("Location= ../Admin/indexAdmin.php?message=Image uploaded successfully");
				exit;
	  	}
			else{
				header("Location= ../Admin/indexAdmin.php?message=Failed to upload image");
				exit;
	  	}
    }
		else {
			echo "error";
		}
  }
  $result = mysqli_query($db, "SELECT * FROM images");

?>
