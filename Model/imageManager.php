<?php

function addImg($target, $texte) {
  $db = connectToDataBAse();
  $query = $db->prepare('INSERT INTO images (image, image_text) VALUES ( ?, ?)');
  $query->execute([$target, $texte]);
}

?>
