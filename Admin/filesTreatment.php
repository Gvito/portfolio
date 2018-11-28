<?php
require "../Model/db.php";
require "../Model/imageManager.php";
  // Create database connection

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

		if(isset($_FILES['image_update'])){
    	// Get image name
    	$image = $_FILES['image_update'];
    	// image file directory
    	$target = "img/". $image['name'];
      addImg($target, $_POST["text"]);

			if (move_uploaded_file($image['tmp_name'], '../' . $target)) {

				header("Location: indexAdmin.php?message=Image uploaded successfully");
				exit;
	  	}
			else{
				header("Location: indexAdmin.php?message=Failed to upload image");
				exit;
	  	}
    }
		else {
      header("Location: indexAdmin.php?message=error");
      exit;
		}
  }

?>
