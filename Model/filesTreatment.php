<?php
if(isset($_POST['validation'])) {

	 //Indique si le fichier a été téléchargé
	 if(!is_uploaded_file($_FILES['image']['tmp_name'])) {
     header("Location: ../Admin/indexAdmin.php?message=Un problème est survenu durant l opération. Veuillez réessayer !");
     exit;
   }
	 else {
		//liste des extensions possibles
		$extensions = array('/png', '/gif', '/jpg', '/jpeg');

		//récupère la chaîne à partir du dernier / pour connaître l'extension
		$extension = strrchr($_FILES['image']['type'], '/');

		//vérifie si l'extension est dans notre tableau
		if(!in_array($extension, $extensions)) {
      header("Location: ../Admin/indexAdmin.php?message=Vous devez uploader un fichier de type png, gif, jpg, jpeg.");
      exit;
    }
		else {

			//on définit la taille maximale
			define('MAXSIZE', 800000);
			if($_FILES['image']['size'] > MAXSIZE) {
        header("Location: ../Admin/indexAdmin.php?message=Votre image est supérieur à la taille maximale de 800k octets");
        exit;
      }
			else {
				//connexion à la base de données
				try {
					$bdd = new PDO('mysql:host=localhost;dbname=portfolio', 'phpmyadmin', 'adepsimplon05');
				} catch (Exception $e) {
					exit('Erreur : ' . $e->getMessage());
				}

				//Lecture du fichier
				$image = file_get_contents($_FILES['image']['tmp_name']);

				$req = $bdd->prepare("INSERT INTO images(nom, description, img, extension) VALUES(nom = ?, description = ?, image = ?, extension = ?)");
				$req->execute(array(
					'nom' => $_POST['nom'],
					'description' => $_POST['description'],
					'image' => $image,
					'type' => $_FILES['image']['type']
					));

        header("Location: ../Admin/indexAdmin.php?message=l insertion s est bien déroulée !");
        exit;
			 }
		  }
	  }
  }
?>
