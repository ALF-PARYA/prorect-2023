<?php 
include 'includes/header.php';
var_dump($_POST);

?>

<form action="" method="post"> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
        <input type="text" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">mot de passe</label>
        <input type="password" name="mot-de-passe" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">connexion</button>
</form>
