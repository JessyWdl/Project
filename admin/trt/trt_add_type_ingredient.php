<?php

  session_start();
  require '../../functions.php';

  if (isset($_POST['description']) ) {
    $description = $_POST['description'];


    if (empty($description) ) {
      $_SESSION['err_add_type_ingredient'] = "Merci de renseigner tous les champs";
      header ('Location: ../add_type_ingredient.php');
    }
    else {
      connect_Database();
      $req = $dbconnect->prepare("INSERT INTO ingredients_types (Description) VALUES ('$description') ");
      $req->execute();

      header ('Location: ../adm_types_ingredients.php');
    }

  }

?>
