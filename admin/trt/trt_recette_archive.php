<?php

  require '../../functions.php';
  connect_Database();

  if (isset($_GET['ID'])) {
    $Recette_Id = $_GET['ID'];
  }

  $req = $dbconnect->prepare("SELECT Archive FROM recettes where ID = '$Recette_Id' ");
  $req->execute();
  $result = $req->fetch();

  if ($result['Archive']==0) {
    $req = $dbconnect->prepare("UPDATE recettes SET Archive = 1 WHERE ID = '$Recette_Id' ");
    $req->execute();
  }
  if ($result['Archive']==1) {
    $req = $dbconnect->prepare("UPDATE recettes SET Archive = 0 WHERE ID = '$Recette_Id' ");
    $req->execute();
  }

  header ('Location: ../adm_recettes.php');

?>
