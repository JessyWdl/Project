<?php

  require '../../functions.php';
  session_start();

  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['type'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $type = $_POST['type'];
    $User_Id = $_SESSION['Edit_User_Id'];



    //On vérifie que les champs saisis ne sont pas vides:
    if (empty($nom) || empty($prenom) || empty($mail)) {
      $_SESSION['err_user_edit'] = "Merci de renseigner tous les champs du formulaire." ;
      header ('Location: ../users_edit.php');
    }
    else {
      //On vérifie que l'adresse mail n'est pas déjà enregistrée dans la base:
      connect_Database();
      $req = $dbconnect->prepare("SELECT * FROM users WHERE mail = '$mail' and ID <> '$User_Id'");
      $req-> execute();
      $count = $req->rowCount();

      if ($count != 0) {
        $_SESSION['err_user_edit'] = "L'adresse mail que vous avez renseignée est déjà enregistrée dans notre base." ;
        header ('Location: ../users_edit.php');
      }
      else {
        $req = $dbconnect->prepare("UPDATE users SET Nom = '$nom', Prenom = '$prenom', Mail = '$mail', Type = '$type' , Date_Modification = now() WHERE ID = '$User_Id' ");
        $req -> execute();
        header ('Location: ../adm_users.php');
      }
    }
  }

?>
