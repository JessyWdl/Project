<?php

  require '../../functions.php';
  session_start();

  if (isset($_POST['nom']) && isset($_POST['type']) ) {
    $nom = $_POST['nom'];
    $type = $_POST['type'];
    $Ingredient_Id = $_SESSION['Edit_Ingredient_Id'];



    //On vérifie que les champs saisis ne sont pas vides:
    if (empty($nom) || empty($type) ) {
      $_SESSION['err_ingredient_edit'] = "Merci de renseigner tous les champs du formulaire." ;
      header ('Location: ../ingredient_edit.php');
    }
    else {
      //On vérifie que l'adresse mail n'est pas déjà enregistrée dans la base:
      connect_Database();

      $req = $dbconnect->prepare("UPDATE ingredients SET Nom = '$nom', Type = '$type'  WHERE ID = '$Ingredient_Id' ");
      $req -> execute();
      header ('Location: ../adm_ingredients.php');
    }
  }

?>
