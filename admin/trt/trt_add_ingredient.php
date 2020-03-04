<?php

  session_start();
  require '../../functions.php';

  if (isset($_POST['nom']) && isset($_POST['type'])) {
    $nom = $_POST['nom'];
    $type = $_POST['type'];


    if (empty($nom) || empty($type)) {
      $_SESSION['err_add_ingredient'] = "Merci de renseigner tous les champs";
      header ('Location: ../add_ingredients.php');
    }
    else {
      connect_Database();
      $req = $dbconnect->prepare("INSERT INTO ingredients(Nom,Type) VALUES ('$nom', '$type') ");
      $req->execute();

      header ('Location: ../adm_ingredients.php');
    }

  }

?>
