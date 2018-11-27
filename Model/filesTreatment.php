<?php
require "db.php";

  if(isset($_POST['validation'])) {

	 //Indique si le fichier a été téléchargé
	 if(!is_uploaded_file($_FILES['image']['tmp_name'])) {
		echo 'Un problème est survenu durant l opération. Veuillez réessayer !';
   }
	 else {
		//liste des extensions possibles
		$extensions = array('/png', '/gif', '/jpg', '/jpeg');

		//récupère la chaîne à partir du dernier / pour connaître l'extension
		$extension = strrchr($_FILES['image']['type'], '/');

		//vérifie si l'extension est dans notre tableau
		if(!in_array($extension, $extensions)) {
			echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg.';
    }
		else {

			//on définit la taille maximale
			define('MAXSIZE', 800000);
			if($_FILES['image']['size'] > MAXSIZE) {
			   echo 'Votre image est supérieure à la taille maximale de '.MAXSIZE.' octets';
      }
			else {
				//connexion à la base de données
        $reponses = connectToDataBAse()->query('SELECT * FROM images');
        $bdd = $reponses->fetchall();

				//Lecture du fichier
				$image = file_get_contents($_FILES['image']['tmp_name']);

				$req = $bdd->prepare("INSERT INTO images(nom, extension, description, img) VALUES(nom = ?, extention = ?, description = ?, img = ?)");
				$req->execute(array(
					'nom' => $_POST['nom'],
					'description' => $_POST['description'],
					'image' => $image,
					'type' => $_FILES['image']['type']
					));

          header("Location: formAdmin.php?message='l'insertion s est bien déroulée !");
          exit;
			 }
		  }
	  }
  }
?>
