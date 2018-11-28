<?php
// load page require (DB)
require "../Model/db.php";
require "../Model/imageManager.php";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // If isset a files in input image_update
		if(isset($_FILES['image_update'])){
    	// Get image name
    	$image = $_FILES['image_update'];
    	// Image file directory
    	$target = "img/". $image['name'];
      // Call function for insert a img in DB
      addImg($target, $_POST["text"]);
      // If the file was well upload in the folder "img"
			if (move_uploaded_file($image['tmp_name'], '../' . $target)) {
        $titre = $_POST['title'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        addProjet($titre, $description, $type);
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
