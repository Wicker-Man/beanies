<?php
session_start();

require_once 'variables.php';
require_once 'functions.php';

if (!isset($pageTitle)) {
    $pageTitle = "Bienvenue";
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle; ?></title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css"> -->


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Mes beaux bonnets</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="liste.php">Liste</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <?php

      if ($_SESSION['username']) {

      ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><?=$_POST['username']; ?></a>
      </li>
      <?php
      }else{
          ?>
        <li class="nav-item">
        <a class="nav-link" href="login.php">Connexion</a>
      </li>
      <?php 
      }
      ?>
    </ul>
  </div>
</nav>