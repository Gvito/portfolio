<?php
include "../Template/header.php";
require "../Service/sessionManager.php";
?>
<link rel="stylesheet" href="../css/main.css">

 <!-- section form contact -->
 <section id="loginAdmin">
   <!-- title contact -->
   <h3>Connexion Admin</h3>
   <!-- form contact -->
   <form action="loginAdmin.php" target="_self" method="post">
    <fieldset>
     <input type="email" name="email_admin" placeholder="Email">
     <br>
     <input type="password" name="password_admin" placeholder="Mot de passe">
     <br><br>
     <input type="submit" value="Se connecter">
    </fieldset>
   </form>
 </section>


<?php include "../Template/footer.php"; ?>
