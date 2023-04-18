<?php
session_start();

require_once 'var.php';
require_once 'func.php';

$errors = [];

if (isset( $_POST['mail'])){
    if (empty ($_POST['mot-de-passe'])){
        $errors[] = "mot de passe vide";
    }elseif($_POST['mot-de-passe'] != $mdp){
        $errors[] = "mot de passe éronné";
    }else{
        $_SESSION['nom'] = $_POST['mail'];
        echo 'connexion autoriser';
    }
}

foreach($errors as $error){

    ?> <div class="alert alert-primary" role="alert">
    erreur! 
  </div><?php
}


var_dump ($errors); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css>
</head>

<body class="col-12">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=list">Link</a>
                    </li>

                    <?php
                    if (isset( $_SESSION['nom'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=login"><?=$_SESSION['nom']; ?> </a>
                        </li>
                        <?php
                    } else { ?>

                        <li class="nav-item">
                            <a class="nav-link" href="?page=login">se connecter</a>
                        </li>
                        <?php
                    } ?>
                    <li class="nav-item">
                            <a class="nav-link" href="?page=logout">déconnecter</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="?page=cart">panier</a>
                        </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>