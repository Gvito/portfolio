<?php
//On charge le fichier avec les fonctions qui renvoient nos données
require "../Model/db.php";
require "../Model/adminManager.php";
require "../Service/sessionManager.php";
require "../Service/formChecker.php";
$reponses = connectToDataBAse()->query('SELECT * FROM admin');
//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  $_POST = clearForm($_POST);
  // Show enter one by one
  while ($reponse = $reponses->fetch(PDO::FETCH_ASSOC)) {
  //On récupère les utilisateurs stockés
    if($reponse["email"] === $_POST["email_admin"] && $reponse["password"] === $_POST["password_admin"]) {
      //On démarre une session pour y stocker les informations de l'utilisateur
      initializeUserSession($reponse);
      header("Location: indexAdmin.php");
      exit;
    }
  }
  header("Location: formAdmin.php?message=Aucun utilisateur avec cette email ou ce mot de passe");
  exit;
}
else {
//Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de connexion avec un message d'erreur
header("Location: formAdmin.php?message=Vous devez remplir les champs du formulaire");
exit;
}
?>
