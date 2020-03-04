<?php

  require '../../functions.php';
  session_start();

  if (isset($_POST['type']) && isset($_POST['description']) ) {
    $type = $_POST['type'];
    $description = $_POST['description'];



    //On vérifie que les champs saisis ne sont pas vides:
    if (empty($description) ) {
      $_SESSION['err_type_ingredient_edit'] = "Merci de renseigner tous les champs du formulaire." ;
      header ('Location: ../type_ingredient_edit.php');
    }
    else {
      //On vérifie que l'adresse mail n'est pas déjà enregistrée dans la base:
      connect_Database();

      $req = $dbconnect->prepare("UPDATE ingredients_types SET Description = '$description'  WHERE Type = '$type' ");
      $req -> execute();
      header ('Location: ../adm_types_ingredients.php');
    }
  }

?>
