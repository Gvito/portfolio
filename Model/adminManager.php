<?php
//Fonction qui récupère un seul utilisateur en DB
function getAdmin($logadmin, $db) {
  $query = $db->prepare("SELECT * FROM admin WHERE email = ?");
  $query->execute([$logAdmin["email"]]);
  $logAdmin = $query->fetch(PDO::FETCH_ASSOC);
  return $logAdmin;
}

?>
