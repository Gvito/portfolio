<?php

function addProjet($titre, $description, $type) {
  $db = connectToDataBAse();
  $query = $db->prepare('INSERT INTO projet (titre, description, type) VALUES ( ?, ?, ?)');
  $query->execute([$titre, $description, $type]);
}

?>
