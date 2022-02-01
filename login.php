<?php
$pageTitle = "Connexion";

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}


require_once 'includes/header.php';

?>

<form action=""method="post">
    <form>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de Passe</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
<button type="submit" class="btn btn-primary">Valider</button>
</form>



<?php

include 'includes/footer.php';
?>