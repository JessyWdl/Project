<?php

  require '../../functions.php';
  connect_Database();

  if (isset($_GET['ID'])) {
    $User_Id = $_GET['ID'];
  }

  $req = $dbconnect->prepare("SELECT Archive FROM users where ID = '$User_Id' ");
  $req->execute();
  $result = $req->fetch();

  if ($result['Archive']==0) {
    $req = $dbconnect->prepare("UPDATE users SET Archive = 1 WHERE ID = '$User_Id' ");
    $req->execute();
  }
  if ($result['Archive']==1) {
    $req = $dbconnect->prepare("UPDATE users SET Archive = 0 WHERE ID = '$User_Id' ");
    $req->execute();
  }

  header ('Location: ../adm_users.php');

?>
