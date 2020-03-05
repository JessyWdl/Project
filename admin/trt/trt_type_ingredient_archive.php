<?php

  require '../../functions.php';
  connect_Database();

  if (isset($_GET['Type'])) {
    $type = $_GET['Type'];
  }

  $req = $dbconnect->prepare("SELECT * FROM ingredients_types where Type = '$type' ");
  $req->execute();
  $result = $req->fetch();

  if ($result['Archive']==0) {
    $req = $dbconnect->prepare("UPDATE ingredients_types SET Archive = 1 WHERE Type = '$type' ");
    $req->execute();
  }
  if ($result['Archive']==1) {
    $req = $dbconnect->prepare("UPDATE ingredients_types SET Archive = 0 WHERE Type = '$type' ");
    $req->execute();
  }

  header ('Location: ../adm_types_ingredients.php');

?>
