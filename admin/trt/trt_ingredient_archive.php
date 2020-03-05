<?php

  require '../../functions.php';
  connect_Database();

  if (isset($_GET['ID'])) {
    $Ingredient_Id = $_GET['ID'];
  }

  $req = $dbconnect->prepare("SELECT Archive FROM ingredients where ID = '$Ingredient_Id' ");
  $req->execute();
  $result = $req->fetch();

  if ($result['Archive']==0) {
    $req = $dbconnect->prepare("UPDATE ingredients SET Archive = 1 WHERE ID = '$Ingredient_Id' ");
    $req->execute();
  }
  if ($result['Archive']==1) {
    $req = $dbconnect->prepare("UPDATE ingredients SET Archive = 0 WHERE ID = '$Ingredient_Id' ");
    $req->execute();
  }

  header ('Location: ../adm_ingredients.php');

?>
