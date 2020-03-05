<?php

 require '../functions.php';

  if (isset($_GET['ID'])) {
    $Recette_Id = $_GET['ID'];
  }


  connect_Database();

  $req = $dbconnect->prepare("UPDATE recettes SET Valide=1 WHERE ID='$Recette_Id' ");
  $req->execute();

  header ('Location: adm_recettes.php')

?>
