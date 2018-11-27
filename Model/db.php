<?php

function connectToDataBAse() {

  try {
    $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'phpmyadmin', 'adepsimplon05', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
  return $db;

}

?>
