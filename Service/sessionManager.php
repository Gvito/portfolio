<?php
//Function disconnect
function logout() {

  //We retrieve the current session
  session_start();
  //We empty the session of its variables
  session_unset();
  //We destroy the session
  session_destroy();
  //We redirect the user to the index with message
  header("Location: formAdmin.php?success=Vous êtes déconnecté");

}

//Functin start standard an user session
function initializeUserSession($admin) {

  session_start();
  $_SESSION["admin"] = $admin;

}

//Function to restrict one-page access to an authenticated user
function restrictToUser() {

  session_start();
  if(!isset($_SESSION["admin"]) || empty($_SESSION["admin"])) {
    header("Location: ../index.php?message=Vous n'avez pas les droits d'y accéder");
    exit;
  }

}
 ?>
